/**
 * main.js — Global Interaction Script
 * TBM Jalosi Sanak Negeri
 *
 * PHP handles component inclusion.
 * This file handles client-side interactions only.
 */

document.addEventListener('DOMContentLoaded', function () {

  // ── 1. Hamburger Mobile Menu Toggle ──────────────────────────
  const mobileBtn   = document.getElementById('mobile-menu-btn');
  const mobileMenu  = document.getElementById('mobile-menu');
  const iconOpen    = document.getElementById('menu-icon-open');
  const iconClose   = document.getElementById('menu-icon-close');

  if (mobileBtn && mobileMenu) {
    mobileBtn.addEventListener('click', function () {
      const isOpen = !mobileMenu.classList.contains('hidden');
      mobileMenu.classList.toggle('hidden');
      mobileBtn.setAttribute('aria-expanded', String(!isOpen));
      if (iconOpen)  iconOpen.classList.toggle('hidden', !isOpen);
      if (iconClose) iconClose.classList.toggle('hidden', isOpen);
    });

    // Tutup saat klik di luar area
    document.addEventListener('click', function (e) {
      if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
        const header = document.querySelector('header');
        if (header && !header.contains(e.target)) {
          mobileMenu.classList.add('hidden');
          mobileBtn.setAttribute('aria-expanded', 'false');
          if (iconOpen)  iconOpen.classList.remove('hidden');
          if (iconClose) iconClose.classList.add('hidden');
        }
      }
    });

    // Tutup saat ESC
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.add('hidden');
        mobileBtn.setAttribute('aria-expanded', 'false');
        if (iconOpen)  iconOpen.classList.remove('hidden');
        if (iconClose) iconClose.classList.add('hidden');
        mobileBtn.focus();
      }
    });
  }

  // ── 2. Dashboard Sidebar Toggle (Mobile) ─────────────────────
  const sidebarToggleBtn = document.getElementById('sidebar-toggle-btn');
  const sidebar          = document.getElementById('dashboard-sidebar');
  const sidebarOverlay   = document.getElementById('sidebar-overlay');

  if (sidebarToggleBtn && sidebar) {
    sidebarToggleBtn.addEventListener('click', function () {
      sidebar.classList.toggle('-translate-x-full');
      if (sidebarOverlay) sidebarOverlay.classList.toggle('hidden');
    });
    if (sidebarOverlay) {
      sidebarOverlay.addEventListener('click', function () {
        sidebar.classList.add('-translate-x-full');
        sidebarOverlay.classList.add('hidden');
      });
    }
  }

  // ── 3. Smooth Scroll untuk Anchor Link (#section-id) ─────────
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const id     = this.getAttribute('href').slice(1);
      const target = document.getElementById(id);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        history.pushState(null, null, '#' + id);
      }
    });
  });

  // ── 4. Scroll-to-Top Button ───────────────────────────────────
  const scrollBtn = document.getElementById('scroll-to-top');
  if (scrollBtn) {
    window.addEventListener('scroll', function () {
      scrollBtn.classList.toggle('hidden', window.scrollY < 400);
    }, { passive: true });
    scrollBtn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // ── 5. Navbar shadow on scroll ────────────────────────────────
  const headerEl = document.querySelector('header');
  if (headerEl) {
    window.addEventListener('scroll', function () {
      headerEl.style.boxShadow = window.scrollY > 10
        ? '0 2px 0 0 #000101'
        : 'none';
    }, { passive: true });
  }

  // ── 6. Copy to Clipboard (Alamat, dsb.) ──────────────────────
  document.querySelectorAll('[data-clipboard]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const targetId = this.getAttribute('data-clipboard');
      const target   = document.getElementById(targetId);
      if (!target) return;
      const icon = this.querySelector('[data-clipboard-icon]') || this.querySelector('.material-symbols-outlined');
      navigator.clipboard.writeText(target.innerText.trim()).then(function () {
        if (icon) { const orig = icon.innerText; icon.innerText = 'check'; icon.classList.add('text-sticker-green'); setTimeout(function() { icon.innerText = orig; icon.classList.remove('text-sticker-green'); }, 2000); }
      }).catch(console.error);
    });
  });

  // ── 7. Accordion / FAQ (native <details> sudah handle ini) ───
  // Untuk <details> non-native, fallback manual:
  document.querySelectorAll('[data-accordion-trigger]').forEach(function (trigger) {
    trigger.addEventListener('click', function () {
      const panelId = this.getAttribute('data-accordion-trigger');
      const panel   = document.getElementById(panelId);
      const icon    = this.querySelector('[data-accordion-icon]');
      if (!panel) return;
      const isOpen = !panel.classList.contains('hidden');
      panel.classList.toggle('hidden', isOpen);
      this.setAttribute('aria-expanded', String(!isOpen));
      if (icon) icon.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
    });
  });

});
