<?php
/**
 * components/navbar.php
 * Navigasi utama (Desktop + Mobile Drawer)
 * Active Menu Detection: Otomatis berdasarkan REQUEST_URI
 */

// ── Ambil URI bersih (tanpa query string, tanpa trailing slash) ──
$_uri = strtok($_SERVER['REQUEST_URI'], '?');
$_uri = rtrim($_uri, '/') ?: '/';

// ── Definisi item navigasi ──
$_nav_items = [
  ['href' => '/',            'match' => ['/', '/landing', '/landing/index'], 'label' => 'Beranda'],
  ['href' => '/tentang',     'match' => ['/tentang'],                         'label' => 'Tentang'],
  ['href' => '/program',     'match' => ['/program'],                         'label' => 'Program'],
  ['href' => '/katalog',     'match' => ['/katalog'],                         'label' => 'Katalog'],
  ['href' => '/pojok-karya', 'match' => ['/pojok-karya'],                     'label' => 'Pojok Karya'],
  ['href' => '/donasi',      'match' => ['/donasi'],                          'label' => 'Donasi'],
  ['href' => '/kontak',      'match' => ['/kontak'],                          'label' => 'Kontak'],
];

/**
 * Cek apakah URI saat ini cocok dengan salah satu pola match
 */
function _nav_is_active(string $uri, array $matches): bool {
  foreach ($matches as $pattern) {
    if ($uri === $pattern) return true;
    if ($pattern !== '/' && str_starts_with($uri, $pattern . '/')) return true;
  }
  return false;
}
?>

<!-- ═══ DESKTOP NAVIGATION ═══ -->
<nav class="hidden lg:flex items-center gap-6" id="main-nav" aria-label="Navigasi Utama">
  <?php foreach ($_nav_items as $_item):
    $_active = _nav_is_active($_uri, $_item['match']);
    $_base   = 'font-mono text-[12px] uppercase tracking-widest transition-colors duration-200 pb-1';
    $_state  = $_active
      ? 'text-sticker-green border-b-2 border-sticker-green font-bold'
      : 'text-paper-sand border-b-2 border-transparent hover:text-sticker-green hover:border-sticker-green/50';
  ?>
    <a
      href="<?= htmlspecialchars($_item['href']) ?>"
      class="<?= $_base . ' ' . $_state ?>"
      <?= $_active ? 'aria-current="page"' : '' ?>
    ><?= htmlspecialchars($_item['label']) ?></a>
  <?php endforeach; ?>
</nav>

<!-- ═══ HAMBURGER BUTTON (Mobile) ═══ -->
<button
  id="mobile-menu-btn"
  type="button"
  aria-label="Buka menu navigasi"
  aria-expanded="false"
  aria-controls="mobile-menu"
  class="lg:hidden flex items-center justify-center w-10 h-10 text-paper-sand hover:text-sticker-green transition-colors"
>
  <span class="material-symbols-outlined" id="menu-icon-open">menu</span>
  <span class="material-symbols-outlined hidden" id="menu-icon-close">close</span>
</button>

<!-- ═══ MOBILE DRAWER ═══ -->
<div
  id="mobile-menu"
  class="hidden absolute top-full left-0 right-0 bg-espresso-dark border-t-2 border-deep-black shadow-lg z-50 lg:hidden"
  role="navigation"
  aria-label="Navigasi Mobile"
>
  <nav class="flex flex-col px-4 py-4 gap-1">
    <?php foreach ($_nav_items as $_item):
      $_active = _nav_is_active($_uri, $_item['match']);
      $_base   = 'flex items-center gap-3 font-mono text-[13px] uppercase tracking-widest px-4 py-3 rounded-sm transition-colors';
      $_state  = $_active
        ? 'text-sticker-green bg-white/5 font-bold'
        : 'text-paper-sand hover:text-sticker-green hover:bg-white/5';
    ?>
      <a
        href="<?= htmlspecialchars($_item['href']) ?>"
        class="<?= $_base . ' ' . $_state ?>"
        <?= $_active ? 'aria-current="page"' : '' ?>
      >
        <?php if ($_active): ?>
          <span class="w-1.5 h-1.5 rounded-full bg-sticker-green flex-shrink-0"></span>
        <?php else: ?>
          <span class="w-1.5 h-1.5 rounded-full bg-transparent flex-shrink-0"></span>
        <?php endif; ?>
        <?= htmlspecialchars($_item['label']) ?>
      </a>
    <?php endforeach; ?>
  </nav>
  <div class="px-4 pb-4 border-t border-white/10 pt-3">
    <a href="/donasi" class="block w-full text-center bg-sticker-green text-deep-black font-mono text-[12px] uppercase tracking-widest px-4 py-3 border-2 border-deep-black hover:bg-opacity-90 transition-opacity shadow-hard-sm">
      Dukung Kami →
    </a>
  </div>
</div>
