---
name: Tetangga Baca Jalosi
colors:
  surface: '#fdf9f3'
  surface-dim: '#ddd9d4'
  surface-bright: '#fdf9f3'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f7f3ed'
  surface-container: '#f1ede7'
  surface-container-high: '#ebe8e2'
  surface-container-highest: '#e6e2dc'
  on-surface: '#1c1c18'
  on-surface-variant: '#4e4542'
  inverse-surface: '#31302d'
  inverse-on-surface: '#f4f0ea'
  outline: '#7f7571'
  outline-variant: '#d1c4c0'
  surface-tint: '#655d5a'
  primary: '#16100f'
  on-primary: '#ffffff'
  primary-container: '#2b2523'
  on-primary-container: '#958b88'
  inverse-primary: '#cfc4c1'
  secondary: '#904d00'
  on-secondary: '#ffffff'
  secondary-container: '#fe932c'
  on-secondary-container: '#663500'
  tertiary: '#280600'
  on-tertiary: '#ffffff'
  tertiary-container: '#4c1200'
  on-tertiary-container: '#ee602d'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#ece0dd'
  primary-fixed-dim: '#cfc4c1'
  on-primary-fixed: '#201a18'
  on-primary-fixed-variant: '#4c4543'
  secondary-fixed: '#ffdcc3'
  secondary-fixed-dim: '#ffb77d'
  on-secondary-fixed: '#2f1500'
  on-secondary-fixed-variant: '#6e3900'
  tertiary-fixed: '#ffdbd0'
  tertiary-fixed-dim: '#ffb59d'
  on-tertiary-fixed: '#390c00'
  on-tertiary-fixed-variant: '#832600'
  background: '#fdf9f3'
  on-background: '#1c1c18'
  surface-variant: '#e6e2dc'
  espresso-dark: '#1E1A18'
  paper-kraft: '#EFE8DC'
  paper-sand: '#E5DDCF'
  sticker-green: '#15803D'
  sticker-blue: '#1D4ED8'
  aren-light: '#FEF3C7'
typography:
  display-h1:
    fontFamily: Plus Jakarta Sans
    fontSize: 42px
    fontWeight: '800'
    lineHeight: '1.2'
    letterSpacing: -0.02em
  display-h1-mobile:
    fontFamily: Plus Jakarta Sans
    fontSize: 32px
    fontWeight: '800'
    lineHeight: '1.2'
    letterSpacing: -0.01em
  section-h2:
    fontFamily: Plus Jakarta Sans
    fontSize: 28px
    fontWeight: '700'
    lineHeight: '1.3'
    letterSpacing: 0.02em
  card-h3:
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
    lineHeight: '1'
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

The design system is built on a "Lo-Fi Craft" philosophy, merging the warmth of a neighborhood coffee shop with the community-driven mission of a rural library. It evokes a sense of being "grounded," "authentic," and "unpretentious."

The visual direction follows a **Modern-Brutalist** approach with **Tactile** influences. It rejects digital perfection in favor of "physical" artifacts: heavy ink-print borders, typewriter-style labeling, and sticker-inspired badges. The goal is to make the digital experience feel as tangible as a hand-stamped library card or a paper coffee sleeve.

**Key Brand Attributes:**
- **Community-First:** Warm greetings (#TetanggaBaca) and a focus on accessibility.
- **Architectural Honesty:** Exposed grids, high-contrast borders, and clear information hierarchy.
- **Craft Aesthetic:** Use of "paper" textures, stamp effects, and monospaced "receipt" typography.

## Colors

The palette is derived from natural materials: espresso beans, palm sugar (Aren), and unbleached kraft paper. 

- **Primary (Espresso):** Used for all structural elements, borders, and dominant text. It provides the "ink" that defines the layout.
- **Neutral (Kraft Canvas):** The background is never pure white, but a warm, slightly textured paper tone (`#F7F3ED`) that reduces eye strain and reinforces the tactile theme.
- **Accents (Stickers):** Vibrancy is introduced through functional "stickers." These colors are used for categorization and status:
    - **Amber (Aren):** Highlights, ratings, and primary badges.
    - **Terracotta (Stamp):** Secondary alerts or commemorative stamps (e.g., "EST. 2015").
    - **Forest Green & Blue:** Specific programmatic identifiers for conservation and digital literacy.

## Typography

This system utilizes a dual-font strategy to balance modernity with a "printed" feel.

1.  **Plus Jakarta Sans (The Voice):** Used for all primary communication. It is friendly yet professional. Headlines should often use `Extra Bold` weights and tight tracking for a high-impact, editorial look.
2.  **JetBrains Mono (The Stamp):** Used for metadata, labels, barcodes, and technical details. This font mimics the aesthetic of typewritten library index cards and receipt labels.

**Rules for Use:**
- Use **Uppercase** for all `section-h2` and `label-stamp` roles to create a clear visual break between narrative and structure.
- Maintain a generous `1.6` line-height for body text to ensure readability for all ages, from students to elderly neighbors.

## Layout & Spacing

The design system follows a **12-column fixed grid** for desktop and a **fluid single-column** layout for mobile. 

The layout model is inspired by "Modular Tiling." Each section of content should feel like a distinct block or card placed on a kraft paper surface. 

**Spacing Principles:**
- **The 8px Rhythm:** All padding and margins should be multiples of 8px (using the 4px base unit).
- **Hard Divisions:** Use physical border lines (`1px solid #2B2523`) instead of whitespace alone to separate sections.
- **Teaser Strategy:** The homepage uses a "clipping" layout where only 3-4 items are shown in a horizontal scroll or grid, followed by a bold directional button.

## Elevation & Depth

This design system avoids soft ambient shadows. Instead, it uses **Hard-Drop Tonal Layers** and **Crisp Outlines** to create depth.

- **The "Sticker" Layer:** Small UI elements (badges, labels) appear flat but with high-contrast borders.
- **The "Card" Layer:** Primary containers use a "Hard Shadow" effect: a solid offset of `2px 2px 0px 0px` using the Espresso color. This makes elements look like they are slightly raised, like a thick piece of cardboard.
- **Zero Glassmorphism:** Surfaces are always opaque to maintain the "paper and ink" feel. The only exception is the Top Bar, which uses a very slight `backdrop-blur` to maintain legibility over scrolling content.

## Shapes

While the borders are "hard," the corners are **Softened (0.5rem)**. This creates a "die-cut" look, similar to rounded-corner business cards or vintage library cards.

- **Primary Elements:** Buttons and Cards use `rounded-md` (0.5rem).
- **Labels & Stamps:** Smaller tags may use `rounded-full` (Pill-shaped) to distinguish them as "stickers" rather than structural blocks.
- **Borders:** A consistent `1px` or `2px` border in Espresso (`#2B2523`) must be applied to all interactive elements.

## Components

**Buttons**
- **Primary CTA:** Background: Espresso (`#2B2523`), Text: Kraft (`#F7F3ED`). Heavy weight, uppercase, tracking-wider. Use a hard shadow on hover.
- **Secondary (Kraft):** Background: Sand (`#E5DDCF`), Border: Espresso, Text: Espresso.

**Cards (The "Catalog" Style)**
- White background (`#FFFFFF`), `1px` solid Espresso border, `2px` hard shadow.
- Content inside follows a "Label-Title-Description" stack.
- Images should have a subtle inner-stroke to separate them from the card canvas.

**Chips & Badges (The "Sticker" Style)**
- Background: `aren-light` (`#FEF3C7`), Text: `D97706`. 
- Use Monospace font.
- Surround with a thin border of the same color as the text.

**Input Fields**
- Sharp `1px` borders. No glow effects on focus; instead, change the border weight to `2px` or change the background to `paper-sand`.
- Labels must always be visible and set in `label-mono`.

**Lists & Tables**
- Use horizontal dividers that mimic a ruled notebook.
- Headers in tables should use the `label-stamp` typography style with a `paper-kraft` background.