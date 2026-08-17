<?php
/**
 * components/btn-primary.php
 * Tombol CTA utama (brutalist primary button).
 *
 * USAGE:
 *   <?php
 *   $btn_href = 'program';
 *   $btn_text = '[ DETAIL PROGRAM &rarr; ]';
 *   $btn_extra_class = ''; // opsional, disisipkan setelah layout dasar
 *   include __DIR__ . '/../components/btn-primary.php';
 *   ?>
 */
$btn_href = $btn_href ?? '#';
$btn_text = $btn_text ?? 'Aksi';
$btn_extra_class = $btn_extra_class ?? '';
?>
<a class="inline-flex items-center gap-2 <?= htmlspecialchars($btn_extra_class) ?> bg-cream-terang text-on-primary font-handwriting text-label-mono px-6 py-3 uppercase tracking-wider shadow-[4px_4px_0px_0px_#000101] hover:translate-y-[2px] hover:translate-x-[2px] hover:shadow-[2px_2px_0px_0px_#000101] transition-all" href="<?= htmlspecialchars($btn_href) ?>"><?= $btn_text ?></a>
<?php unset($btn_href, $btn_text, $btn_extra_class); ?>