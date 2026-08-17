# Design System & UI/UX Specification (DESIGN.md)
## Project: Taman Bacaan Masyarakat (TBM) Jalosi Sanak Negeri Website
### Visual Identity: Inspired by Toko Kopi TUKU (tuku.coffee) — "Tetangga Baca & Lo-Fi Craft"
### Architecture: Multi-Page Modular (PHP + Shared Components) — 7 Halaman Publik
### Sumber Kode: `components/head.php` (Tailwind config inline) & `assets/js/tailwind-config.js`

---

### 1. Filosofi & Konsep Desain: "Tetangga Baca Jalosi"

Mengadaptasi DNA visual dan filosofi branding khas **Toko Kopi TUKU** (*tuku.coffee*):
1. **Otentik, Rendah Hati & Tidak Pretensius (*Lo-Fi & Grounded*):**
   * Tampilan yang jujur, bersih, dan membumi. Menghindari efek 3D glossy atau animasi berlebihan; mengutamakan kesederhanaan cetak kertas kraft, stempel komunitas, dan tipografi tegas.
2. **Semangat Guyub & Kedekatan (*Neighborhood Spirit*):**
   * Mengadopsi konsep sapaan akrab *"Tetangga TUKU"* menjadi **"#TetanggaBaca"** dan **"#SanakNegeri"** untuk menyapa siswa SDN 3 Air Kubang, orang tua, relawan, dan donatur.
3. **Estetika Kraft, Labeling & Stiker Kurasi:**
   * Kartu katalog buku, kartu program, dan pengumuman dirancang seperti kemasan kopi/kertas pembungkus TUKU: garis batas tegas (*crisp border* `border-2 border-deep-black`), label monospaced/caps, stempel tanggal pendirian ("EST. 17 JULI 2015"), stiker kurasi warna kontras, dan *hard shadow* brutalist (`shadow-[4px_4px_0px_0px_#000101]`).

---

### 2. Palet Warna Resmi (Final — Implemented)

Seluruh warna direpresentasikan sebagai **token Tailwind** (bukan hardcode hex). Konfigurasi aktif: inline di `components/head.php`.

| Token Tailwind | Hex | Penggunaan Utama |
| :--- | :--- | :--- |
| `cream-terang` | `#f4e0c0` | Default bg section (Kata Pendiri, Donasi, Visi & Misi, Liputan Media; juga bg section Katalog Perpustakaan via `primary-fixed`) |
| `primary` (`cream`) | `#C1AF91` | Badge/stempel, tombol CTA, aksen label; dasar warna "cream gelap" |
| `sticker-green` (`hijau-stabilo`) | `#BBD65F` | Stiker label & kurasi kontras |
| `footer-bg` (`putih`) | `#FEFFFE` | Background header mobile & footer |
| `header-bg` (`abu-gelap`) | `#4B4B4A` | Navbar desktop (`bg-deep-black` di atasnya untuk teks terang) |
| `oren` (`oren-gelap`) | `#B66746` | Hover menu navbar (`hover:text-oren`) |
| `oren-terang` | `#E9922D` | bg section saat hover card konten (`has-[.konten-card:hover]:bg-oren-terang`) |
| `deep-black` (`hitam`) | `#000101` | Teks utama, border tegas, *hard shadow* |
| `kuning-emas` | `#D3AE3F` | Aksen kuning |

> **Aturan penggunaan:**
> - Gunakan **class token** (mis. `bg-cream-terang`), JANGAN hex mentah (mis. `bg-[#f4e0c0]`).
> - `cream-gelap` **tidak lagi dipakai** sebagai class; nilai `#C1AF91` diwakili token `primary`.
> - Token Material turunan tetap tersedia: `surface` `#f8faf9`, `surface-variant` `#e1e3e2`, `surface-container` `#edeeed`, `primary-container` `#c1af91`, `primary-fixed` `#f4e0c0`, `outline` `#7d766c`, `outline-variant` `#cfc5b9`.

#### Efek Interaksi Section (Hover Background)
- Section dengan `bg-cream-terang` berubah ke **`bg-oren-terang`** hanya ketika kursor berada di **card konten** (`.konten-card`), bukan saat hover area section kosong.
- Implementasi via CSS `:has()`: `class="... bg-cream-terang transition-colors has-[.konten-card:hover]:bg-oren-terang"`.
- Berlaku di 4 section: **Kata Pendiri** & **Donasi** (beranda), **Visi & Misi** & **Liputan Media** (tentang).

---

### 3. Tipografi: TUKU Sub Head + Handwriting

Font di-self-host di `assets/fonts/` (`tuku-sub-head.otf`, `tuku-handwriting.woff`) dengan `@font-face` di `assets/css/fonts.css` (fallback `Arial` + metric override dari referensi).

* **Font Default (Semua Teks & Body):** `__tuku_sub_head_6d0d6c` (Fallback: `__tuku_sub_head_Fallback_6d0d6c`) — Weight `400`.
* **Font Display / Handwriting (eksplisit):** `__tuku_handwriting_c420db` (Fallback: `__tuku_handwriting_Fallback_c420db`) — Style `normal`, Weight `400`.

| Level | Font | Ukuran | Tracking & Transform | Kegunaan |
| :--- | :--- | :--- | :--- | :--- |
| **Display H1** (`font-headline-lg` / `headline-lg-mobile`) | Handwriting | 30px | -0.02em, Uppercase | Hero Section Headline |
| **Section H2** (`font-headline-md`) | Handwriting | 28px | Uppercase, +0.02em | Judul Bagian |
| **Card H3** (`font-headline-sm`) | Handwriting | 18px | Normal | Judul Buku / Program |
| **Label Stamp** (`font-label-stamp`) | Handwriting | 12px | Uppercase, +0.05em | Badge, Kategori, Est. |
| **Nav & Tombol** (`font-handwriting`) | Handwriting | `text-label-mono` dst. | Uppercase | Menu navbar, CTA |
| **Body Regular** (`font-body-lg`) | Sub Head | 16px | Normal | Narasi & Deskripsi |
| **Meta / Label** (`font-label-mono`) | Sub Head | 13px | Normal | Info kecil, footer, meta |

---

### 4. Struktur Komponen Multi-Halaman & Aturan Tampilan

Arsitektur PHP dengan komponen bersama: `components/head.php`, `header.php`, `section-header.php`, `btn-primary.php`, `footer.php`. Halaman publik: `landing/{index,tentang,program,katalog,pojok-karya,donasi,kontak}.php` dengan slug `./ , tentang, program, katalog, pojok-karya, donasi, kontak`.

#### A. Top Bar & Navigasi
* **Style:** Desktop: latar **hitam `#000101`** (`lg:bg-deep-black`), teks **putih `#FEFFFE`** (`text-footer-bg`), hover menu **`text-oren`**, item aktif diberi `underline`. Mobile (`< lg`): latar **putih `#FEFFFE`** (`bg-putih`), teks hitam.
* **Logo:** Gambar lokal `assets/images/logo-jalosi.png` (`h-14 w-auto`) + brand text handwriting **"Jalosi Sanak Negeri"** uppercase.
* **Menu Navigasi:** `Beranda`, `Tentang Kami`, `Program`, `Katalog`, `Pojok Karya`, `Donasi`, `Kontak`.
* **Mobile:** Menu overlay **full-screen** (fixed, `bg-putih`, teks besar di tengah) dengan tombol hamburger ↔ close (ikon `menu`/`close` Material Symbols).

#### B. Beranda (`landing/index.php`) — Aggregator Teaser
* **Hero:** Background foto lokal `assets/images/hero-beranda.png` dengan overlay krem + grid dekoratif. Kiri: headline handwriting, sub-headline, stempel `[ EST. 17 JULI 2015 ]`, CTA `bg-cream-terang`. Kanan: kartu **FAKTA CEPAT** bergaya barcode (Koleksi Buku 1.500+, Berdiri Sejak 2015, Lokasi ±120m dr SDN 3 Air Kubang, Program Aktif 4 Pilar).
* **Kata Pendiri** (`bg-cream-terang`, hover `has-[.konten-card:hover]:bg-oren-terang`): 2 kartu kisah pendiri + aksi.
* **Liputan Media teaser** ("Pernah Diliput Media"): 2 kartu tautan berita (Radio Idola 92.6 FM 2023 & Lampung Geh News 2026).
* **4 Pilar Program** (teaser): 4 kartu program + CTA.
* **Sorotan Koleksi**: kartu buku pilihan + CTA buka katalog.
* **Donasi** (`bg-cream-terang`, hover card): "Kirim Buku, Kirim Harapan" + kartu resi + CTA.

#### C. Halaman Khusus Modul (Full Data)
* **Tentang (`tentang`):** Kisah pendiri, **Visi & Misi** (`bg-cream-terang` + hover card), **Impact & Timeline** (SVG 1.5K+), **Liputan Media** (`bg-cream-terang` + hover card, 2 kartu berita).
* **Program (`program`):** Rincian kurikulum 4 program (Membaca, Komputer IAR, Seni Tari, Konservasi).
* **Katalog (`katalog`):** Header `bg-primary-fixed` (#f4e0c0), Live Search Bar, filter multi-kategori, kode rak, status ketersediaan, tombol Cari `bg-primary`.
* **Pojok Karya (`pojok-karya`):** Galeri foto/karya + CTA `bg-primary`.
* **Donasi (`donasi`):** Panduan kirim buku, copy-to-clipboard alamat, form relawan.
* **Kontak (`kontak`):** Peta rute, jam operasional, FAQ (`<details>` `open:bg-primary-container`), kontak WA/email.

#### D. Footer ("Salam Hangat dari Air Naningan")
* Latar **`#FEFFFE`** (`bg-footer-bg`), border atas `border-t-2 border-deep-black`, teks **`#000101`**.
* **4 kolom ala Toko Kopi TUKU:** pojok kiri (Hubungi Kami + tombol share `sharePage()`), tengah kiri (Jam Operasional), tengah kanan (Kemitraan: "SDN 3 Air Kubang & Yayasan IAR Indonesia Partnership", "#TetanggaBaca"), pojok kanan (**card WA & email gaya TUKU** — nomor/alamat di atas + label bawah, link `wa.me/6281234567890` & `mailto:info@jalosisanak.org`, hover invert warna).
* **Baris bawah:** `Privasi / Ketentuan / © [tahun]` kecil, rata kiri, ukuran sama dengan konten di atas (`font-label-mono text-[14px] uppercase`).

---

### 5. Aturan Wajib Pengembangan (Design Tokens)
1. **Warna:** Selalu pakai token Tailwind; daftar final di `docs/COLOR.txt`.
2. **Border & Shadow:** `border-2 border-deep-black` + `shadow-[4px_4px_0px_0px_#000101]` (brutalist flat shadow).
3. **Hover section:** Pakai pola `has-[.konten-card:hover]:bg-oren-terang` + class `konten-card` di kartu konten.
4. **Logo & aset:** Simpan lokal di `assets/images/` (jangan referensikan URL eksternal yang mudah cache/expiry).