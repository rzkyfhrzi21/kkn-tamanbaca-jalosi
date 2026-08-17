# Design System & UI/UX Specification (DESIGN.md)
## Project: Taman Bacaan Masyarakat (TBM) Jalosi Sanak Negeri Website
### Visual Identity: Inspired by Toko Kopi TUKU (tuku.coffee) — "Tetangga Baca & Lo-Fi Craft"
### Architecture: Multi-Page Aggregator & Modular Pages

---

### 1. Filosofi & Konsep Desain: "Tetangga Baca Jalosi"

Mengadaptasi DNA visual dan filosofi branding khas **Toko Kopi TUKU** (*tuku.coffee*):
1. **Otentik, Rendah Hati & Tidak Pretensius (*Lo-Fi & Grounded*):**
   * Tampilan yang jujur, bersih, dan membumi. Menghindari efek 3D glossy atau animasi berlebihan; mengutamakan kesederhanaan cetak kertas kraft, stempel komunitas, dan tipografi tegas.
2. **Semangat Guyub & Kedekatan (*Neighborhood Spirit*):**
   * Mengadopsi konsep sapaan akrab *"Tetangga TUKU"* menjadi **"#TetanggaBaca"** dan **"#SanakNegeri"** untuk menyapa siswa SDN 3 Air Kubang, orang tua, relawan, dan donatur.
3. **Estetika Kraft, Labeling & Stiker Kurasi:**
   * Kartu katalog buku, kartu program, dan pengumuman dirancang seperti kemasan kopi/kertas pembungkus TUKU: garis batas tegas (*crisp border*), label monospaced/caps, stempel tanggal pendirian ("EST. 17 JULI 2015"), dan stiker kurasi warna kontras.

---

### 2. Palet Warna (TUKU Warm Craft & Coffee-Paper Tones)

```css
:root {
  /* Canvas & Paper Backgrounds (Nuansa Kertas Kraft, Gelas Kopi, & Dinding Kedai) */
  --tuku-bg-main:       #F7F3ED; /* Warm Kraft Paper Background */
  --tuku-bg-surface:    #FFFFFF; /* Pure White Card Canvas */
  --tuku-bg-kraft:      #EFE8DC; /* Muted Kraft Section Fill */
  --tuku-bg-sand:       #E5DDCF; /* Subtle Container Tint */
  
  /* Primary & Text Dark Tones (Espresso Deep Charcoal & Warm Brown) */
  --tuku-espresso-950:  #1E1A18; /* Bold Headers & Dominant Text */
  --tuku-espresso-900:  #2B2523; /* Primary Action Buttons & Borders */
  --tuku-espresso-800:  #3D3532; /* Secondary Text */
  --tuku-espresso-600:  #6E625D; /* Muted Captions & Sub-labels */
  --tuku-border:        #2B2523; /* Crisp 1px Border */

  /* Accent & Highlight Stickers (Warna Stiker Ikonik TUKU: Cokelat Hangat, Kuning Gula Aren, Merah Bata) */
  --tuku-aren-amber:    #D97706; /* Gula Aren Gold (Highlight & Rating) */
  --tuku-aren-light:    #FEF3C7; /* Soft Aren Badge Fill */
  --tuku-sticker-red:   #C2410C; /* Terracotta Red / Stamp Accent */
  --tuku-sticker-green: #15803D; /* Forest Green (Konservasi x Mitra Yayasan IAR) */
  --tuku-sticker-blue:  #1D4ED8; /* Digital / Komputer Class Badge */
}
```

#### Tailwind Class Mapping:
* **Background Utama:** `bg-[#F7F3ED]` (Canvas dasar halaman).
* **Kontainer / Kartu:** `bg-white border border-[#2B2523] shadow-[2px_2px_0px_0px_#2B2523]` (Gaya retro border Tuku).
* **Tombol Utama (CTA):** `bg-[#2B2523] text-[#F7F3ED] hover:bg-[#1E1A18] px-6 py-3 font-bold uppercase tracking-wider text-sm rounded-lg`.
* **Tombol Sekunder (Kraft):** `bg-[#EFE8DC] text-[#2B2523] border border-[#2B2523] hover:bg-[#E5DDCF] px-6 py-3 font-semibold rounded-lg`.
* **Badge / Stiker:** `bg-[#FEF3C7] text-[#92400E] border border-[#D97706] text-xs font-mono font-bold uppercase px-2.5 py-0.5 rounded-full`.

---

### 3. Tipografi: Grotesk Bersih + Monospace Stiker

* **Heading Font:** `Plus Jakarta Sans`, `Work Sans`, atau `Archivo` (Font sans-serif modern berbobot tebal, uppercase pada judul section, bersih tanpa ornamen berlebih).
* **Body Font:** `Plus Jakarta Sans` atau `Inter` (15px - 16px, line-height lega 1.6 untuk kemudahan baca).
* **Meta / Label / Stamp Font:** `JetBrains Mono`, `Space Mono`, atau `Courier New` (Memberikan nuansa label kurasi, batch buku, koordinat desa, dan resi).

| Level | Ukuran (Desktop) | Weight | Tracking & Transform | Kegunaan |
| :--- | :--- | :--- | :--- | :--- |
| **Display H1** | 42px (2.625rem) | 800 (Extra Bold) | -0.02em | Hero Section Headline |
| **Section H2** | 28px (1.75rem) | 700 (Bold) | Uppercase, +0.02em | Judul Bagian (Katalog, Program, dll.) |
| **Card H3** | 18px (1.125rem) | 700 (Bold) | Normal | Judul Buku / Judul Program |
| **Label Stamp** | 12px (0.75rem) | 700 (Mono Bold) | Uppercase, +0.05em | Kategori, Status Rak, Tanggal Est. |
| **Body Regular**| 15px (0.938rem) | 400 (Regular) | Normal | Narasi & Deskripsi |

---

### 4. Struktur Komponen Multi-Halaman & Aturan Tampilan

#### A. Top Bar & Navigasi ("Kedai Baca")
* **Style:** Latar putih gading (`bg-[#F7F3ED]/95 backdrop-blur-md`) dengan garis pembatas tipis `border-b border-[#2B2523]`.
* **Logo TBM:** Tipografi bold bergaya cap TUKU: **Taman Baca Jalosi** dengan sub-teks monospace `Sanak Negeri • Est. 2015`.
* **Menu Navigasi:** `Beranda`, `Tentang`, `Program & Jadwal`, `Katalog Buku`, `Pojok Karya`, `Donasi & Relawan`, `Kontak`.
* **Action:** Badge lokasi `📍 AIR NANINGAN (120m DARI SDN 3)` + Tombol CTA `Sapa Pengelola (WA)`.

#### B. Beranda (`index.html`) — Aggregator Teaser
* **Hero Section:** Headline guyub, sub-headline, stempel `[ EST. 17 JULI 2015 ]`, dan 4 metrik barcode (1.500+ Buku, 2015, 120m dari SDN 3, 4 Program).
* **Section 4 Program Teaser:** Menampilkan 4 ringkasan kartu program + tombol `[ LIHAT JADWAL & DETAIL PROGRAM -> ]`.
* **Section Katalog Teaser:** Menampilkan **maksimal 4 buku sorotan** + tombol `[ BUKA KATALOG LENGKAP (1.500+ BUKU) -> ]`.
* **Section Sejarah Teaser:** 1 paragraf kisah Bpk. Tamar Widadi + Visi + tombol `[ BACA SEJARAH LENGKAP -> ]`.
* **Section Karya Teaser:** Menampilkan **3-4 foto/karya anak pilihan** + tombol `[ LIHAT SEMUA KARYA & GALERI -> ]`.
* **Section Donasi Teaser:** Kotak resi ringkas + tombol `[ PANDUAN DONASI & RELAWAN -> ]`.

#### C. Halaman Khusus Modul (Full Data)
* **Halaman Tentang (`tentang.html`):** Narasi komprehensif pendirian sejak 2015, profil Bpk. Tamar Widadi, S.Pd., Visi & 3 Misi resmi.
* **Halaman Program (`program.html`):** Rincian kurikulum 4 program (Membaca, Komputer IAR, Seni Tari, Konservasi) + tabel jadwal mingguan lengkap + form daftar kelas.
* **Halaman Katalog (`katalog.html`):** Database koleksi penuh tanpa batas, Live Search Bar, filter multi-kategori, kode rak, dan status ketersediaan.
* **Halaman Karya & Galeri (`karya.html`):** Galeri foto penuh, karya tulisan/gambar anak-anak SDN 3 Air Kubang, dan ulasan komunitas.
* **Halaman Donasi & Relawan (`donasi-relawan.html`):** Panduan spesifik kirim buku ke Tanggamus, copy-to-clipboard alamat paket, dan form relawan.
* **Halaman Kontak (`kontak.html`):** Peta rute detail dari SDN 3 Air Kubang, jam buka harian, FAQ, dan WhatsApp langsung.

#### D. Footer ("Salam Hangat dari Air Naningan")
* Latar blok espresso pekat (`bg-[#2B2523] text-[#F7F3ED]`).
* Menampilkan informasi jam operasional, kemitraan resmi (SDN 3 Air Kubang & Yayasan IAR Indonesia), alamat presisi, dan tautan halaman.
