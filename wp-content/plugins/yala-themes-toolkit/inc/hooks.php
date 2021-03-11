<?php

class Yalathemes_Toolkit_Hooks {


	private $hook_suffix;

	private $theme_author = 'yalathemes';

	public static function instance() {
		static $instance = null;

		if ( null === $instance ) {
			$instance = new self();
			update_option( '__gutentor_do_redirect', false );
		}

		return $instance;
	}

	public function __construct() {     }

	public function import_menu() {
		if ( ! class_exists( 'Advanced_Import' ) ) {
			$this->hook_suffix[] = add_theme_page( esc_html__( 'Yala Themes Toolkit', 'yalathemes-toolkit' ), esc_html__( 'Yala Themes Toolkit', 'yalathemes-toolkit' ), 'manage_options', 'advanced-import', array( $this, 'demo_import_screen' ) );
		}
	}


	public function enqueue_styles( $hook_suffix ) {
		if ( ! is_array( $this->hook_suffix ) || ! in_array( $hook_suffix, $this->hook_suffix ) ) {
			return;
		}

		wp_enqueue_style( YALATHEMES_TOOLKIT_PLUGIN_NAME, YALATHEMES_TOOLKIT_URL . 'assets/yalathemes-toolkit.css', array( 'wp-admin', 'dashicons' ), YALATHEMES_TOOLKIT_VERSION, 'all' );
	}

	public function enqueue_scripts( $hook_suffix ) {
		if ( ! is_array( $this->hook_suffix ) || ! in_array( $hook_suffix, $this->hook_suffix ) ) {
			return;
		}

		wp_enqueue_script( YALATHEMES_TOOLKIT_PLUGIN_NAME, YALATHEMES_TOOLKIT_URL . 'assets/yalathemes-toolkit.js', array( 'jquery' ), YALATHEMES_TOOLKIT_VERSION, true );

		wp_localize_script(
			YALATHEMES_TOOLKIT_PLUGIN_NAME,
			'yalathemes_toolkit',
			array(
				'btn_text' => esc_html__( 'Processing...', 'yalathemes-toolkit' ),
				'nonce'    => wp_create_nonce( 'yalathemes_toolkit_nonce' ),
			)
		);
	}

	public function demo_import_screen() {      ?>
		<div id="ads-notice">
			<div class="ads-container">
				<img class="ads-screenshot" src="<?php echo esc_url( yalathemes_toolkit_get_theme_screenshot() ); ?>"/>
				<div class="ads-notice">
					<h2>
						<?php
						printf(
							esc_html__( 'Welcome! Thank you for choosing %1$s! To get started with ready-made starter site templates. Install the Advanced Import plugin and install Demo Starter Site within a single click', 'yalathemes-toolkit' ),
							'<strong>' . wp_get_theme()->get( 'Name' ) . '</strong>'
						);
						?>
					</h2>

					<p class="plugin-install-notice"><?php esc_html_e( 'Clicking the button below will install and activate the Advanced Import plugin.', 'yalathemes-toolkit' ); ?></p>

					<a class="ads-gsm-btn button button-primary button-hero" href="#" data-name="" data-slug=""
					   aria-label="<?php esc_html_e( 'Get started with the Theme', 'yalathemes-toolkit' ); ?>">
						<?php esc_html_e( 'Get Started', 'yalathemes-toolkit' ); ?>
					</a>
				</div>
			</div>
		</div>
		<?php

	}

	public function install_advanced_import() {
		check_ajax_referer( 'yalathemes_toolkit_nonce', 'security' );

		$slug   = 'advanced-import';
		$plugin = 'advanced-import/advanced-import.php';

		$status             = array(
			'install' => 'plugin',
			'slug'    => sanitize_key( wp_unslash( $slug ) ),
		);
		$status['redirect'] = admin_url( '/themes.php?page=advanced-import&browse=all&at-gsm-hide-notice=welcome' );

		if ( is_plugin_active_for_network( $plugin ) || is_plugin_active( $plugin ) ) {
			// Plugin is activated
			wp_send_json_success( $status );
		}

		if ( ! current_user_can( 'install_plugins' ) ) {
			$status['errorMessage'] = __( 'Sorry, you are not allowed to install plugins on this site.', 'yalathemes-toolkit' );
			wp_send_json_error( $status );
		}

		include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
		include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

		// Looks like a plugin is installed, but not active.
		if ( file_exists( WP_PLUGIN_DIR . '/' . $slug ) ) {
			$plugin_data          = get_plugin_data( WP_PLUGIN_DIR . '/' . $plugin );
			$status['plugin']     = $plugin;
			$status['pluginName'] = $plugin_data['Name'];

			if ( current_user_can( 'activate_plugin', $plugin ) && is_plugin_inactive( $plugin ) ) {
				$result = activate_plugin( $plugin );

				if ( is_wp_error( $result ) ) {
					$status['errorCode']    = $result->get_error_code();
					$status['errorMessage'] = $result->get_error_message();
					wp_send_json_error( $status );
				}

				wp_send_json_success( $status );
			}
		}

		$api = plugins_api(
			'plugin_information',
			array(
				'slug'   => sanitize_key( wp_unslash( $slug ) ),
				'fields' => array(
					'sections' => false,
				),
			)
		);

		if ( is_wp_error( $api ) ) {
			$status['errorMessage'] = $api->get_error_message();
			wp_send_json_error( $status );
		}

		$status['pluginName'] = $api->name;

		$skin     = new WP_Ajax_Upgrader_Skin();
		$upgrader = new Plugin_Upgrader( $skin );
		$result   = $upgrader->install( $api->download_link );

		if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
			$status['debug'] = $skin->get_upgrade_messages();
		}

		if ( is_wp_error( $result ) ) {
			$status['errorCode']    = $result->get_error_code();
			$status['errorMessage'] = $result->get_error_message();
			wp_send_json_error( $status );
		} elseif ( is_wp_error( $skin->result ) ) {
			$status['errorCode']    = $skin->result->get_error_code();
			$status['errorMessage'] = $skin->result->get_error_message();
			wp_send_json_error( $status );
		} elseif ( $skin->get_errors()->get_error_code() ) {
			$status['errorMessage'] = $skin->get_error_messages();
			wp_send_json_error( $status );
		} elseif ( is_null( $result ) ) {
			require_once( ABSPATH . 'wp-admin/includes/file.php' );
			WP_Filesystem();
			global $wp_filesystem;

			$status['errorCode']    = 'unable_to_connect_to_filesystem';
			$status['errorMessage'] = __( 'Unable to connect to the filesystem. Please confirm your credentials.', 'yalathemes-toolkit' );

			// Pass through the error from WP_Filesystem if one was raised.
			if ( $wp_filesystem instanceof WP_Filesystem_Base && is_wp_error( $wp_filesystem->errors ) && $wp_filesystem->errors->get_error_code() ) {
				$status['errorMessage'] = esc_html( $wp_filesystem->errors->get_error_message() );
			}

			wp_send_json_error( $status );
		}

		$install_status = install_plugin_install_status( $api );

		if ( current_user_can( 'activate_plugin', $install_status['file'] ) && is_plugin_inactive( $install_status['file'] ) ) {
			$result = activate_plugin( $install_status['file'] );

			if ( is_wp_error( $result ) ) {
				$status['errorCode']    = $result->get_error_code();
				$status['errorMessage'] = $result->get_error_message();
				wp_send_json_error( $status );
			}
		}

		wp_send_json_success( $status );

	}

	public function add_demo_lists( $current_demo_list ) {
		if ( yalathemes_toolkit_get_current_theme_author() != $this->theme_author ) {
			return $current_demo_list;
		}

		$theme_slug = yalathemes_toolkit_get_current_theme_slug();

		switch ( $theme_slug ) :
			case 'yala-mag':
				$templates = array(
					array(
						'title'          => __( 'Main Demo', 'yalathemes-toolkit' ), /*Title*/
						'is_premium'     => false, /*Premium*/
						'type'           => 'normal',
						'author'         => __( 'yalathemes', 'yalathemes-toolkit' ), /*Author Name*/
						'keywords'       => array( 'Mag', 'News' ), /*Search keyword*/
						'categories'     => array( 'News' ), /*Categories*/
						'template_url'   => array(
							'content' => YALATHEMES_TOOLKIT_TEMPLATE_URL . $theme_slug . '/demo-1/content.json',
							'options' => YALATHEMES_TOOLKIT_TEMPLATE_URL . $theme_slug . '/demo-1/options.json',
							'widgets' => YALATHEMES_TOOLKIT_TEMPLATE_URL . $theme_slug . '/demo-1/widgets.json',
						),
						'screenshot_url' => YALATHEMES_TOOLKIT_TEMPLATE_URL . $theme_slug . '/demo-1/demo.png', /*Screenshot of block*/
						'demo_url'       => 'https://yalathemes.com/yala-mag/', /*Demo Url*/
						'plugins'        => array(
							array(
								'name' => 'Gutentor',
								'slug' => 'gutentor',
							),
						),
					),
				);
				break;
			case 'yala-travel':
				$templates = array(
					array(
						'title'          => __( 'Main Demo', 'yalathemes-toolkit' ), /*Title*/
						'is_premium'     => false, /*Premium*/
						'type'           => 'Elementor',
						'author'         => __( 'YalaThemes', 'yalathemes-toolkit' ), /*Author Name*/
						'keywords'       => array( 'Main', 'Elementor' ), /*Search keyword*/
						'categories'     => array( 'Travel' ), /*Categories*/
						'template_url'   => array(
							'content' => YALATHEMES_TOOLKIT_TEMPLATE_URL . $theme_slug . '/demo-1/content.json',
							'options' => YALATHEMES_TOOLKIT_TEMPLATE_URL . $theme_slug . '/demo-1/options.json',
							'widgets' => YALATHEMES_TOOLKIT_TEMPLATE_URL . $theme_slug . '/demo-1/widgets.json',
						),
						'screenshot_url' => YALATHEMES_TOOLKIT_TEMPLATE_URL . $theme_slug . '/demo-1/demo.png', /*Screenshot of block*/
						'demo_url'       => 'https://yalathemes.com/demo/yala-travel/', /*Demo Url*/
						'plugins'        => array(
							array(
								'name' => 'Elementor',
								'slug' => 'elementor',
							),
							array(
								'name' => 'WooCommerce',
								'slug' => 'woocommerce',
							),
							array(
								'name' => 'Yala Travel Companion',
								'slug' => 'yala-travel-companion',
							),
							array(
								'name'      => 'RegistrationMagic – Custom Registration Forms and User Login',
								'slug'      => 'custom-registration-form-builder-with-submission-manager',
								'required'  => false,
							),
							array(
								'name'      => 'ProfileGrid – User Profiles, Groups and Communities',
								'slug'      => 'profilegrid-user-profiles-groups-and-communities',
								'required'  => false,
							),

						),
					),
					array(
						'title'          => __( 'Demo Two', 'yalathemes-toolkit' ), /*Title*/
						'is_premium'     => false, /*Premium*/
						'type'           => 'Gutentor',
						'author'         => __( 'YalaThemes', 'yalathemes-toolkit' ), /*Author Name*/
						'keywords'       => array( 'Trek', 'Gutentor' ), /*Search keyword*/
						'categories'     => array( 'Travel' ), /*Categories*/
						'template_url'   => array(
							'content' => YALATHEMES_TOOLKIT_TEMPLATE_URL . $theme_slug . '/demo-2/content.json',
							'options' => YALATHEMES_TOOLKIT_TEMPLATE_URL . $theme_slug . '/demo-2/options.json',
							'widgets' => YALATHEMES_TOOLKIT_TEMPLATE_URL . $theme_slug . '/demo-2/widgets.json',
						),
						'screenshot_url' => YALATHEMES_TOOLKIT_TEMPLATE_URL . $theme_slug . '/demo-2/demo.png', /*Screenshot of block*/
						'demo_url'       => 'https://yalathemes.com/demo/yala-trek/', /*Demo Url*/
						'plugins'        => array(
							array(
								'name' => 'Gutentor',
								'slug' => 'gutentor',
							),

							array(
								'name' => 'WooCommerce',
								'slug' => 'woocommerce',
							),

							array(
								'name' => 'Yala Travel Companion',
								'slug' => 'yala-travel-companion',
							),
							array(
								'name'      => 'RegistrationMagic – Custom Registration Forms and User Login',
								'slug'      => 'custom-registration-form-builder-with-submission-manager',
								'required'  => false,
							),
							array(
								'name'      => 'ProfileGrid – User Profiles, Groups and Communities',
								'slug'      => 'profilegrid-user-profiles-groups-and-communities',
								'required'  => false,
							),

						),
					),
				);
				break;

			default:
				$templates = array();
		endswitch;

		return array_merge( $current_demo_list, $templates );

	}


}

/**
 * Begins execution of the hooks.
 *
 * @since    1.0.0
 */
function yalathemes_toolkit_hooks() {
	return Yalathemes_Toolkit_Hooks::instance();
}
