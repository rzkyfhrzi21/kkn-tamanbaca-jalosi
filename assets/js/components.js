/**
 * Component Loader Engine
 * TBM Jalosi Sanak Negeri
 *
 * Memuat komponen HTML reusable via fetch() ke elemen [data-component]
 * dan menandai link aktif berdasarkan URL saat ini.
 */
document.addEventListener("DOMContentLoaded", async () => {
  const componentElements = document.querySelectorAll("[data-component]");
  const currentPath = window.location.pathname.replace(/\/$/, "") || "/";

  // ── 1. Load semua komponen secara paralel ──
  const loadPromises = Array.from(componentElements).map(async (el) => {
    const name = el.getAttribute("data-component");
    try {
      const res = await fetch(`/components/${name}.html`);
      if (!res.ok) throw new Error(`HTTP ${res.status}`);
      const html = await res.text();
      el.innerHTML = html;
    } catch (err) {
      console.error(`[components.js] Gagal memuat komponen: ${name}`, err);
      el.innerHTML = `<!-- Komponen '${name}' tidak dapat dimuat -->`;
    }
  });

  await Promise.all(loadPromises);

  // ── 2. Highlight link aktif di navbar & sidebar ──
  document.querySelectorAll("nav a[href], aside a[href]").forEach((link) => {
    const href = (link.getAttribute("href") || "").replace(/\/$/, "") || "/";
    const isActive =
      href === currentPath ||
      (href !== "/" && currentPath.startsWith(href));

    if (isActive) {
      link.classList.add("nav-active");
      link.setAttribute("aria-current", "page");
    }
  });

  // ── 3. Hamburger Mobile Menu Toggle ──
  const mobileBtn  = document.querySelector("#mobile-menu-btn");
  const mobileMenu = document.querySelector("#mobile-menu");
  const menuIconOpen  = document.querySelector("#menu-icon-open");
  const menuIconClose = document.querySelector("#menu-icon-close");

  if (mobileBtn && mobileMenu) {
    mobileBtn.addEventListener("click", () => {
      const isOpen = !mobileMenu.classList.contains("hidden");
      mobileMenu.classList.toggle("hidden");
      mobileBtn.setAttribute("aria-expanded", String(!isOpen));

      if (menuIconOpen)  menuIconOpen.classList.toggle("hidden", !isOpen);
      if (menuIconClose) menuIconClose.classList.toggle("hidden", isOpen);
    });

    // Tutup menu saat klik di luar area navbar
    document.addEventListener("click", (e) => {
      if (!mobileMenu.contains(e.target) && !mobileBtn.contains(e.target)) {
        mobileMenu.classList.add("hidden");
        mobileBtn.setAttribute("aria-expanded", "false");
        if (menuIconOpen)  menuIconOpen.classList.remove("hidden");
        if (menuIconClose) menuIconClose.classList.add("hidden");
      }
    });
  }

  // ── 4. Smooth scroll untuk anchor link (#section-id) ──
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", (e) => {
      const id = anchor.getAttribute("href").slice(1);
      const target = document.getElementById(id);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth", block: "start" });
        // Update URL tanpa reload
        history.pushState(null, null, `#${id}`);
      }
    });
  });
});
