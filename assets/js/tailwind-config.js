/**
 * Shared Tailwind CSS Configuration
 * TBM Jalosi Sanak Negeri — Design System "Lo-Fi Craft"
 * Source: docs/STITCH/tetangga_baca_jalosi/DESIGN.md
 *
 * USAGE: Include BEFORE cdn.tailwindcss.com in <head>
 * <script src="/assets/js/tailwind-config.js"></script>
 * <script src="https://cdn.tailwindcss.com"></script>
 */
tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        /* ── Surface & Background ── */
        "surface":                   "#fdf9f3",
        "surface-dim":               "#ddd9d4",
        "surface-bright":            "#fdf9f3",
        "surface-container-lowest":  "#ffffff",
        "surface-container-low":     "#f7f3ed",
        "surface-container":         "#f1ede7",
        "surface-container-high":    "#ebe8e2",
        "surface-container-highest": "#e6e2dc",
        "background":                "#fdf9f3",
        "on-background":             "#1c1c18",

        /* ── On-Surface ── */
        "on-surface":         "#1c1c18",
        "on-surface-variant": "#4e4542",
        "inverse-surface":    "#31302d",
        "inverse-on-surface": "#f4f0ea",

        /* ── Outline ── */
        "outline":         "#7f7571",
        "outline-variant": "#d1c4c0",
        "surface-tint":    "#655d5a",

        /* ── Primary (Espresso) ── */
        "primary":           "#16100f",
        "on-primary":        "#ffffff",
        "primary-container": "#2b2523",
        "on-primary-container": "#958b88",
        "inverse-primary":   "#cfc4c1",
        "primary-fixed":     "#ece0dd",
        "primary-fixed-dim": "#cfc4c1",
        "on-primary-fixed":  "#201a18",
        "on-primary-fixed-variant": "#4c4543",

        /* ── Secondary (Terracotta/Amber) ── */
        "secondary":              "#904d00",
        "on-secondary":           "#ffffff",
        "secondary-container":    "#fe932c",
        "on-secondary-container": "#663500",
        "secondary-fixed":        "#ffdcc3",
        "secondary-fixed-dim":    "#ffb77d",
        "on-secondary-fixed":     "#2f1500",
        "on-secondary-fixed-variant": "#6e3900",

        /* ── Tertiary ── */
        "tertiary":              "#280600",
        "on-tertiary":           "#ffffff",
        "tertiary-container":    "#4c1200",
        "on-tertiary-container": "#ee602d",
        "tertiary-fixed":        "#ffdbd0",
        "tertiary-fixed-dim":    "#ffb59d",
        "on-tertiary-fixed":     "#390c00",
        "on-tertiary-fixed-variant": "#832600",

        /* ── Error ── */
        "error":             "#ba1a1a",
        "on-error":          "#ffffff",
        "error-container":   "#ffdad6",
        "on-error-container": "#93000a",

        /* ── Brand Accents (Stickers) ── */
        "aren-light":    "#FEF3C7",
        "paper-kraft":   "#EFE8DC",
        "paper-sand":    "#E5DDCF",
        "sticker-green": "#15803D",
        "sticker-blue":  "#1D4ED8",
        "espresso-dark": "#1E1A18",
        "deep-black":    "#000101",

        /* ── UI Specific ── */
        "header-bg": "#4B4B4A",
        "footer-bg": "#FEFFFE",
      },

      borderRadius: {
        "sm":      "0.25rem",
        DEFAULT:   "0.5rem",
        "md":      "0.75rem",
        "lg":      "1rem",
        "xl":      "1.5rem",
        "full":    "9999px",
      },

      spacing: {
        "unit":           "4px",
        "gutter":         "24px",
        "margin-mobile":  "16px",
        "margin-desktop": "40px",
        "container-max":  "1200px",
      },

      fontFamily: {
        "sans":        ["Plus Jakarta Sans", "sans-serif"],
        "display-h1":  ["Plus Jakarta Sans", "sans-serif"],
        "section-h2":  ["Plus Jakarta Sans", "sans-serif"],
        "card-h3":     ["Plus Jakarta Sans", "sans-serif"],
        "body-lg":     ["Plus Jakarta Sans", "sans-serif"],
        "body-sm":     ["Plus Jakarta Sans", "sans-serif"],
        "label-stamp": ["JetBrains Mono", "monospace"],
        "label-mono":  ["JetBrains Mono", "monospace"],
        "mono":        ["JetBrains Mono", "monospace"],
      },

      fontSize: {
        "display-h1": ["42px", { lineHeight: "1.2", letterSpacing: "-0.02em", fontWeight: "800" }],
        "display-h1-mobile": ["32px", { lineHeight: "1.2", letterSpacing: "-0.01em", fontWeight: "800" }],
        "section-h2": ["28px", { lineHeight: "1.3", letterSpacing: "0.02em", fontWeight: "700" }],
        "card-h3":    ["18px", { lineHeight: "1.4", fontWeight: "700" }],
        "body-lg":    ["16px", { lineHeight: "1.6", fontWeight: "400" }],
        "body-sm":    ["14px", { lineHeight: "1.5", fontWeight: "400" }],
        "label-stamp": ["12px", { lineHeight: "1", letterSpacing: "0.05em", fontWeight: "700" }],
        "label-mono":  ["13px", { lineHeight: "1.4", fontWeight: "500" }],
      },

      boxShadow: {
        "hard-sm":     "2px 2px 0px 0px #000101",
        "hard-md":     "4px 4px 0px 0px #000101",
        "hard-lg":     "6px 6px 0px 0px #000101",
        "hard-xl":     "8px 8px 0px 0px #000101",
        "hard-accent": "4px 4px 0px 0px #fe932c",
      },

      maxWidth: {
        "container": "1200px",
      },
    },
  },
};
