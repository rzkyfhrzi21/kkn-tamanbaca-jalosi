<?php
/**
 * components/sidebar-dashboard.php
 * Sidebar navigasi khusus area Dashboard
 * Active Menu Detection: Otomatis berdasarkan REQUEST_URI
 *
 * USAGE:
 *   <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/sidebar-dashboard.php'; ?>
 */

$_uri = strtok($_SERVER['REQUEST_URI'], '?');
$_uri = rtrim($_uri, '/') ?: '/';

$_sidebar_items = [
  [
    'group'  => 'Utama',
    'items'  => [
      ['href' => '/dashboard',          'match' => ['/dashboard', '/dashboard/index'], 'label' => 'Overview',        'icon' => 'dashboard'],
      ['href' => '/dashboard/profil',   'match' => ['/dashboard/profil'],              'label' => 'Profil Saya',     'icon' => 'person'],
    ],
  ],
  [
    'group'  => 'Manajemen',
    'items'  => [
      ['href' => '/dashboard/anggota',  'match' => ['/dashboard/anggota'],             'label' => 'Anggota',         'icon' => 'group'],
      ['href' => '/dashboard/koleksi',  'match' => ['/dashboard/koleksi'],             'label' => 'Koleksi Buku',    'icon' => 'auto_stories'],
      ['href' => '/dashboard/peminjaman','match' => ['/dashboard/peminjaman'],          'label' => 'Peminjaman',      'icon' => 'import_contacts'],
      ['href' => '/dashboard/program',  'match' => ['/dashboard/program'],             'label' => 'Program',         'icon' => 'event'],
      ['href' => '/dashboard/donasi',   'match' => ['/dashboard/donasi'],              'label' => 'Donasi Masuk',    'icon' => 'volunteer_activism'],
    ],
  ],
  [
    'group'  => 'Laporan',
    'items'  => [
      ['href' => '/dashboard/statistik','match' => ['/dashboard/statistik'],           'label' => 'Statistik',       'icon' => 'bar_chart'],
      ['href' => '/dashboard/export',   'match' => ['/dashboard/export'],              'label' => 'Export Data',     'icon' => 'download'],
    ],
  ],
];

function _sidebar_is_active(string $uri, array $matches): bool {
  foreach ($matches as $pattern) {
    if ($uri === $pattern) return true;
    if (str_starts_with($uri, $pattern . '/')) return true;
  }
  return false;
}
?>

<aside
  id="dashboard-sidebar"
  class="fixed top-0 left-0 h-full w-64 bg-espresso-dark border-r-2 border-deep-black z-40 flex flex-col overflow-y-auto"
  aria-label="Navigasi Dashboard"
>
  <!-- Sidebar Brand -->
  <div class="h-20 flex items-center px-6 border-b-2 border-deep-black flex-shrink-0">
    <a href="/" class="flex items-center gap-3" aria-label="Kembali ke Website">
      <img src="/assets/images/logo-placeholder.svg" alt="Logo" width="90" height="30" class="h-7 w-auto" onerror="this.style.display='none'">
    </a>
  </div>

  <!-- Navigation Groups -->
  <nav class="flex-1 px-3 py-6 space-y-6" aria-label="Menu Dashboard">
    <?php foreach ($_sidebar_items as $_group): ?>
      <div>
        <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-outline px-3 mb-2">
          <?= htmlspecialchars($_group['group']) ?>
        </p>
        <ul class="space-y-0.5">
          <?php foreach ($_group['items'] as $_item):
            $_active = _sidebar_is_active($_uri, $_item['match']);
            $_base   = 'flex items-center gap-3 w-full px-3 py-2.5 rounded-sm font-mono text-[12px] uppercase tracking-wider transition-colors';
            $_state  = $_active
              ? 'bg-sticker-green/15 text-sticker-green border-l-2 border-sticker-green pl-[10px]'
              : 'text-paper-sand/70 hover:text-paper-sand hover:bg-white/5 border-l-2 border-transparent';
          ?>
            <li>
              <a
                href="<?= htmlspecialchars($_item['href']) ?>"
                class="<?= $_base . ' ' . $_state ?>"
                <?= $_active ? 'aria-current="page"' : '' ?>
              >
                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings:<?= $_active ? "'FILL' 1" : "'FILL' 0" ?>"><?= $_item['icon'] ?></span>
                <?= htmlspecialchars($_item['label']) ?>
                <?php if ($_active): ?>
                  <span class="ml-auto w-1.5 h-1.5 rounded-full bg-sticker-green"></span>
                <?php endif; ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
  </nav>

  <!-- Sidebar Footer -->
  <div class="p-4 border-t border-white/10 flex-shrink-0">
    <a href="/" class="flex items-center gap-2 font-mono text-[11px] text-outline hover:text-paper-sand uppercase tracking-widest transition-colors">
      <span class="material-symbols-outlined text-[16px]">arrow_back</span>
      Kembali ke Website
    </a>
  </div>
</aside>

<!-- Sidebar overlay (mobile) -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-30 hidden lg:hidden" aria-hidden="true"></div>
