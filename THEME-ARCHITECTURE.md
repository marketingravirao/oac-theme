# Theme Architecture

## Structure

- `functions.php` loads setup, asset, helper, and homepage data functions from `inc/`.
- `header.php` and `footer.php` provide the shared shell; WordPress menus can be assigned to **Primary Navigation**.
- `front-page.php` composes the homepage from `template-parts/sections/home/`.
- `templates/template-about.php` is the selectable **About Us** page template; its sections are in `template-parts/sections/about/` and its CSS loads only when that template is selected.
- `templates/template-contact.php` is the selectable **Contact** page template; it preserves the LeadConnector form and Ahmedabad map, and loads contact styles/animations only when assigned.
- `template-parts/components/` contains reusable button, section heading, topic, book, and FAQ markup.
- `assets/css/theme.css` holds design tokens and shared styles. `assets/css/pages/home.css` is enqueued only on the front page.
- Shared `.section` spacing is controlled by `--section-space` in `theme.css` (88px desktop, 62px mobile); page stylesheets should compose this utility rather than redefining section padding.
- `assets/js/animations.js` is front-page-only. Local GSAP 3.15.0, ScrollTrigger, and SplitText files are in `assets/vendor/gsap/`; their standard license terms are linked in that directory's README.
- `page.php`, `single.php`, `archive.php`, `404.php`, and `index.php` follow the WordPress template hierarchy.

## Add a Page

Create a PHP template with a WordPress template header when a page needs a distinct layout. Call `get_header()` and `get_footer()`, then compose existing sections with `get_template_part()`. Assign **About Us** or **Contact** in the page editor's Template setting for the matching page. Add a dedicated stylesheet only when the page has styles not shared by existing components, and enqueue it conditionally in `inc/assets.php` with `is_page_template()`.

## Add a Component or Section

Put reusable, presentation-only markup in `template-parts/components/` and pass data using the third `$args` parameter to `get_template_part()`. Escape output at the point of rendering. Put page-specific compositions under `template-parts/sections/<page>/`; keep content collections in `inc/components.php` rather than querying the database from a presentation component.

## Use Animations

Add a supported `data-animate` value (`fade-up`, `fade-down`, `fade-left`, `fade-right`, `scale-up`, `fade-scale`, or `words`). Hero words can use `data-trigger="load"`; other word reveals use ScrollTrigger by default. For card groups, put `data-animate-group="fade-up"` and optional `data-stagger`, `data-distance`, or `data-duration` on the parent, then `data-animate-item` on its direct children. Use `data-scroll-effect="scale"` sparingly. Content stays visible without JavaScript and animations are skipped for reduced-motion preferences.

## Custom Post Types

No CPT is registered by this theme. Add the site's CPT and persistent data model in a site-specific plugin or MU-plugin, not here.