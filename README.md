# Pixelfelt WordPress Theme

> # 🚧 Coming soon

> # Setup Cost ($59 - $108+)
> As a shortcut to building everything myself from scratch I'm using the following:
> - $59 for the [Impreza Theme](https://themeforest.net/item/impreza-retina-responsive-wordpress-theme/6434280)
> - $49/yr for [Advanced Custom Fields Pro](https://www.advancedcustomfields.com/pro/) (although I personally don't pay this as I was an early adopter)

---

# Setup
- Install the [Impreza Theme](https://themeforest.net/item/impreza-retina-responsive-wordpress-theme/6434280)
- Install and activate this repository either manually, by [downloading and uploading the latest zip](https://github.com/pixelfelt/pixelfelt-wordpress-theme/archive/refs/heads/master.zip), or with automatic updates through git with [WP Pusher](https://wppusher.com/)
- Install and activate the Impreza Plugins: UpSolution Core, WPBakery, and Custom Post Type UI in Impreza by visiting `/wp-admin/admin.php?page=us-addons`
- Install [Advanced Custom Fields Pro](https://www.advancedcustomfields.com/pro/)
- Import Custom Post Type UI data from `./setup/custom-post-type-ui.json` into `/wp-admin/admin.php?page=cptui_tools`

# Local Development

I find it easiest to just [install Local by Flywheel](https://localwp.com/), creating a new website, and following the steps above.

## Notes
- Requires:
  - Theme: 
  - Plugins:
    - 
    - [Advanced Custom Fields](https://www.advancedcustomfields.com/)
    - [CPT UI](https://wordpress.org/plugins/custom-post-type-ui/)
      - Import with `/setup/custom-post-type-ui.json`