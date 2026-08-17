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
$page_title    = $page_title ?? 'Taman Baca Jalosi Sanak Negeri';
$page_desc     = $page_desc  ?? 'Taman Baca Jalosi Sanak Negeri, Pekon Air Kubang, Tanggamus, Lampung.';
$page_canonical = $page_canonical ?? '/';
$page_active   = $page_active ?? '';
$page_keywords = $page_keywords ?? 'taman baca, taman baca masyarakat, perpustakaan, literasi, Pekon Air Kubang, Tanggamus, Lampung, buku, komunitas';

/* ── SEO: identitas situs & halaman ─────────────────────────── */
$site_url      = 'https://tbjalosi.web.id';
$site_name     = 'Taman Baca Jalosi Sanak Negeri';
$site_locale   = 'id_ID';
$page_url      = rtrim($site_url, '/') . '/' . ltrim($page_canonical, '/');
if ($page_canonical === '/' || $page_canonical === '') { $page_url = $site_url . '/'; }
$seo_title     = ($page_canonical === '/' || $page_active === 'beranda')
  ? $page_title
  : $page_title . ' – ' . $site_name;
$og_image      = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCRqvPY4hVpJ2IC1cPBGPIBzfGVTfCDxhPBJ1_VnCqVhsFry4TrqRxtuyey4-jnTURsuUi9WuqkTEjBcXd8BMnFfU60e2iDRJeU2RYpu-aRDSPhYVWVj-D1eSgUMEXEde-foYSFeOw8JbWBORDY1-NBNVl8-HWjhuzRqfQ9I3wCd_NwGTAZ2o9LSA--hECsbNZDfv4Hjkr8Skok4rAAED152Yni9YAsiPLLqi-NrVsmlQdCm-8MBsI7';
$og_image_alt  = 'Suasana hangat Taman Baca Jalosi Sanak Negeri, Pekon Air Kubang, Tanggamus.';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?= htmlspecialchars($seo_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_desc) ?>"/>
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>"/>
<meta name="author" content="Taman Baca Jalosi Sanak Negeri"/>
<meta name="theme-color" content="#000101"/>
<link rel="canonical" href="<?= htmlspecialchars($page_url) ?>"/>
<!-- Open Graph -->
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="<?= htmlspecialchars($site_name) ?>"/>
<meta property="og:locale" content="<?= $site_locale ?>"/>
<meta property="og:title" content="<?= htmlspecialchars($seo_title) ?>"/>
<meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>"/>
<meta property="og:url" content="<?= htmlspecialchars($page_url) ?>"/>
<meta property="og:image" content="<?= htmlspecialchars($og_image) ?>"/>
<meta property="og:image:alt" content="<?= htmlspecialchars($og_image_alt) ?>"/>
<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:title" content="<?= htmlspecialchars($seo_title) ?>"/>
<meta name="twitter:description" content="<?= htmlspecialchars($page_desc) ?>"/>
<meta name="twitter:image" content="<?= htmlspecialchars($og_image) ?>"/>
<link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo-jalosi.png"/>
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo-jalosi.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="assets/images/logo-jalosi.png"/>
<link rel="stylesheet" href="assets/css/fonts.css"/>
<style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style>
<script src="https://cdn.tailwindcss.com"></script>
<script id="tailwind-config">tailwind.config={theme:{extend:{"colors":{"inverse-surface":"#2e3131","tertiary-container":"#a2bc48","on-error":"#ffffff","on-error-container":"#93000a","on-surface-variant":"#4c463d","inverse-on-surface":"#f0f1f0","secondary":"#5f5e5d","secondary-fixed":"#e4e2e0","surface-dim":"#d9dad9","on-secondary":"#000101","background":"#f8faf9","surface-variant":"#e1e3e2","primary-fixed":"#f4e0c0","on-surface":"#191c1c","on-primary-fixed":"#241a06","surface-tint":"#6b5c43","surface-container":"#edeeed","on-background":"#191c1c","surface-container-high":"#e7e8e7","sticker-green":"#BBD65F","secondary-fixed-dim":"#c8c6c5","surface-bright":"#f8faf9","on-tertiary-fixed-variant":"#3d4c00","footer-bg":"#FEFFFE","on-secondary-fixed-variant":"#474746","on-tertiary":"#ffffff","on-secondary-fixed":"#1b1c1b","on-tertiary-fixed":"#171e00","on-primary":"#000101","outline-variant":"#cfc5b9","surface-container-highest":"#e1e3e2","surface-container-lowest":"#ffffff","on-primary-fixed-variant":"#52452d","error-container":"#ffdad6","surface":"#f8faf9","on-primary-container":"#4f422b","outline":"#7d766c","error":"#ba1a1a","on-secondary-container":"#656463","tertiary":"#526600","secondary-container":"#e4e2e0","on-tertiary-container":"#3b4a00","deep-black":"#000101","surface-container-low":"#f3f4f3","tertiary-fixed":"#d2ee74","header-bg":"#4B4B4A","tertiary-fixed-dim":"#b7d25b","hijau-stabilo":"#BBD65F","hitam":"#000101","putih":"#FEFFFE","abu-gelap":"#4B4B4A","oren":"#B66746","oren-gelap":"#B66746","oren-terang":"#E9922D","kuning-emas":"#D3AE3F","cream-terang":"#f4e0c0"},"borderRadius":{"DEFAULT":"0.25rem","lg":"0.5rem","xl":"0.75rem","full":"9999px"},"spacing":{"margin-mobile":"16px","unit":"4px","container-max":"1200px","gutter":"24px","margin-desktop":"40px"},"fontFamily":{"headline-md":["__tuku_handwriting_c420db","__tuku_handwriting_Fallback_c420db"],"headline-lg-mobile":["__tuku_handwriting_c420db","__tuku_handwriting_Fallback_c420db"],"body-sm":["__tuku_sub_head_6d0d6c","__tuku_sub_head_Fallback_6d0d6c"],"label-mono":["__tuku_sub_head_6d0d6c","__tuku_sub_head_Fallback_6d0d6c"],"headline-sm":["__tuku_handwriting_c420db","__tuku_handwriting_Fallback_c420db"],"label-stamp":["__tuku_handwriting_c420db","__tuku_handwriting_Fallback_c420db"],"body-lg":["__tuku_sub_head_6d0d6c","__tuku_sub_head_Fallback_6d0d6c"],"headline-lg":["__tuku_handwriting_c420db","__tuku_handwriting_Fallback_c420db"],"handwriting":["__tuku_handwriting_c420db","__tuku_handwriting_Fallback_c420db"]},"fontSize":{"headline-md":["28px",{"lineHeight":"1.3","letterSpacing":"0.02em","fontWeight":"400"}],"headline-lg-mobile":["30px",{"lineHeight":"1.2","letterSpacing":"-0.01em","fontWeight":"400"}],"body-sm":["14px",{"lineHeight":"1.5","fontWeight":"400"}],"label-mono":["13px",{"lineHeight":"1.4","fontWeight":"400"}],"headline-sm":["18px",{"lineHeight":"1.4","fontWeight":"400"}],"label-stamp":["12px",{"lineHeight":"1.0","letterSpacing":"0.05em","fontWeight":"400"}],"body-lg":["16px",{"lineHeight":"1.6","fontWeight":"400"}],"headline-lg":["30px",{"lineHeight":"1.2","letterSpacing":"-0.02em","fontWeight":"400"}]}}}}</script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100..900&family=Plus+Jakarta+Sans:wght@100..900&display=swap" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link rel="preconnect" href="https://www.tuku.coffee"/>
<link rel="preconnect" href="https://lh3.googleusercontent.com"/>
<?php
/* ── JSON-LD Structured Data (Organization + WebSite + WebPage + BreadcrumbList) ── */
$_breadcrumb = [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Beranda', 'item' => $site_url . '/'],
];
if ($page_canonical !== '/' && $page_canonical !== '') {
  $_breadcrumb[] = [
    '@type'    => 'ListItem',
    'position' => 2,
    'name'     => $page_title,
    'item'     => $page_url,
  ];
}
$_jsonld = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type' => 'Organization',
      '@id'   => $site_url . '/#organization',
      'name'  => $site_name,
      'url'   => $site_url . '/',
      'logo'  => ['@type' => 'ImageObject', '@id' => $site_url . '/#logo', 'url' => $og_image, 'caption' => $og_image_alt],
      'image' => $og_image,
      'description' => 'Taman baca masyarakat di Pekon Air Kubang, Tanggamus, Lampung. Berdiri 17 Juli 2015 dengan koleksi lebih dari 1,500 buku serta program literasi, komputer, seni, dan konservasi.',
      'foundingDate' => '2015-07-17',
      'founder' => ['@type' => 'Person', 'name' => 'Tamar Widadi'],
      'address' => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => 'Jalan Tegal Sari, Pekon Air Kubang',
        'addressLocality' => 'Kec. Air Naningan',
        'addressRegion'   => 'Kab. Tanggamus, Lampung',
        'postalCode'      => '35384',
        'addressCountry'  => 'ID',
      ],
      'contactPoint' => [
        '@type'            => 'ContactPoint',
        'telephone'        => '+62-812-3456-7890',
        'contactType'      => 'customer service',
        'email'            => 'info@jalosisanak.org',
        'availableLanguage'=> 'id',
      ],
    ],
    [
      '@type'      => 'WebSite',
      '@id'        => $site_url . '/#website',
      'url'        => $site_url . '/',
      'name'       => $site_name,
      'publisher'  => ['@id' => $site_url . '/#organization'],
      'inLanguage' => 'id-ID',
    ],
    [
      '@type'       => 'WebPage',
      '@id'         => $page_url . '#webpage',
      'url'         => $page_url,
      'name'        => $seo_title,
      'description' => $page_desc,
      'isPartOf'    => ['@id' => $site_url . '/#website'],
      'inLanguage'  => 'id-ID',
    ],
    ['@type' => 'BreadcrumbList', 'itemListElement' => $_breadcrumb],
  ],
];
?>
<script type="application/ld+json"><?= json_encode($_jsonld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
</head>