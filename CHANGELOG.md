# Changelog

All notable changes to the free Unhurried theme.

## 1.0.0 (unreleased, preparing WordPress.org submission)

### 2026-09-24
- Built as a WordPress block theme from Switch Case Studio's light editorial design.
- 27 patterns: homepage, about, services and contact pages; staggered, split and type heroes; visit panel; services accordion on image; staggered gallery; values statement; stories grid; testimonial; call to action; price list; membership tiers; FAQ; contact details; team feature.
- Section styles (Panel, Card, Ink, Ground, Glass), block styles (Eyebrow, Statement, Hairline, Text link, Arch, Keep colour) and two style variations (Nocturne, Linen).
- Neutral "rest and ritual" demo copy; seven original CC0 still-life images; OFL fonts (Hanken Grotesk, Inter, Fraunces).
- Author credit: "Designed by Switch Case Studio" in the footer.
- Fixed: the stylesheet now loads from the parent theme, so child themes (Unhurried Pro) keep the header, panel and reveal styles.
- Fixed: the header button no longer wraps on phones; the site title truncates instead.
- Moved WooCommerce templates and the lead-story pattern to Unhurried Pro.
- Checks: Theme Check clean; every pattern and template block-valid in WordPress 7.1.2; no horizontal overflow at 320–1440 px.

## Development

`dev/serve.sh free|pro` starts a WordPress Playground demo on port 9400 (Pro expects `../unhurried-pro`). `dev/validate.cjs` checks block validity; `dev/themecheck.cjs` runs Theme Check.
