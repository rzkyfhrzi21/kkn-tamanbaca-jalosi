<?php
/**
 * components/footer.php
 * Footer publik (shared 6-page design)
 * Sumber: landing/tentang.html (design system terbaru)
 *
 * USAGE:
 *   <?php include __DIR__ . '/../components/footer.php'; ?>
 */
?>
<footer class="w-full bg-footer-bg border-t-2 border-deep-black py-16">
  <div class="max-w-[1200px] mx-auto px-margin-mobile lg:px-margin-desktop">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 border-b border-outline-variant pb-12 mb-12">
      <div class="space-y-4">
        <h4 class="font-label-stamp text-deep-black uppercase tracking-tighter">Hubungi Kami</h4>
        <p class="font-body-sm text-deep-black">Jalan Tegal Sari, Pekon Air Kubang, Kec. Air Naningan, Kab. Tanggamus, Lampung 35384<br/>info@jalosisanak.org<br/>+62 812 3456 7890</p>
      </div>
      <div class="space-y-4">
        <h4 class="font-label-stamp text-deep-black uppercase tracking-tighter">Jam Operasional</h4>
        <p class="font-body-sm text-deep-black">Senin - Jumat: 14:00 - 17:00<br/>Sabtu: 09:00 - 16:00<br/>Minggu: Libur</p>
      </div>
      <div class="space-y-4">
        <h4 class="font-label-stamp text-deep-black uppercase tracking-tighter">Kemitraan</h4>
        <div class="flex flex-wrap gap-4 items-center opacity-60 grayscale hover:grayscale-0 transition-all">
          <div class="w-12 h-12 bg-surface-container-highest rounded flex items-center justify-center"><span class="material-symbols-outlined text-outline">partner_exchange</span></div>
          <div class="w-12 h-12 bg-surface-container-highest rounded flex items-center justify-center"><span class="material-symbols-outlined text-outline">handshake</span></div>
        </div>
      </div>
    </div>
    <div class="flex flex-col md:flex-row justify-between items-center gap-6 font-label-mono text-[10px] text-on-surface-variant uppercase tracking-widest">
      <p>&copy; <?= date('Y') ?> TAMAN BACA JALOSI SANAK NEGERI.</p>
      <div class="flex gap-6">
        <a class="hover:text-deep-black" href="kontak">Privasi</a>
        <a class="hover:text-deep-black" href="kontak">Ketentuan</a>
      </div>
    </div>
  </div>
</footer>
<script>
function toggleMobileMenu(){document.getElementById("mobile-menu").classList.toggle("hidden");}
</script>
</body>
</html>