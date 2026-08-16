<?php
/**
 * components/header.php
 * Header + Navigasi utama (Tuku-Inspired Neighborhood Craft)
 * Sumber: docs/STITCH/ (folder desain Stitch)
 * Active menu detection otomatis berdasarkan REQUEST_URI.
 *
 * USAGE:
 *   <?php include __DIR__ . '/../components/header.php'; ?>
 */

$_uri = strtok($_SERVER['REQUEST_URI'], '?');
$_uri = rtrim($_uri, '/') ?: '/';

$_nav_items = [
  ['path' => '/beranda',    'href' => '/',            'match' => ['/'],                  'label' => 'Beranda'],
  ['path' => '/tentang-kami','href' => '/tentang',    'match' => ['/tentang'],           'label' => 'Tentang Kami'],
  ['path' => '/program',    'href' => '/program',     'match' => ['/program'],           'label' => 'Program'],
  ['path' => '/katalog',    'href' => '/katalog',     'match' => ['/katalog'],           'label' => 'Katalog'],
  ['path' => '/pojok-karya','href' => '/pojok-karya', 'match' => ['/pojok-karya'],       'label' => 'Pojok Karya'],
  ['path' => '/donasi',     'href' => '/donasi',      'match' => ['/donasi'],            'label' => 'Donasi'],
  ['path' => '/kontak',     'href' => '/kontak',      'match' => ['/kontak'],            'label' => 'Kontak'],
];

function _tuku_nav_active(string $uri, array $matches): bool {
  foreach ($matches as $pattern) {
    if ($uri === $pattern) return true;
    if ($pattern !== '/' && str_starts_with($uri, $pattern . '/')) return true;
  }
  return false;
}
?>
<header class="fixed top-0 w-full z-50 bg-header-bg border-b border-deep-black">
  <div class="h-20 max-w-container-max mx-auto px-margin-mobile lg:px-margin-desktop flex items-center justify-between">
    <div class="flex items-center gap-4">
      <a href="/" aria-label="Jalosi Sanak Negeri – Beranda">
        <img alt="logo.png" class="h-10 w-auto object-contain brightness-0 invert" src="/assets/images/logo-placeholder.svg" onerror="this.style.display='none';" />
      </a>
      <span class="font-headline-sm text-footer-bg uppercase tracking-widest hidden sm:block">Jalosi Sanak Negeri</span>
    </div>

    <nav class="hidden lg:flex items-center gap-8" aria-label="Navigasi Utama">
      <?php foreach ($_nav_items as $_item):
        $_active = _tuku_nav_active($_uri, $_item['match']);
      ?>
        <a
          href="<?= htmlspecialchars($_item['href']) ?>"
          class="font-label-mono transition-colors uppercase <?= $_active ? 'text-sticker-green underline underline-offset-8 decoration-2' : 'text-footer-bg hover:text-sticker-green' ?>"
          <?= $_active ? 'aria-current="page"' : '' ?>
        ><?= htmlspecialchars($_item['label']) ?></a>
      <?php endforeach; ?>
    </nav>

    <div class="lg:hidden flex items-center">
      <button type="button" id="mobile-menu-btn" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="mobile-menu" class="text-footer-bg">
        <span class="material-symbols-outlined" id="menu-icon-open">menu</span>
        <span class="material-symbols-outlined hidden" id="menu-icon-close">close</span>
      </button>
    </div>
  </div>

  <!-- Mobile Drawer -->
  <div id="mobile-menu" class="hidden lg:hidden bg-header-bg border-t border-deep-black">
    <nav class="flex flex-col px-margin-mobile py-4 gap-1" aria-label="Navigasi Mobile">
      <?php foreach ($_nav_items as $_item):
        $_active = _tuku_nav_active($_uri, $_item['match']);
      ?>
        <a
          href="<?= htmlspecialchars($_item['href']) ?>"
          class="font-label-mono uppercase py-2.5 transition-colors <?= $_active ? 'text-sticker-green underline underline-offset-8 decoration-2' : 'text-footer-bg hover:text-sticker-green' ?>"
          <?= $_active ? 'aria-current="page"' : '' ?>
        ><?= htmlspecialchars($_item['label']) ?></a>
      <?php endforeach; ?>
    </nav>
  </div>
</header>

<!-- Spacer agar konten tidak tertutup fixed header -->
<div class="h-20" aria-hidden="true"></div>
