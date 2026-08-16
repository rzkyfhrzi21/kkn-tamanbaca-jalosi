<?php
/**
 * components/section-header.php
 * Header section bersama: judul besar + kicker label (brutalist section header).
 *
 * USAGE:
 *   <?php
 *   $section_title  = '4 Pilar Program';
 *   $section_kicker = 'LITERASI UNTUK SEMUA';                 // opsional
 *   $section_kicker_class = 'text-on-surface-variant hidden md:block'; // opsional
 *   include __DIR__ . '/../components/section-header.php';
 *   ?>
 */
$section_title = $section_title ?? '';
$section_kicker = $section_kicker ?? '';
$section_kicker_class = $section_kicker_class ?? 'text-on-surface-variant hidden md:block';
?>
<div class="flex flex-col md:flex-row justify-between items-end mb-12 border-b-2 border-deep-black pb-4">
  <h2 class="font-headline-md text-headline-md text-deep-black uppercase"><?= htmlspecialchars($section_title) ?></h2>
  <?php if ($section_kicker !== ''): ?>
  <span class="font-label-mono text-label-mono <?= htmlspecialchars($section_kicker_class) ?>">[ <?= htmlspecialchars($section_kicker) ?> ]</span>
  <?php endif; ?>
</div>
<?php unset($section_title, $section_kicker, $section_kicker_class); ?>