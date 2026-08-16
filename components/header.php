<?php
/**
 * components/header.php
 * Header utama: Topbar + Logo + Navbar (include navbar.php)
 *
 * USAGE di halaman:
 *   <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>
 */
?>
<header class="fixed top-0 left-0 right-0 z-50 bg-header-bg/95 backdrop-blur-sm border-b-2 border-deep-black">
  <div class="max-w-container mx-auto px-margin-mobile lg:px-margin-desktop h-20 flex items-center justify-between gap-6 relative">

    <!-- ── Logo & Brand ── -->
    <a href="/" class="flex items-center gap-3 flex-shrink-0 group" aria-label="TBM Jalosi Sanak Negeri – Beranda">
      <img
        src="/assets/images/logo-placeholder.svg"
        alt="Logo TBM Jalosi"
        width="110" height="37"
        class="h-9 w-auto object-contain"
        onerror="this.onerror=null;this.style.display='none';"
      >
      <div class="hidden sm:flex flex-col leading-none">
        <span class="font-mono text-[11px] text-paper-sand uppercase tracking-[0.15em]">TBM Jalosi</span>
        <span class="font-mono text-[9px] text-outline-variant uppercase tracking-widest mt-0.5">Sanak Negeri</span>
      </div>
    </a>

    <!-- ── Navbar (Desktop + Mobile Hamburger + Drawer) ── -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php'; ?>

  </div>
</header>

<!-- Spacer agar konten tidak tertutup fixed header -->
<div class="h-20" aria-hidden="true"></div>
