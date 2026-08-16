<?php
/**
 * components/footer.php
 * Footer publik — dipakai di semua halaman landing
 */
?>
<footer class="w-full bg-footer-bg border-t-2 border-deep-black pt-14 pb-8">
  <div class="max-w-container mx-auto px-margin-mobile lg:px-margin-desktop">

    <!-- Grid 3 Kolom -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 border-b-2 border-outline-variant pb-12 mb-10">

      <!-- Kolom 1: Brand & Kontak -->
      <div class="space-y-4">
        <img src="/assets/images/logo-placeholder.svg" alt="Logo TBM Jalosi" width="100" height="33"
             class="h-8 w-auto mb-2" onerror="this.style.display='none'">
        <h4 class="font-mono text-[11px] text-deep-black uppercase tracking-[0.15em] font-bold">Hubungi Kami</h4>
        <address class="not-italic font-sans text-sm text-on-surface-variant leading-relaxed space-y-1">
          <p>Pekon Air Kubang, Kec. Air Naningan</p>
          <p>Kab. Tanggamus, Lampung 35384</p>
          <p class="mt-2">
            <a href="mailto:info@jalosisanak.id" class="hover:text-secondary transition-colors underline-offset-2 hover:underline">info@jalosisanak.id</a>
          </p>
          <p><a href="tel:+6285267890000" class="hover:text-secondary transition-colors">0852-xxxx-xxxx</a></p>
        </address>
      </div>

      <!-- Kolom 2: Jam Operasional -->
      <div class="space-y-4">
        <h4 class="font-mono text-[11px] text-deep-black uppercase tracking-[0.15em] font-bold">Jam Operasional</h4>
        <dl class="font-sans text-sm text-on-surface-variant space-y-2">
          <div class="flex justify-between border-b border-outline-variant pb-1.5">
            <dt>Senin – Jumat</dt>
            <dd class="font-mono text-[12px] font-medium">14:00 – 17:00</dd>
          </div>
          <div class="flex justify-between border-b border-outline-variant pb-1.5">
            <dt>Sabtu</dt>
            <dd class="font-mono text-[12px] font-medium">09:00 – 16:00</dd>
          </div>
          <div class="flex justify-between">
            <dt>Minggu</dt>
            <dd class="font-mono text-[12px] text-outline">Libur</dd>
          </div>
        </dl>
        <div class="inline-flex items-center gap-2 bg-aren-light border border-secondary text-secondary font-mono text-[11px] px-3 py-1 rounded-full mt-2">
          <span class="w-2 h-2 rounded-full bg-sticker-green inline-block animate-pulse"></span>
          Buka Sekarang
        </div>
      </div>

      <!-- Kolom 3: Navigasi -->
      <div class="space-y-4">
        <h4 class="font-mono text-[11px] text-deep-black uppercase tracking-[0.15em] font-bold">Halaman</h4>
        <nav class="grid grid-cols-2 gap-x-4 gap-y-2" aria-label="Footer Navigation">
          <?php
          $footer_links = [
            ['href' => '/',            'label' => 'Beranda'],
            ['href' => '/tentang',     'label' => 'Tentang'],
            ['href' => '/program',     'label' => 'Program'],
            ['href' => '/katalog',     'label' => 'Katalog'],
            ['href' => '/pojok-karya', 'label' => 'Pojok Karya'],
            ['href' => '/donasi',      'label' => 'Donasi'],
            ['href' => '/kontak',      'label' => 'Kontak'],
          ];
          foreach ($footer_links as $fl): ?>
            <a href="<?= $fl['href'] ?>" class="font-mono text-[11px] text-on-surface-variant hover:text-secondary uppercase tracking-wider transition-colors">
              <?= htmlspecialchars($fl['label']) ?>
            </a>
          <?php endforeach; ?>
        </nav>
        <div class="mt-4 pt-4 border-t border-outline-variant">
          <p class="font-mono text-[10px] text-outline uppercase tracking-widest mb-2">Mitra</p>
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 bg-surface-container border border-outline-variant rounded flex items-center justify-center">
              <span class="material-symbols-outlined text-outline text-[18px]">school</span>
            </div>
            <div class="w-9 h-9 bg-surface-container border border-outline-variant rounded flex items-center justify-center">
              <span class="material-symbols-outlined text-outline text-[18px]">handshake</span>
            </div>
          </div>
          <p class="font-mono text-[10px] text-outline mt-2">SDN 3 Air Kubang &amp; IAR Partnership</p>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="flex flex-col md:flex-row justify-between items-center gap-2 font-mono text-[10px] text-outline uppercase tracking-widest">
      <p>&copy; 2015–2025 TBM Jalosi Sanak Negeri. #TetanggaBaca.</p>
      <p class="text-outline-variant">Pure PHP &middot; Tailwind CSS &middot; Made with ♥ for the community</p>
    </div>
  </div>
</footer>
