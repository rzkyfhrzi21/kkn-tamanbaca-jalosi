# Taman Baca Jalosi Sanak Negeri

Website resmi **Taman Baca Jalosi Sanak Negeri** — rumah literasi masyarakat di Pekon Air Kubang, Tanggamus, Lampung. Dibangun sebagai bagian program KKN untuk mempromosikan kegiatan membaca, program edukasi, katalog koleksi buku, pojok karya, dan kanal donasi.

**Live:** https://tbjalosi.web.id/

## Fitur

- **7 halaman statis** ber-CSS Tailwind, tanpa framework frontend
  - `/` — Beranda (hero, program unggulan, statistik, media liputan, donasi)
  - `/tentang` — Profil, visi misi, struktur organisasi
  - `/program` — Program unggulan (pojok baca, literasi digital, dll.)
  - `/katalog` — Katalog koleksi 1.500+ buku
  - `/pojok-karya` — Karya warga (cerita, puisi, dll.)
  - `/donasi` — Panduan donasi buku/dana & relawan
  - `/kontak` — Kontak, alamat, peta
- **Clean URL** via `.htaccess` (slug → `landing/<slug>.php`), portabel di root maupun subfolder
- **SEO on-page**: meta title/description per halaman, Open Graph, canonical, `sitemap.xml`, `robots.txt`, favicon `.ico`
- **Font & ikon**: font lokal Tuku (sub-head + handwriting) dengan fallback CDN, ikon Material Symbols
- **Keamanan**: blokir akses folder sensitif, security headers, kompresi GZIP, cache aset statis, warning script anti-pencurian konten

## Teknologi

| Bagian | Teknologi |
|---|---|
| Backend | PHP 8 (tanpa framework, template include) |
| Frontend | HTML + Tailwind CSS (CDN) + vanilla JS |
| Font | Tuku sub-head, Tuku handwriting (lokal + CDN `tuku.coffee`) |
| Ikon | Material Symbols Outlined |
| Hosting | cPanel (Apache, mod_rewrite) |
| CI/CD | GitHub Actions → FTP deploy otomatis |

## Struktur Proyek

```
├── landing/            # Halaman publik (1 file per slug)
├── components/         # Partials: head, header, footer, btn-primary, dll.
├── assets/
│   ├── css/            # fonts.css, style.css, tailwind-config.js
│   ├── js/             # main.js, security-warning.js
│   ├── fonts/          # Font Tuku (lokal)
│   └── images/         # Logo, favicon, aset gambar
├── .htaccess           # Clean URL, keamanan, GZIP, cache
├── robots.txt          # Aturan crawl Googlebot
├── sitemap.xml         # Daftar URL untuk Google Search Console
├── favicon.ico         # Ikon browser (16/32/48 px)
└── .github/workflows/  # Deploy FTP otomatis
```

## Pengembangan Lokal (Laragon)

1. Clone repo ke `D:\Apps\laragon-6.0.0\www\kkn-tamanbaca` (atau folder Laragon lain)
2. Jalankan **Laragon → Start All** (Apache + PHP)
3. Buka `http://kkn-tamanbaca.test` (atau sesuai nama folder)

> Clean URL aktif otomatis berkat `.htaccess`. Pastikan `mod_rewrite` aktif di Apache.

## Deployment

Deploy **otomatis** setiap push ke branch `master` via GitHub Actions (`.github/workflows/deploy-ftp.yml`) — file di-upload ke cPanel lewat FTP.

### Prasyarat (sekali saja)

Secrets berikut harus ada di **Settings → Secrets and variables → Actions** repo GitHub:

| Secret | Keterangan |
|---|---|
| `FTP_SERVER` | Host FTP hosting (mis. `ftp.namadomain.web.id`) |
| `FTP_USERNAME` | Username FTP cPanel |
| `FTP_PASSWORD` | Password FTP |
| `FTP_PORT` | Port FTP (biasanya `21`) |
| `FTP_SERVER_DIR` | Direktori target di server (mis. `/public_html`) |

### Alur rilis

```bash
git add .
git commit -m "deskripsi perubahan"
git push origin master
```

Pantau status di **Actions** tab GitHub; ikon 🟢 hijau = deploy sukses. File yang dikecualikan dari upload (`docs/`, `@agents/`, `Zzz/`, `README.md`, dll.) sudah diatur di workflow — tidak perlu diurus manual.

> Jika butuh deploy manual: upload isi repo ke `public_html` via cPanel File Manager / FTP, kecuali `docs/`, `@agents/`, `Zzz/`, `.github/`, dan file konfigurasi lokal.

## SEO & Google Search Console

1. Submit `https://tbjalosi.web.id/sitemap.xml` di GSC → Sitemaps
2. Gunakan **URL Inspection** → Request Indexing untuk halaman penting (homepage)
3. Untuk situs berita/artikel baru: sitemap harus **dinamis** (di-generate dari database), bukan statis — Google akan menemukan halaman baru lewat sitemap + internal link tanpa perlu request manual per halaman

## Lisensi

© 2026 Taman Baca Jalosi Sanak Negeri. Seluruh konten dan desain dilindungi.