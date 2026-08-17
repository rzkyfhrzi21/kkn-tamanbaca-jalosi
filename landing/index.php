<?php
$page_title = 'Taman Baca Jalosi Sanak Negeri – Rumah Literasi Air Kubang';
$page_desc  = 'Taman Baca Jalosi Sanak Negeri di Pekon Air Kubang, Tanggamus, Lampung. Berdiri 17 Juli 2015 dengan 1,500+ buku serta program literasi, komputer, dan seni.';
$page_active = 'beranda';
include __DIR__ . '/../components/head.php';
?>
<body class="bg-background font-body-lg text-on-background">
<?php include __DIR__ . '/../components/header.php'; ?>
<main class="w-full pt-20 min-h-screen">
<div class="flex flex-col w-full">
<!-- Hero Section -->
<section class="w-full bg-surface border-b-2 border-deep-black py-20 relative overflow-hidden" style="background-image: linear-gradient(rgba(248,250,249,0.88), rgba(248,250,249,0.88)), url('assets/images/hero-beranda.png'); background-size: cover; background-position: center center;">
  <div class="absolute top-0 right-0 w-64 h-64 bg-surface-variant rounded-full blur-3xl opacity-50 -mr-20 -mt-20"></div>
  <div class="absolute bottom-0 left-10 w-96 h-96 bg-cream-terang rounded-full blur-3xl opacity-30 -mb-20"></div>
  <div class="max-w-container-max mx-auto px-margin-mobile lg:px-margin-desktop relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-gutter items-center">
      <div class="lg:col-span-7 flex flex-col items-start">
        <div class="bg-sticker-green border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] px-4 py-2 mb-8 transform -rotate-2">
          <span class="font-label-stamp text-label-stamp text-deep-black uppercase">Sejak 17 Juli 2015</span>
        </div>
        <h1 class="font-headline-lg text-headline-lg text-deep-black mb-6 uppercase">
          Sapa Literasi<br/>
          <span class="text-oren-terang">dari Sanak</span><br/>
          Negeri.
        </h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl mb-8">
          Tempat berkumpul, bercerita, dan tumbuh bersama di Pekon Air Kubang. Menyemai benih pengetahuan dari desa untuk dunia.
        </p>
        <div class="flex items-center gap-4 flex-wrap">
          <a class="bg-cream-terang text-on-primary font-handwriting text-label-mono px-6 py-3 uppercase tracking-wider shadow-[4px_4px_0px_0px_#000101] hover:translate-y-[2px] hover:translate-x-[2px] hover:shadow-[2px_2px_0px_0px_#000101] transition-all duration-200" href="donasi">
            Dukung Kami
          </a>
          <a class="font-handwriting text-label-mono text-deep-black uppercase tracking-wider border-2 border-deep-black px-6 py-3 hover:bg-sticker-green transition-colors" href="program">
            Lihat Program
          </a>
        </div>
      </div>
      <div class="lg:col-span-5 relative">
        <div class="bg-surface-container-lowest border-2 border-deep-black shadow-[8px_8px_0px_0px_#000101] p-6 relative">
          <div class="absolute -top-3 -right-3 bg-cream-terang text-on-primary font-label-stamp text-label-stamp px-2 py-1 border-2 border-deep-black transform rotate-6">
            FAKTA CEPAT
          </div>
          <div class="flex flex-col gap-4 font-label-mono text-label-mono text-deep-black uppercase">
            <div class="flex h-12 w-full gap-0.5 opacity-80 mb-4">
              <div class="w-1 bg-deep-black h-full"></div>
              <div class="w-2 bg-deep-black h-full"></div>
              <div class="w-1 bg-deep-black h-full"></div>
              <div class="w-3 bg-deep-black h-full"></div>
              <div class="w-0.5 bg-deep-black h-full"></div>
              <div class="w-1.5 bg-deep-black h-full"></div>
              <div class="w-1 bg-deep-black h-full"></div>
              <div class="w-4 bg-deep-black h-full"></div>
              <div class="w-1 bg-deep-black h-full"></div>
              <div class="w-2 bg-deep-black h-full"></div>
              <div class="w-1 bg-deep-black h-full"></div>
              <div class="w-0.5 bg-deep-black h-full"></div>
              <div class="w-3 bg-deep-black h-full"></div>
              <div class="w-1 bg-deep-black h-full"></div>
              <div class="w-2 bg-deep-black h-full"></div>
              <div class="w-1 bg-deep-black h-full"></div>
              <div class="w-1.5 bg-deep-black h-full"></div>
              <div class="w-0.5 bg-deep-black h-full"></div>
              <div class="w-1 bg-deep-black h-full"></div>
              <div class="w-2 bg-deep-black h-full"></div>
              <div class="w-3 bg-deep-black h-full"></div>
            </div>
            <div class="flex justify-between items-center border-b border-deep-black/20 pb-2">
              <span class="">Koleksi Buku</span>
              <span class="font-bold text-oren">1.500+</span>
            </div>
            <div class="flex justify-between items-center border-b border-deep-black/20 pb-2">
              <span class="">Berdiri Sejak</span>
              <span class="font-bold">2015</span>
            </div>
            <div class="flex justify-between items-center border-b border-deep-black/20 pb-2">
              <span class="">Lokasi</span>
              <span class="font-bold">±120m dr SDN 3 Air Kubang</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="">Program Aktif</span>
              <span class="font-bold text-oren">4 Pilar</span>
            </div>
            <div class="mt-2 text-center text-[10px] text-on-surface-variant/60 tracking-[0.3em]">
              017-07-2015-JSN
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Kata Pendiri -->
<section class="w-full bg-cream-terang py-20 border-b-2 border-deep-black transition-colors has-[.konten-card:hover]:bg-oren-terang">
  <div class="max-w-container-max mx-auto px-margin-mobile lg:px-margin-desktop">
    <?php
    $section_title = 'Kata Pendiri';
    $section_kicker = 'DARI HATI, UNTUK KAMPUNG';
    $section_kicker_class = 'text-on-primary-fixed-variant';
    include __DIR__ . '/../components/section-header.php';
    ?>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch">
      <div class="konten-card bg-surface border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] p-8 flex flex-col justify-between">
        <div>
          <div class="flex items-center gap-4 border-b-2 border-deep-black pb-6 mb-6">
            <div class="w-16 h-16 bg-primary-fixed border-2 border-deep-black flex items-center justify-center shadow-[2px_2px_0px_0px_#000101]">
              <span class="material-symbols-outlined text-deep-black" style="font-variation-settings: 'FILL' 1; font-size: 32px;">menu_book</span>
            </div>
            <div>
              <p class="font-label-stamp text-label-stamp text-outline uppercase">Koleksi Tumbuh</p>
              <p class="font-headline-md text-headline-md text-deep-black">1,500+ Buku</p>
            </div>
          </div>
          <blockquote class="font-body-lg text-body-lg text-deep-black leading-relaxed">
            "Saya bikin ini setelah selesai merantau. Karena panggilan hati. Saya pengen pulang ke kampung ngelakuin sesuatu."
          </blockquote>
          <p class="font-body-sm text-body-sm text-on-surface-variant mt-4">
            Tamar Widadi mendirikan taman baca ini pada 17 Juli 2015 dengan sepuluh buku bekas di rumah bata sederhananya. Kini lebih dari 1,500 buku menunggu dibaca anak-anak Air Kubang, jauh dari layar gawai.
          </p>
        </div>
        <div class="flex items-center gap-3 border-t-2 border-deep-black pt-4 mt-6">
          <span class="font-label-stamp text-label-stamp text-deep-black uppercase tracking-widest">Tamar Widadi</span>
          <span class="font-label-mono text-label-mono text-on-surface-variant">Pendiri &amp; Pengelola</span>
        </div>
      </div>
      <div class="konten-card bg-surface border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] p-8 flex flex-col justify-between group hover:-translate-y-1 transition-transform">
        <div class="flex justify-between items-start mb-12">
          <div class="bg-cream-terang px-3 py-1 border-2 border-deep-black">
            <span class="font-label-stamp text-label-stamp text-on-primary uppercase tracking-widest">Koleksi</span>
          </div>
          <span class="material-symbols-outlined text-outline text-4xl group-hover:text-deep-black transition-colors">local_library</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-deep-black mb-4">Dari Sepuluh Buku Bekas</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant">
          Berawal dari sepuluh buku bekas seharga lima hingga sepuluh ribu rupiah, kini lebih dari 1,500 buku mengisi rak-rak rumah bata sederhana — bacaan untuk semua usia, dari cerita anak hingga literatur pengetahuan.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- Liputan Media -->
<section class="w-full bg-surface border-b-2 border-deep-black py-14">
  <div class="max-w-container-max mx-auto px-margin-mobile lg:px-margin-desktop">
    <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8">
      <div class="max-w-sm">
        <span class="font-label-mono text-[11px] text-on-surface-variant uppercase tracking-widest mb-2 block">[ PRESS &amp; MEDIA ]</span>
        <h2 class="font-headline-md text-headline-md text-deep-black uppercase mb-2">Pernah Diliput Media</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Kisah Jalosi pernah ditulis wartawan dari kota. Baca selengkapnya di halaman tentang.</p>
      </div>
      <div class="flex flex-col sm:flex-row gap-4">
        <a href="https://radioidola.com/2023/tamar-widadi-pendiri-rumah-baca-sanak-negeri-di-air-naningan-lampung/" target="_blank" rel="noopener" class="group flex items-center gap-4 bg-surface-container-lowest border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] px-5 py-4 hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#000101] transition-all">
          <span class="material-symbols-outlined text-deep-black text-2xl">newspaper</span>
          <span class="flex flex-col">
            <span class="font-label-stamp text-label-stamp text-deep-black uppercase">Radio Idola 92.6 FM</span>
            <span class="font-label-mono text-[11px] text-on-surface-variant uppercase tracking-widest">Liputan • 2023</span>
          </span>
          <span class="material-symbols-outlined text-outline group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </a>
        <a href="https://lampunggehnews.com/2026/07/05/dari-rumah-bata-tamar-menumbuhkan-literasi-anak-anak-di-pelosok-tanggamus/" target="_blank" rel="noopener" class="group flex items-center gap-4 bg-surface-container-lowest border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] px-5 py-4 hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#000101] transition-all">
          <span class="material-symbols-outlined text-deep-black text-2xl">rss_feed</span>
          <span class="flex flex-col">
            <span class="font-label-stamp text-label-stamp text-deep-black uppercase">Lampung Geh News</span>
            <span class="font-label-mono text-[11px] text-on-surface-variant uppercase tracking-widest">Liputan • 2026</span>
          </span>
          <span class="material-symbols-outlined text-outline group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Pilar Program -->
<section class="w-full bg-surface py-20 border-b-2 border-deep-black">
  <div class="max-w-container-max mx-auto px-margin-mobile lg:px-margin-desktop">
    <?php
    $section_title = '4 Pilar Program';
    $section_kicker = 'LITERASI UNTUK SEMUA';
    include __DIR__ . '/../components/section-header.php';
    ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="bg-surface-variant border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] p-6 flex flex-col group hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#000101] transition-all">
        <div class="w-12 h-12 bg-cream-terang border border-deep-black flex items-center justify-center rounded-full mb-6 text-on-primary shadow-[2px_2px_0px_0px_#000101]">
          <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">menu_book</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-deep-black mb-3 uppercase">Literasi Membaca</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant flex-grow mb-6">Membuka jendela dunia melalui akses ribuan buku cerita, ensiklopedia, dan literatur.</p>
        <div class="w-full h-px bg-deep-black/20 mb-4"></div>
        <span class="font-label-mono text-[11px] text-on-surface-variant uppercase tracking-widest">Setiap Hari</span>
      </div>
      <div class="bg-surface-variant border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] p-6 flex flex-col group hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#000101] transition-all">
        <div class="w-12 h-12 bg-surface-container-highest border border-deep-black flex items-center justify-center rounded-full mb-6 text-deep-black shadow-[2px_2px_0px_0px_#000101]">
          <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">computer</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-deep-black mb-3 uppercase">Kelas Komputer</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant flex-grow mb-6">Pengenalan teknologi dasar dan keterampilan digital untuk anak-anak pedesaan.</p>
        <div class="w-full h-px bg-deep-black/20 mb-4"></div>
        <span class="font-label-mono text-[11px] text-on-surface-variant uppercase tracking-widest">Akhir Pekan</span>
      </div>
      <div class="bg-surface-variant border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] p-6 flex flex-col group hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#000101] transition-all">
        <div class="w-12 h-12 bg-error-container border border-deep-black flex items-center justify-center rounded-full mb-6 text-on-error-container shadow-[2px_2px_0px_0px_#000101]">
          <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">palette</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-deep-black mb-3 uppercase">Sanggar Seni</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant flex-grow mb-6">Wadah ekspresi kreatif melalui menggambar, mewarnai, dan kerajinan tangan.</p>
        <div class="w-full h-px bg-deep-black/20 mb-4"></div>
        <span class="font-label-mono text-[11px] text-on-surface-variant uppercase tracking-widest">Jumat Sore</span>
      </div>
      <div class="bg-surface-variant border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] p-6 flex flex-col group hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#000101] transition-all">
        <div class="w-12 h-12 bg-sticker-green border border-deep-black flex items-center justify-center rounded-full mb-6 text-deep-black shadow-[2px_2px_0px_0px_#000101]">
          <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">eco</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-deep-black mb-3 uppercase">Konservasi</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant flex-grow mb-6">Pendidikan lingkungan hidup dan apresiasi terhadap alam sekitar desa.</p>
        <div class="w-full h-px bg-deep-black/20 mb-4"></div>
        <span class="font-label-mono text-[11px] text-on-surface-variant uppercase tracking-widest">Bulanan</span>
      </div>
    </div>
    <div class="mt-12 flex justify-center">
      <?php
      $btn_href = 'program';
      $btn_text = '[ DETAIL PROGRAM &rarr; ]';
      include __DIR__ . '/../components/btn-primary.php';
      ?>
    </div>
  </div>
</section>
<!-- Katalog Teaser -->
<section class="w-full bg-surface py-20 border-b-2 border-deep-black">
  <div class="max-w-container-max mx-auto px-margin-mobile lg:px-margin-desktop">
    <?php
    $section_title = 'Sorotan Koleksi';
    $section_kicker = 'KOLEKSI PILIHAN';
    include __DIR__ . '/../components/section-header.php';
    ?>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8">
      <div class="group relative">
        <div class="aspect-[3/4] bg-surface-container-highest border-2 border-deep-black mb-4 shadow-[4px_4px_0px_0px_#000101] overflow-hidden">
          <div class="bg-cover bg-center w-full h-full border-4 border-transparent group-hover:scale-105 transition-transform duration-500" data-alt="A vintage style children's book cover with an illustration of a jungle adventure, warm earthy tones, tactile paper texture visible, thick black outlines." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDrvlqHoKfkWyn1ZLug57okmiKjfrNDlSgjGqy1LX-alziUZ2JQYiVTLOsHRncJwqGkYMmyKkk8KkNZkRmrAz1dEcTYj85dPX4O7InunZPqpbIMwFMKmB23U5CF4JqwZKlkWu35ianpOASjL-zsFYQVaHiYepJvsVpLKEGLHN0LutnPTHjyYnSLv0Q-9XTC3q_jqc6VwFcqFIZqgqipTiUyfpuEMC9xiIy6w_Rr9IflL0OYlrJ1RXT1')"></div>
        </div>
        <div class="flex flex-col gap-1">
          <span class="font-label-stamp text-[10px] text-on-surface-variant uppercase tracking-widest">Fiksi Anak</span>
          <h4 class="font-headline-sm text-[16px] text-deep-black leading-tight line-clamp-2">Petualangan di Rimba</h4>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-[3/4] bg-surface-container-highest border-2 border-deep-black mb-4 shadow-[4px_4px_0px_0px_#000101] overflow-hidden">
          <div class="bg-cover bg-center w-full h-full border-4 border-transparent group-hover:scale-105 transition-transform duration-500" data-alt="A colorful encyclopedia cover showing various animals and plants, tactile print quality, slight misregistration of colors for a retro feel." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAwgOxwKZpUCFs-ar_0q1dIXfhNl8m1fW11OXq4TQgFneEHFHtSa0iApLG0VNZZhq51ZHDOEmc2nf4FYohfqxH4BXML1C17Tfw-AjgIZKy_LjJ9YwoSkdTbRXqq9LRUSxBbf5wjuQwyHVaZK6DsstYpkHN3fWBnQP_JflQD6E5YdhgcyVRbYzZIzPn-YQLfw5TxzxdsT-sDd0UID4IBiqWifThw_MlI6mhu4jxA76E1iUPocqSH2UGJ')"></div>
        </div>
        <div class="flex flex-col gap-1">
          <span class="font-label-stamp text-[10px] text-on-surface-variant uppercase tracking-widest">Pengetahuan</span>
          <h4 class="font-headline-sm text-[16px] text-deep-black leading-tight line-clamp-2">Ensiklopedia Alam</h4>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-[3/4] bg-surface-container-highest border-2 border-deep-black mb-4 shadow-[4px_4px_0px_0px_#000101] overflow-hidden">
          <div class="bg-cover bg-center w-full h-full border-4 border-transparent group-hover:scale-105 transition-transform duration-500" data-alt="A minimalist book cover with geometric shapes and a warm yellow background, bold typography, textured paper feel." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD2f_X_uXVC7eMC9PqDQ3Yu2UFZJHs4hMf-8lS74KJNDalFzgQkxPL-l_M53kaqxwdt2PhV7e8ypXYhlqO2xE2MHou6Y8GSYx_91pJgR14EqA8KUF9nYhbRLZ1QWBnTyE_7mEpujLVWFZR1sDgDtaV1N4CqW3K26rx5M3iWapkNuzp_ukc3NJS8Oom1Y7JgMHtSlOVH2OUiAJnaplsXVNZK8Rr1X6DHPooN_FqFPn3s0wzEcspki46o')"></div>
        </div>
        <div class="flex flex-col gap-1">
          <span class="font-label-stamp text-[10px] text-on-surface-variant uppercase tracking-widest">Sastra</span>
          <h4 class="font-headline-sm text-[16px] text-deep-black leading-tight line-clamp-2">Kumpulan Dongeng Nusantara</h4>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-[3/4] bg-surface-container-highest border-2 border-deep-black mb-4 shadow-[4px_4px_0px_0px_#000101] overflow-hidden">
          <div class="bg-cover bg-center w-full h-full border-4 border-transparent group-hover:scale-105 transition-transform duration-500" data-alt="A comic book style cover with dynamic action poses, limited color palette using earthy reds and oranges, printed on kraft-like paper." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB5wU9rrYcsP3A2SwsAnTH32yXrpRKbRk2sTYkZOnJjqDeVQBXl0gfHIUZ8ugMclGlVY-tdS510iFdBk76r5H16tIJCyxwgR5Ep5X8rGQtJahK4LuOTJQxiJqmRYtSaQuweVKctQ_GTLLalZbqa9BkysvKdVo3O7VfOSML6sznHxzKBFIE0YNXcEJ4HiSMvAhpNfa7B0lF55xxUvJeLBl4yo47eI8SfNM6tiNFSeKmcDDzsLs8DrfGW')"></div>
        </div>
        <div class="flex flex-col gap-1">
          <span class="font-label-stamp text-[10px] text-on-surface-variant uppercase tracking-widest">Komik Edukasi</span>
          <h4 class="font-headline-sm text-[16px] text-deep-black leading-tight line-clamp-2">Pahlawan Lingkungan</h4>
        </div>
      </div>
    </div>
    <div class="mt-12 flex justify-center border-t-2 border-deep-black/10 pt-12">
      <?php
      $btn_href = 'katalog';
      $btn_text = '[ BUKA KATALOG LENGKAP (1.500+ BUKU) &rarr; ]';
      include __DIR__ . '/../components/btn-primary.php';
      ?>
    </div>
  </div>
</section>
<!-- Donasi Receipt -->
<section class="w-full bg-cream-terang py-20 border-b-2 border-deep-black relative overflow-hidden transition-colors has-[.konten-card:hover]:bg-oren-terang" id="donasi">
  <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: repeating-linear-gradient(45deg, #000101, #000101 2px, transparent 2px, transparent 10px);"></div>
  <div class="max-w-container-max mx-auto px-margin-mobile lg:px-margin-desktop relative z-10 flex flex-col md:flex-row gap-12 items-center justify-center">
    <div class="konten-card max-w-md w-full bg-surface border-2 border-deep-black p-8 shadow-[8px_8px_0px_0px_#000101] relative transform rotate-1">
      <div class="absolute -top-2 left-0 w-full h-4" style="background-image: radial-gradient(circle at 5px 0px, transparent 5px, #ffffff 6px); background-size: 10px 10px; background-repeat: repeat-x;"></div>
      <div class="text-center border-b-2 border-deep-black pb-6 mb-6 border-dashed">
        <h2 class="font-headline-md text-[24px] text-deep-black uppercase tracking-tighter mb-2">Kirim Buku, Kirim Harapan</h2>
        <p class="font-label-mono text-[12px] text-on-surface-variant">Taman Baca Jalosi Sanak Negeri</p>
      </div>
      <div class="flex flex-col gap-4 font-label-mono text-[13px] text-deep-black">
        <div class="flex flex-col">
          <span class="text-deep-black text-[10px] uppercase tracking-widest mb-1">Penerima</span>
          <span class="font-bold">Tamar Widadi / Taman Baca Jalosi</span>
        </div>
        <div class="flex flex-col">
          <span class="text-deep-black text-[10px] uppercase tracking-widest mb-1">Alamat Pengiriman</span>
          <span class="">Pekon Air Kubang, Kec. Air Naningan,<br/>Kab. Tanggamus, Lampung 35384</span>
        </div>
        <div class="flex flex-col">
          <span class="text-deep-black text-[10px] uppercase tracking-widest mb-1">Kontak</span>
          <span class="">+62 812 3456 7890</span>
        </div>
      </div>
      <div class="mt-8 pt-6 border-t-2 border-deep-black border-dashed text-center">
        <div class="inline-block px-3 py-1 bg-sticker-green text-deep-black border-2 border-deep-black font-label-stamp text-[10px] uppercase mb-4 shadow-[2px_2px_0px_0px_#000101]">
          Menerima Buku Bekas Layak Baca
        </div>
        <a class="block w-full text-center bg-cream-terang text-on-primary font-handwriting text-label-mono px-6 py-3 uppercase tracking-wider shadow-[4px_4px_0px_0px_#000101] hover:translate-y-[2px] hover:translate-x-[2px] hover:shadow-[2px_2px_0px_0px_#000101] transition-all" href="donasi">
          [ PANDUAN DONASI &amp; RELAWAN &rarr; ]
        </a>
      </div>
    </div>
  </div>
</section>
</div>
</main>
<?php include __DIR__ . '/../components/footer.php'; ?>