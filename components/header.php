<?php
/**
 * components/header.php
 * Header + Navigasi utama (shared 6-page design)
 * Sumber: landing/tentang.html (design system terbaru)
 *
 * WAJIB set $page_active (slug menu aktif) sebelum include.
 * Nilai slug: beranda, tentang, program, katalog, pojok-karya, donasi, kontak.
 *
 * USAGE:
 *   <?php $page_active = 'tentang'; include __DIR__ . '/../components/header.php'; ?>
 */
$page_active = $page_active ?? 'beranda';

$_nav_items = [
  ['slug' => 'beranda',     'href' => './',         'label' => 'Beranda'],
  ['slug' => 'tentang',     'href' => 'tentang',    'label' => 'Tentang Kami'],
  ['slug' => 'program',     'href' => 'program',    'label' => 'Program'],
  ['slug' => 'katalog',     'href' => 'katalog',    'label' => 'Katalog'],
  ['slug' => 'pojok-karya', 'href' => 'pojok-karya', 'label' => 'Pojok Karya'],
  ['slug' => 'donasi',      'href' => 'donasi',     'label' => 'Donasi'],
  ['slug' => 'kontak',      'href' => 'kontak',     'label' => 'Kontak'],
];
?>
<header class="fixed top-0 w-full z-50 bg-putih lg:bg-deep-black border-b border-deep-black">
  <div class="h-20 max-w-[1200px] mx-auto px-margin-mobile lg:px-margin-desktop flex items-center justify-between">
    <div class="flex items-center gap-4">
      <a href="./" aria-label="Jalosi Sanak Negeri – Beranda">
        <img alt="Logo Taman Baca Jalosi Sanak Negeri, Pekon Air Kubang, Tanggamus" class="h-14 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AP1WRLsJN0ukS58RdOYr01DoNAMnwiGJHZwR7_K4-lvo9t8Kwpeiflh08XEZEw0rDyHP4QhAAty9FjMoYeQhSEU3Jsc_-_bSf8Z-LeGRphflxZ99LzAakxHLEes3lFUqDkJglXBFqn2NXSQBE2_TWbPX5lG-2mttUCalboVb_XP6SzSM5hm-NZ7YjkQ29t6Ds2hZYh34eKdYmWhYPcUjCIEHYTWvlz0s7X1u8xh1cdTPLVGJPkIoJKPCM3EulEuhGYwUL7zJDq2aCCwh"/>
      </a>
      <span class="font-headline-sm text-deep-black lg:text-footer-bg uppercase tracking-widest">Jalosi Sanak Negeri</span>
    </div>
    <nav class="hidden lg:flex items-center gap-8" aria-label="Navigasi Utama">
      <?php foreach ($_nav_items as $_item):
        $_is_active = ($_item['slug'] === $page_active);
      ?>
        <a
          href="<?= htmlspecialchars($_item['href']) ?>"
          class="font-handwriting transition-colors uppercase <?= $_is_active ? 'text-footer-bg underline underline-offset-8 decoration-2' : 'text-footer-bg' ?>"
          <?= $_is_active ? 'aria-current="page"' : '' ?>
        ><?= htmlspecialchars($_item['label']) ?></a>
      <?php endforeach; ?>
    </nav>
    <button id="mobile-menu-btn" aria-label="Buka menu" class="lg:hidden flex items-center justify-center p-2 cursor-pointer" onclick="toggleMobileMenu()">
      <span class="material-symbols-outlined text-deep-black lg:text-footer-bg">menu</span>
    </button>
  </div>
</header>
<div id="mobile-menu" class="fixed inset-0 z-40 lg:hidden hidden bg-putih overflow-y-auto">
  <nav class="min-h-full w-full flex flex-col items-start justify-center gap-8 px-margin-mobile py-24 font-handwriting text-label-mono uppercase" aria-label="Navigasi Mobile">
    <?php foreach ($_nav_items as $_item):
      $_is_active = ($_item['slug'] === $page_active);
    ?>
      <a
        href="<?= htmlspecialchars($_item['href']) ?>"
        class="text-2xl transition-colors <?= $_is_active ? 'text-deep-black underline underline-offset-8 decoration-2' : 'text-deep-black hover:text-oren' ?>"
        <?= $_is_active ? 'aria-current="page"' : '' ?>
      ><?= htmlspecialchars($_item['label']) ?></a>
    <?php endforeach; ?>
  </nav>
</div>