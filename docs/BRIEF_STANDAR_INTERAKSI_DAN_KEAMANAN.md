# BRIEF STANDAR INTERAKSI UI/UX, AJAX, ARSITEKTUR KEAMANAN (OWASP TOP 10), SEO & DEPLOYMENT CI/CD
**Master Engineering, Dashboard Fundamentals, Query Optimization & Security Guidelines — Workspace AI Agent System**

---

## 📌 HEADER & RINGKASAN POIN STANDARISASI
Dokumen ini merupakan panduan acuan mutlak (*source of truth*) untuk seluruh AI Agent dan pengembang dalam merancang antarmuka (UI/UX), menulis kode interaksi data AJAX, membangun dashboard admin, mengoptimasi query database, mengamankan sistem (OWASP Top 10, SQLi, Rate Limiting), menerapkan SEO terbaik, serta mengotomatisasi deployment CI/CD & production readiness.

| No | Kategori Standar | Cakupan & Poin Utama yang Diintegrasikan |
|:---|:---|:---|
| **1** | **Modal CRUD & Notifikasi Toast Detail** | Modal aksi (tambah, edit, konfirmasi hapus) vs halaman dedicated, format respon JSON baku (jenis notifikasi, judul, status aksi, keterangan detail), auto-dismiss 2 detik + slider bar countdown untuk sukses, wajib close manual (×) tanpa auto-hide untuk error, antrean toast stacking (menumpuk). |
| **2** | **Media, Upload & Avatar Inisial Fallback** | Batas foto 2MB (auto-convert WebP), video 15MB (termasuk format iPhone HEIC/MKV), larangan URL eksternal, validasi MIME server-side `finfo_file()`, hashing nama file, fallback avatar inisial dinamis (misal "RF" dari *Rizky Fahrezi* jika berkas 404/belum diunggah). |
| **3** | **Lightbox Preview, Carousel & Select2** | Modal preview foto/video full-screen dengan backdrop *dark glassmorphism* & tombol ESC. Carousel auto-slide 1.5 - 3 detik, tombol prev/next selalu terlihat, pause-on-hover aktif (WCAG 2.2.2). Dropdown `<select>` wajib menggunakan **Select2** (live search & custom styling). |
| **4** | **Tabel AJAX & Interaksi Data** | Protokol wajib AJAX POST (bukan GET), pagination AJAX, live search debounce 300ms, multi-filter + tombol "Reset Filter" wajib jika filter > 1, kolom aksi berbasis icon buttons (👁️, ✏️, 🗑️) di kolom paling kanan. |
| **5** | **Loading, Empty & Error States** | Lazy loading spinner untuk data teks/JSON, skeleton loading animasi pulsa untuk media/tabel (pencegah CLS), UI EmptyState informatif saat data kosong, dan ErrorState ramah pengguna saat request gagal. |
| **6** | **Sidebar Admin & Navigasi Mobile** | Hamburger toggle collapsible mode (icon-only rail ~64px), persistensi status buka/tutup di `localStorage` (anti-FOUC), drawer slide-over di layar HP, 100% responsif & mobile-friendly (area sentuh minimal 44x44px). |
| **7** | **Arsitektur Keamanan OWASP Top 10** | Panduan mitigasi menyeluruh dari A01 sampai A10 (Broken Access Control, Cryptographic Failures, Insecure Design, Misconfiguration, Outdated Components, Auth Failures, Data Integrity, Logging/Audit, SSRF, Anti-CSRF). |
| **8** | **Pencegahan SQL Injection & Sanitasi Data** | Prepared Statements PDO wajib (`bindValue`/`bindParam`), larangan interpolasi string query, *whitelist validation* ketat untuk kolom sorting `ORDER BY`/`WHERE`, type casting integer eksplisit, escaping `htmlspecialchars`. |
| **9** | **Optimasi Query & Database Indexing** | Pencegahan N+1 Query Problem via eager loading (`with`), pencegahan over-fetching via `select()` spesifik, pagination wajib (max limit 50), indexing kolom filter/foreign key, dan caching data statis (Redis/File). |
| **10** | **Rate Limiter & Anti-Brute Force** | Pembatasan login maksimal 5x gagal per 15 menit, rate limit AJAX 60 req/menit per IP, respon HTTP status `429 Too Many Requests` beserta header `Retry-After`. |
| **11** | **Standar SEO & Metadata Komprehensif** | Meta tag lengkap halaman publik (title, description, keywords, canonical), OpenGraph & Twitter Card, Schema.org JSON-LD, semantic HTML5 hierarchy, custom favicon, serta `noindex, nofollow` wajib di area admin & login. |
| **12** | **Dokumentasi API (OpenAPI / Swagger) — [BILA ADA]** | *(Opsional / Jika Proyek Menyediakan API)*: Standar dokumentasi API otomatis (OpenAPI spec), schema input/output berbasis FormRequest & Resource, proteksi endpoint `/docs/api` dengan middleware autentikasi di production. Tidak wajib untuk web tanpa API. |
| **13** | **Checklist Pre-Deployment & CI/CD** | Otomasi deploy via FTP/SSH/Docker/Coolify, pengelolaan GitHub Secrets aman, filter exclude berkas dev/sensitif, pembersihan `console.log`, testing `npm run build` / `php artisan test`, isolasi CORS & environment variables. |
| **14** | **Konfigurasi Server (Apache & Nginx)** | Aturan rewrite URL bersih tanpa `.html`/`.php`, proteksi direktori sensitif, kompresi GZIP, security headers, dan template alias subfolder Nginx lokal. |
| **15** | **Standar Kualitas & Dokumentasi** | Kebijakan *Zero-Error & Zero-Bug*, wajib sinkronisasi pembaruan fitur ke `AGENTS.md`, dan QA verification checklist sebelum penyelesaian tugas. |

---

## 1. Modals & Format Notifikasi Toast Terperinci

### 1.1 Modal Aksi CRUD vs Halaman Dedicated
- **Operasi Tambah / Edit**:
  - Gunakan **Modal interaktif** jika belum ada halaman dedicated (khusus) untuk Tambah/Edit data.
  - Jika sistem sudah memiliki halaman dedicated Tambah/Edit, tetap pertahankan dan gunakan halaman dedicated tersebut.
- **Operasi Hapus**: **WAJIB** menggunakan **Modal Konfirmasi Hapus** yang menyebutkan secara spesifik entitas yang akan dihapus (contoh: *"Apakah Anda yakin ingin menghapus data buku 'Laskar Pelangi'?"*).
- **Behavior Modal:**
  - Menutup otomatis setelah aksi AJAX berhasil.
  - Reset form bersih (*clear input & validation errors*) saat modal dibuka kembali.
  - Memiliki tombol silang (×) di kanan atas dan tombol *"Batal"*.
  - Mengunci fokus keyboard (*focus trap*) di dalam modal saat aktif, dan menutup via tombol `ESC`.

### 1.2 Format Respon JSON Baku dari Backend
Seluruh respon AJAX dari server **WAJIB** menggunakan struktur JSON terstandarisasi yang mendefinisikan jenis notifikasi, judul, status aksi, dan keterangan detail:

```json
{
  "success": true,
  "type": "success",
  "title": "Berhasil Menyimpan Data",
  "action": "CREATE_ANGGOTA",
  "status": "COMPLETED",
  "message": "Data anggota baru atas nama 'Ahmad Fauzi' (ID: AG-0021) telah berhasil ditambahkan ke dalam database.",
  "data": {
    "id": 21,
    "kode": "AG-0021",
    "nama": "Ahmad Fauzi"
  },
  "timestamp": "2026-08-16T11:00:00Z"
}
```

Format respon saat terjadi error/validasi gagal:
```json
{
  "success": false,
  "type": "error",
  "title": "Validasi Formulir Gagal",
  "action": "UPDATE_BUKU",
  "status": "VALIDATION_FAILED",
  "message": "Pembaruan data gagal: Kolom 'Nomor ISBN' sudah terdaftar pada koleksi lain dan berkas cover melebihi batas 2MB.",
  "errors": {
    "isbn": ["Nomor ISBN sudah terdaftar."],
    "cover": ["Ukuran berkas melebihi batas maksimal 2MB."]
  },
  "timestamp": "2026-08-16T11:00:00Z"
}
```

### 1.3 Standar Perilaku Toast Notification
Toast ditampilkan di sudut kanan atas layar (`fixed top-4 right-4 z-50`):

- **Toast Berhasil (Success Toast):**
  - **Auto-dismiss:** Otomatis menghilang setelah jeda **2 detik**.
  - **Progress Slider Bar:** Memiliki garis waktu animasi di dasar toast yang bergerak menyusut (100% → 0%) selama 2 detik countdown sebelum toast hilang.
  - **Visual:** Warna tema hijau/emerald, icon centang sukses, judul tebal, dan teks deskripsi pesan lengkap dari backend.
- **Toast Gagal / Error (Error Toast):**
  - **No Auto-dismiss:** **DILARANG HILANG OTOMATIS**. Toast error wajib tetap terbuka sampai pengguna menekan tombol silang (×) secara manual.
  - **Tombol Close (×):** Wajib dilengkapi tombol silang yang kontras.
  - **Visual:** Warna tema merah/rose, icon peringatan/tanda seru, judul error, dan rincian penyebab error.
- **Toast Stacking (Menumpuk):**
  - Jika terjadi beberapa respon berurutan, toast baru akan otomatis menumpuk rapi di bawah toast sebelumnya tanpa saling bertabrakan (*toast stack queue*).

---

## 2. Standar Upload Media, Format Berkas, & Fallback Avatar Inisial

### 2.1 Batasan Ukuran & Konversi Format
- **Foto:** Maksimal **2MB**. Ekstensi yang didukung: `jpg`, `jpeg`, `png`, `webp`, `gif`, `ico`, `heic`, `heif` (termasuk format media dari Apple/iPhone).
  - **Auto-Convert ke WebP:** Seluruh foto yang diunggah wajib dikonversi otomatis oleh backend menjadi format `.webp` untuk efisiensi penyimpanan dan optimasi loading.
- **Video:** Maksimal **15MB**. Ekstensi yang didukung: `mp4`, `mkv`, `mov`, `webm`.
- **Larangan URL Gambar Eksternal:** Dilarang menyimpan URL mentah pihak ketiga di database. Seluruh media disimpan lokal di folder `/public/uploads/` atau Object Storage terisolasi (S3/MinIO).

### 2.2 Fallback Avatar Inisial Dinamis
Jika record di database memiliki nama file foto tetapi fisiknya tidak ditemukan di server (*file broken / 404*), atau jika pengguna belum mengunggah foto profil:
- Tampilkan **Avatar Inisial Dinamis** (SVG / Canvas / UI element):
  - Mengambil 2 huruf pertama dari nama (Contoh: **"Rizky Fahrezi"** $\rightarrow$ **"RF"**, **"Sanak Negeri"** $\rightarrow$ **"SN"**).
  - Background avatar menggunakan warna solid/pastel yang elegan dengan teks inisial tebal berwarna putih kontras.
  - Ditangani pada level frontend via atribut:
    ```html
    <img src="/uploads/avatar.webp" onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=Rizky+Fahrezi&background=16100F&color=FFFFFF&bold=true';" alt="Avatar">
    ```

### 2.3 Keamanan Validasi Berkas Server-Side
- Validasi MIME type asli menggunakan PHP `finfo_file()` (bukan hanya ekstensi nama berkas).
- Berkas di-rename menjadi hash acak unik (`md5(uniqid(microtime(), true)) . '.webp'`).
- Direktori `/public/uploads/` dilindungi dengan `.htaccess` berisi `php_flag engine off` dan `Options -ExecCGI`.

---

## 3. Lightbox Media Preview, Carousel & Dropdown Select2

### 3.1 Lightbox Media Preview (Foto & Video)
- Seluruh media gambar dan video—baik pada halaman publik maupun tabel/form dashboard—**wajib dapat diklik** untuk menampilkan **Modal Lightbox Large/Full-Screen**.
- **Fitur Lightbox:**
  - Latar belakang gelap transparan berkaca (*dark glassmorphism backdrop*).
  - Tombol silang (×) di pojok kanan atas.
  - Dapat ditutup via klik tombol silang, klik di luar area gambar, atau menekan tombol `ESC`.
  - Video diputar menggunakan tag native `<video controls class="w-full max-h-[80vh] rounded">`.

### 3.2 Spesifikasi Carousel
- **Interval Auto-Slide:** Tepat **1.5 hingga 3 detik** (default `data-interval="3000"`).
- **Tombol Navigasi:** Tombol *Previous* (<) dan *Next* (>) wajib selalu terlihat (*visible*) dan responsif.
- **Pause-on-Hover (Aksesibilitas WCAG 2.2.2):** Alur pergantian slide wajib berhenti saat kursor diarahkan ke area carousel, dan berlanjut kembali saat kursor keluar.

### 3.3 Standar Dropdown Select2
- Seluruh elemen form `<select>` (pada filter tabel, formulir modal, maupun halaman dedicated) **WAJIB menggunakan library Select2** (atau custom searchable select) yang mendukung:
  - Fitur *Live Search* instan di dalam dropdown.
  - Custom UI styling serasi dengan Tailwind CSS / tema aktif.
  - Penyesuaian lebar penuh (`width: '100%'`) dan placeholder yang jelas.

---

## 4. Standar Tabel AJAX & Interaksi Data (Admin)

### 4.1 Protokol AJAX POST Only
- **Protokol:** Seluruh transaksi data tabel admin (list data, pagination, live search, filter kategori, create, update, delete) **WAJIB menggunakan HTTP POST** (dilarang menggunakan GET untuk transaksi AJAX internal).
- **CSRF Token:** Setiap request AJAX POST wajib menyertakan Token CSRF via header `X-CSRF-TOKEN` atau payload `_token`.

### 4.2 Fitur Wajib Tabel Admin
1. **Live Search:** Pencarian instan berbasis AJAX POST dengan jeda *debounce* **300ms**.
2. **AJAX Filtering & Multi-Filter:** Filter terintegrasi untuk kategori, status, dan rentang tanggal.
3. **Tombol "Reset Filter":** Jika halaman memiliki lebih dari 1 filter, **WAJIB menyediakan tombol "Reset Filter"** yang muncul/aktif saat filter diubah, dan mengembalikan seluruh filter ke kondisi default jika diklik.
4. **Pagination AJAX:** Tombol *Prev* dan *Next* serta nomor halaman berpindah mulus tanpa reload seluruh halaman (*full page refresh*).
5. **Kolom Aksi (Icon Buttons):** Kolom terakhir (paling kanan) berisi tombol aksi berupa **Icon Button** (bukan teks link):
   - 👁️ **Detail / Preview:** Membuka modal detail info atau preview berkas.
   - ✏️ **Edit:** Membuka modal / navigasi formulir edit data.
   - 🗑️ **Hapus:** Membuka modal konfirmasi hapus data.

---

## 5. Standar Loading States, Empty States & Error States

### 5.1 Loading States
- **Data Teks & Tabel JSON:** Saat request AJAX sedang berjalan mengambil data teks atau baris tabel, tampilkan **Lazy Loading Spinner** animasi halus di tengah tabel/kontainer.
- **Media Gambar & Video:** Gunakan **Skeleton Loading** (efek pulsa abu-abu dengan dimensi aspek rasio identik dengan media asli) sebelum gambar/video selesai di-load sempurna demi mencegah *Cumulative Layout Shift* (CLS).

### 5.2 Empty States & Error States
- **Empty State:** Jika tabel atau list data kosong (belum ada data atau hasil pencarian nihil), tampilkan UI EmptyState informatif (ikon ilustrasi, judul "Data Tidak Ditemukan", deskripsi singkat, dan tombol pemicu aksi jika relevan).
- **Error State:** Jika koneksi API/AJAX gagal, tampilkan ErrorState bersih dengan tombol "Coba Lagi" (*Retry*) tanpa merusak struktur layout dashboard.

---

## 6. Sidebar Admin Collapsible & Standar Responsif

### 6.1 Hamburger Toggle & Icon-Only Mode
- Memiliki tombol Hamburger Menu di header/topbar admin.
- **Desktop (Collapsed Mode):** Saat sidebar disembunyikan, sidebar tidak hilang total melainkan mengecil menjadi **Icon-Only Rail** (lebar ~64px) sehingga ikon menu tetap dapat diakses.
- **Mobile (<768px):** Sidebar disembunyikan ke luar layar dan muncul sebagai *slide-over drawer* dengan backdrop overlay saat tombol hamburger ditekan.

### 6.2 Persistensi Status (Anti-FOUC)
- Status buka/tutup sidebar wajib disimpan di `localStorage` (misal `admin_sidebar_collapsed = 'true'`).
- Script pembaca `localStorage` ditempatkan di bagian paling atas `<head>` sebelum `<body>` dirender agar tidak terjadi kedipan (*Flash of Unstyled Content / FOUC*) saat berpindah halaman.

### 6.3 Standar Responsif & Area Sentuh
- Seluruh halaman publik, formulir login, dan dashboard admin wajib **100% Responsif di Desktop, Tablet, dan Mobile** (teruji pada resolusi 390px - 1440px+).
- Tabel admin wajib dibungkus `overflow-x-auto`.
- Ukuran area klik (*tap target*) tombol minimal **44x44px** untuk kenyamanan layar sentuh.

---

## 7. Arsitektur Keamanan OWASP Top 10

Seluruh pengkodean wajib menerapkan mitigasi **OWASP Top 10**:

```
[OWASP Top 10 Checklist]
├── A01: Broken Access Control        -> Sesi terverifikasi di setiap endpoint, RBAC ketat
├── A02: Cryptographic Failures       -> Bcrypt/Argon2id password_hash, SSL/TLS, proteksi secret
├── A03: Injection (SQL/NoSQL/Command)-> PDO Prepared Statements murni, sanitasi htmlspecialchars
├── A04: Insecure Design              -> Backup otomatis JSON/DB, validasi skema input
├── A05: Security Misconfiguration    -> display_errors=off di prod, header keamanan lengkap
├── A06: Vulnerable/Outdated Comp.    -> Library terverifikasi, hindari CDN usang
├── A07: Auth & Identification Fail.  -> Rate limiter login, session_regenerate_id(true)
├── A08: Software/Data Integrity Fail.-> Whitelist input payload, validasi hash berkas
├── A09: Security Logging & Monitoring-> Audit trail untuk aksi CRUD dan kegagalan autentikasi
└── A10: SSRF & Anti-CSRF Mitigations -> Validasi token CSRF pada seluruh POST request
```

1. **A01: Broken Access Control:** Endpoint admin/AJAX wajib memvalidasi sesi aktif (`isset($_SESSION['admin_auth'])` atau middleware `auth:sanctum`). Kembalikan `401 Unauthorized` jika tidak sah.
2. **A02: Cryptographic Failures:** Password disimpan menggunakan `password_hash($password, PASSWORD_BCRYPT)`. Kredensial rahasia diletakkan di luar root publik (`.env` atau `/secure/`).
3. **A03: Injection:** Seluruh query database wajib menggunakan PDO Prepared Statements dengan parameter binding.
4. **A04: Insecure Design:** Lakukan backup berkas berkala dan validasi batas logika bisnis.
5. **A05: Security Misconfiguration:** Nonaktifkan `display_errors` di production, matikan directory listing (`Options -Indexes`).
6. **A06: Outdated Components:** Gunakan dependensi stabil dan terpercaya.
7. **A07: Authentication Failures:** Terapkan regenerasi ID sesi setelah login berhasil dan pembatasan login (*rate limiter*).
8. **A08: Data Integrity:** Validasi struktur JSON dan tipe data sebelum penyimpanan.
9. **A09: Logging & Monitoring:** Catat aktivitas penting (login gagal, mutasi data) di `/secure/logs/app.log`.
10. **A10: SSRF & CSRF:** Wajib gunakan token CSRF di setiap request yang mengubah status data.

---

## 8. Pencegahan SQL Injection & Sanitasi Data

### 8.1 Standar Wajib PDO Prepared Statements
DILARANG KERAS menggabungkan string variabel langsung ke dalam query SQL (`SELECT ... WHERE id = " . $id`). Gunakan parameterized queries:

```php
// CONTOH BENAR (PDO Prepared Statement dengan Named Parameter):
$stmt = $pdo->prepare("SELECT id, judul, pengarang, stok FROM buku WHERE kategori_id = :kategori_id AND status = :status LIMIT :limit OFFSET :offset");
$stmt->bindValue(':kategori_id', $kategoriId, PDO::PARAM_INT);
$stmt->bindValue(':status', $status, PDO::PARAM_STR);
$stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
```

### 8.2 Whitelisting Kolom Dinamis (ORDER BY / SORTING)
Prepared statement tidak dapat mem-bind nama kolom tabel. Untuk sorting dinamis, wajib menggunakan **Whitelist Validation**:

```php
$allowedColumns = ['id', 'judul', 'tahun', 'created_at'];
$sortBy = in_array($_POST['sort_by'] ?? '', $allowedColumns, true) ? $_POST['sort_by'] : 'created_at';

$allowedDirections = ['ASC', 'DESC'];
$direction = in_array(strtoupper($_POST['sort_dir'] ?? ''), $allowedDirections, true) ? strtoupper($_POST['sort_dir']) : 'DESC';

// Aman digabungkan setelah divalidasi dengan whitelist ketat:
$stmt = $pdo->prepare("SELECT * FROM buku ORDER BY {$sortBy} {$direction} LIMIT :limit");
$stmt->bindValue(':limit', 10, PDO::PARAM_INT);
$stmt->execute();
```

### 8.3 Sanitasi Output XSS
Setiap data dari database atau input user yang di-render ke HTML wajib di-escape menggunakan:
```php
htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
```

---

## 9. Optimasi Query Database, Eager Loading & Indexing

Untuk menjamin performa tinggi saat aplikasi melayani ribuan request:

### 9.1 Pencegahan N+1 Query Problem (Eager Loading)
Hindari query database di dalam perulangan loop. Gunakan Eager Loading:
```php
// SEBELUM (Buruk - Memicu N+1 Query):
$transactions = Transaction::paginate(10);
foreach ($transactions as $trx) {
    $product = Product::find($trx->product_id); // N+1!
}

// SESUDAH (Optimal - Eager Loading):
$transactions = Transaction::with(['product.kategori'])->paginate(10);
```

### 9.2 Pencegahan Over-Fetching Data
Dilarang menggunakan `SELECT *` atau `Model::all()` pada list tabel besar. Pilih kolom yang diperlukan saja:
```php
$buku = Buku::select('id', 'judul', 'kategori_id', 'stok', 'cover_img', 'created_at')->paginate(10);
```
*(Kolom teks panjang seperti deskripsi lengkap / JSON payload hanya di-load pada endpoint detail).*

### 9.3 Batas Hard Limit Pagination
Semua endpoint list **WAJIB menggunakan pagination** dengan batas maksimal per_page (misal `min($perPage, 50)`).

### 9.4 Database Indexing
Setiap kolom foreign key, kolom filter status, kolom slug, dan kolom tanggal wajib di-index pada migration:
```php
$table->index(['kategori_id', 'status']);
$table->index('created_at');
```

---

## 10. Rate Limiter & Proteksi Anti-Brute Force

### 10.1 Rate Limiter Percobaan Login
- **Batasan:** Maksimal **5 percobaan gagal per IP/Akun dalam 15 menit**.
- **Aksi:** Jika batas terlampaui, akun/IP dikunci sementara selama **15 menit** dan backend mengembalikan respon HTTP status `429 Too Many Requests`.

### 10.2 Rate Limiter Global Endpoint AJAX & Form Publik
- **Batasan:** Maksimal **60 request per menit per alamat IP**.
- **Struktur Respon HTTP 429:**
  ```json
  {
    "success": false,
    "type": "error",
    "title": "Batas Permintaan Terlampaui",
    "action": "RATE_LIMIT_EXCEEDED",
    "status": "BLOCKED",
    "message": "Terlalu banyak permintaan dari perangkat Anda. Harap tunggu beberapa saat sebelum mencoba kembali.",
    "retry_after_seconds": 300
  }
  ```
- **Header Server:** Mengirimkan header standar `Retry-After: 300` dan `X-RateLimit-Limit: 60`.

---

## 11. Standar SEO & Metadata Komprehensif

### 11.1 Meta Tag Wajib Halaman Publik
Setiap halaman publik wajib menyertakan tag SEO lengkap dan favicon kustom:
```html
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taman Baca Jalosi Sanak Negeri | Ruang Literasi Pekon Air Kubang</title>
  <meta name="description" content="Taman Baca Jalosi Sanak Negeri menyediakan ribuan buku, kegiatan edukatif, dan ruang kreatif bagi anak-anak dan warga Pekon Air Kubang.">
  <meta name="keywords" content="taman baca, literasi, buku gratis, pekon air kubang, sanak negeri, relawan donasi buku">
  <link rel="canonical" href="https://domain-anda.com/tentang">
  <link rel="icon" type="image/png" href="/assets/images/favicon.png">

  <!-- Open Graph (Facebook, WhatsApp, LinkedIn) -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Taman Baca Jalosi Sanak Negeri">
  <meta property="og:description" content="Menyemai benih literasi dan inspirasi dari desa untuk dunia.">
  <meta property="og:image" content="https://domain-anda.com/assets/images/og-banner.webp">
  <meta property="og:url" content="https://domain-anda.com/">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Taman Baca Jalosi Sanak Negeri">
  <meta name="twitter:description" content="Ruang baca dan kreasi masyarakat Pekon Air Kubang.">
  <meta name="twitter:image" content="https://domain-anda.com/assets/images/og-banner.webp">

  <!-- Schema.org JSON-LD Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Library",
    "name": "Taman Baca Jalosi Sanak Negeri",
    "description": "Ruang literasi dan komunitas belajar mandiri di Pekon Air Kubang.",
    "url": "https://domain-anda.com"
  }
  </script>
</head>
```

### 11.2 Proteksi Indeksasi Area Admin & Login
Halaman `/admin/*`, `/dashboard/*`, dan `login.html` **DILARANG KERAS** diindeks oleh search engine:
```html
<meta name="robots" content="noindex, nofollow, noarchive">
```

---

## 12. Standar Dokumentasi API (OpenAPI / Swagger) — [OPSIONAL / BILA ADA API]

> **⚠️ CATATAN KONDISIONAL (BILA PROYEK MEMILIKI API):**
> Bagian ini bersifat **OPSIONAL** dan **hanya diterapkan jika proyek Anda membangun/menyediakan REST API atau Web Service**. Jika proyek adalah website profil, landing page, aplikasi monolit murni, atau website statis tanpa API independen, bagian ini **TIDAK WAJIB** dan dapat dilewati. Pilihan dokumentasi juga tidak harus selalu Swagger (dapat menggunakan Postman Collection, Scalar, README API, dll).

Untuk proyek yang menyediakan API publik/internal:
1. **Otomatisasi Tanpa Anotasi Manual**: Manfaatkan tool generator OpenAPI otomatis (seperti Scramble pada Laravel atau tsoa/Swagger-JSDoc pada Node) yang membaca FormRequest, Resource, dan return type controller secara dinamis.
2. **Endpoint Akses Dokumentasi**: Tersedia di `/docs/api` (Swagger UI) dan `/docs/api.json` (OpenAPI Spec).
3. **Proteksi di Production**: Rute `/docs/api` wajib diproteksi dengan middleware autentikasi admin di lingkungan production.

---

## 13. Standar Pre-Deployment Checklist & CI/CD Hardening

Sebelum melakukan rilis/deploy ke server produksi:

### 13.1 Checklist Frontend & Backend Hardening
- [ ] **Pembersihan Log**: Seluruh `console.log()` debugging telah dibersihkan (`grep -r "console.log" src/`).
- [ ] **Build Validation**: Lolos `npm run build` dan pemeriksaan TypeScript (`npx tsc --noEmit`) tanpa error.
- [ ] **Custom 404 & Error Pages**: Tersedia halaman 404 (`not-found`) dan error handling khusus.
- [ ] **Isolasi Environment**: Tidak ada URL atau API key yang hardcode di kode sumber; seluruh variabel dimuat via `.env`.
- [ ] **Optimasi Cache Backend**: Menjalankan `php artisan config:cache` dan `route:cache` (pada Laravel).
- [ ] **CORS Restriction**: Mengatur CORS hanya mengizinkan domain frontend resmi.
- [ ] **Object Storage / MinIO / S3**: Bucket privat terlindungi, bucket publik hanya read-only, port console dashboard tidak diekspos ke publik.

### 13.2 Aturan Filter Berkas yang Dikecualikan (CI/CD Exclude Rules)
Pola pengecualian (*exclude pattern*) pada workflow `.github/workflows/deploy-ftp.yml` atau script sync:
```yaml
exclude: |
  **/.git*
  **/.git*/**
  **/.github/**
  **/.rtk/**
  **/.codebase-memory/**
  **/.agents/**
  **/.claude/**
  **/.grok/**
  **/.opencode/**
  **/@agents/**
  **/graphify-out/**
  **/rules/**
  **/SKILLS/**
  **/Zzz/**
  **/docs/**
  **/tests/**
  **/node_modules/**
  **/package.json
  **/package-lock.json
  **/AGENTS.md
  **/AGENTS1.md
  **/CLAUDE.md
  **/GEMINI.md
  **/README.md
  **/INIT STITCH.txt
  **/.env
  **/.env.example
  **/*.sql
  **/*.log
```

---

## 14. Konfigurasi Server: Apache `.htaccess` & Nginx Local Alias

### 14.1 Konfigurasi Apache `.htaccess` (Production & Laragon)
```apache
# Matikan directory listing
Options -Indexes

RewriteEngine On

# 1. Redirect URL berakhiran .html ke Clean URL (tanpa .html)
RewriteCond %{THE_REQUEST} \s/+(.+?)\.html[\s?] [NC]
RewriteRule ^ /%1 [R=301,L]

# 2. Routing Root '/' ke Landing Page
RewriteRule ^$ landing/index.html [L]

# 3. Routing Area Dashboard (/dashboard atau /dashboard/xxx)
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{DOCUMENT_ROOT}/dashboard/$1.html -f
RewriteRule ^dashboard/(.*)$ dashboard/$1.html [L]

# 4. Routing Area Landing (/xxx)
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{DOCUMENT_ROOT}/landing/$1.html -f
RewriteRule ^(.*)$ landing/$1.html [L]

# 5. Routing Fallback
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME}.html -f
RewriteRule ^(.*)$ $1.html [L]

# 6. Kompresi GZIP & Keamanan Header
<IfModule mod_deflate.c>
  AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript
</IfModule>

<IfModule mod_headers.c>
  Header set X-Content-Type-Options "nosniff"
  Header set X-Frame-Options "SAMEORIGIN"
  Header set Referrer-Policy "strict-origin-when-cross-origin"
  Header set Permissions-Policy "camera=(), microphone=(), geolocation=()"
</IfModule>

# 7. Blokir Akses Berkas Sensitif
RewriteRule ^(docs|@agents|Zzz|tests|\.git|\.rtk)(/|$) - [F,L]
<FilesMatch "\.(md|txt|log|json|env|sql|yml|yaml|bak|lock)$">
  Require all denied
</FilesMatch>
<FilesMatch "^(INIT STITCH\.txt|init-stitch\.txt)$">
  Require all denied
</FilesMatch>
```

### 14.2 Konfigurasi Alias Nginx (Pengembangan Lokal)
Bagi lingkungan pengembangan lokal yang menggunakan web server Nginx:
```nginx
# Routing khusus untuk subfolder project di Nginx
location /NAMA_PROJECT/ {
    try_files $uri $uri/ /NAMA_PROJECT/index.php?$query_string;
}

# Blokir akses folder sensitif di Nginx
location ~ ^/NAMA_PROJECT/(docs|@agents|Zzz|tests|\.git|\.rtk)/ {
    deny all;
    return 404;
}

# Blokir file sensitif di Nginx
location ~ ^/NAMA_PROJECT/.*\.(md|txt|log|json|env|sql|yml|yaml)$ {
    deny all;
    return 404;
}
```

---

## 15. Standar Kualitas & Sinkronisasi Dokumentasi (`AGENTS.md`)

- **Sinkronisasi Dokumentasi (`AGENTS.md`)**: Setiap penambahan fitur arsitektur, modul baru, optimasi query, atau perubahan alur interaksi **WAJIB dicatat dan diperbarui ke dalam file `AGENTS.md`**.
- **Kebijakan Mutu Rekayasa (Zero-Bug Policy)**: **No error, no bug, no mistakes.** Pastikan seluruh fungsi berjalan optimal, validasi input teruji, dan bebas dari kesalahan konsol/server sebelum menandai tugas selesai.
- **QA Checklist Otomatis**:
  - [ ] Respon server mematuhi format JSON standar dengan pesan terperinci.
  - [ ] Toast notifikasi sukses auto-dismiss 2 detik dengan slider countdown; toast error wajib close manual.
  - [ ] Lightbox preview foto/video dan carousel auto-slide berjalan lancar.
  - [ ] Transaksi data tabel menggunakan AJAX POST dengan live search & reset filter.
  - [ ] Optimasi database: Eager loading aktif (bebas N+1), index terpasang pada foreign key.
  - [ ] Keamanan OWASP Top 10, SQL Injection prevention, dan Rate Limiter aktif.
  - [ ] SEO meta tag halaman publik dan `noindex` halaman admin/login terpasang sempurna.
