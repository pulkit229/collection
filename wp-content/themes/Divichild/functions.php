<?php
/*This file is part of Divichild, Divi child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function Divichild_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'Divichild_enqueue_child_styles' );
function get_excerpt( $count ) {
$permalink = get_permalink($post->ID);
$excerpt = get_the_content();
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, $count);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = '<p>'.$excerpt.'... <a href="'.$permalink.'">Read More</a></p>';
return $excerpt;
}




add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2);
function add_login_logout_link($items, $args) {
ob_start();
divi_help_loginout('index.php');
$loginoutlink = ob_get_contents();
ob_end_clean();
$items .= $loginoutlink ;
return $items;
}

function divi_help_loginout( $redirect = '', $echo = true ) {
    if ( ! is_user_logged_in() ) {
        $link = '<li class="menu-item "><a href="' . esc_url( '/waraqa/join/' ) . '">' . __( 'Join' ) . '</a></li>';
    } else {
        $link = '<li class="menu-item "><a href="http://localhost/waraqa/profile">' . __( 'profile' ) . '</a></li>';
        $link .= '<li class="menu-item "><a href="' . esc_url( wp_logout_url( $redirect ) ) . '">' . __( 'Log out' ) . '</a></li>';
    }
    if ( $echo ) {
        /**
         * Filters the HTML output for the Log In/Log Out link.
         *
         * @since 1.5.0
         *
         * @param string $link The HTML link content.
         */
        echo apply_filters( 'loginout', $link );
    } else {
        /* This filter is documented in wp-includes/general-template.php
        */
        return apply_filters( 'loginout', $link );
    }
}
