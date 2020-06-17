<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

class DGWT_JG_Scripts {

	function __construct() {

		add_action( 'wp_enqueue_scripts', array( $this, 'js_scripts' ) );

		add_action( 'wp_print_styles', array( $this, 'css_style' ) );
	}

	/*
	 * Register scripts.
	 * Uses a WP hook wp_enqueue_scripts
	 */

	private function dgwt()
	{
		return DGWT_JG_Core::get_instance();
	}


	public function js_scripts() {

		if ( !is_admin() ) {

			if ( $this->dgwt()->settings->get_opt( 'lightbox' ) === 'yes' ) {
				wp_register_script( 'jquery-mousewheel', DGWT_JG_URL . 'assets/js/jquery.mousewheel.min.js', array( 'jquery' ), DGWT_JG_VERSION, true );
				wp_register_script( 'dgwt-jg-lightgallery', DGWT_JG_URL . 'assets/js/lightgallery.min.js', array( 'jquery', 'jquery-mousewheel' ), DGWT_JG_VERSION, true );
			}

			if ( DGWT_JG_DEBUG === false ) {
				wp_register_script( 'dgwt-justified-gallery', DGWT_JG_URL . 'assets/js/jquery.justifiedGallery.js', array( 'jquery' ), DGWT_JG_VERSION, true );
			}

			wp_enqueue_script( array( 'dgwt-jg-lightgallery', 'dgwt-justified-gallery', ) );
		}
	}

	/*
	 * Register and enqueue style
	 * Uses a WP hook wp_print_styles
	 */

	public function css_style() {

		if ( $this->dgwt()->settings->get_opt( 'lightbox' ) === 'yes' ) {
			wp_register_style( 'dgwt-jg-lightgallery', DGWT_JG_URL . 'assets/css/lightgallery.min.css', array(), DGWT_JG_VERSION );
		}

		// Main CSS
		if ( DGWT_JG_DEBUG === false ) {
			wp_register_style( 'dgwt-jg-style', DGWT_JG_URL . 'assets/css/style.min.css', array(), DGWT_JG_VERSION );
		} else {
			wp_register_style( 'dgwt-jg-style', DGWT_JG_URL . 'assets/css/style.css', array(), DGWT_JG_VERSION );
		}


		wp_enqueue_style( array(
			'dgwt-jg-lightgallery',
			'dgwt-jg-style'
		) );
	}

}

$attach_scripts = new DGWT_JG_Scripts;