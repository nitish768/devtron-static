<?php
/**
* @package   The_Grid
* @author    Themeone <themeone.master@gmail.com>
* @copyright 2015 Themeone
*
* Skin Name: Masonry Info
* Skin Slug: tg-masonry-info
* Date: 07/27/18 - 03:59:48PM
*
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

// Init The Grid Elements instance
$tg_el = The_Grid_Elements();

// Prepare main data for futur conditions
$image  = $tg_el->get_attachment_url();
$format = $tg_el->get_item_format();

$output = null;

$media = $tg_el->get_media();

// if there is a media
if ($media) {

	// Media wrapper start
	$output .= $tg_el->get_media_wrapper_start();

	// Media content (image, gallery, audio, video)
	$output .= $media;

	// if there is an image
	if ($image || in_array($format, array('gallery', 'video'))) {

		// Media content holder start
		$output .= $tg_el->get_media_content_start();




		// Top wrapper start
		$output .= '<div class="tg-top-holder">';
			$output .= $tg_el->get_media_button(array('icons' => array('image' => '<i class="tg-icon-zoom"></i>', 'audio' => '<i class="tg-icon-play"></i>', 'video' => '<i class="tg-icon-play"></i>', 'pause' => ''), 'action' => array('type' => 'lightbox')), 'tg-element-2 search-icon');
		$output .= '</div>';
		// Top wrapper end

		// Media content holder end
		$output .= $tg_el->get_media_content_end();

		$output .= $tg_el->add_layer_action(array('action' => array('type' => 'lightbox', 'position' => 'above')), 'tg-absolute');

	}

	$output .= $tg_el->get_media_wrapper_end();
	// Media wrapper end

}

// Bottom content wrapper start
$output .= $tg_el->get_content_wrapper_start('', 'bottom');
	$output .= $tg_el->get_the_terms(array('taxonomy' => 'portfolio-category', 'link' => false, 'color' => '', 'separator' => ' ', 'override' => true), 'tg-element-1');
	$output .= $tg_el->get_the_title(array('link' => false, 'action' => array('type' => 'link', 'link_target' => '_self', 'link_url' => 'post_url', 'custom_url' => '', 'meta_data_url' => '')), 'tg-element-3 title');
	$output .= $tg_el->get_content_clear();
$output .= $tg_el->get_content_wrapper_end();
// Bottom content wrapper end

return $output;