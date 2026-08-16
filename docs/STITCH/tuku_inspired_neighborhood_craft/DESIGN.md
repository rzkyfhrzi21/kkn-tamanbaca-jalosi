---
name: Tuku-Inspired Neighborhood Craft
colors:
  surface: '#f8faf9'
  surface-dim: '#d9dad9'
  surface-bright: '#f8faf9'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f3f4f3'
  surface-container: '#edeeed'
  surface-container-high: '#e7e8e7'
  surface-container-highest: '#e1e3e2'
  on-surface: '#191c1c'
  on-surface-variant: '#4c463d'
  inverse-surface: '#2e3131'
  inverse-on-surface: '#f0f1f0'
  outline: '#7d766c'
  outline-variant: '#cfc5b9'
  surface-tint: '#6b5c43'
  primary: '#6b5c43'
  on-primary: '#ffffff'
  primary-container: '#c1af91'
  on-primary-container: '#4f422b'
  inverse-primary: '#d7c4a5'
  secondary: '#5f5e5d'
  on-secondary: '#ffffff'
  secondary-container: '#e4e2e0'
  on-secondary-container: '#656463'
  tertiary: '#526600'
  on-tertiary: '#ffffff'
  tertiary-container: '#a2bc48'
  on-tertiary-container: '#3b4a00'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#f4e0c0'
  primary-fixed-dim: '#d7c4a5'
  on-primary-fixed: '#241a06'
  on-primary-fixed-variant: '#52452d'
  secondary-fixed: '#e4e2e0'
  secondary-fixed-dim: '#c8c6c5'
  on-secondary-fixed: '#1b1c1b'
  on-secondary-fixed-variant: '#474746'
  tertiary-fixed: '#d2ee74'
  tertiary-fixed-dim: '#b7d25b'
  on-tertiary-fixed: '#171e00'
  on-tertiary-fixed-variant: '#3d4c00'
  background: '#f8faf9'
  on-background: '#191c1c'
  surface-variant: '#e1e3e2'
  deep-black: '#000101'
  coffee-accent: '#C1AF91'
  sticker-green: '#BBD65F'
  header-bg: '#4B4B4A'
  footer-bg: '#FEFFFE'
typography:
  headline-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 42px
    fontWeight: '800'
    lineHeight: '1.2'
    letterSpacing: -0.02em
  headline-lg-mobile:
    fontFamily: Plus Jakarta Sans
    fontSize: 32px
    fontWeight: '800'
    lineHeight: '1.2'
    letterSpacing: -0.01em
  headline-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 28px
    fontWeight: '700'
    lineHeight: '1.3'
    letterSpacing: 0.02em
  headline-sm:
    fontFamily: Plus Jakarta Sans
    fontSize: 18px
    fontWeight: '700'
    lineHeight: '1.4'
  body-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.6'
  body-sm:
    fontFamily: Plus Jakarta Sans
    fontSize: 14px
    fontWeight: '400'
    lineHeight: '1.5'
  label-stamp:
    fontFamily: JetBrains Mono
    fontSize: 12px
    fontWeight: '700'
    lineHeight: '1.0'
    letterSpacing: 0.05em
  label-mono:
    fontFamily: JetBrains Mono
    fontSize: 13px
    fontWeight: '500'
    lineHeight: '1.4'
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  unit: 4px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 40px
  container-max: 1200px
---

## Brand & Style

The design system adopts a **Modern-Brutalist** aesthetic with a **Tactile** finish, heavily inspired by the "Tuku" neighborhood coffee culture. It reflects a community-centric, unpretentious, and "grounded" personality. The visual narrative is built on the metaphor of physical artifacts: hand-stamped coffee sleeves, kraft paper menus, and library index cards.

The design movement is a blend of **High-Contrast Bold** and **Minimalist Utility**. It avoids digital-first perfections like gradients and soft glows in favor of raw, architectural honesty. The goal is to evoke the sensory experience of a local hub—warm, reliable, and tactile.

**Key Visual Pillars:**
- **Ink & Paper:** High-contrast text on warm, off-white surfaces.
- **The Sticker Effect:** Functional highlights that feel like they were manually placed on the UI.
- **Structural Integrity:** Visible borders and clear-cut modules that organize information with "utilitarian" grace.

## Colors

The palette is anchored by organic and industrial tones that mimic a physical neighborhood space. 

- **Primary (Coffee Brown):** A warm, toasted hue used for primary accents, active states, and brand-identifying icons.
- **Secondary (Dark Gray):** Used specifically for high-impact structural headers. This provides a heavy, grounded anchor for the navigation.
- **Tertiary (Green):** A vibrant "sticker" color reserved for highlights, status indicators, and badges. It should feel like a pop of color against the neutral base.
- **Neutral (White):** The primary surface color, providing a clean "canvas" for the craft aesthetic.
- **Deep Black:** Reserved for primary body text and footer content to ensure maximum legibility and a "heavy ink" feel.

**Specific Implementation Rules:**
- **Header:** Background must be `Dark Gray (#4B4B4A)` with `White (#FEFFFE)` text.
- **Footer:** Background must be `White (#FEFFFE)` with `Black (#000101)` text and a top border.

## Typography

This design system uses a dual-font strategy to balance friendly community outreach with technical precision.

1.  **Plus Jakarta Sans:** The primary voice. Headlines use heavy weights (`800`) with tight tracking for an editorial, bold feel. Body text uses generous line heights (`1.6`) to ensure readability across all demographics.
2.  **JetBrains Mono:** The "meta" voice. Used for technical details, stamps, and small labels. It mimics the aesthetic of printed receipts and typewriter-inked library cards.

**Stylistic Directives:**
- **Headlines:** Use `Uppercase` for Medium headlines to act as clear section dividers.
- **Readability:** Maintain high contrast (Black on White) for all body copy.

## Layout & Spacing

The layout philosophy is based on **Modular Tiling**. Elements are treated as distinct blocks arranged on a surface, rather than a single fluid canvas.

- **Grid Model:** A 12-column fixed grid for desktop ensures structured alignment. On mobile, the layout collapses into a single-column stack with standardized margins.
- **8px Rhythm:** All spacing (padding, gaps, margins) must be derived from a base 4px unit, ideally adhering to 8px increments (8, 16, 24, 32, 48).
- **Physical Divisions:** Favor solid 1px or 2px lines in Deep Black over whitespace to define sections. This reinforces the "Brutalist" and "Tuku" aesthetic.

## Elevation & Depth

Depth is conveyed through **Hard Tonal Layers** and **Crisp Outlines** rather than soft shadows. This maintains the tactile, paper-based feel of the design system.

- **Hard-Drop Shadows:** Primary cards and buttons utilize a solid, non-blurred offset shadow (e.g., `2px 2px 0px 0px`) in Deep Black. This makes elements look like thick, die-cut cardstock.
- **No Transparency:** Surfaces are strictly opaque to mimic physical materials. Avoid background blurs or frosted glass effects.
- **Layering:** Components should feel "stacked." A button sits on top of a card, which sits on top of the white background surface.

## Shapes

The shape language balances the "hard" Brutalist lines with "soft" human-centric corners. 

- **Standard Elements:** Use `rounded-md` (0.5rem) for most containers, input fields, and buttons. This suggests a "die-cut" paper finish rather than a sharp industrial one.
- **Interactive States:** On hover, borders may thicken or shadows may shift, but corner radii remain constant.
- **Stickers:** Small chips or badges can utilize `rounded-full` (Pill-shaped) to distinguish them as non-structural, decorative labels.

## Components

**Buttons**
- **Primary:** Background: Coffee Brown, Text: Black or White (based on contrast), 2px Hard Shadow. Uppercase typography.
- **Secondary:** Background: Transparent, Border: 1px Deep Black, Text: Deep Black.

**Input Fields**
- White background with a 1px Black border.
- Labels are always external and set in `label-mono` for a "form-entry" aesthetic.
- Focus state: Change border weight to 2px or shift background to a very light gray.

**Cards**
- White background, 1px Black border, 2px Hard Black shadow.
- Content is organized in a clear vertical stack: Sticker Label (Top), Headline (Middle), Body (Bottom).

**Chips & Badges (Stickers)**
- Background: Green (#BBD65F), Text: Deep Black.
- Use `label-stamp` typography. These should feel like physical stickers applied to the corner of a card or image.

**Lists**
- Use horizontal dividers that look like ruled lines in a notebook.
- List icons should be simple, geometric, and high-contrast.