<?php
$page_title = 'Tentang Kami';
$page_desc = 'Sejarah dan visi misi Taman Baca Jalosi Sanak Negeri di Pekon Air Kubang, Tanggamus.';
$page_canonical = '/tentang';
$page_active = 'tentang';
include __DIR__ . '/../components/head.php';
?>
<body class="bg-background font-body-lg text-on-background">
<?php include __DIR__ . '/../components/header.php'; ?>
<main class="w-full pt-20 min-h-screen">
<div class="flex flex-col w-full">
<!-- Hero Section: The Genesis -->
<section class="w-full bg-surface border-b-2 border-deep-black py-20 relative overflow-hidden">
<!-- Decorative background elements -->
<div class="absolute top-0 right-0 w-64 h-64 bg-surface-variant rounded-full blur-3xl opacity-50 -mr-20 -mt-20"></div>
<div class="absolute bottom-0 left-10 w-96 h-96 bg-primary-container rounded-full blur-3xl opacity-30 -mb-20"></div>
<div class="max-w-container-max mx-auto px-margin-mobile lg:px-margin-desktop relative z-10">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-gutter items-center">
<div class="lg:col-span-7 flex flex-col items-start">
<!-- Sticker Badge -->
<div class="bg-sticker-green border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] px-4 py-2 mb-8 transform -rotate-2">
<span class="font-label-stamp text-label-stamp text-deep-black uppercase">Sejak 2015</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-deep-black mb-6 uppercase">
            Akar<br/>
<span class="text-primary">Pengetahuan</span><br/>
            Lokal.
          </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl mb-8">
            Didirikan pada 17 Juli 2015 oleh Tamar Widadi, Taman Baca Jalosi Sanak Negeri berawal dari rumah bata sederhana dengan rak kayu dan koleksi sepuluh buku bekas. Sebuah inisiatif yang tumbuh dari panggilan hati untuk menghadirkan ruang belajar dan membaca yang dapat diakses siapa saja bagi anak-anak kampung.
          </p>
<div class="flex items-center gap-4 border-t-2 border-deep-black pt-6 w-full max-w-md">
<div class="w-16 h-16 bg-primary-fixed border-2 border-deep-black flex items-center justify-center shadow-[2px_2px_0px_0px_#000101]">
<span class="material-symbols-outlined text-deep-black" style="font-variation-settings: 'FILL' 1; font-size: 32px;">menu_book</span>
</div>
<div>
<p class="font-label-stamp text-label-stamp text-outline uppercase">Koleksi Tumbuh</p>
<p class="font-headline-md text-headline-md text-deep-black">1,500+ Buku</p>
</div>
</div>
</div>
<div class="lg:col-span-5 relative">
<!-- Brutalist Image Frame -->
<div class="relative bg-surface border-2 border-deep-black shadow-[8px_8px_0px_0px_#000101] p-3 aspect-[4/5] transform rotate-1 hover:rotate-0 transition-transform duration-300">
<div class="absolute top-0 right-0 w-8 h-8 bg-sticker-green border-b-2 border-l-2 border-deep-black z-20 flex items-center justify-center">
<span class="material-symbols-outlined text-deep-black text-sm">push_pin</span>
</div>
<div class="w-full h-full bg-cover bg-center border-2 border-deep-black grayscale sepia-[0.2] contrast-125" data-alt="A vintage-style, high-contrast photograph of Tamar Widadi organizing books in a rustic, tactile community library. Wooden shelves filled with books, warm coffee-toned lighting, rough kraft paper textures, brutalist framing, raw and authentic documentary feel." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCRqvPY4hVpJ2IC1cPBGPIBzfGVTfCDxhPBJ1_VnCqVhsFry4TrqRxtuyey4-jnTURsuUi9WuqkTEjBcXd8BMnFfU60e2iDRJeU2RYpu-aRDSPhYVWVj-D1eSgUMEXEde-foYSFeOw8JbWBORDY1-NBNVl8-HWjhuzRqfQ9I3wCd_NwGTAZ2o9LSA--hECsbNZDfv4Hjkr8Skok4rAAED152Yni9YAsiPLLqi-NrVsmlQdCm-8MBsI7')">
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Vision & Mission Bento Grid -->
<section class="w-full bg-cream-terang py-20 border-b-2 border-deep-black transition-colors has-[.konten-card:hover]:bg-oren-terang">
<div class="max-w-container-max mx-auto px-margin-mobile lg:px-margin-desktop">
<?php
$section_title = 'Visi & Misi';
$section_kicker = 'MANIFESTO JALOSI';
$section_kicker_class = 'text-on-primary-fixed-variant';
include __DIR__ . '/../components/section-header.php';
?>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Visi Card (Large) -->
<div class="konten-card lg:col-span-2 bg-surface border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] p-8 flex flex-col justify-between group hover:-translate-y-1 transition-transform">
<div class="flex justify-between items-start mb-12">
<div class="bg-cream-terang px-3 py-1 border-2 border-deep-black">
<span class="font-label-stamp text-label-stamp text-on-primary uppercase tracking-widest">Visi</span>
</div>
<span class="material-symbols-outlined text-outline text-4xl group-hover:text-primary transition-colors">visibility</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-deep-black mb-4">Mewujudkan Masyarakat Literat</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-lg">
            Menjadi pusat literasi dan budaya yang inklusif, menumbuhkan masyarakat pedesaan yang cerdas, berwawasan luas, dan mampu merespons tantangan zaman melalui budaya baca yang mengakar.
          </p>
</div>
<!-- Misi Cards -->
<div class="konten-card bg-surface-variant border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] p-8 flex flex-col justify-between">
<div class="mb-8">
<div class="inline-block bg-tertiary-container px-3 py-1 border-2 border-deep-black mb-6">
<span class="font-label-stamp text-label-stamp text-on-tertiary-container uppercase tracking-widest">Akses Terbuka</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-deep-black mb-2">Akses Terbuka</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Menyediakan akses bahan bacaan berkualitas yang merata bagi seluruh lapisan masyarakat tanpa memandang latar belakang.</p>
</div>
</div>
<div class="konten-card bg-surface-variant border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] p-8 flex flex-col justify-between">
<div class="mb-8">
<div class="inline-block bg-tertiary-container px-3 py-1 border-2 border-deep-black mb-6">
<span class="font-label-stamp text-label-stamp text-on-tertiary-container uppercase tracking-widest">Ruang Kreasi</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-deep-black mb-2">Ruang Kreasi</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Memfasilitasi ruang diskusi, lokakarya, dan pelatihan keterampilan yang relevan dengan kebutuhan ekonomi kreatif warga.</p>
</div>
</div>
<!-- Misi Image Card -->
<div class="konten-card lg:col-span-2 relative bg-primary-container border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] overflow-hidden min-h-[250px]">
<div class="absolute inset-0 bg-cover bg-center mix-blend-multiply opacity-80" data-alt="Close up shot of hands passing a worn book over a rustic wooden table, overhead angle, strong shadows, brutalist photography style, earthy tones, community sharing concept." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCv05L6AKh-q30tbHZyvfjNjqWkCbJaTWUIEprsJnZhHEiU2rJL4Pal8SuBbdUQOjiBjV3JHDXwFSsl9CnxTrNMXTd2mXmQp1aNCkF7koVA39t_-k_ihgGcXCJte4HHaQAKW3Kz8WEQMRnVRKVJ34yrAEsdrTkCiEVjtFZF3I8Gt4xwTJ5IHNigrPR3DCIqDA5mA0n_uPKhiwjQhZ5lL7Cy7dS9I5pqdAlw3E8STpHydd5rPSBkGd-A')">
</div>
<div class="relative z-10 p-8 h-full flex flex-col justify-end bg-gradient-to-t from-deep-black/80 to-transparent">
<div class="inline-block bg-sticker-green px-3 py-1 border-2 border-deep-black w-max mb-4">
<span class="font-label-stamp text-label-stamp text-deep-black uppercase tracking-widest">Kolaborasi Lokal</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-surface mb-2">Kolaborasi Lokal</h4>
<p class="font-body-sm text-body-sm text-surface-variant max-w-lg">Membangun ekosistem gotong-royong dengan berbagai komunitas, sekolah, dan pegiat seni untuk menghidupkan kembali kearifan lokal melalui literasi.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Impact & Timeline -->
<section class="w-full bg-surface py-20 border-b-2 border-deep-black relative">
<div class="max-w-container-max mx-auto px-margin-mobile lg:px-margin-desktop">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
<!-- Interactive Chart / Graphic Element -->
<div class="relative">
<div class="absolute inset-0 bg-surface-container transform translate-x-4 translate-y-4 border-2 border-deep-black"></div>
<div class="relative bg-surface border-2 border-deep-black p-8 flex flex-col items-center justify-center min-h-[400px]">
<!-- Inline SVG Data Viz (Decorative abstract progress) -->
<svg class="w-48 h-48 mb-8 transform -rotate-90" viewbox="0 0 100 100">
<circle class="stroke-surface-variant" cx="50" cy="50" fill="none" r="45" stroke-width="8"></circle>
<circle class="stroke-primary" cx="50" cy="50" fill="none" r="45" stroke-dasharray="282.7" stroke-dashoffset="60" stroke-width="8" style="transition: stroke-dashoffset 1.5s ease-in-out;"></circle>
<text class="font-label-mono text-[16px] fill-deep-black font-bold" dominant-baseline="middle" text-anchor="middle" x="50" y="50" transform="rotate(90 50 50)">1.5K+</text>
</svg>
<div class="text-center">
<h3 class="font-headline-sm text-headline-sm text-deep-black uppercase">Total Koleksi Saat Ini</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Dari rak kecil hingga menyentuh ribuan judul, didukung oleh donatur dan pegiat literasi independen.</p>
</div>
<!-- Decorative Stamp -->
<div class="absolute top-4 right-4 w-12 h-12 rounded-full border-2 border-deep-black flex items-center justify-center opacity-40 transform rotate-12">
<span class="font-label-stamp text-[8px] text-deep-black uppercase text-center leading-tight">Jalosi<br/>Verified</span>
</div>
</div>
</div>
<!-- Timeline Text -->
<div class="space-y-8">
<div class="flex items-start gap-4">
<div class="w-8 h-8 rounded-full bg-deep-black text-surface flex items-center justify-center flex-shrink-0 mt-1">
<span class="font-label-mono text-label-mono">2015</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-deep-black uppercase">Awal Mula</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Tamar Widadi mendirikan taman baca dengan sepuluh buku bekas di rumah bata sederhananya, membuka pintu agar anak-anak desa bisa membaca sepulang sekolah.</p>
</div>
</div>
<div class="w-0.5 h-8 bg-deep-black ml-4 opacity-20"></div>
<div class="flex items-start gap-4">
<div class="w-8 h-8 rounded-full bg-surface border-2 border-deep-black text-deep-black flex items-center justify-center flex-shrink-0 mt-1">
<span class="font-label-mono text-label-mono">YIARI</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-deep-black uppercase">Kolaborasi Konservasi</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Berkolaborasi dengan Yayasan IAR Indonesia (YIARI), kegiatan berkembang mencakup edukasi lingkungan dan satwa liar seperti kukang lewat permainan dan kreativitas.</p>
</div>
</div>
<div class="w-0.5 h-8 bg-deep-black ml-4 opacity-20"></div>
<div class="flex items-start gap-4">
<div class="w-8 h-8 rounded-full bg-sticker-green border-2 border-deep-black text-deep-black flex items-center justify-center flex-shrink-0 mt-1">
<span class="font-label-mono text-label-mono">Now</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-deep-black uppercase">Pusat Literasi &amp; Konservasi</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Dengan lebih dari 1,500 koleksi buku, Jalosi kini menjadi pusat literasi, seni, dan edukasi konservasi yang dinikmati puluhan anak setiap pekan.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Liputan Media -->
<section class="w-full bg-cream-terang py-20 transition-colors has-[.konten-card:hover]:bg-oren-terang">
<div class="max-w-container-max mx-auto px-margin-mobile lg:px-margin-desktop">
<?php
$section_title = 'Liputan Media';
$section_kicker = 'DILIPUT WARTAWAN KOTA';
$section_kicker_class = 'text-on-primary-fixed-variant';
include __DIR__ . '/../components/section-header.php';
?>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
<a href="https://radioidola.com/2023/tamar-widadi-pendiri-rumah-baca-sanak-negeri-di-air-naningan-lampung/" target="_blank" rel="noopener" class="konten-card group bg-surface border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] p-8 flex flex-col hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#000101] transition-all">
<div class="flex justify-between items-start mb-8">
<div class="bg-sticker-green px-3 py-1 border-2 border-deep-black">
<span class="font-label-stamp text-label-stamp text-deep-black uppercase tracking-widest">Radio Idola 92.6 FM</span>
</div>
<span class="font-label-mono text-[11px] text-on-surface-variant uppercase tracking-widest">29 Sep 2023</span>
</div>
<span class="material-symbols-outlined text-outline text-4xl group-hover:text-primary transition-colors mb-4">newspaper</span>
<h3 class="font-headline-sm text-headline-sm text-deep-black mb-3">Tamar Widadi, Pendiri Rumah Baca Sanak Negeri di Air Naningan Lampung</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant flex-grow mb-6">Wawancara radio Idola bersama Tamar soal literasi gratis dan ruang belajar bagi anak-anak pelosok kampung sejak 2015, lengkap dengan podcast.</p>
<div class="flex items-center gap-2 font-label-mono text-label-mono text-deep-black uppercase tracking-widest border-t-2 border-deep-black pt-4 mt-6">
Baca Berita
<span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
</div>
</a>
<a href="https://lampunggehnews.com/2026/07/05/dari-rumah-bata-tamar-menumbuhkan-literasi-anak-anak-di-pelosok-tanggamus/" target="_blank" rel="noopener" class="konten-card group bg-surface border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] p-8 flex flex-col hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#000101] transition-all">
<div class="flex justify-between items-start mb-8">
<div class="bg-sticker-green px-3 py-1 border-2 border-deep-black">
<span class="font-label-stamp text-label-stamp text-deep-black uppercase tracking-widest">Lampung Geh News</span>
</div>
<span class="font-label-mono text-[11px] text-on-surface-variant uppercase tracking-widest">05 Jul 2026</span>
</div>
<span class="material-symbols-outlined text-outline text-4xl group-hover:text-primary transition-colors mb-4">rss_feed</span>
<h3 class="font-headline-sm text-headline-sm text-deep-black mb-3">Dari Rumah Bata, Tamar Menumbuhkan Literasi Anak-anak di Pelosok Tanggamus</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant flex-grow mb-6">Feature Lampung Geh: rumah bata sederhana jadi ruang belajar, bermain, dan edukasi konservasi yang dinikmati puluhan anak tiap pekan.</p>
<div class="flex items-center gap-2 font-label-mono text-label-mono text-deep-black uppercase tracking-widest border-t-2 border-deep-black pt-4 mt-6">
Baca Berita
<span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
</div>
</a>
</div>
</div>
</section>
</div>
</main>
<?php include __DIR__ . '/../components/footer.php'; ?>