<?php

//Custom text block shortcode
if ( function_exists( 'vc_map' ) ) {
	$url = EF_URL . '/admin/assets/images/shortcodes_images/headings/';
	vc_map(
		array(
			'name'        => __( 'Accordion', 'js_composer' ),
			'base'        => 'pixxy_accordion',
			'category'    => __( 'Content', 'js_composer' ),
			'params'      => array(
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Title', 'js_composer' ),
					'param_name' => 'title',
					'value'      => '',
				),
				array(
					'type'       => 'param_group',
					'heading'    => __( 'Items', 'js_composer' ),
					'param_name' => 'items',
					'value'      => urlencode( json_encode( array() ) ),
					'params'     => array(
						array(
							'type'       => 'textfield',
							'heading'    => __( 'Item title', 'js_composer' ),
							'param_name' => 'item_title'
						),
						array(
							'type'       => 'textarea',
							'heading'    => __( 'Item description', 'js_composer' ),
							'param_name' => 'item_description'
						),
					),
				),
			),
		)
	);
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pixxy_accordion extends WPBakeryShortCode {
		/**
		 * @param $atts
		 * @param null $content
		 *
		 * @return string
		 */
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'title'           => '',
				'items'           => '',
				'item_title'      => '',
				'item_description' => ''
			), $atts ) );


			if ( !in_array( "pixxy_accordion", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_accordion";
			}
			$this->enqueueJs();

			if ( ! in_array( "pixxy_accordion-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_accordion-css";
			}
			$this->enqueueCss();

			// start output
			ob_start(); ?>

			<section class="px-accordion">
				<?php if ( ! empty( $title ) ) : ?>
					<h3 class="px-accordion__title"><?php echo esc_html( $title ); ?></h3>
				<?php endif; ?>

				<?php if ( ! empty( $items ) ) {
					$items = (array) vc_param_group_parse_atts( $items );
					foreach ( $items as $item ) {
				?>

					<div class="px-accordion__item">
						<h4 class="px-accordion__item-title"><?php echo esc_html( $item['item_title'] ); ?></h4>
						<p class="px-accordion__item-description"><?php echo wp_kses_post( $item['item_description'] ); ?></p>
					</div>

				<?php }
				} ?>
			</section>

			<?php // end output

			return ob_get_clean();
		}
	}
}