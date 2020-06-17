<?php

//Line of images shortcode
if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/line_of_images/';
	vc_map( array(
		'name'                    => __( 'Line of images', 'js_composer' ),
		'base'                    => 'pixxy_line_of_images',
		'content_element'         => true,
		'show_settings_on_create' => true,
		'params'                  => array(
            array(
                'type'       => 'select_preview',
                'param_name' => 'style',
                'heading'    => esc_html__( 'Style', 'js_composer' ),
                'value'      => array(

                    array(
                        'value' => 'logos',
                        'label' => esc_html__( 'Logos with link (style 1)', 'js_composer' ),
                        'image' => $url . 'logos-with-link-style1.jpg'
                    ),

                    array(
                        'label' => esc_html__( 'Logos with link (style 2)', 'js_composer' ),
                        'value' => 'logos2',
                        'image' => $url . 'logos-with-link-style2.jpg'
                    ),
                ),
                'admin_label' => true,
                'save_always' => true,
            ),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Count images in line', 'js_composer' ),
				'param_name'  => 'count',
				'description' => __( 'Only number.', 'js_composer' ),
				'dependency'  => array( 'element' => 'style', 'value' => array( 'images' ) )
			),
			array(
				'type'       => 'attach_images',
				'heading'    => __( 'Images', 'js_composer' ),
				'param_name' => 'images',
				'dependency' => array( 'element' => 'style', 'value' => array( 'images' ) )
			),
			array(
				'type'       => 'param_group',
				'heading'    => __( 'Values', 'js_composer' ),
				'param_name' => 'logos',
				'value'      => urlencode( json_encode( array() ) ),
				'params'     => array(
					array(
						'type'       => 'attach_image',
						'heading'    => __( 'Image', 'js_composer' ),
						'param_name' => 'image'
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'URL', 'js_composer' ),
						'param_name'  => 'url',
						'description' => __( 'Add url for images.', 'js_composer' ),
					),
				),
				'dependency' => array( 'element' => 'style', 'value' => array( 'logos', 'logos2' ) )
			),
			array(
				'type'       => 'dropdown',
				'param_name' => 'popup_thumb',
				'heading'    => 'Show thumbnail images in popup by default?',
				'value'      => array(
					'Yes' => 'true',
					'None' => 'false'
				),
				'dependency' => array( 'element' => 'style', 'value' => array( 'images' ) )
			),
			array (
				'type' => 'textfield',
				'param_name' => 'xl_column',
				'heading' => 'Columns count for extra large devices',
				'description' => 'For devices more 1200px. Default: 3. Only numbers.',
				'dependency' => array( 'element' => 'style', 'value' => array( 'logos2' ) ),
			),
			array (
				'type' => 'textfield',
				'param_name' => 'lg_column',
				'heading' => 'Columns count for large devices',
				'description' => 'For devices more 992px. Default: 3. Only numbers.',
				'dependency' => array( 'element' => 'style', 'value' => array( 'logos2' ) ),
			),
			array (
				'type' => 'textfield',
				'param_name' => 'md_column',
				'heading' => 'Columns count for medium devices',
				'description' => 'For devices more 768px. Default: 2. Only numbers.',
				'dependency' => array( 'element' => 'style', 'value' => array( 'logos2' ) ),
			),
			array (
				'type' => 'textfield',
				'param_name' => 'sm_column',
				'heading' => 'Columns count for small devices',
				'description' => 'For devices less 768px. Only numbers.',
				'dependency' => array( 'element' => 'style', 'value' => array( 'logos2' ) ),
			),
			array (
				'type' => 'checkbox',
				'param_name' => 'mobile_slider',
				'heading' => 'Enable slider for mobile defices?',
				'dependency' => array( 'element' => 'style', 'value' => array( 'logos' ) ),
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Show more link', 'js_composer' ),
				'param_name' => 'show_more',
				'dependency' => array( 'element' => 'style', 'value' => array( 'logos2' ) )
				/*'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),*/
			),
			array(
				'type'       => 'textfield',
				'heading'    => 'Show more url',
				'param_name' => 'show_more_url',
				'dependency' => array(
					'element' => 'show_more',
					'not_empty' => true,
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Extra class name', 'js_composer' ),
				'param_name'  => 'el_class',
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
				'value'       => '',
			),
			array(
				'type'       => 'css_editor',
				'heading'    => __( 'CSS box', 'js_composer' ),
				'param_name' => 'css',
				'group'      => __( 'Design options', 'js_composer' ),
			),
		) //end params
	) );
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_pixxy_line_of_images extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'style'    => 'logos',
				'images'   => '',
				'count'    => '5',
				'xl_column' => '',
				'lg_column' => '',
				'md_column' => '',
				'sm_column' => '',
				'logos'    => '',
				'popup_thumb' => 'true',
				'show_more' => '',
				'show_more_url' => '',
				'el_class' => '',
				'mobile_slider' => '',
				'css'      => '',
			), $atts ) );

			// include needed stylesheets
			if ( !in_array( "pixxy_line_of_images-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_line_of_images-css";
			}
			$this->enqueueCss();

			if ( !in_array( "pixxy_line_of_images", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_line_of_images";
			}
			$this->enqueueJs();

			// custom css
			$css_class = vc_shortcode_custom_css_class( $css, ' ' );

			// custom class
			$css_class .= ( ! empty( $el_class ) ) ? ' ' . $el_class : '';

			$styleClass = $style == 'logos2' ? 'logos' : '';
			$popup_thumb = isset($popup_thumb) ? $popup_thumb : 'true';

			ob_start();

			$logos = !empty($logos) ? (array) vc_param_group_parse_atts( $logos ) : '';
			$count_items = count($logos) < 3 ? 'item-center' : ''; ?>

            <div class="line-of-images <?php echo esc_attr( $css_class . ' ' . $style . ' ' . $styleClass . ' ' . $count_items); ?>"
                <?php if( $style == 'logos2' ) {
                    if( ! empty( $xl_column ) ) { echo 'data-xl-count="' . $xl_column . '"'; };
                    if( ! empty( $lg_column ) ) { echo 'data-lg-count="' . $lg_column . '"'; };
                    if( ! empty( $md_column ) ) { echo 'data-md-count="' . $md_column . '"'; };
                    if( ! empty( $sm_column ) ) { echo 'data-sm-count="' . $sm_column . '"'; };
                } ?>>
                <div class="line-wrap light-gallery" data-thumb="<?php echo esc_attr($popup_thumb); ?>">
					<?php if ( $style == 'logos' ) {
						if ( ! empty( $logos ) ) {
							if ( $mobile_slider) { ?>
                                <div class="swiper-container js-mobile-init" data-mouse="0" data-autoplay="0" data-responsive="responsive" data-add-slides="5" data-lg-slides="4" data-md-slides="4" data-sm-slides="3" data-xs-slides="1" data-loop="0" data-speed="500" data-space="0" data-pagination-type="bullets" data-mode="horizontal">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($logos as $logo) {
                                            $logo['url'] = !empty($logo['url']) ? $logo['url'] : '#';

                                            if (!empty($logo['image'])) {?>
                                                <div class="swiper-slide">
                                                    <a href="<?php echo esc_url($logo['url']); ?>">
                                                        <?php echo pixxy_the_lazy_load_flter($logo['image'], array('class' => 'logo__image', 'alt' => esc_attr__('logo','pixxy')), true, 'large'); ?>
                                                    </a>
                                                </div>
                                            <?php }
                                        } ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            <?php } else { ?>
                                <?php

								foreach ($logos as $logo) {
                                    $logo['url'] = !empty($logo['url']) ? $logo['url'] : '#';

                                    if (!empty($logo['image'])) { ?>

                                        <a href="<?php echo esc_url($logo['url']); ?>">
                                            <?php echo pixxy_the_lazy_load_flter($logo['image'], array('class' => 'logo__image', 'alt' => esc_attr__('logo','pixxy')), true, 'large'); ?>
                                        </a>

                                    <?php }
                                }
							}
						}
					} elseif ( $style == 'logos2' ) {
						if ( ! empty( $logos ) ) {

							foreach ( $logos as $logo ) {
								$logo['url'] = ! empty( $logo['url'] ) ? $logo['url'] : '#';

								if ( ! empty( $logo['image'] ) ) {?>

                                    <a href="<?php echo esc_url( $logo['url'] ); ?>">
                                        <?php echo pixxy_the_lazy_load_flter( $logo['image'], array( 'class' => 'logo__image', 'alt' => esc_attr__('logo','pixxy') ), true, 'large' ); ?>
                                    </a>
								<?php }
							}
						}
					} else {
                        if ( ! empty( $images ) ) {
                        $images = explode( ',', $images );
                        $width  = 100 / $count;

                        foreach ( $images as $image ) {

	                        $image_alt = ( ! empty( $image ) && is_numeric( $image ) ) ? get_post_meta( $image, '_wp_attachment_image_alt', true) : '';
                            $url = wp_get_attachment_image_src( $image, 'full' ); ?>

                            <a href="<?php echo esc_attr( $url[0] ); ?>" class="gallery-item image-line-wrap" style="width:<?php echo esc_attr( $width ); ?>%;">
                                <?php echo pixxy_the_lazy_load_flter( $image, array( 'class' => 's-img-switch', 'alt' => $image_alt ), true, 'large' ); ?>
                            </a>

                        <?php }
                        }
					} ?>
                </div>

                <?php if( esc_attr( $show_more ) ) : ?>
                    <div class="col-xs-12 text-center">
                        <a href="<?php echo esc_attr( $show_more_url ); ?>" class="show-more">show more <i class="ion-plus-round"></i></a>
                    </div>
                <?php endif; ?>

            </div>

			<?php
			return ob_get_clean();
		}
	}
}