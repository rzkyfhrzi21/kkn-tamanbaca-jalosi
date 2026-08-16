# BRIEF STANDAR PENGUJIAN OTOMATIS & UNIT TESTING (PRE-DEPLOYMENT QUALITY GATE)
**Universal Unit, Feature, Security, Query Performance & Pre-Deploy Test Guide — Multi-Stack (PHP Native, PHP MVC, Laravel, React/Next.js, Pure HTML/JS)**

---

## 📌 HEADER & RINGKASAN SUITE PENGUJIAN
Dokumen ini merupakan panduan acuan baku bagi AI Agent dan developer untuk menyusun struktur folder pengujian khusus, menulis kode test, dan mengeksekusi **Unit Test**, **Feature/Integration Test**, **Query Performance Audit**, serta **Security Quality Gate** secara manual maupun otomatis sebelum kode di-deploy ke server staging/production.

| No | Kategori Pengujian | Target Validasi & Poin Kritis yang Diuji | Multi-Stack Support |
|:---|:---|:---|:---|
| **1** | **Folder Khusus & Eksekusi Manual** | Penempatan berkas test di folder terisolasi (`tests/`), panduan eksekusi manual di terminal untuk setiap stack teknologi (PHP Native, Laravel, React, Next.js, Pure JS). | Multi-Stack Universal |
| **2** | **Respon JSON & Skema Notifikasi** | Memastikan struktur respon JSON baku (`success`, `type`, `title`, `action`, `status`, `message`, `data`, `errors`), status HTTP code (200, 400, 401, 403, 422, 500). | PHP Native / Laravel / Next.js / Express |
| **3** | **Keamanan OWASP & SQL Injection** | Uji coba payload SQL Injection (`' OR 1=1 --`), XSS payload escaping, verifikasi Token CSRF pada transaksi POST, dan Session Access Control (401 Unauthorized). | PHPUnit / Pest / Jest / Supertest |
| **4** | **Rate Limiter & Anti-Brute Force** | Uji coba 6x percobaan login gagal berturut-turut; memastikan request ke-6 mengembalikan HTTP `429 Too Many Requests` + header `Retry-After`. | PHPUnit / Pest / Native Runner |
| **5** | **Validasi Upload Media & Fallback** | Uji tolak upload foto > 2MB, video > 15MB, uji bypass ekstensi palsu (MIME sniffing), verifikasi konversi WebP, dan uji fallback inisial avatar (misal "RF" jika foto 404). | Backend Unit Tests & Media Mocking |
| **6** | **Tabel AJAX & Protokol POST Only** | Uji penolakan method HTTP GET pada endpoint mutasi data (405/400), pagination batas bawah/atas, query live search dengan debounce, dan logika Reset Filter. | API & Controller Feature Tests |
| **7** | **Performa Query & Bebas N+1** | Audit jumlah query SQL yang dieksekusi (memastikan Eager Loading `with()` aktif), pencegahan over-fetching data, dan verifikasi hard cap limit pagination (max 50). | Database Query Logger / PHPUnit |
| **8** | **UI/UX, Lightbox & Komponen DOM** | Verifikasi render Lightbox modal saat gambar/video diklik, tombol silang (×) & ESC trigger, interval carousel 1.5-3s dengan pause-on-hover, dan inisialisasi Select2. | React Testing Library / Vitest / Playwright |
| **9** | **SEO Tags & Header Keamanan** | Uji keberadaan tag SEO lengkap (Title, Desc, Canonical, OG, Twitter) pada halaman publik, dan tag `noindex, nofollow` pada seluruh halaman admin/login. | DOM Assertion / Headless Browser Tests |
| **10** | **Dokumentasi API & OpenAPI Spec — [BILA ADA]** | *(Opsional / Jika Proyek Memiliki API)*: Uji validitas rute skema OpenAPI (`/docs/api.json`), verifikasi ketersediaan Swagger/Doc UI, dan proteksi middleware auth di production. Tidak berlaku untuk website non-API. | HTTP & Schema Assertion Tests |
| **11** | **Pipeline Pre-Deployment (CI/CD)** | Perintah eksekusi otomatis sebelum deploy, pembersihan `console.log`, validasi build/TypeScript, ambang batas *Zero-Bug & Zero-Failure*, dan integrasi GitHub Actions workflow. | GitHub Actions CI/CD Pipeline |

---

## 1. Konvensi Folder Khusus Pengujian Lintas Stack

Seluruh berkas pengujian **WAJIB diletakkan di dalam folder khusus pengujian** terpisah dari kode produksi agar struktur project tetap rapi dan tidak mengotori root directory:

### 1.1 Struktur Folder Khusus per Stack Teknologi

#### 🐘 A. PHP Native (Tanpa Composer / Zero-Dependency)
Seluruh berkas pengujian diletakkan pada folder `tests/` di root project:
```
Root Project (PHP Native) /
├── tests/
│   ├── run_all_tests.php       # Standalone Master Test Runner CLI (dijalankan via: php tests/run_all_tests.php)
│   ├── bootstrap.php           # Setup environment pengujian, koneksi DB test, helper assertions
│   ├── Unit/                   # Pengujian fungsi helper, sanitasi teks, kalkulasi bisnis
│   │   ├── HelperTest.php
│   │   └── ValidationTest.php
│   ├── Feature/                # Pengujian endpoint AJAX & manipulasi database
│   │   ├── AnggotaCrudTest.php
│   │   └── UploadMediaTest.php
│   └── Security/               # Pengujian keamanan (SQL Injection, XSS, CSRF, Rate Limiter)
│       ├── SqlInjectionTest.php
│       ├── XssProtectionTest.php
│       ├── AuthSessionTest.php
│       └── RateLimiterTest.php
```

#### 🔴 B. Laravel Framework
Mengikuti standar struktur Laravel di folder `tests/`:
```
Root Project (Laravel) /
├── tests/
│   ├── TestCase.php
│   ├── Unit/                   # Unit test logic & helper
│   └── Feature/                # Feature test HTTP endpoint, FormRequest, Security, Query, DB
```

#### ⚛️ C. React / Next.js / TypeScript
Diletakkan pada folder `tests/` atau `__tests__/`:
```
Root Project (React/Next.js) /
├── tests/
│   ├── unit/                   # Pengujian fungsi utils & hooks
│   ├── components/             # Pengujian render komponen DOM & interaksi
│   ├── api/                    # Pengujian Server Actions / API Routes
│   └── e2e/                    # Pengujian End-to-End (Playwright / Cypress)
```

#### 🌐 D. Pure HTML / Vanilla JS (Desain Google Stitch)
```
Root Project (Pure HTML) /
├── tests/
│   ├── runner.html             # UI test runner browser lokal (buka langsung di browser)
│   ├── components.test.js      # Pengujian DOM loader via Vitest / Node.js
│   └── navigation.test.js      # Verifikasi link navigasi & routing tanpa .html
```

---

## 2. Panduan Cara Menjalankan Pengujian Manual di Terminal (CLI)

Berikut adalah panduan langkah demi langkah cara mengeksekusi test suite secara manual pada terminal (Command Prompt / CMD & PowerShell) untuk masing-masing teknologi:

### 2.1 🐘 Menjalankan Test di PHP Native (Zero-Dependency Runner)
Di lingkungan PHP Native, Anda tidak memerlukan Composer atau library eksternal. Cukup jalankan runner bawaan via terminal:

```cmd
:: 1. Menjalankan SELURUH suite pengujian sekaligus
php tests/run_all_tests.php

:: 2. Menjalankan pengujian SPESIFIK modul keamanan saja
php tests/Security/SqlInjectionTest.php

:: 3. Menjalankan pengujian SPESIFIK endpoint AJAX CRUD
php tests/Feature/AnggotaCrudTest.php
```

> **💡 Boilerplate Master Runner PHP Native (`tests/run_all_tests.php`):**
> Script mandiri dengan output berwarna (HIJAU = PASS, MERAH = FAIL) di terminal:
> ```php
> <?php
> // tests/run_all_tests.php
> echo "\n==================================================\n";
> echo "🚀 MEMULAI EKSEKUSI PENGUJIAN OTOMATIS (PHP NATIVE)\n";
> echo "==================================================\n\n";
> 
> $testFiles = glob(__DIR__ . '/*/*Test.php');
> $passed = 0; $failed = 0; $startTime = microtime(true);
> 
> foreach ($testFiles as $file) {
>     $testName = basename($file);
>     echo "Testing [{$testName}] ... ";
>     
>     // Eksekusi sub-proses pengujian
>     $output = [];
>     $returnCode = 0;
>     exec("php " . escapeshellarg($file), $output, $returnCode);
>     
>     if ($returnCode === 0) {
>         echo "\033[32m[PASS]\033[0m\n";
>         $passed++;
>     } else {
>         echo "\033[31m[FAIL]\033[0m\n";
>         echo "  Error: " . implode("\n  ", $output) . "\n";
>         $failed++;
>     }
> }
> 
> $elapsed = round(microtime(true) - $startTime, 3);
> echo "\n--------------------------------------------------\n";
> echo "📊 HASIL AKHIR: {$passed} Passed, {$failed} Failed ({$elapsed}s)\n";
> echo "--------------------------------------------------\n";
> exit($failed > 0 ? 1 : 0);
> ```

---

### 2.2 🔴 Menjalankan Test di Laravel (Pest / PHPUnit)
```cmd
:: 1. Menjalankan seluruh test suite Laravel dengan laporan detail
php artisan test

:: 2. Menjalankan test secara paralel (eksekusi super cepat)
php artisan test --parallel

:: 3. Menjalankan pengujian spesifik grup atau class keamanan
php artisan test --filter=SecurityTest

:: 4. Menjalankan hanya folder Unit Test
php artisan test --testsuite=Unit

:: 5. Menjalankan hanya folder Feature Test
php artisan test --testsuite=Feature

:: 6. Jika menggunakan Pest PHP
./vendor/bin/pest
```

---

### 2.3 ⚛️ Menjalankan Test di React (Vite / Vitest / RTL)
```cmd
:: 1. Menjalankan Vitest sekali jalan (mode CI / Pre-deploy)
npx vitest run

:: 2. Menjalankan Vitest dalam mode interaktif (watch mode)
npm test

:: 3. Menjalankan pengujian spesifik satu file komponen
npx vitest run tests/components/Navbar.test.jsx

:: 4. Menghasilkan laporan coverage kode
npx vitest run --coverage
```

---

### 2.4 ▲ Menjalankan Test di Next.js (Jest / Vitest / Playwright)
```cmd
:: 1. Menjalankan Jest Unit & API Route tests
npm run test

:: 2. Menjalankan pengujian spesifik API route
npx jest tests/api/auth.test.ts

:: 3. Menjalankan pengujian End-to-End (E2E) Playwright
npx playwright test

:: 4. Menjalankan Playwright dengan UI visual interaktif
npx playwright test --ui
```

---

### 2.5 🌐 Menjalankan Test di Pure HTML / Vanilla JS (Stitch)
```cmd
:: 1. Menjalankan verifikasi DOM & Component Loader via Vitest
npx vitest run tests/components.test.js

:: 2. Menjalankan audit link navigasi & clean URL
npx vitest run tests/navigation.test.js

:: 3. Manual Browser Run:
:: Cukup buka berkas tests/runner.html langsung di browser web
```

---

## 3. Test Suite 1: Format Respon JSON & Skema Notifikasi Baku

Setiap endpoint backend (AJAX / REST / Server Action) yang menangani transaksi data **WAJIB lolos uji skema respon JSON**.

### 3.1 Kriteria Keberhasilan (Pass Criteria)
- [ ] Respon sukses mengembalikan `success: true`, status HTTP `200` atau `201`.
- [ ] Memiliki properti wajib: `type` ("success"|"error"|"warning"|"info"), `title`, `action`, `status`, `message`, `data`.
- [ ] Respon error/validasi gagal mengembalikan `success: false`, status HTTP `400`/`422`, beserta objek `errors` detail.

### 3.2 Contoh Test Case (Laravel / Pest / PHPUnit)
```php
public function test_create_anggota_returns_standard_json_format()
{
    $payload = [
        '_token' => csrf_token(),
        'nama' => 'Ahmad Fauzi',
        'email' => 'ahmad@example.com',
        'telepon' => '08123456789'
    ];

    $response = $this->postJson('/admin/ajax/anggota_store.php', $payload);

    $response->assertStatus(200)
             ->assertJsonStructure([
                 'success',
                 'type',
                 'title',
                 'action',
                 'status',
                 'message',
                 'data' => ['id', 'nama'],
                 'timestamp'
             ])
             ->assertJson([
                 'success' => true,
                 'type' => 'success',
                 'action' => 'CREATE_ANGGOTA',
                 'status' => 'COMPLETED'
             ]);
}
```

---

## 4. Test Suite 2: Keamanan OWASP Top 10 & SQL Injection

Seluruh pengujian keamanan dijalankan untuk memastikan aplikasi kebal dari serangan siber umum sebelum live.

### 4.1 Test Case: Pencegahan SQL Injection (A03)
Uji apakah backend menggunakan **PDO Prepared Statements** dengan menyuntikkan payload SQL berbahaya pada input form, parameter query, dan sorting:

```php
public function test_sql_injection_payloads_are_neutralized()
{
    $maliciousInputs = [
        "' OR '1'='1",
        "'; DROP TABLE buku; --",
        "1 UNION SELECT null, username, password FROM users --",
        "' OR 1=1 /*"
    ];

    foreach ($maliciousInputs as $payload) {
        $response = $this->postJson('/admin/ajax/buku_list.php', [
            '_token' => csrf_token(),
            'search' => $payload,
            'sort_by' => $payload // Uji juga kolom ORDER BY dinamis
        ]);

        // Backend tidak boleh melempar SQL Syntax Error (HTTP 500)
        $response->assertStatus(200);
        // Memastikan query dieksekusi secara aman sebagai string literal pencarian
    }
}
```

### 4.2 Test Case: Sanitasi XSS Output (Cross-Site Scripting)
Uji apakah karakter berbahaya (`<script>`, `onerror`, `javascript:`) di-escape dengan benar:
```php
public function test_xss_payloads_are_escaped_on_render()
{
    $xssInput = '<script>alert("XSS")</script><img src=x onerror=alert(1)>';
    
    // Simpan data
    $this->postJson('/admin/ajax/aspirasi.php', [
        'pesan' => $xssInput
    ]);

    // Ambil data dan verifikasi
    $outputHtml = $this->get('/aspirasi')->getContent();
    
    $this->assertStringNotContainsString('<script>alert("XSS")</script>', $outputHtml);
    $this->assertStringContainsString('&lt;script&gt;alert(&quot;XSS&quot;)&lt;/script&gt;', $outputHtml);
}
```

### 4.3 Test Case: Broken Access Control & Proteksi CSRF (A01 & A10)
```php
public function test_unauthenticated_request_to_admin_returns_401()
{
    // Request tanpa sesi admin aktif
    $response = $this->postJson('/admin/ajax/katalog_delete.php', ['id' => 1]);
    $response->assertStatus(401);
}

public function test_request_without_csrf_token_is_rejected()
{
    // Request POST tanpa CSRF token
    $response = $this->post('/admin/ajax/anggota_store.php', ['nama' => 'Test'], ['X-CSRF-TOKEN' => '']);
    $response->assertStatus(403);
}
```

---

## 5. Test Suite 3: Rate Limiter & Proteksi Anti-Brute Force (A07)

Memastikan mekanisme penguncian akun/IP berjalan saat terdeteksi aktivitas login berulang yang mencurigakan.

### 5.1 Kriteria Pengujian
- Percobaan login gagal ke-1 hingga ke-5 mengembalikan HTTP `401 Unauthorized`.
- Percobaan login gagal ke-6 (melebihi ambang batas) **WAJIB mengembalikan HTTP `429 Too Many Requests`**.
- Respon HTTP 429 wajib memuat header `Retry-After` atau properti JSON `retry_after_seconds`.

### 5.2 Contoh Test Case
```php
public function test_login_rate_limiter_blocks_after_5_failed_attempts()
{
    $credentials = ['username' => 'admin', 'password' => 'wrong_password'];

    // 5 kali percobaan gagal
    for ($i = 1; $i <= 5; $i++) {
        $res = $this->postJson('/admin/ajax/login_auth.php', $credentials);
        $res->assertStatus(401);
    }

    // Percobaan ke-6 wajib diblokir oleh Rate Limiter
    $blockedRes = $this->postJson('/admin/ajax/login_auth.php', $credentials);
    $blockedRes->assertStatus(429)
               ->assertJson([
                   'success' => false,
                   'type' => 'error',
                   'action' => 'RATE_LIMIT_EXCEEDED'
               ]);
}
```

---

## 6. Test Suite 4: Validasi Berkas Media & Fallback Avatar Inisial

### 6.1 Test Case: Batas Ukuran & Filter MIME Type
```php
public function test_upload_rejects_files_exceeding_size_limits()
{
    // File foto > 2MB wajib ditolak
    $largePhoto = UploadedFile::fake()->create('cover.jpg', 2500); // 2.5MB
    $resPhoto = $this->postJson('/admin/ajax/upload_media.php', ['file' => $largePhoto]);
    $resPhoto->assertStatus(422);

    // File video > 15MB wajib ditolak
    $largeVideo = UploadedFile::fake()->create('video.mp4', 16000); // 16MB
    $resVideo = $this->postJson('/admin/ajax/upload_media.php', ['file' => $largeVideo]);
    $resVideo->assertStatus(422);
}

public function test_upload_rejects_fake_extension_mime_spoofing()
{
    // File PHP executable yang sengaja diberi ekstensi .jpg palsu
    $fakeImage = UploadedFile::fake()->createWithContent('malicious.jpg', '<?php echo "hack"; ?>');
    
    $res = $this->postJson('/admin/ajax/upload_media.php', ['file' => $fakeImage]);
    $res->assertStatus(422); // Server-side MIME validation (finfo) wajib menggagalkan ini
}
```

### 6.2 Test Case: Fallback Inisial Avatar Dinamis
```javascript
// Pengujian helper avatar inisial (JavaScript / React / PHP Helper)
describe('Avatar Initial Fallback Generator', () => {
  test('generates correct two-letter initials from full name', () => {
    expect(getAvatarInitials('Rizky Fahrezi')).toBe('RF');
    expect(getAvatarInitials('Sanak Negeri')).toBe('SN');
    expect(getAvatarInitials('Budi')).toBe('B');
  });

  test('img element has onerror handler to fallback avatar', () => {
    render(<UserAvatar name="Rizky Fahrezi" photoUrl="/uploads/missing_file.webp" />);
    const img = screen.getByRole('img');
    expect(img).toHaveAttribute('onerror');
  });
});
```

---

## 7. Test Suite 5: Tabel AJAX, Metode POST Only, & Filter Reset

### 7.1 Test Case: Penolakan Method HTTP GET pada Tabel Admin
```php
public function test_admin_data_tables_reject_get_requests()
{
    $response = $this->getJson('/admin/ajax/anggota_list.php');
    // Wajib ditolak (hanya mengizinkan AJAX POST)
    $this->assertTrue(in_array($response->status(), [400, 405]));
}
```

### 7.2 Test Case: Live Search Debounce & Pagination Boundaries
```javascript
test('table live search triggers AJAX after 300ms debounce', async () => {
  jest.useFakeTimers();
  const fetchMock = jest.fn().mockResolvedValue({ ok: true, json: async () => ({ data: [] }) });
  global.fetch = fetchMock;

  render(<AdminTable endpoint="/admin/ajax/data.php" />);
  const searchInput = screen.getByPlaceholderText(/cari/i);

  fireEvent.change(searchInput, { target: { value: 'Buku Cerita' } });
  
  // Belum memanggil fetch sebelum 300ms
  expect(fetchMock).not.toHaveBeenCalled();

  // Majukan waktu 300ms
  jest.advanceTimersByTime(300);
  expect(fetchMock).toHaveBeenCalledTimes(1);
});
```

---

## 8. Test Suite 6: Performa Query & Pencegahan N+1 Problem

Memastikan endpoint list atau datatable tidak memicu ledakan query saat memuat relasi:

```php
public function test_transaction_list_does_not_have_n_plus_one_query_problem()
{
    // Buat data uji
    Transaction::factory()->count(10)->create();

    DB::enableQueryLog();

    $response = $this->postJson('/admin/ajax/transaksi_list.php', ['per_page' => 10]);
    $response->assertStatus(200);

    $queries = DB::getQueryLog();
    
    // Maksimal hanya 2-3 query (1 count/pagination, 1 select transactions, 1 eager load relasi)
    // Jika terjadi N+1, jumlah query akan menjadi 21+ query
    $this->assertLessThanOrEqual(4, count($queries), "Terdeteksi N+1 Query Problem pada endpoint transaksi list!");
}
```

---

## 9. Test Suite 7: Sidebar Admin, LocalStorage & Anti-FOUC

```javascript
describe('Admin Sidebar Toggle & Persistence', () => {
  beforeEach(() => {
    localStorage.clear();
  });

  test('toggling hamburger menu updates localStorage state', () => {
    render(<AdminLayout />);
    const toggleBtn = screen.getByTestId('sidebar-toggle-btn');

    // Klik toggle untuk collapse
    fireEvent.click(toggleBtn);
    expect(localStorage.getItem('admin_sidebar_collapsed')).toBe('true');

    // Klik toggle untuk expand
    fireEvent.click(toggleBtn);
    expect(localStorage.getItem('admin_sidebar_collapsed')).toBe('false');
  });
});
```

---

## 10. Test Suite 8: Audit SEO & Header Keamanan (Public vs Admin)

### 10.1 Test Case: Meta Tag Halaman Publik
```javascript
test('public pages contain mandatory SEO meta tags', async () => {
  const html = await fetchPageHtml('/');
  
  expect(html).toMatch(/<title>.+<\/title>/i);
  expect(html).toMatch(/<meta name="description" content=".+">/i);
  expect(html).toMatch(/<meta property="og:title"/i);
  expect(html).toMatch(/<meta property="og:image"/i);
  expect(html).toMatch(/<link rel="canonical"/i);
});
```

### 10.2 Test Case: Proteksi Noindex Halaman Admin & Login
```javascript
test('admin dashboard and login pages contain noindex nofollow', async () => {
  const adminHtml = await fetchPageHtml('/admin/login.php');
  
  expect(adminHtml).toMatch(/<meta name="robots" content=".*noindex.*nofollow.*"/i);
});
```

---

## 11. Test Suite 9: Dokumentasi API (OpenAPI / Swagger) — [OPSIONAL / BILA ADA API]

> **⚠️ CATATAN KONDISIONAL (BILA PROYEK MEMILIKI API):**
> Test suite ini bersifat **OPSIONAL** dan hanya dieksekusi jika aplikasi menyediakan endpoint Web/REST API serta antarmuka dokumentasi (Swagger, OpenAPI, Scalar, dll). Jika aplikasi berupa website statis / monolit tanpa API publik/internal, lewati test suite ini.

```php
public function test_openapi_spec_is_valid_json()
{
    $response = $this->get('/docs/api.json');
    $response->assertStatus(200)
             ->assertJsonStructure(['openapi', 'info', 'paths']);
}

public function test_api_documentation_ui_is_protected_in_production()
{
    config(['app.env' => 'production']);
    $response = $this->get('/docs/api');
    // Wajib dialihkan atau meminta login (401/302)
    $this->assertTrue(in_array($response->status(), [401, 302]));
}
```

---

## 12. Pre-Deployment Quality Gate Checklist (Zero-Bug Policy)

Sebelum memicu deployment produksi via GitHub Actions atau FTP/SSH, seluruh checklist berikut **WAJIB 100% BERSTATUS HIJAU (PASS)**:

- [ ] **Struktur Folder Test Terisolasi**: Berkas pengujian tertata rapi di folder `tests/` (tidak bercampur di root/src).
- [ ] **Eksekusi Manual CLI Berhasil**: Perintah test runner (misal `php tests/run_all_tests.php` atau `php artisan test`) menghasilkan `0 failures, 0 errors`.
- [ ] **Pembersihan Log Debugging**: Seluruh `console.log()` dan `var_dump()` telah dibersihkan dari kode produksi.
- [ ] **Build Validation**: Lolos `npm run build` dan `npx tsc --noEmit` tanpa error kompilasi.
- [ ] **Query Performance Audit**: Bebas dari N+1 query problem melalui Eager Loading teruji.
- [ ] **SQL Injection Audit**: Seluruh query database terbukti menggunakan parameterized prepared statements.
- [ ] **Format Respon JSON**: Seluruh API/AJAX terverifikasi mengembalikan format baku (tipe, judul, aksi, status, pesan detail).
- [ ] **Toast Behavior**: Notifikasi sukses auto-dismiss 2 detik; notifikasi error wajib manual close (×).
- [ ] **Media Limits & Fallback**: Validasi foto 2MB WebP, video 15MB, dan avatar inisial berfungsi saat 404.
- [ ] **Access Control**: Endpoint admin mengembalikan HTTP 401 saat diakses tanpa sesi valid.
- [ ] **CSRF Protection**: Form dan AJAX POST membawa token CSRF valid.
- [ ] **Rate Limiter**: Percobaan login ke-6 diblokir dengan HTTP 429 Too Many Requests.
- [ ] **SEO Tags & Noindex**: Halaman publik memiliki OpenGraph & canonical; area admin memiliki tag `noindex`.
