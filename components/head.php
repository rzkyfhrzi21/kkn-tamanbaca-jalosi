<?php
/**
 * components/head.php
 * Bagian <head> bersama (Tuku-Inspired Neighborhood Craft)
 * Sumber: docs/STITCH/ (folder desain Stitch)
 *
 * WAJIB set $page_title & $page_desc sebelum include.
 * USAGE:
 *   <?php $page_title='...'; $page_desc='...'; include __DIR__ . '/../components/head.php'; ?>
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc) ?>" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="<?= htmlspecialchars($page_canonical ?? '/') ?>" />

  <style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style>

  <script src="/assets/js/tailwind-config.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="/assets/css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100..900&family=Plus+Jakarta+Sans:wght@100..900&display=swap" rel="stylesheet" />
</head>
