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
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
      <div class="space-y-4">
        <h4 class="font-label-stamp text-deep-black uppercase tracking-tighter">Hubungi Kami</h4>
        <p class="font-body-sm text-deep-black">Jalan Tegal Sari, Pekon Air Kubang, Kec. Air Naningan, Kab. Tanggamus, Lampung 35384</p>
        <div class="flex gap-4 pt-2">
          <a class="w-10 h-10 border-2 border-deep-black flex items-center justify-center hover:bg-primary-fixed transition-all cursor-pointer" href="javascript:void(0)" onclick="sharePage()" aria-label="Bagikan halaman">
            <span class="material-symbols-outlined text-[20px] text-deep-black">share</span>
          </a>
        </div>
      </div>
      <div class="space-y-4">
        <h4 class="font-label-stamp text-deep-black uppercase tracking-tighter">Jam Operasional</h4>
        <p class="font-body-sm text-deep-black">Senin - Jumat: 14:00 - 17:00<br/>Sabtu: 09:00 - 16:00<br/>Minggu: Libur</p>
      </div>
      <div class="space-y-4">
        <h4 class="font-label-stamp text-deep-black uppercase tracking-tighter">Kemitraan</h4>
        <div class="flex flex-col gap-3 font-label-mono text-[14px] text-deep-black">
          <span>SDN 3 &amp; IAR Partnership</span>
          <span>#TetanggaBaca</span>
        </div>
      </div>
      <div class="flex flex-col gap-4 md:items-start">
        <a class="group flex flex-col text-center uppercase" href="https://wa.me/6281234567890" target="_blank" rel="noopener" aria-label="Chat WhatsApp">
          <div class="border-2 border-deep-black px-5 py-2 font-medium transition-colors group-hover:bg-deep-black group-hover:text-footer-bg">+62 812 3456 7890</div>
          <div class="border-2 border-deep-black bg-deep-black px-5 py-2 text-footer-bg transition-colors group-hover:bg-footer-bg group-hover:text-deep-black">Chat WhatsApp</div>
        </a>
        <a class="group flex flex-col text-center uppercase" href="mailto:info@jalosisanak.org" aria-label="Email">
          <div class="border-2 border-deep-black px-5 py-2 font-medium transition-colors group-hover:bg-deep-black group-hover:text-footer-bg">info@jalosisanak.org</div>
          <div class="border-2 border-deep-black bg-deep-black px-5 py-2 text-footer-bg transition-colors group-hover:bg-footer-bg group-hover:text-deep-black">Email Kami</div>
        </a>
      </div>
    </div>
    <div class="flex flex-col md:flex-row justify-center md:justify-start items-center md:items-baseline gap-x-6 gap-y-2 font-label-mono text-[14px] text-deep-black uppercase tracking-widest border-t border-outline-variant pt-8 mt-12">
      <a class="hover:text-primary" href="kontak">Privasi</a>
      <a class="hover:text-primary" href="kontak">Ketentuan</a>
      <p>&copy; <?= date('Y') ?> Taman Baca Jalosi Sanak Negeri.</p>
    </div>
  </div>
</footer>
<script>
function sharePage(){
  var url = window.location.href;
  var title = document.title;
  if (navigator.share) {
    navigator.share({ title: title, url: url }).catch(function(){});
  } else {
    var dummy = document.createElement('textarea');
    dummy.value = url;
    document.body.appendChild(dummy);
    dummy.select();
    try { document.execCommand('copy'); } catch(err) {}
    document.body.removeChild(dummy);
    alert('Link halaman disalin: ' + url);
  }
}
function toggleMobileMenu(){
  var menu = document.getElementById("mobile-menu");
  if (!menu) return;
  var icon = document.querySelector("#mobile-menu-btn .material-symbols-outlined");
  var isOpen = !menu.classList.contains("hidden");
  if (isOpen) {
    menu.classList.add("hidden");
    document.body.style.overflow = "";
    if (icon) icon.textContent = "menu";
  } else {
    menu.classList.remove("hidden");
    document.body.style.overflow = "hidden";
    if (icon) icon.textContent = "close";
  }
}
document.addEventListener("click", function (e) {
  var menu = document.getElementById("mobile-menu");
  if (menu && !menu.classList.contains("hidden") && e.target.closest("#mobile-menu a")) {
    menu.classList.add("hidden");
    document.body.style.overflow = "";
    var icon = document.querySelector("#mobile-menu-btn .material-symbols-outlined");
    if (icon) icon.textContent = "menu";
  }
});
</script>
</body>
</html>