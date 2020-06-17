<?php
/**
 * The template includes necessary functions for theme.
 *
 * @package pixxy
 * @since 1.0
 */

if ( ! isset( $content_width ) ) {
	$content_width = 1200; /* pixels */
}


defined( 'PIXXY_T_URI' ) or define( 'PIXXY_T_URI', get_template_directory_uri() );
defined( 'PIXXY_T_PATH' ) or define( 'PIXXY_T_PATH', get_template_directory() );

// Include functions
require_once PIXXY_T_PATH . '/include/class-tgm-plugin-activation.php';
require_once PIXXY_T_PATH . '/include/helper-functions.php';
require_once PIXXY_T_PATH . '/include/actions-config.php';
require_once PIXXY_T_PATH . '/include/custom-header.php';
require_once PIXXY_T_PATH . '/include/filters.php';
require_once PIXXY_T_PATH . '/include/customizer.php';
require_once PIXXY_T_PATH . '/include/menu-walker.php';
require_once PIXXY_T_PATH . '/include/custom-menu.php';

require_once PIXXY_T_PATH . '/wp-updates-theme.php';
new WPUpdatesThemeUpdater_2342( 'http://wp-updates.com/api/2/theme', basename( get_template_directory() ) );


// after setup
if (!function_exists('pixxy_after_setup')) {
	function pixxy_after_setup() {
		register_nav_menus( array( 'primary-menu' => esc_attr__( 'Primary menu', 'pixxy' ) ) );
		add_theme_support( 'post-formats', array( 'video', 'gallery', 'audio', 'quote', 'link' ) );
		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'woocommerce' );

		if ( function_exists( 'cs_framework_init' ) ) {
			register_nav_menus( array(
				'footermenu' => esc_html__( 'Footer Menu', 'pixxy' ),
			) );
		}

	}
}
add_action( 'after_setup_theme', 'pixxy_after_setup' );

if ( ! function_exists( 'pixxy_wp_body_classes' ) ) {
	function pixxy_wp_body_classes( $classes ) {
		global $bodyClass;

		if ( is_page() || is_home() ) {
			$post_id = get_queried_object_id();
		} else {
			$post_id = get_the_ID();
		}

		$meta_data           = get_post_meta( $post_id, '_custom_page_options', true );
		$meta_data_portfolio = get_post_meta( $post_id, 'pixxy_portfolio_options', true );
		$meta_data_events = get_post_meta( $post_id, 'pixxy_events_options', true );
		$menu_main_style     = is_404() ? 'only_logo' : cs_get_option( 'menu_style' );
		$menu_main_style     = ! empty( $menu_main_style ) || ! function_exists( 'cs_framework_init' ) ? $menu_main_style : 'left';

		if ( isset( $meta_data['change_menu'] ) && $meta_data['change_menu'] && isset( $meta_data['menu_style'] ) ) {
			$menu_main_style = $meta_data['menu_style'];
		}

		if ( isset( $meta_data_portfolio['change_menu'] ) && $meta_data_portfolio['change_menu'] && isset( $meta_data_portfolio['menu_style'] ) ) {
			$menu_main_style = $meta_data_portfolio['menu_style'];
		}

		if ( isset( $meta_data_events['change_menu'] ) && $meta_data_events['change_menu'] && isset( $meta_data_events['menu_style'] ) ) {
			$menu_main_style = $meta_data_events['menu_style'];
		}

		if($menu_main_style == 'static_aside'){
			$bodyClass .= ' static-menu';
		}

		if($menu_main_style == 'aside'){
			$bodyClass .= ' body-aside-menu';
		}

		$bodyClass = explode(' ', $bodyClass);

		foreach ($bodyClass as $class){
			$classes[] = $class;
		}

		return $classes;
	}
}
add_filter( 'body_class','pixxy_wp_body_classes' );
