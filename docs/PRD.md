# Product Requirements Document (PRD)
## Project: Website Resmi Taman Bacaan Masyarakat (TBM) Jalosi Sanak Negeri
### Visual Design Benchmark: Toko Kopi TUKU (tuku.coffee) — Konsep "Tetangga Baca"
### Version: 2.1.0 (Multi-Page Modular PHP + Shared Components)

---

### 1. Ringkasan Eksekutif & Arsitektur Website

Website TBM Jalosi Sanak Negeri menggunakan arsitektur **Multi-Page Modular PHP** dengan komponen bersama (`components/`) dan 7 halaman publik (`landing/`):
1. **Beranda (`/`):** Portal agregator ringkas (*curated teaser portal*). Menampilkan cuplikan dari setiap modul + tombol navigasi *"Lihat Semua / Jelajahi Selengkapnya"*.
2. **Halaman Khusus Modul (`/tentang`, `/program`, `/katalog`, `/pojok-karya`, `/donasi`, `/kontak`):** Halaman tersendiri per modul dengan data lengkap, filter pencarian, dan formulir interaktif.

> Routing & deploy: halaman disajikan dari `landing/*.php` (include `components/head.php`, `header.php`, `footer.php`). SEO aktif: `robots.txt`, `sitemap.xml`, meta/OG/Twitter, JSON-LD (lihat `docs/` brief SEO).

---

### 2. Informasi Faktual Entitas (Data Inti)
* **Nama Entitas:** Taman Bacaan Masyarakat (TBM) Jalosi Sanak Negeri.
* **Pendiri & Pengelola:** Bpk. Tamar Widadi, S.Pd.
* **Tanggal Berdiri:** 17 Juli 2015 (dimulai dari 10 eksemplar buku hingga kini 1.500+ buku).
* **Lokasi Persis:** Dusun Tegal Sari 2, RT/RW Keramat Jati, Pekon Air Kubang, Kec. Air Naningan, Kab. Tanggamus, Lampung (berjarak ±120 meter dari SDN 3 Air Kubang).
* **Visi Resmi:**
  > *"Menjadikan Perpustakaan Umum Jalosi Sanak Negeri sebagai pusat literasi, edukasi, budaya dan inovasi inklusif, serta mendukung kualitas sumber daya manusia melalui budaya membaca dan pembelajaran sepanjang hayat."*
* **Misi:**
  1. Menyediakan koleksi berkualitas dan relevan guna memenuhi kebutuhan seluruh lapisan masyarakat.
  2. Meningkatkan akses dan pelayanan guna menciptakan suasana belajar yang nyaman dan ramah.
  3. Mendorong budaya literasi melalui program edukatif untuk melatih daya kritis anak.
* **Mitra Utama:** SDN 3 Air Kubang & Yayasan IAR Indonesia (Konservasi & Komputer).

---

### 3. Peta Situs (Slug Final)

```text
├── 1. BERANDA (/) — Aggregator
│   ├── Hero + Kartu FAKTA CEPAT (bg foto lokal, stempel EST. 17 JULI 2015, 4 metrik)
│   ├── Kata Pendiri (-> /tentang)
│   ├── Liputan Media teaser "Pernah Diliput Media" (Radio Idola 92.6 FM & Lampung Geh News)
│   ├── [TEASER] 4 Pilar Program (-> /program)
│   ├── [TEASER] Sorotan Koleksi Buku (-> /katalog)
│   ├── [TEASER] Donasi "Kirim Buku, Kirim Harapan" (-> /donasi)
│   └── Footer 4 kolom + card WA/email
│
├── 2. TENTANG KAMI (/tentang) -> FULL CONTENT
│   ├── Kisah Pendiri & Sejarah (2015-sekarang, 10 buku ke 1.500+ buku)
│   ├── Visi & Misi
│   ├── Impact & Timeline (SVG Total Koleksi 1.5K+)
│   └── Liputan Media (2 berita resmi)
│
├── 3. PROGRAM (/program) -> FULL CONTENT
│   ├── [PROG-01] Literasi Membaca Bersama & Bedah Dongeng
│   ├── [PROG-02] Kelas Komputer & Literasi Digital (Didukung Yayasan IAR)
│   ├── [PROG-03] Sanggar Seni & Tari Sanak Negeri (Tradisional & Modern)
│   ├── [PROG-04] Permainan Edukasi & Konservasi Alam
│   └── (Section Jadwal & Daftar dihapus sesuai keputusan final)
│
├── 4. KATALOG BUKU (/katalog) -> FULL UNRESTRICTED
│   ├── Live Search Input (Cari judul, penulis, topik)
│   ├── Filter Kategori (Anak-anak, Pelajaran, Sains & Alam, Sastra, Sejarah)
│   ├── Grid Koleksi Lengkap + Detail Lokasi Rak & Status Ketersediaan
│   └── Tombol aksi: Tanya Buku via WhatsApp
│
├── 5. POJOK KARYA (/pojok-karya) -> FULL UNRESTRICTED
│   ├── Galeri Dokumentasi Foto & Video Kegiatan
│   ├── Etalase Karya Anak: Puisi, Cerpen Mini, Gambar, Resensi
│   └── Testimoni Guru SDN 3 Air Kubang, Wali Murid, Pengunjung
│
├── 6. DONASI (/donasi) -> FULL WORKFLOW
│   ├── Panduan Donasi Buku Fisik (Wishlist Kategori & Spesifikasi)
│   ├── Resi Pengiriman Paket Kurir ke Kediaman Bpk. Tamar Widadi di Tanggamus
│   ├── Informasi Dukungan Operasional & Fasilitas
│   └── Formulir Pendaftaran Relawan / Pengajar Tamu
│
└── 7. KONTAK (/kontak) -> FULL MAP & DETAILS
    ├── Peta Interaktif & Petunjuk Arah (Radius 120m dari SDN 3 Air Kubang)
    ├── Jam Operasional: Senin-Jumat 14:00-17:00, Sabtu 09:00-16:00, Minggu Libur
    ├── Kontak Langsung: WhatsApp (+62 812 3456 7890), Email (info@jalosisanak.org)
    └── FAQ (4 pertanyaan umum, `<details>`)
```

---

### 4. Spesifikasi Fungsional Tiap Halaman

#### 4.1. Beranda / Landing Page (`landing/index.php`)
* **Batas Data:** Sorotan koleksi & karya terbatas; program 4 kartu.
* **Fitur:** Hero dengan background foto lokal + overlay krem + kartu **FAKTA CEPAT** (barcode style); section hover interaktif (bg berubah oren terang saat kursor di card konten); teaser Liputan Media; CTA donasi.

#### 4.2. Halaman Katalog Buku (`landing/katalog.php`)
* Pencarian instan (*client-side search*), filter multi-kategori, status ketersediaan (`Tersedia di Rak A1-B3` / `Sedang Dibaca`), tombol *Tanya Buku via WhatsApp*.

#### 4.3. Halaman Program (`landing/program.php`)
* Breakdown kurikulum tiap program (sasaran usia, durasi, alat peraga), lencana mitra resmi (Yayasan IAR Indonesia & SDN 3 Air Kubang).

#### 4.4. Halaman Donasi & Relawan (`landing/donasi.php`)
* Kotak Resi Kurir siap salin (copy-to-clipboard alamat pengiriman), wishlist buku, formulir relawan (Nama, No. WA, Keahlian: Tari/Komputer/Mengajar, Pilihan Hari).

#### 4.5. Halaman Kontak (`landing/kontak.php`)
* Peta rute, jam operasional, FAQ, kontak WA/email, tombol share halaman.

---

### 5. Standard Non-Fungsional
* **Navigasi Konsisten:** Setiap halaman memakai `components/header.php` & `footer.php` identik dengan indikator menu aktif + hover `text-oren`.
* **Kecepatan & Responsivitas:** 100% responsif (mobile fullscreen menu, grid adaptif). Font di-self-host (`assets/fonts/`) agar tidak bergantung CDN.
* **SEO & Indexing:** Meta description/title unik per halaman, canonical, OG/Twitter, JSON-LD, `robots.txt` (blokir `/landing`, `/components`, `/docs`, rute privat), `sitemap.xml` — target verifikasi Google Search Console via DNS CNAME (domain `tbjalosi.web.id`).
* **Pemeliharaan Palet:** Warna memakai token Tailwind (lihat `docs/COLOR.txt` & `docs/DESIGN.md`); logo & aset gambar lokal di `assets/images/`.