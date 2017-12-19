<?php
/*
Plugin Name: Disable WooCommerce Styles
Plugin URI: https://www.littlebizzy.com/plugins/disable-woocommerce-styles
Description: Completely disables all of the CSS stylesheets that are loaded by WooCommerce in order that styling can be better managed by a single style.css file.
Version: 1.0.1
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

// Avoid script calls via plugin URL
if (!function_exists('add_action'))
	die;

// This plugin constants
define('DWCSTY_FILE', __FILE__);
define('DWCSTY_PATH', dirname(DWCSTY_FILE));
define('DWCSTY_VERSION', '1.0.0');

// Works only in the front-end
if (is_admin() || (defined('DOING_AJAX') && DOING_AJAX))
	return;


/**
 * Names and prefixes for style identifiers
 * (comma separated values)
 */

// Names
if (!defined('DWCSTY_NAMES'))
	define('DWCSTY_NAMES', 'select2');

// Prefixes
if (!defined('DWCSTY_PREFIXES'))
	define('DWCSTY_PREFIXES', 'woocommerce,wc');


/**
 * Filter styles hook and loader function
 */

add_action('wp_print_styles', 'dwcsty_wp_print_styles', PHP_INT_MAX);
function dwcsty_wp_print_styles() {
	require_once DWCSTY_PATH.'/core/filter.php';
	DWCSTY_Core_Filter::instance();
}