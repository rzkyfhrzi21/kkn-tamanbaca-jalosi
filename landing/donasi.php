<?php
$page_title = 'Donasi';
$page_desc = 'Dukung Taman Baca Jalosi Sanak Negeri lewat donasi buku dan relawan.';
$page_canonical = '/donasi';
$page_active = 'donasi';
include __DIR__ . '/../components/head.php';
?>
<body class="bg-background font-body-lg text-on-background">
<?php include __DIR__ . '/../components/header.php'; ?>
<main class="w-full pt-20 min-h-screen">
<div class="flex flex-col w-full relative">
<!-- Decorative Background Grid Elements -->
<div class="absolute inset-0 pointer-events-none w-full h-full" style="background-size: 24px 24px; background-image: radial-gradient(circle, var(--tw-colors-outline-variant) 1px, transparent 1px); opacity: 0.2;"></div>
<section class="relative w-full max-w-[1200px] mx-auto px-margin-mobile lg:px-margin-desktop py-12 lg:py-24">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
<!-- Left Column: Intro & Wishlist -->
<div class="lg:col-span-7 flex flex-col gap-12">
<div class="space-y-6">
<div class="inline-block bg-sticker-green text-deep-black font-label-stamp px-3 py-1 uppercase tracking-widest relative">
            Mari Berbagi Cerita
            <div class="absolute -bottom-1 -right-1 w-full h-full border border-deep-black pointer-events-none"></div>
</div>
<h1 class="font-headline-lg text-headline-lg text-deep-black uppercase leading-tight relative inline-block">
            Sumbang Buku,<br/>
<span class="text-deep-black">Tebar Ilmu.</span>
<svg class="absolute -bottom-4 right-0 w-24 h-6 text-sticker-green" fill="none" viewbox="0 0 100 20">
<path d="M5 15Q30 5 50 10T95 5" stroke="currentColor" stroke-linecap="round" stroke-width="4"></path>
</svg>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
            Taman Baca Jalosi Sanak Negeri menerima donasi buku layak baca untuk menambah koleksi perpustakaan desa kami. Setiap halaman yang Anda bagikan, membuka jendela dunia baru bagi anak-anak di Pekon Air Kubang.
          </p>
</div>
<!-- Book Wishlist -->
<div class="bg-surface border border-deep-black relative">
<div class="absolute -right-2 -bottom-2 w-full h-full bg-deep-black -z-10"></div>
<div class="p-6 lg:p-8 space-y-6">
<h2 class="font-headline-md text-headline-md text-deep-black uppercase">Daftar Kebutuhan</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant pb-4 border-b border-deep-black">
              Buku yang paling dinanti oleh kawan-kawan kecil kami saat ini.
            </p>
<ul class="space-y-4">
<li class="flex items-center justify-between group cursor-pointer hover:bg-surface-container transition-colors p-2 -mx-2 rounded">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-outline group-hover:text-deep-black transition-colors">auto_stories</span>
<span class="font-label-mono text-label-mono text-deep-black uppercase">Ensiklopedia Anak</span>
</div>
<span class="bg-surface-container-high px-2 py-1 font-label-stamp text-[10px] text-deep-black border border-outline-variant">Tinggi</span>
</li>
<li class="border-t border-outline-variant border-dashed"></li>
<li class="flex items-center justify-between group cursor-pointer hover:bg-surface-container transition-colors p-2 -mx-2 rounded">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-outline group-hover:text-deep-black transition-colors">book</span>
<span class="font-label-mono text-label-mono text-deep-black uppercase">Novel Terjemahan Klasik</span>
</div>
<span class="bg-surface-container-high px-2 py-1 font-label-stamp text-[10px] text-deep-black border border-outline-variant">Sedang</span>
</li>
<li class="border-t border-outline-variant border-dashed"></li>
<li class="flex items-center justify-between group cursor-pointer hover:bg-surface-container transition-colors p-2 -mx-2 rounded">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-outline group-hover:text-deep-black transition-colors">menu_book</span>
<span class="font-label-mono text-label-mono text-deep-black uppercase">Buku Keterampilan/Prakarya</span>
</div>
<span class="bg-sticker-green px-2 py-1 font-label-stamp text-[10px] text-deep-black border border-deep-black">Mendesak</span>
</li>
<li class="border-t border-outline-variant border-dashed"></li>
<li class="flex items-center justify-between group cursor-pointer hover:bg-surface-container transition-colors p-2 -mx-2 rounded">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-outline group-hover:text-deep-black transition-colors">import_contacts</span>
<span class="font-label-mono text-label-mono text-deep-black uppercase">Cerita Rakyat Nusantara</span>
</div>
<span class="bg-surface-container-high px-2 py-1 font-label-stamp text-[10px] text-deep-black border border-outline-variant">Sedang</span>
</li>
</ul>
</div>
</div>
</div>
<!-- Right Column: Shipping Info & Volunteer -->
<div class="lg:col-span-5 flex flex-col gap-8">
<!-- Shipping Box -->
<div class="bg-header-bg border border-deep-black relative transform lg:rotate-1 hover:rotate-0 transition-transform duration-300">
<div class="absolute -right-2 -bottom-2 w-full h-full bg-deep-black -z-10"></div>
<div class="absolute top-4 right-4 text-footer-bg">
<span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1;">local_shipping</span>
</div>
<div class="p-6 lg:p-8 flex flex-col h-full justify-between gap-6">
<div class="space-y-2">
<span class="font-label-stamp text-label-stamp text-footer-bg uppercase tracking-widest flex items-center gap-2">
<span class="w-2 h-2 bg-error rounded-full animate-pulse"></span>
                Kirim via Kurir
              </span>
<h3 class="font-headline-sm text-headline-sm text-footer-bg">Alamat Tujuan Donasi</h3>
</div>
<div class="bg-surface p-4 border border-deep-black relative group">
<p class="font-label-mono text-label-mono text-deep-black whitespace-pre-line" id="shipping-address">Taman Baca Jalosi Sanak Negeri
Jalan Tegal Sari, Pekon Air Kubang
Kec. Air Naningan, Kab. Tanggamus
Lampung 35384
(UP: Tamar Widadi - +62 812 3456 7890)</p>
<button aria-label="Copy Address" class="absolute top-4 right-4 w-8 h-8 flex items-center justify-center bg-surface-container-highest border border-deep-black hover:bg-sticker-green transition-colors" onclick="copyAddress()">
<span class="material-symbols-outlined text-[16px]" id="copy-icon">content_copy</span>
</button>
</div>
<p class="font-body-sm text-body-sm text-footer-bg opacity-80">
              *Harap beri keterangan "DONASI BUKU" pada paket.
            </p>
</div>
</div>
<!-- Volunteer CTA -->
<div class="bg-inverse-surface text-inverse-on-surface p-8 relative border border-deep-black overflow-hidden group">
<div class="absolute top-0 right-0 w-32 h-32 bg-cream-terang rounded-bl-full opacity-20 -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500"></div>
<div class="relative z-10 space-y-6">
<div class="w-12 h-12 bg-sticker-green flex items-center justify-center border border-deep-black">
<span class="material-symbols-outlined text-deep-black">volunteer_activism</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-error uppercase">Jadi Relawan Sortir</h3>
<p class="font-body-sm text-body-sm text-surface-variant">
              Bantu kami memilah, mendata, dan menata buku-buku donasi yang masuk. Tangan-tangan terampil sangat dibutuhkan!
            </p>
<button class="w-full bg-cream-terang text-on-primary font-handwriting text-label-mono py-3 px-6 uppercase tracking-wider border border-transparent hover:bg-transparent hover:border-outline hover:text-on-error transition-all flex items-center justify-center gap-2 relative">
               Daftar Sekarang
               <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
</section>
<!-- Divider -->
<div class="w-full max-w-[1200px] mx-auto px-margin-mobile lg:px-margin-desktop">
<div class="w-full border-t-2 border-deep-black my-8 relative">
<div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-background px-4 font-label-stamp text-label-stamp text-outline uppercase tracking-widest">
         Terima Kasih
       </div>
</div>
</div>
<script>
    function copyAddress() {
      const addressText = document.getElementById('shipping-address').innerText;
      const copyIcon = document.getElementById('copy-icon');
      
      navigator.clipboard.writeText(addressText).then(() => {
        copyIcon.innerText = 'check';
        copyIcon.classList.add('text-sticker-green');
        
        setTimeout(() => {
          copyIcon.innerText = 'content_copy';
          copyIcon.classList.remove('text-sticker-green');
        }, 2000);
      }).catch(err => {
        console.error('Failed to copy text: ', err);
      });
    }
  </script>
</div>
</main>
<?php include __DIR__ . '/../components/footer.php'; ?>