=== Disable WooCommerce Styles ===

Contributors: littlebizzy
Tags: disable, woocommerce, css, styles, stylesheets
Requires at least: 4.4
Tested up to: 4.8
Requires PHP: 7.0
Stable tag: 1.0.1
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Completely disables all of the CSS stylesheets that are loaded by WooCommerce in order that styling can be better managed by a single style.css file.

== Description ==

Completely disables all of the CSS stylesheets that are loaded by WooCommerce in order that styling can be better managed by a single style.css file.

By default, all the CSS styles bundled in WooCommerce will be disabled.

There are two constants to control these identifiers:

1. Constant DWCSTY_NAMES

A comma separated list of exact matches of identifiers to dequeue.

Default value:

define('DWCSTY_NAMES', 'select2');

2. Constant DWCSTY_PREFIXES

A comma separated list of prefixes of identifiers to exclude from the queue.

Default value:

define('DWCSTY_PREFIXES', 'woocommerce,wc');

These constants can be defined in the wp-config.php in case you need to change or expand the default values.

So, the 'select2' stylesheet will not be loaded, and neither any style that starts with one of the prefixes (woocommerce or wc).

#### Compatibility ####

This plugin has been designed for use on LEMP (Nginx) web servers with PHP 7.0+ and MySQL 5.7+ to achieve best performance. All of our plugins are meant for single site WordPress installs only; for performance and security reasons, we highly recommend against using WordPress Multi-Site for the vast majority of projects.

#### Plugin Features ####

* Settings Page: No
* Defined Constants: Optional
* Upgrade Available: No
* Includes Media: No
* Includes CSS: No
* Database Storage: No
  * Transients: No
  * Options: No
* Must-Use Support: Yes
* Multi-site Support: No
* Uninstalls Data: N/A

#### Localization ####

* English (US)

#### Code Inspiration ####

This plugin was partially inspired either in "code or concept" by the open-source software and discussions mentioned below:

* [Greg Rickaby](https://gregrickaby.com/2013/05/remove-woocommerce-styles-and-scripts/)
* [WooCommerce Docs](https://docs.woocommerce.com/document/disable-the-default-stylesheet/)

#### Recommended Plugins ####

We invite you to check out a few other related free plugins that our team has also produced that you may find especially useful:

* [Disable Cart Fragments](https://wordpress.org/plugins/disable-cart-fragments-littlebizzy/)
* [Disable WooCommerce Status](https://wordpress.org/plugins/disable-wc-status-littlebizzy/)
* [Server Status](https://wordpress.org/plugins/server-status-littlebizzy/)

#### Special Thanks ####

We thank the following groups for their generous contributions to the WordPress community which have particularly benefited us in developing our own free plugins and paid services:

* [Automattic](https://automattic.com)
* [Delicious Brains](https://deliciousbrains.com)
* [Roots](https://roots.io)
* [rtCamp](https://rtcamp.com)
* [WP Tavern](https://wptavern.com)

#### Disclaimer ####

*We released this plugin in response to our managed hosting clients requesting better access to their server environment, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you consider the above mentioned goals before leaving reviews of this plugin, thanks!*

== Installation ==

1. Upload to `/wp-content/plugins/`
2. Activate the plugin through the Plugins screen
3. Use the defined constant in `wp-config.php` to customize if required

== Frequently Asked Questions ==

= How can I change this plugin's settings? =

By default all CSS is disabled from WooCommerce. To be more selective, use the defined constant.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post. If needed, you may also contact our homepage.

== Changelog ==

= 1.0.1 =
* fixed title

= 1.0.0 =
* initial release
