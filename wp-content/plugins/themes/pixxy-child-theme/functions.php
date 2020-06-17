<?php
/**
 * The template includes necessary functions for theme.
 *
 * @package pixxy
 * @since 1.0
 */


if (! function_exists('child_scripts')) {
    function hover_scripts(){

        // register style
        wp_enqueue_style('child-css', get_stylesheet_directory_uri() . '/style.css');

    	
    }
}
add_action( 'wp_enqueue_scripts', 'child_scripts');