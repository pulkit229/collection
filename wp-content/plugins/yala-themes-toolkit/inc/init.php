<?php

class Yalathemes_Toolkit {

	private $theme_author = 'yalathemes';

	public static function instance() {

		static $instance = null;

		if ( null === $instance ) {
			$instance = new Yalathemes_Toolkit;
		}

		return $instance;
	}

	public function run() {
		$this->load_dependencies();

		if ( yalathemes_toolkit_get_current_theme_author() == $this->theme_author ) {
			$this->hooks();
		}

	}

	private function load_dependencies() {

		require_once YALATHEMES_TOOLKIT_PATH . 'inc/functions.php';
		require_once YALATHEMES_TOOLKIT_PATH . 'inc/hooks.php';

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function hooks() {

		$plugin_admin = yalathemes_toolkit_hooks();
		add_filter( 'advanced_import_demo_lists', array( $plugin_admin, 'add_demo_lists' ), 10, 1 );
		add_filter( 'admin_menu', array( $plugin_admin, 'import_menu' ), 10, 1 );
		add_filter( 'wp_ajax_yalathemes_toolkit_getting_started', array( $plugin_admin, 'install_advanced_import' ), 10, 1 );
		add_filter( 'admin_enqueue_scripts', array( $plugin_admin, 'enqueue_styles' ), 10, 1 );
		add_filter( 'admin_enqueue_scripts', array( $plugin_admin, 'enqueue_scripts' ), 10, 1 );

	}
}