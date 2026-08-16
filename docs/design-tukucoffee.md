# Design Reference — Toko Kopi TUKU (tuku.coffee)

Dokumen analisa referensi desain dari file `docs/Toko Kopi Tuku.html` (arsip homepage
`https://www.tuku.coffee` — Next.js + Tailwind). Dipakai sebagai acuan visual
"Tetangga Baca & Lo-Fi Craft" untuk situs **TAMAN BACA Jalosi Sanak Negeri**.

---

## 1. DNA Visual

- Nuansa **tetangga / kedai / lo-fi craft**: hangat, jujur, kasar (brutalist), berkesan *handmade*.
- Semua teks **UPPERCASE**, banyak elemen dengan **border hitam tebal** dan **offset shadow** (gaya stiker/retro).
- Section berskala besar (full-viewport `100vh`), foto dokumenter dengan caption di atasnya.

---

## 2. Tipografi (FONT) — Hasil Analisa

Referensi memakai **2 font kustom** yang di-self-host via Next.js (`next/font/local`).
Keduanya **bukan font publik** — file asli ada di `/_next/static/media/`:

| Font-family | File | Peran |
|---|---|---|
| `__tuku_sub_head_6d0d6c` | `8207272fb7fc6346-s.p.otf` (opentype) | **Font default seluruh halaman** |
| `__tuku_handwriting_c420db` | `e5df4e3ee0c98d7c-s.p.woff` (woff) | **Font eksplisit** (class `font-tuku_handwriting`) |

CSS asli referensi:

```css
@font-face{font-family:__tuku_handwriting_c420db;src:url(.../e5df4e3ee0c98d7c-s.p.woff) format("woff");font-display:swap}
@font-face{font-family:__tuku_handwriting_Fallback_c420db;src:local("Arial");ascent-override:103.67%;descent-override:91.35%;line-gap-override:0%;size-adjust:102.25%}
@font-face{font-family:__tuku_sub_head_6d0d6c;src:url(.../8207272fb7fc6346-s.p.otf) format("opentype");font-display:swap}
@font-face{font-family:__tuku_sub_head_Fallback_6d0d6c;src:local("Arial");ascent-override:60.65%;descent-override:24.26%;line-gap-override:0%;size-adjust:140.15%}

html { font-family: var(--font-tuku-sub-head); }             /* default */
.font-tuku_sub_head     { font-family: var(--font-tuku-sub-head); }      /* opsi */
.font-tuku_handwriting  { font-family: var(--font-tuku-handwriting); }   /* eksplisit */
```

### Aturan pemakaian di referensi (22 pemakaian `font-tuku_handwriting`)

- **Menu navbar** (mobile, teks besar `text-[28px]`)
- **Semua heading section** (h2, h3, h4 — `text-xl` s/d `text-3xl`)
- **Label kategori kecil** (pill/uppercase `text-xs`/`text-sm`)
- **Tombol & link** (mis. "Katalog Selengkapnya", kontrol lokasi)
- **Caption foto** (`text-2xl`) dan teks hint ("Geser untuk lihat lainnya")

> Kesimpulan: **`tuku_sub_head` = default untuk seluruh teks** (paragraf, meta, dan semua
> yang tidak diberi class khusus). **`tuku_handwriting` di-apply eksplisit** ke elemen
> "ekspresif": heading, menu, label, tombol, caption.

### Pemetaan ke class project Jalosi

Class Tailwind kita → font family (sudah diterapkan di `tailwind-config.js` + config inline `head.php`):

| Class | Font | Dipakai untuk |
|---|---|---|
| `font-headline-lg` / `font-headline-lg-mobile` | **handwriting** | Hero H1 |
| `font-headline-md` | **handwriting** | Judul section (h2) |
| `font-headline-sm` | **handwriting** | Judul kartu (h3/h4) |
| `font-label-stamp` | **handwriting** | Badge / stiker |
| `font-handwriting` | **handwriting** | Nav menu & tombol/CTA (class eksplisit) |
| `font-body-lg` / `font-body-sm` | **sub_head** | Paragraf / isi |
| `font-label-mono` | **sub_head** | Meta, label kecil, info |

Kedua font di-self-host di project:

- `assets/fonts/tuku-sub-head.otf`
- `assets/fonts/tuku-handwriting.woff`

Definisi `@font-face` ada di `assets/css/fonts.css` (fallback = `local('Arial')` +
metric override dari referensi), dan di-link dari `components/head.php`.

---

## 3. Warna (Palette Tuku)

Token warna asli dari CSS referensi (nilai RGB → HEX):

| Token Tuku | RGB | HEX | Keterangan |
|---|---|---|---|
| `tuku-axolotl` | 111 125 85 | `#6F7D55` | Hijau zaitun lembut |
| `tuku-brown-rust` | 183 101 69 | `#B76545` | Oren tanah liat (≈ oren Jalosi `#B66445`) |
| `tuku-conifer` | 187 215 94 | `#BBD75E` | Hijau stabilo (≈ `sticker-green`) |
| `tuku-fire-bush` | 234 147 48 | `#EA9330` | Oren menyala (aksen CTA) |
| `tuku-horizon` | 93 132 163 | `#5D84A3` | Biru keabu-abuan |
| `tuku-indian-khaki` | 192 175 144 | `#C0AF90` | Krem (≈ `cream`/`primary-container`) |
| `tuku-janna` | 243 234 210 | `#F3EAD2` | Putih susu hangat |
| `tuku-japonica` | 216 122 107 | `#D87A6B` | Coral |
| `tuku-old-gold` | 211 173 64 | `#D3AD40` | Kuning emas |
| `tuku-stark-white` | 236 223 197 | `#ECDFC5` | Putih gading |
| `tuku-swamp-green` | 179 179 163 | `#B3B3A3` | Hijau lumpur |
| `tuku-tapa` | 127 118 111 | `#7F766F` | Cokelat abu (outline) |
| `tuku-tundora` | 74 74 74 | `#4A4A4A` | Abu gelap (≈ `header-bg`) |
| `tuku-vanilla` | 207 192 161 | `#CFC0A1` | Vanilla / pasir |

> Palette yang **dipakai di situs Jalosi** (bukan seluruh palette Tuku) ada di `docs/COLOR.txt`
> dan sudah dimasukkan sebagai token Tailwind (`cream`, `hijau-stabilo`, `hitam`, `putih`,
> `abu-gelap`, `oren`) + variable CSS `:root` di `assets/css/style.css`.

---

## 4. Pola Layout (observasi markup)

1. **Top bar fixed** dengan logo + menu (desktop) / hamburger (mobile); menu mobile
   handwriting besar, fullscreen overlay.
2. **Section full-viewport** (`h-[calc(100vh-57px)]` / `100svh`), bergantian warna
   (`bg-tuku-*`), dipisah antar blok.
3. **Heading uppercase** handwriting sebagai pembuka tiap section.
4. **Kartu / tombol** dengan `border border-black` + `shadow` offset, hover menggeser
   (`hover:translate-*`).
5. **Foto dokumenter** dengan caption overlay ber-label (`bg-tuku-janna`).

---

## 5. Peta ke Situs Jalosi

| Konsep Tuku | Implementasi Jalosi |
|---|---|
| Font default `sub_head` + eksplisit `handwriting` | Token `headline-*`/`label-stamp`/`font-handwriting` → handwriting; `body-*`/`label-mono` → sub_head |
| Palette `tuku-*` | Token `COLOR.txt` (`cream`, `sticker-green`, `deep-black`, `putih`, `abu-gelap`, `oren`) |
| Header fixed + menu mobile fullscreen | `components/header.php` (desktop `#000101`, mobile putih fullscreen) |
| Footer krem/hangat | `components/footer.php` (`bg-footer-bg #FEFFFE`, teks `#000101`) |
| Border hitam + offset shadow | Class `border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101]` di kartu/tombol |
