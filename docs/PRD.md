# Product Requirements Document (PRD)
## Project: Website Resmi Taman Bacaan Masyarakat (TBM) Jalosi Sanak Negeri
### Visual Design Benchmark: Toko Kopi TUKU (tuku.coffee) — Konsep "Tetangga Baca"
### Version: 2.0.0 (Multi-Page Architecture with Landing Page Aggregator)

---

### 1. Ringkasan Eksekutif & Arsitektur Website

Website TBM Jalosi Sanak Negeri menggunakan arsitektur **Multi-Page Modular** yang terbagi menjadi dua level penyajian:
1. **Beranda / Landing Page (`/`):** Berperan sebagai portal agregator ringkas (*curated teaser portal*). Menampilkan cuplikan informasi penting dari setiap modul dengan kuota terbatas (**maksimal 3–4 item per modul**) dan dilengkapi tombol navigasi *"Lihat Semua / Jelajahi Selengkapnya"*.
2. **Halaman Khusus Modul (*Dedicated Module Pages*):** Halaman tersendiri untuk setiap modul yang menyajikan data secara lengkap, tidak dibatasi, dilengkapi filter pencarian mendalam, tabel jadwal, serta formulir interaktif.

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

### 3. Peta Situs & Aturan Tampilan (Landing Teaser vs. Full Page)

```text
├── 1. BERANDA (Landing Page - /)
│   ├── Topbar Navigasi Multi-Halaman & Stamp EST. 2015
│   ├── Hero Banner & 4 Quick Stats Barcode
│   ├── [TEASER] 4 Pilar Program (4 Kartu Ringkas -> Link ke /program)
│   ├── [TEASER] Sorotan Koleksi Buku (Maks. 4 Buku Pilihan -> Link ke /katalog)
│   ├── [TEASER] Kisah Pendirian & Visi Misi Singkat (-> Link ke /tentang)
│   ├── [TEASER] Sanak Negeri Berkarya & Galeri (Maks. 4 Karya Terbaru -> Link ke /karya)
│   ├── [TEASER] Resi Donasi Cepat & Sapa Relawan (-> Link ke /donasi-relawan)
│   └── Footer Espresso & Lokasi Ringkas (-> Link ke /kontak)
│
├── 2. TENTANG KAMI (/tentang) -> FULL CONTENT
│   ├── Sejarah Lengkap (Perjalanan 2015-sekarang, dari 10 buku ke 1.500+ buku)
│   ├── Profil Lengkap Pendiri & Pengelola (Bpk. Tamar Widadi, S.Pd.)
│   ├── Visi, Misi, dan Falsafah Literasi Inklusif
│   └── Dampak bagi Siswa SDN 3 Air Kubang & Pendidikan Luar Sekolah
│
├── 3. PROGRAM & KEGIATAN (/program) -> FULL CONTENT
│   ├── [PROG-01] Literasi Membaca Bersama & Bedah Dongeng
│   ├── [PROG-02] Kelas Komputer & Literasi Digital (Didukung Yayasan IAR)
│   ├── [PROG-03] Sanggar Seni & Tari Sanak Negeri (Tradisional & Modern)
│   ├── [PROG-04] Permainan Edukasi & Konservasi Alam
│   ├── Tabel Jadwal Mingguan Lengkap (Senin - Minggu)
│   └── Alur & Formulir Pendaftaran Kelas Siswa
│
├── 4. KATALOG BUKU & FASILITAS (/katalog) -> FULL UNRESTRICTED
│   ├── Live Search Input (Cari judul, penulis, topik)
│   ├── Filter Kategori Lengkap (Dongeng, Pelajaran SD 1-6, Sains, Ensiklopedia, Novel)
│   ├── Grid Koleksi Lengkap (Menampilkan seluruh database buku tanpa batas)
│   ├── Detail Lokasi Rak Buku & Status Ketersediaan
│   └── Panduan & Tata Tertib Peminjaman Buku
│
├── 5. POJOK KARYA & GALERI (/karya) -> FULL UNRESTRICTED
│   ├── Galeri Dokumentasi Foto & Video Seluruh Kegiatan
│   ├── Etalase Karya Anak: Puisi, Cerpen Mini, Gambar, dan Resensi Siswa
│   └── Testimoni Lengkap Guru SDN 3 Air Kubang, Wali Murid, dan Pengunjung
│
├── 6. DONASI & RELAWAN (/donasi-relawan) -> FULL WORKFLOW
│   ├── Panduan Lengkap Donasi Buku Fisik (Wishlist Kategori & Spesifikasi)
│   ├── Resi Pengiriman Paket Kurir ke Kediaman Bpk. Tamar Widadi di Tanggamus
│   ├── Informasi Dukungan Operasional & Fasilitas
│   └── Formulir Lengkap Pendaftaran Relawan / Pengajar Tamu
│
└── 7. KONTAK & LOKASI (/kontak) -> FULL MAP & DETAILS
    ├── Peta Interaktif & Petunjuk Arah Lengkap (Radius 120m dari SDN 3 Air Kubang)
    ├── Informasi Jam Operasional Detail Hari ke Hari
    ├── Kontak Langsung Pengelola (WhatsApp, Telepon, Email)
    └── FAQ (Pertanyaan yang Sering Diajukan)
```

---

### 4. Spesifikasi Fungsional Tiap Halaman

#### 4.1. Beranda / Landing Page (`index.html`)
* **Batas Data:**
  * Katalog: Menampilkan **4 buku rekomendasi** kurasi minggu ini + tombol CTA `Buka Katalog Lengkap (1.500+ Koleksi) ->`.
  * Karya: Menampilkan **3-4 karya pilihan anak** + tombol CTA `Lihat Semua Karya & Galeri ->`.
  * Program: Menampilkan **4 ringkasan kartu program** + tombol CTA `Pelajari Jadwal & Detail Program ->`.
* **Tujuan:** Memberikan gambaran kilat (*high-level summary*) dengan ritme visual yang dinamis tanpa membuat pengunjung lelah *scrolling*.

#### 4.2. Halaman Katalog Buku (`katalog.html`)
* **Fitur Utama:**
  * Pencarian instan (*client-side search*) tanpa batas.
  * Filter multi-kategori: *Semua (1.500+)*, *Cerita Anak*, *Buku Pelajaran SDN 3*, *Sains & Alam*, *Karya Sastra*, *Ensiklopedia*.
  * Status ketersediaan: *Tersedia di Rak A1-B3* atau *Sedang Dibaca*.
  * Tombol aksi: *Tanya Buku via WhatsApp*.

#### 4.3. Halaman Program & Jadwal (`program.html`)
* **Fitur Utama:**
  * Breakdown kurikulum tiap program (sasaran usia, durasi, alat peraga yang digunakan).
  * Lencana mitra resmi (Kolaborasi Yayasan IAR Indonesia & SDN 3 Air Kubang).
  * Tabel jam belajar mingguan yang terstruktur.

#### 4.4. Halaman Donasi & Relawan (`donasi-relawan.html`)
* **Fitur Utama:**
  * Kotak Resi Kurir siap salin (Copy-to-Clipboard alamat pengiriman di Pekon Air Kubang).
  * Wishlist buku terupdate (buku bacaan yang paling dibutuhkan anak SD).
  * Formulir interaktif relawan: Nama, No. WA, Keahlian (Tari/Komputer/Mengajar), Pilihan Hari.

---

### 5. Standard Non-Fungsional
* **Navigasi Konsisten:** Setiap halaman memiliki Header & Footer identik dengan indikator status menu aktif (*active link state*).
* **Kecepatan & Responsivitas:** Desain 100% responsif pada layar ponsel hingga desktop dengan arsitektur HTML terstruktur atau SPA router.
