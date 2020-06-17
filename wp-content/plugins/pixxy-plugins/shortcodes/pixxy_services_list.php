<?php
//Services list shortcode
if ( function_exists( 'vc_map' ) ) {
	$url = EF_URL . '/admin/assets/images/shortcodes_images/line_of_images/';
	vc_map( array(
		'name'                    => __( 'Services list', 'js_composer' ),
		'base'                    => 'pixxy_services_list',
		'content_element'         => true,
		'show_settings_on_create' => true,
		'params'                  => array(
			array(
				'type'       => 'param_group',
				'heading'    => __( 'Services items', 'js_composer' ),
				'param_name' => 'services_items',
				'value'      => urlencode( json_encode( array() ) ),
				'params'     => array(
					array(
						'type'       => 'attach_image',
						'heading'    => __( 'Image', 'js_composer' ),
						'param_name' => 'item_image'
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Title', 'js_composer' ),
						'param_name'  => 'title',
					),
					array(
						'type'        => 'textarea',
						'heading'     => __( 'Description', 'js_composer' ),
						'param_name'  => 'description',
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Link text', 'js_composer' ),
						'param_name'  => 'link',
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'URL', 'js_composer' ),
						'param_name'  => 'url',
						'description' => __( 'Add url for images.', 'js_composer' ),
					),
				),
			),
		) //end params
    ));
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_pixxy_services_list extends WPBakeryShortCode {
		/**
		 * @param $atts
		 * @param null $content
		 *
		 * @return string
		 */
		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'services_items' => '',
                'item_image' => '',
                'title' => '',
                'description' => '',
                'link' => '',
                'url' => '',
			), $atts ) );

			// include needed stylesheets
			if ( !in_array( "pixxy_services_list-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_services_list-css";
			}
			$this->enqueueCss();

			$services_items = (array) vc_param_group_parse_atts( $services_items );

            ob_start(); ?>

            <div class="px-services-list">
                <div class="px-services-list__wrapper">
                <?php foreach ( $services_items as $item ) { ?>
                        <div class="px-services-list__item">
                            <div class="px-services-list__image">
                                <?php echo pixxy_the_lazy_load_flter( $item['item_image'], array( 'alt' => esc_attr__('services_image', 'pixxy') ), true, 'large' ); ?>
                            </div>
                            <div class="px-services-list__content">
                                <h4 class="px-services-list__title"><?php echo esc_attr( $item['title'] ); ?></h4>
                                <p class="px-services-list__description"><?php echo esc_attr( $item['description'] ); ?></p>
                                <a href="<?php echo esc_attr( $item['url'] ); ?>" class="px-services-list__link"><?php echo esc_attr( $item['link'] ); ?></a>
                            </div>
                        </div>
                <?php } ?>
                </div>
            </div>

			<?php
			return ob_get_clean();
		}
	}
}
