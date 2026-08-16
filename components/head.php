<?php
/**
 * components/head.php
 * Bagian <head> bersama (shared 6-page design, Tuku-Inspired Neighborhood Craft)
 * Sumber: landing/tentang.html (design system terbaru)
 *
 * WAJIB set $page_title & $page_desc sebelum include.
 * Opsional: $page_canonical (default '/'), $page_active (slug menu aktif).
 *
 * USAGE:
 *   <?php
 *   $page_title = '...';
 *   $page_desc  = '...';
 *   include __DIR__ . '/../components/head.php';
 *   ?>
 */
$page_title    = $page_title ?? 'TAMAN BACA Jalosi Sanak Negeri';
$page_desc     = $page_desc  ?? 'Taman Baca Jalosi Sanak Negeri, Pekon Air Kubang, Tanggamus, Lampung.';
$page_canonical = $page_canonical ?? '/';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_desc) ?>"/>
<link rel="canonical" href="<?= htmlspecialchars($page_canonical) ?>"/>
<link rel="icon" type="image/png" href="https://lh3.googleusercontent.com/aida/AP1WRLsJN0ukS58RdOYr01DoNAMnwiGJHZwR7_K4-lvo9t8Kwpeiflh08XEZEw0rDyHP4QhAAty9FjMoYeQhSEU3Jsc_-_bSf8Z-LeGRphflxZ99LzAakxHLEes3lFUqDkJglXBFqn2NXSQBE2_TWbPX5lG-2mttUCalboVb_XP6SzSM5hm-NZ7YjkQ29t6Ds2hZYh34eKdYmWhYPcUjCIEHYTWvlz0s7X1u8xh1cdTPLVGJPkIoJKPCM3EulEuhGYwUL7zJDq2aCCwh"/>
<link rel="stylesheet" href="assets/css/fonts.css"/>
<style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style>
<script src="https://cdn.tailwindcss.com"></script>
<script id="tailwind-config">tailwind.config={theme:{extend:{"colors":{"inverse-surface":"#2e3131","tertiary-container":"#a2bc48","on-error":"#ffffff","on-error-container":"#93000a","on-surface-variant":"#4c463d","inverse-on-surface":"#f0f1f0","primary-container":"#c1af91","secondary":"#5f5e5d","coffee-accent":"#C1AF91","secondary-fixed":"#e4e2e0","surface-dim":"#d9dad9","on-secondary":"#000101","background":"#f8faf9","surface-variant":"#e1e3e2","primary-fixed":"#f4e0c0","on-surface":"#191c1c","on-primary-fixed":"#241a06","surface-tint":"#6b5c43","surface-container":"#edeeed","on-background":"#191c1c","surface-container-high":"#e7e8e7","sticker-green":"#BBD65F","secondary-fixed-dim":"#c8c6c5","surface-bright":"#f8faf9","on-tertiary-fixed-variant":"#3d4c00","footer-bg":"#FEFFFE","primary-fixed-dim":"#d7c4a5","on-secondary-fixed-variant":"#474746","on-tertiary":"#ffffff","on-secondary-fixed":"#1b1c1b","on-tertiary-fixed":"#171e00","on-primary":"#000101","outline-variant":"#cfc5b9","surface-container-highest":"#e1e3e2","inverse-primary":"#d7c4a5","surface-container-lowest":"#ffffff","on-primary-fixed-variant":"#52452d","error-container":"#ffdad6","surface":"#f8faf9","on-primary-container":"#4f422b","outline":"#7d766c","error":"#ba1a1a","on-secondary-container":"#656463","tertiary":"#526600","secondary-container":"#e4e2e0","on-tertiary-container":"#3b4a00","primary":"#C1AF91","deep-black":"#000101","surface-container-low":"#f3f4f3","tertiary-fixed":"#d2ee74","header-bg":"#4B4B4A","tertiary-fixed-dim":"#b7d25b","cream":"#C1AF91","hijau-stabilo":"#BBD65F","hitam":"#000101","putih":"#FEFFFE","abu-gelap":"#4B4B4A","oren":"#B66445"},"borderRadius":{"DEFAULT":"0.25rem","lg":"0.5rem","xl":"0.75rem","full":"9999px"},"spacing":{"margin-mobile":"16px","unit":"4px","container-max":"1200px","gutter":"24px","margin-desktop":"40px"},"fontFamily":{"headline-md":["__tuku_handwriting_c420db","__tuku_handwriting_Fallback_c420db"],"headline-lg-mobile":["__tuku_handwriting_c420db","__tuku_handwriting_Fallback_c420db"],"body-sm":["__tuku_sub_head_6d0d6c","__tuku_sub_head_Fallback_6d0d6c"],"label-mono":["__tuku_sub_head_6d0d6c","__tuku_sub_head_Fallback_6d0d6c"],"headline-sm":["__tuku_handwriting_c420db","__tuku_handwriting_Fallback_c420db"],"label-stamp":["__tuku_handwriting_c420db","__tuku_handwriting_Fallback_c420db"],"body-lg":["__tuku_sub_head_6d0d6c","__tuku_sub_head_Fallback_6d0d6c"],"headline-lg":["__tuku_handwriting_c420db","__tuku_handwriting_Fallback_c420db"],"handwriting":["__tuku_handwriting_c420db","__tuku_handwriting_Fallback_c420db"]},"fontSize":{"headline-md":["28px",{"lineHeight":"1.3","letterSpacing":"0.02em","fontWeight":"400"}],"headline-lg-mobile":["30px",{"lineHeight":"1.2","letterSpacing":"-0.01em","fontWeight":"400"}],"body-sm":["14px",{"lineHeight":"1.5","fontWeight":"400"}],"label-mono":["13px",{"lineHeight":"1.4","fontWeight":"400"}],"headline-sm":["18px",{"lineHeight":"1.4","fontWeight":"400"}],"label-stamp":["12px",{"lineHeight":"1.0","letterSpacing":"0.05em","fontWeight":"400"}],"body-lg":["16px",{"lineHeight":"1.6","fontWeight":"400"}],"headline-lg":["30px",{"lineHeight":"1.2","letterSpacing":"-0.02em","fontWeight":"400"}]}}}}</script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100..900&family=Plus+Jakarta+Sans:wght@100..900&display=swap" rel="stylesheet"/>
</head>