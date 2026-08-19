# Lieusoft Theme

Custom coded WordPress theme for [lieusoft.com](https://lieusoft.com) — "Complete WordPress Business Solutions."

The live site currently runs Hello Elementor + Elementor/PRO Elements. This theme rebuilds the homepage in real template code (no page builder), using the design tokens read directly out of the site's active Elementor kit so colors and type match exactly.

## Design tokens (captured from the live site 2026-08-19)

| Token | Value | Role |
|---|---|---|
| `--color-primary` | `#2454F5` | Accent / buttons / links |
| `--color-secondary` | `#54595F` | Secondary text |
| `--color-text` | `#7A7A7A` | Body text |
| `--color-ink` | `#0E0C1A` | Headings |
| `--color-purple` | `#7A5EEE` | Card accent |
| `--color-purple-light` | `#EDE9FE` | Tag / pill backgrounds |
| `--color-orange` | `#FB811B` | Solution card accent, ratings |
| `--color-green` | `#1AA95D` | Solution card accent |
| `--color-body-bg` | `#F7F6FF` | Page background |

Typography: **Roboto** (600 for headings, 400 for body) with **Roboto Slab** as the display/accent face — same pairing as the live kit.

## Structure

```
lieusoft-theme/
├── style.css              theme header
├── functions.php          theme setup, menus, enqueue
├── header.php / footer.php
├── front-page.php         homepage, assembled from template-parts/
├── page.php / index.php   fallback templates
├── template-parts/        one file per homepage section
└── assets/
    ├── css/theme.css      design tokens + all component styles
    └── js/theme.js        mobile nav toggle
```

## Status

This is a scaffold: the homepage sections (hero, solutions, what-we-do, featured plugins, expert services, case study, CTA, footer) are rebuilt with the real copy and structure from the live site. Inner pages (Solutions, Services, Products, Case Studies, Pricing, About) still fall back to `page.php`.

**Not yet activated anywhere.** Activating a theme is a site-wide, hard-to-reverse change on a live site — this needs an explicit go-ahead before it's installed on lieusoft.com or any other environment.
