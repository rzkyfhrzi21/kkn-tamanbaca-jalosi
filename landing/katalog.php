<?php
$page_title = 'Katalog';
$page_desc = 'Katalog koleksi 1,500+ buku Taman Baca Jalosi Sanak Negeri.';
$page_canonical = '/katalog';
$page_active = 'katalog';
include __DIR__ . '/../components/head.php';
?>
<body class="bg-background font-body-lg text-on-background">
<?php include __DIR__ . '/../components/header.php'; ?>
<main class="w-full pt-20 min-h-screen">
<div class="flex flex-col w-full">
<!-- Header Section -->
<section class="w-full bg-primary-fixed border-b-2 border-deep-black px-margin-mobile lg:px-margin-desktop py-12 lg:py-20 relative overflow-hidden">
<!-- Decorative Grid Background -->
<div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#000101 2px, transparent 2px); background-size: 24px 24px;"></div>
<div class="max-w-container-max mx-auto relative z-10 flex flex-col lg:flex-row gap-12 items-end justify-between">
<div class="flex flex-col max-w-2xl">
<div class="font-label-mono text-sm text-on-primary-fixed-variant uppercase tracking-widest mb-4 flex items-center gap-2">
<span class="w-2 h-2 bg-sticker-green border border-deep-black rounded-full"></span>
                    Katalog Perpustakaan
                </div>
<h1 class="font-headline-lg-mobile lg:font-headline-lg text-deep-black uppercase leading-none mb-6">
                    Temukan<br/>Jendela Duniamu.
                </h1>
<!-- Search Bar -->
<div class="w-full relative mt-4 group">
<label class="font-label-mono text-xs text-deep-black uppercase absolute -top-6 left-0" for="search-book">Pencarian Pustaka</label>
<div class="flex items-center bg-surface-container-lowest border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] group-focus-within:translate-x-[2px] group-focus-within:translate-y-[2px] group-focus-within:shadow-[2px_2px_0px_0px_#000101] transition-all">
<span class="material-symbols-outlined text-deep-black px-4">search</span>
<input class="w-full bg-transparent py-4 pr-4 font-body-lg text-deep-black outline-none placeholder:text-on-surface-variant/50" id="search-book" placeholder="Judul, Penulis, ISBN..." type="text"/>
<button class="bg-primary text-on-primary px-6 py-4 border-l-2 border-deep-black font-handwriting uppercase hover:bg-surface-tint transition-colors">Cari</button>
</div>
</div>
</div>
<!-- Stats/Counters -->
<div class="flex gap-6 lg:mb-4">
<div class="flex flex-col bg-surface-container-lowest border-2 border-deep-black p-4 shadow-[4px_4px_0px_0px_#000101] min-w-[120px]">
<span class="font-label-mono text-[10px] uppercase text-on-surface-variant">Total Koleksi</span>
<span class="font-headline-md text-deep-black mt-1">1,500+</span>
</div>
<div class="flex flex-col bg-sticker-green border-2 border-deep-black p-4 shadow-[4px_4px_0px_0px_#000101] min-w-[120px]">
<span class="font-label-mono text-[10px] uppercase text-deep-black">Tersedia</span>
<span class="font-headline-md text-deep-black mt-1">1,200</span>
</div>
</div>
</div>
</section>
<!-- Main Content Area -->
<section class="max-w-container-max mx-auto w-full px-margin-mobile lg:px-margin-desktop py-12 flex flex-col gap-8">
<!-- Filters -->
<div class="flex flex-col gap-4">
<div class="flex items-center justify-between border-b-2 border-deep-black pb-4">
<h2 class="font-headline-sm text-deep-black uppercase">Kategori</h2>
<button class="font-label-mono text-xs text-deep-black underline underline-offset-4 hover:text-primary transition-colors">Reset Filter</button>
</div>
<div class="flex flex-wrap gap-3">
<button class="bg-deep-black text-surface-container-lowest font-handwriting uppercase text-sm px-5 py-2 border-2 border-deep-black shadow-[2px_2px_0px_0px_rgba(0,1,1,0.2)]">Semua</button>
<button class="bg-surface-container-lowest text-deep-black font-handwriting uppercase text-sm px-5 py-2 border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] hover:bg-primary-fixed transition-colors hover:-translate-y-1">Anak-anak</button>
<button class="bg-surface-container-lowest text-deep-black font-handwriting uppercase text-sm px-5 py-2 border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] hover:bg-primary-fixed transition-colors hover:-translate-y-1">Pelajaran</button>
<button class="bg-surface-container-lowest text-deep-black font-handwriting uppercase text-sm px-5 py-2 border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] hover:bg-primary-fixed transition-colors hover:-translate-y-1">Sains & Alam</button>
<button class="bg-surface-container-lowest text-deep-black font-handwriting uppercase text-sm px-5 py-2 border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] hover:bg-primary-fixed transition-colors hover:-translate-y-1">Sastra</button>
<button class="bg-surface-container-lowest text-deep-black font-handwriting uppercase text-sm px-5 py-2 border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] hover:bg-primary-fixed transition-colors hover:-translate-y-1">Sejarah</button>
</div>
</div>
<!-- Toolbar -->
<div class="flex justify-between items-center py-4 bg-surface-container px-4 border-2 border-deep-black">
<span class="font-label-mono text-sm text-deep-black">Menampilkan 1-8 dari 1,500+ buku</span>
<div class="flex items-center gap-2">
<span class="font-label-mono text-xs uppercase text-on-surface-variant hidden sm:inline">Urutkan:</span>
<select class="bg-transparent font-label-mono text-sm text-deep-black outline-none border-b border-deep-black pb-1 cursor-pointer">
<option>Terbaru</option>
<option>Judul A-Z</option>
<option>Terpopuler</option>
</select>
</div>
</div>
<!-- Book Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 gap-y-12 mt-4">
<!-- Book Card 1 -->
<article class="flex flex-col bg-surface-container-lowest border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] relative group">
<div class="absolute -top-3 -right-3 z-20 rotate-3 bg-sticker-green text-deep-black font-label-stamp px-3 py-1 border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] uppercase">Tersedia</div>
<div class="w-full aspect-[3/4] border-b-2 border-deep-black bg-surface-variant p-4 flex items-center justify-center">
<div class="w-full h-full border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] bg-cover bg-center" data-alt="Minimalist book cover design for a children's book. Warm off-white background, bold geometric illustration of a tiger in orange and black. Tactile paper texture, bold brutalist typography." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD-STgTEA1q6LbNtnkpPQYWiKo_U_xzczakkmMT04J4znXE0_d10g8zLi8ZMwfrFR8M2sm4vsOB2fGdkM9uW5N37_pmowlNhLzbHGYsyk3VlmAQjmGNhBzWFTtALC51lnAgmgXIh_lWnwHomsNBtQntBnxnN0TomRmfow1Os0MGeqh9JJfjnMaGu0XoGoOsBfMNIIrqphM2kLQ2ohZJcheaI5oZ-do39PUUX31dI4x3i2c-G6blff41')"></div>
</div>
<div class="p-4 flex flex-col flex-1">
<div class="font-label-mono text-[10px] text-primary uppercase mb-2">Anak-anak</div>
<h3 class="font-headline-sm text-deep-black leading-tight line-clamp-2 mb-1">Harimau yang Lupa Mengaum</h3>
<p class="font-body-sm text-on-surface-variant line-clamp-1 mb-4">Rina Sastrawati</p>
<div class="mt-auto pt-4 border-t-2 border-deep-black border-dashed flex justify-between items-end">
<div class="flex flex-col">
<span class="font-label-mono text-[10px] text-on-surface-variant uppercase">Lokasi Rak</span>
<span class="font-label-stamp text-lg text-deep-black mt-1">A1-02</span>
</div>
<button class="w-8 h-8 flex items-center justify-center bg-surface-container-lowest border-2 border-deep-black hover:bg-primary hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-sm">bookmark_add</span>
</button>
</div>
</div>
</article>
<!-- Book Card 2 -->
<article class="flex flex-col bg-surface-container-lowest border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] relative group opacity-75 grayscale hover:grayscale-0 transition-all">
<div class="absolute -top-3 -right-3 z-20 -rotate-2 bg-error text-on-error font-label-stamp px-3 py-1 border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] uppercase">Dipinjam</div>
<div class="w-full aspect-[3/4] border-b-2 border-deep-black bg-surface-variant p-4 flex items-center justify-center">
<div class="w-full h-full border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] bg-cover bg-center" data-alt="Science textbook cover design. Brutalist style, deep coffee brown background with stark white diagram of an atom. Kraft paper texture, bold stencil typography." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDCnCCni6YCbxkjnlFKpPjOK8XqSlQtzZXarMEzNNsit9joFe3xR3YnliMt4LPmsGgEdDOdGkXxvHW3nQnCFEVyw0YFp3tPgfan-PUDA5-uIQ6cVjfUBMsw-8i3XCIXCgr-tC1mIqIkwkrk6fiu3qIHE6jS3YtCfS77CT64-fbqGK6QacpBDxNRevEkJwMkJlrD_EKCfO3XV1BcOfjbb_bu4r8avz2nfOYG830jh-yL_OFMS3VnNI6H')"></div>
</div>
<div class="p-4 flex flex-col flex-1">
<div class="font-label-mono text-[10px] text-primary uppercase mb-2">Sains & Alam</div>
<h3 class="font-headline-sm text-deep-black leading-tight line-clamp-2 mb-1">Fisika Kuantum Dasar</h3>
<p class="font-body-sm text-on-surface-variant line-clamp-1 mb-4">Prof. Bambang H.</p>
<div class="mt-auto pt-4 border-t-2 border-deep-black border-dashed flex justify-between items-end">
<div class="flex flex-col">
<span class="font-label-mono text-[10px] text-on-surface-variant uppercase">Lokasi Rak</span>
<span class="font-label-stamp text-lg text-deep-black mt-1">C3-14</span>
</div>
<span class="font-label-mono text-[10px] text-error uppercase">Kembali 12/10</span>
</div>
</div>
</article>
<!-- Book Card 3 -->
<article class="flex flex-col bg-surface-container-lowest border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] relative group">
<div class="absolute -top-3 -right-3 z-20 rotate-6 bg-sticker-green text-deep-black font-label-stamp px-3 py-1 border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] uppercase">Tersedia</div>
<div class="w-full aspect-[3/4] border-b-2 border-deep-black bg-surface-variant p-4 flex items-center justify-center">
<div class="w-full h-full border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] bg-cover bg-center" data-alt="Classic literature book cover. High contrast black and white abstract ink splash graphic. Rough cardboard texture background, typewriter style typography for the title." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAUlxlFXj6qg3pqVMZ3j0bCeI69l0VgFIVaRlJC2C8doL4Bv6efMbLQ5DKxnS-i20dg1nxu2FPp8PMqwNdBvDZSYQzan7nTf6JdskThkovlYmOTY-f0kMrbVnVpt249UW7UCChJ8pEZY2nScy_5d3A356GEpf3oBxcThfuxjUHbTBX1-UFiJrmYa5xQBFhg0TFdcqczjQf_U_I0eCpliOsd2THVOMYtrFlVlRqwiji9BeB1E42k02TC')"></div>
</div>
<div class="p-4 flex flex-col flex-1">
<div class="font-label-mono text-[10px] text-primary uppercase mb-2">Sastra</div>
<h3 class="font-headline-sm text-deep-black leading-tight line-clamp-2 mb-1">Lelaki Tua dan Laut</h3>
<p class="font-body-sm text-on-surface-variant line-clamp-1 mb-4">Ernest Hemingway (Terj.)</p>
<div class="mt-auto pt-4 border-t-2 border-deep-black border-dashed flex justify-between items-end">
<div class="flex flex-col">
<span class="font-label-mono text-[10px] text-on-surface-variant uppercase">Lokasi Rak</span>
<span class="font-label-stamp text-lg text-deep-black mt-1">B1-05</span>
</div>
<button class="w-8 h-8 flex items-center justify-center bg-surface-container-lowest border-2 border-deep-black hover:bg-primary hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-sm">bookmark_add</span>
</button>
</div>
</div>
</article>
<!-- Book Card 4 -->
<article class="flex flex-col bg-surface-container-lowest border-2 border-deep-black shadow-[4px_4px_0px_0px_#000101] relative group">
<div class="absolute -top-3 -right-3 z-20 -rotate-3 bg-sticker-green text-deep-black font-label-stamp px-3 py-1 border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] uppercase">Tersedia</div>
<div class="w-full aspect-[3/4] border-b-2 border-deep-black bg-surface-variant p-4 flex items-center justify-center">
<div class="w-full h-full border-2 border-deep-black shadow-[2px_2px_0px_0px_#000101] bg-cover bg-center" data-alt="History book cover design. Sepia tone background with a high contrast black linocut style illustration of an ancient temple. Bold sans-serif typography overlay." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD0vyiwzjAL_e89Kt_5saJGOY_xit3QkiHfL0BPK-Mz5L1E-9J37A71jfYSashpcdH102xd9Bu_T2DN_rYeFe_IZx7CiaVAdlOJlzSoezGAYqk8hRnawMSO945J-PBH1OXxFBNB1TZzmNqKRugyMGwTBE_k7yMrZj-xiJF2bWd6fvJpscFjCnTvuhfbSapRVWSQP3tD7QYwCuNhyr3dqBE4mNV0WGyEaNuyW3X8x13_FkYaz0B8kIgq')"></div>
</div>
<div class="p-4 flex flex-col flex-1">
<div class="font-label-mono text-[10px] text-primary uppercase mb-2">Sejarah</div>
<h3 class="font-headline-sm text-deep-black leading-tight line-clamp-2 mb-1">Jejak Majapahit</h3>
<p class="font-body-sm text-on-surface-variant line-clamp-1 mb-4">Hasan Djafar</p>
<div class="mt-auto pt-4 border-t-2 border-deep-black border-dashed flex justify-between items-end">
<div class="flex flex-col">
<span class="font-label-mono text-[10px] text-on-surface-variant uppercase">Lokasi Rak</span>
<span class="font-label-stamp text-lg text-deep-black mt-1">H2-11</span>
</div>
<button class="w-8 h-8 flex items-center justify-center bg-surface-container-lowest border-2 border-deep-black hover:bg-primary hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-sm">bookmark_add</span>
</button>
</div>
</div>
</article>
</div>
<!-- Pagination -->
<div class="mt-12 flex justify-center items-center gap-2">
<button class="w-10 h-10 flex items-center justify-center border-2 border-deep-black bg-surface-container-lowest opacity-50 cursor-not-allowed">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-10 h-10 flex items-center justify-center border-2 border-deep-black bg-deep-black text-surface-container-lowest font-label-mono shadow-[2px_2px_0px_0px_rgba(0,1,1,0.2)]">1</button>
<button class="w-10 h-10 flex items-center justify-center border-2 border-deep-black bg-surface-container-lowest font-label-mono hover:bg-surface-variant transition-colors shadow-[2px_2px_0px_0px_#000101]">2</button>
<button class="w-10 h-10 flex items-center justify-center border-2 border-deep-black bg-surface-container-lowest font-label-mono hover:bg-surface-variant transition-colors shadow-[2px_2px_0px_0px_#000101]">3</button>
<span class="font-label-mono text-deep-black px-2">...</span>
<button class="w-10 h-10 flex items-center justify-center border-2 border-deep-black bg-surface-container-lowest font-label-mono hover:bg-surface-variant transition-colors shadow-[2px_2px_0px_0px_#000101]">188</button>
<button class="w-10 h-10 flex items-center justify-center border-2 border-deep-black bg-surface-container-lowest hover:bg-surface-variant transition-colors shadow-[2px_2px_0px_0px_#000101]">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</section>
</div>
</main>
<?php include __DIR__ . '/../components/footer.php'; ?>