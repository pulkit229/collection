<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/*
Plugin Name: Yala Themes Toolkit
Description: Import Yala Themes official Themes Demo Content, widgets and theme settings with just one click.
Version:     1.0.1
Author:      Yalathemes
Author URI:  http://www.yalathemes.com
License:     GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: yalathemes-toolkit
*/

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
define( 'YALATHEMES_TOOLKIT_PATH', plugin_dir_path( __FILE__ ) );
define( 'YALATHEMES_TOOLKIT_PLUGIN_NAME', 'yalathemes-toolkit' );
define( 'YALATHEMES_TOOLKIT_VERSION', '1.0.3' );
define( 'YALATHEMES_TOOLKIT_URL', plugin_dir_url( __FILE__ ) );
define( 'YALATHEMES_TOOLKIT_TEMPLATE_URL', YALATHEMES_TOOLKIT_URL . 'inc/demo/' );

require YALATHEMES_TOOLKIT_PATH . 'inc/init.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
if ( ! function_exists( 'run_yalathemes_toolkit' ) ) {

	function run_yalathemes_toolkit() {

		return Yalathemes_Toolkit::instance();
	}
	run_yalathemes_toolkit()->run();
}


