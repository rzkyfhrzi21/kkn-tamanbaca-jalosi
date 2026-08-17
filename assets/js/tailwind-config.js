/**
 * Shared Tailwind CSS Configuration
 * TBM Jalosi Sanak Negeri - Design System "Tuku-Inspired Neighborhood Craft"
 * Source: docs/STITCH/tuku_inspired_neighborhood_craft/DESIGN.md
 * (Identik dengan tailwind.config yang dipakai setiap code.html di docs/STITCH)
 *
 * USAGE: Include BEFORE cdn.tailwindcss.com in <head>
 * <script src="/assets/js/tailwind-config.js"></script>
 * <script src="https://cdn.tailwindcss.com"></script>
 */
tailwind.config = {
  theme: {
    extend: {
      colors: {
        "inverse-surface": "#2e3131",
        "tertiary-container": "#a2bc48",
        "on-error": "#ffffff",
        "on-error-container": "#93000a",
        "on-surface-variant": "#4c463d",
        "inverse-on-surface": "#f0f1f0",
        
        "secondary": "#5f5e5d",
        
        "secondary-fixed": "#e4e2e0",
        "surface-dim": "#d9dad9",
        "on-secondary": "#ffffff",
        "background": "#f8faf9",
        "surface-variant": "#e1e3e2",
        "primary-fixed": "#f4e0c0",
        "on-surface": "#191c1c",
        "on-primary-fixed": "#241a06",
        "surface-tint": "#6b5c43",
        "surface-container": "#edeeed",
        "on-background": "#191c1c",
        "surface-container-high": "#e7e8e7",
        "sticker-green": "#BBD65F",
        "secondary-fixed-dim": "#c8c6c5",
        "surface-bright": "#f8faf9",
        "on-tertiary-fixed-variant": "#3d4c00",
        "footer-bg": "#FEFFFE",
        
        "on-secondary-fixed-variant": "#474746",
        "on-tertiary": "#ffffff",
        "on-secondary-fixed": "#1b1c1b",
        "on-tertiary-fixed": "#171e00",
        "on-primary": "#ffffff",
        "outline-variant": "#cfc5b9",
        "surface-container-highest": "#e1e3e2",
        
        "surface-container-lowest": "#ffffff",
        "on-primary-fixed-variant": "#52452d",
        "error-container": "#ffdad6",
        "surface": "#f8faf9",
        "on-primary-container": "#4f422b",
        "outline": "#7d766c",
        "error": "#ba1a1a",
        "on-secondary-container": "#656463",
        "tertiary": "#526600",
        "secondary-container": "#e4e2e0",
        "on-tertiary-container": "#3b4a00",
        "primary": "#6b5c43",
        "deep-black": "#000101",
        "surface-container-low": "#f3f4f3",
        "tertiary-fixed": "#d2ee74",
        "header-bg": "#4B4B4A",
        "tertiary-fixed-dim": "#b7d25b",
        
        "hijau-stabilo": "#BBD65F",
        "hitam": "#000101",
        "putih": "#FEFFFE",
        "abu-gelap": "#4B4B4A",
        "oren": "#B66746",
        "oren-gelap": "#B66746",
        "oren-terang": "#E9922D",
        "kuning-emas": "#D3AE3F",
        "cream-terang": "#f4e0c0",
      },
      borderRadius: {
        DEFAULT: "0.25rem",
        "lg": "0.5rem",
        "xl": "0.75rem",
        "full": "9999px",
      },
      spacing: {
        "margin-mobile": "16px",
        "unit": "4px",
        "container-max": "1200px",
        "gutter": "24px",
        "margin-desktop": "40px",
      },
      fontFamily: {
        "headline-md": ["__tuku_handwriting_c420db", "__tuku_handwriting_Fallback_c420db"],
        "headline-lg-mobile": ["__tuku_handwriting_c420db", "__tuku_handwriting_Fallback_c420db"],
        "body-sm": ["__tuku_sub_head_6d0d6c", "__tuku_sub_head_Fallback_6d0d6c"],
        "label-mono": ["__tuku_sub_head_6d0d6c", "__tuku_sub_head_Fallback_6d0d6c"],
        "headline-sm": ["__tuku_handwriting_c420db", "__tuku_handwriting_Fallback_c420db"],
        "label-stamp": ["__tuku_handwriting_c420db", "__tuku_handwriting_Fallback_c420db"],
        "body-lg": ["__tuku_sub_head_6d0d6c", "__tuku_sub_head_Fallback_6d0d6c"],
        "headline-lg": ["__tuku_handwriting_c420db", "__tuku_handwriting_Fallback_c420db"],
        "handwriting": ["__tuku_handwriting_c420db", "__tuku_handwriting_Fallback_c420db"],
      },
      fontSize: {
        "headline-md": ["28px", { lineHeight: "1.3", letterSpacing: "0.02em", fontWeight: "400" }],
        "headline-lg-mobile": ["30px", { lineHeight: "1.2", letterSpacing: "-0.01em", fontWeight: "400" }],
        "body-sm": ["14px", { lineHeight: "1.5", fontWeight: "400" }],
        "label-mono": ["13px", { lineHeight: "1.4", fontWeight: "400" }],
        "headline-sm": ["18px", { lineHeight: "1.4", fontWeight: "400" }],
        "label-stamp": ["12px", { lineHeight: "1.0", letterSpacing: "0.05em", fontWeight: "400" }],
        "body-lg": ["16px", { lineHeight: "1.6", fontWeight: "400" }],
        "headline-lg": ["30px", { lineHeight: "1.2", letterSpacing: "-0.02em", fontWeight: "400" }],
      },
    },
  },
};
