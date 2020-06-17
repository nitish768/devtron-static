<?php

//Image banner shortcode

if ( function_exists( 'vc_map' ) ) {

    $url = EF_URL . '/admin/assets/images/shortcodes_images/banner/';
	$url_btn = EF_URL . '/admin/assets/images/shortcodes_images/buttons/';

	vc_map(
		array(
			'name'        => __( 'Image banner', 'js_composer' ),
			'base'        => 'pixxy_banner',
			'description' => __( 'Image banner with text and button', 'js_composer' ),
			'category'    => __( 'Media', 'js_composer' ),
			'params'      => array(
				array(
					'type'       => 'select_preview',
					'param_name' => 'style_banner',
					'heading'    => esc_html__( 'Style', 'js_composer' ),
					'value'      => array(
						array(
							'value' => 'simple',
							'label' => esc_html__( 'Simple with animation', 'js_composer' ),
							'image' => $url . 'simple.jpg'
						),
						array(
							'value' => 'creative',
							'label' => esc_html__( 'Creative', 'js_composer' ),
							'image' => $url . 'creative.jpg'
						),
						array(
							'value' => 'classic',
							'label' => esc_html__( 'Classic', 'js_composer' ),
							'image' => $url . 'classic.jpg'
						),
						array(
							'value' => 'elementary',
							'label' => esc_html__( 'Elementary', 'js_composer' ),
							'image' => $url . 'elementary.jpg'
						),
					),
					'admin_label' => true,
					'save_always' => true,
				),
				array(
					'type'       => 'dropdown',
					'heading'    => __( 'Height Banner', 'js_composer' ),
					'param_name' => 'height',
					'value'      => array(
						'Full height' => 'full',
						'Large height' => 'large_banner',
					),
					'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple', 'creative' ) )
				),
				array(
					'type'       => 'dropdown',
					'heading'    => __( 'Height Banner', 'js_composer' ),
					'param_name' => 'elementary_height',
					'value'      => array(
                        'Medium'      => 'medium',
						'Small'       => 'small',
					),
					'dependency' => array( 'element' => 'style_banner', 'value' => array( 'elementary' ) )
				),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Subtitle', 'js_composer' ),
                    'param_name' => 'subtitle',
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'elementary' ) )
                ),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Title', 'js_composer' ),
					'param_name' => 'title'
				),
				array(
					'type'       => 'textarea',
					'heading'    => __( 'Text', 'js_composer' ),
					'param_name' => 'text',
				),
                array(
                    'type'       => 'checkbox',
                    'heading'    => __( 'Text light color', 'js_composer' ),
                    'param_name' => 'light',
                    'value'      => array( __( 'Yes, please', 'js_composer' ) => 'yes' ),
                ),
				array(
					'type'       => 'vc_link',
					'heading'    => __( 'Button', 'js_composer' ),
					'param_name' => 'button',
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple', 'creative', 'classic' ) )
				),
				array (
					'type' => 'select_preview',
					'description' => '',
					'heading'    => __( 'Style for button', 'js_composer' ),
					'param_name' => 'btn_style',
					'value' => array (
						array(
							'value' => 'a-btn',
							'label' => esc_html__( 'Default', 'js_composer' ),
							'image' => $url_btn . 'default.jpg'
						),
						array(
							'value' => 'a-btn-2',
							'label' => esc_html__( 'Dark', 'js_composer' ),
							'image' => $url_btn . 'dark.jpg'
						),
						array(
							'value' => 'a-btn-3',
							'label' => esc_html__( 'Light', 'js_composer' ),
							'image' => $url_btn . 'light.jpg'
						),
						array(
							'value' => 'a-btn-4',
							'label' => esc_html__( 'White', 'js_composer' ),
							'image' => $url_btn . 'white.jpg'
						),
						array(
							'value' => 'a-btn-5',
							'label' => esc_html__( 'Transparent', 'js_composer' ),
							'image' => $url_btn . 'transparent.jpg'
						),
						array(
							'value' => 'a-btn-6',
							'label' => esc_html__( 'Link style', 'js_composer' ),
							'image' => $url_btn . 'link.jpg'
						),
						array(
							'value' => 'a-btn-7',
							'label' => esc_html__( 'Gradient', 'js_composer' ),
							'image' => $url_btn . 'gradient.jpg'
						),
					),
					'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple', 'creative', 'classic' ) ),
                     'admin_label' => true,
		            'save_always' => true,
				),
				array(
					'type'       => 'vc_link',
					'heading'    => __( 'Additional button', 'js_composer' ),
					'param_name' => 'add_button',
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'classic' ) )
				),
				array(
					'type'       => 'select_preview',
					'heading'    => __( 'Style for additional button', 'js_composer' ),
					'param_name' => 'add_btn_style',
					'value'      => array(
						array(
							'value' => 'a-btn',
							'label' => esc_html__( 'Default', 'js_composer' ),
							'image' => $url_btn . 'default.jpg'
						),
						array(
							'value' => 'a-btn-2',
							'label' => esc_html__( 'Dark', 'js_composer' ),
							'image' => $url_btn . 'dark.jpg'
						),
						array(
							'value' => 'a-btn-3',
							'label' => esc_html__( 'Light', 'js_composer' ),
							'image' => $url_btn . 'light.jpg'
						),
						array(
							'value' => 'a-btn-4',
							'label' => esc_html__( 'White', 'js_composer' ),
							'image' => $url_btn . 'white.jpg'
						),
						array(
							'value' => 'a-btn-5',
							'label' => esc_html__( 'Transparent', 'js_composer' ),
							'image' => $url_btn . 'transparent.jpg'
						),
						array(
							'value' => 'a-btn-6',
							'label' => esc_html__( 'Link style', 'js_composer' ),
							'image' => $url_btn . 'link.jpg'
						),
						array(
							'value' => 'a-btn-7',
							'label' => esc_html__( 'Gradient', 'js_composer' ),
							'image' => $url_btn . 'gradient.jpg'
						),
					),
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'classic' ) ),
					'admin_label' => true,
					'save_always' => true,
				),
                array(
                    'type'       => 'checkbox',
                    'heading'    => __( 'Add animation?', 'js_composer' ),
                    'param_name' => 'animation',
                    'value'      => array( __( 'Yes, please', 'js_composer' ) => 'yes' ),
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple', 'elementary' ) )
                ),
                array(
                    'type'       => 'attach_image',
                    'heading'    => __( 'Content Image', 'js_composer' ),
                    'param_name' => 'content_image',
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple', 'creative' ) )
                ),
				array(
					'type'       => 'attach_image',
					'heading'    => __( 'Background image', 'js_composer' ),
					'param_name' => 'image'
				),
				array(
					'type'       => 'dropdown',
					'heading'    => __( 'Background position', 'js_composer' ),
					'param_name' => 'background_position',
					'value'      => array(
                        'Center'  => 'center',
                        'Center top'  => 'center_top',
                        'Center bottom'  => 'center_bottom',
                        'Left center'  => 'left',
                        'Left top'  => 'left_top',
                        'Left bottom'  => 'left_bottom',
                        'Right center'  => 'right',
                        'Right top'  => 'right_top',
                        'Right bottom'  => 'right_bottom',
                    ),
                    'default' => 'center',
				),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Remove fade-in-up animation on load?', 'js_composer' ),
                    'param_name' => 'animation_fade',
                    'std'        => '',
                ),
				array(
					'type'       => 'checkbox',
					'heading'    => __( 'Show overlay?', 'js_composer' ),
					'param_name' => 'overlay',
					'value'      => array( __( 'Yes, please', 'js_composer' ) => 'yes' ),
					'dependency' => array( 'element' => 'style_banner', 'value' => array( 'classic' ) )
				),
			),
			//end params
		)
	);
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pixxy_banner extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'style_banner' => 'simple',
				'title'        => '',
				'button'       => '',
				'btn_style'    => 'a-btn',
				'add_button'   => '',
				'add_btn_style'=> 'a-btn',
				'subtitle'     => '',
				'text'         => '',
				'animation'    => '',
				'image'        => '',
				'background_position' => 'center',
				'content_image'=> '',
				'height'       => 'full',
				'elementary_height'  => 'medium',
				'overlay'      => '',
				'light'      => '',
                'animation_fade' => '',

			), $atts ) );

			// include needed stylesheets
			if ( ! in_array( "pixxy_banner_image-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_banner_image-css";
			}
			$this->enqueueCss();

            if ( !in_array( "pixxy_parallax-fragments", self::$js_scripts ) && $animation == 'yes') {
                self::$js_scripts[] = "pixxy_parallax-fragments";
            }

            if ( ! in_array( "pixxy_image_banner", self::$js_scripts ) ) {
                self::$js_scripts[] = "pixxy_image_banner";
            }
            $this->enqueueJs();

			$banner_class = '';

			if ($style_banner != 'elementary') {
                if ( $height == 'full' ) {
                    $banner_class .= 'full-height-window';
                } else {
                    $banner_class .= $height;
                }
            }


            $image    = ( ! empty( $image ) && is_numeric( $image ) ) ? wp_get_attachment_url( $image ) : '';

            if ($background_position == 'left_top') {
                $background_position = 'left top';
            } elseif ($background_position == 'left_bottom') {
                $background_position = 'left bottom';
            } elseif ($background_position == 'right_top') {
                $background_position = 'right top';
            } elseif ($background_position == 'right_bottom') {
                $background_position = 'right bottom';
            } elseif ($background_position == 'center_top') {
                $background_position = 'center top';
            } elseif ($background_position == 'center_bottom') {
                $background_position = 'center bottom';
            }

            $animation_parent = isset( $animation_fade ) && ! empty( $animation_fade ) ? '' : 'js-animation';
            $animation_child = isset( $animation_fade ) && ! empty( $animation_fade ) ? '' : 'js-animation-item';
            $animation_content = isset( $animation_fade ) && ! empty( $animation_fade ) ? '' : 'js-animation-content';

			if ( ! empty( $style_banner ) ) {
				$banner_class .= ' ' . $style_banner;
			}
			if ( ! empty( $light ) ) {
				$banner_class .= ' ' . 'light';
			}

            $banner_class .= ($style_banner == 'elementary') ? ' ' . $elementary_height : '';



			if ( ! empty( $button ) ) {
				$url = vc_build_link( $button );
			} else {
				$url['url']    = '#';
				$url['title']  = 'title';
				$url['target'] = '_self';
			}

			if ( ! empty( $add_button ) ) {
				$add_url = vc_build_link( $add_button );
			} else {
                $add_url['url']    = '#';
                $add_url['title']  = 'title';
                $add_url['target'] = '_self';
			}

			ob_start(); ?>

            <div class="container-fluid top-banner <?php echo esc_attr( $banner_class ); ?>" style="background-position: <?php echo esc_attr($background_position); ?>">

				<?php if ( $style_banner == 'simple' || $style_banner == 'creative' ) {
					if ( ! empty( $image ) ) {
						$image3_alt      = ( ! empty( $image ) && is_numeric( $image ) ) ? get_post_meta( $image, '_wp_attachment_image_alt', true ) : '';
						echo pixxy_the_lazy_load_flter( $image, array( 'class' => 's-img-switch', 'alt' => $image3_alt ) );
					} ?>
                    <?php if ($animation && $style_banner == 'simple') { ?>
                        <div class="images-wrap" id="scene1">
                            <div class="img-wrap img-wrap-1 layer" data-depth="0.45"><img src="<?php echo esc_url(EF_URL . '/shortcodes/assets/images/fragments/style-1/01.png'); ?>" alt="<?php esc_attr_e('elements', 'pixxy'); ?>"></div>
                            <div class="img-wrap img-wrap-2 layer" data-depth="1.45"><img src="<?php echo esc_url(EF_URL . '/shortcodes/assets/images/fragments/style-1/02.png'); ?>" alt="<?php esc_attr_e('elements', 'pixxy'); ?>"></div>
                            <div class="img-wrap img-wrap-3 layer" data-depth="0.6"><img src="<?php echo esc_url(EF_URL . '/shortcodes/assets/images/fragments/style-1/03.png'); ?>" alt="<?php esc_attr_e('elements', 'pixxy'); ?>"></div>
                            <div class="img-wrap img-wrap-4 layer" data-depth="0.45"><img src="<?php echo esc_url(EF_URL . '/shortcodes/assets/images/fragments/style-1/04.png'); ?>" alt="<?php esc_attr_e('elements', 'pixxy'); ?>"></div>
                            <div class="img-wrap img-wrap-5 layer" data-depth="0.3"><img src="<?php echo esc_url(EF_URL . '/shortcodes/assets/images/fragments/style-1/05.png'); ?>" alt="<?php esc_attr_e('elements', 'pixxy'); ?>"></div>
                        </div>
                    <?php } ?>

                    <div class="content">
                        <div class="row">
                            <div class="<?php echo ($style_banner == 'simple') ? esc_attr('col-sm-6') : esc_attr('col-lg-5 col-sm-6'); ?>">
                                <div class="content-info <?php echo esc_attr( $animation_parent ); ?>">
                                    <?php if ( ! empty( $title ) ) { ?>
                                        <h3 class="title <?php echo esc_attr($animation_child); ?>">
                                            <span class="<?php echo esc_attr($animation_content); ?>">
                                                <?php echo wp_kses_post( $title ); ?>
                                            </span>
                                        </h3>
                                    <?php }
                                    if ( ! empty( $text ) ) { ?>
                                        <div class="descr <?php echo esc_attr($animation_child); ?>">
                                            <div class="<?php echo esc_attr($animation_content); ?>">
                                                <?php echo wp_kses_post( $text ); ?>
                                            </div>
                                        </div>
                                    <?php }
                                    if ( ! empty( $button ) && !empty($url['title'] ) ) { ?>
                                        <div class="<?php echo esc_attr($animation_child); ?>">
                                            <div class="<?php echo esc_attr($animation_content); ?>">
                                                <div class="btn-wrap <?php echo esc_attr($animation_child); ?>">
                                                    <a href="<?php echo esc_url( $url['url'] ); ?>"
                                                       class="<?php echo esc_attr( $btn_style ); ?>"
                                                       target="<?php echo esc_attr( $url['target'] ); ?>">
                                                        <?php echo esc_html( $url['title'] ); ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="<?php echo ($style_banner == 'simple') ? esc_attr('col-sm-6') : esc_attr('col-lg-7 col-sm-6'); ?>">
                                <div class="content-image">
                                    <?php
                                    if ( ! empty( $content_image ) ) {
	                                    $alt      = ( ! empty( $content_image ) && is_numeric( $content_image ) ) ? get_post_meta( $content_image, '_wp_attachment_image_alt', true ) : '';
                                        echo pixxy_the_lazy_load_flter( $content_image, array( 'class' => '', 'alt' => $alt ) );
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php } elseif ( $style_banner == 'classic' ) {
                    if ( ! empty( $image ) ) {
	                    $image_alt      = ( ! empty( $image ) && is_numeric( $image ) ) ? get_post_meta( $image, '_wp_attachment_image_alt', true ) : '';
                        echo pixxy_the_lazy_load_flter( $image, array( 'class' => 's-img-switch', 'alt' => $image_alt ) );
                    }
                    if ( ! empty( $overlay ) ) { ?>
                        <span class="overlay"></span>
                    <?php } ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-offset-2 col-sm-8 <?php echo esc_attr( $animation_parent ); ?>">
                                    <?php if ( ! empty( $title ) ) { ?>
                                        <h3 class="title <?php echo esc_attr($animation_child); ?>">
                                            <span class="<?php echo esc_attr($animation_content); ?>">
                                                <?php echo wp_kses_post( $title ); ?>
                                            </span>
                                        </h3>
                                    <?php }
                                    if ( ! empty( $text ) ) { ?>
                                        <div class="descr <?php echo esc_attr($animation_child); ?>">
                                            <div class="<?php echo esc_attr($animation_content); ?>">
                                                <?php echo wp_kses_post( $text ); ?>
                                            </div>
                                        </div>
                                    <?php }
                                    if ( ! empty( $button ) && ( !empty($url['title']) || !empty($add_button ) ) ) { ?>
                                        <div class="<?php echo esc_attr($animation_child); ?>">
                                            <div class="<?php echo esc_attr($animation_content); ?>">
                                                <div class="btn-wrap">
                                                    <?php if (!empty($url['title'])): ?>
                                                        <a href="<?php echo esc_url( $url['url'] ); ?>"
                                                           class="<?php echo esc_attr( $btn_style ); ?>"
                                                           target="<?php echo esc_attr( $url['target'] ); ?>">
                                                            <?php echo esc_html( $url['title'] ); ?>
                                                        </a>
                                                    <?php endif;
                                                    if (!empty($add_button)): ?>
                                                        <a href="<?php echo esc_url( $add_url['url'] ); ?>"
                                                           class="<?php echo esc_attr( $add_btn_style ); ?>"
                                                           target="<?php echo esc_attr( $add_url['target'] ); ?>">
                                                            <?php echo esc_html( $add_url['title'] ); ?>
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
				<?php } elseif($style_banner == 'elementary') {
                    if ( ! empty( $image ) ) {
	                    $image2_alt      = ( ! empty( $image ) && is_numeric( $image ) ) ? get_post_meta( $image, '_wp_attachment_image_alt', true ) : '';
                        echo pixxy_the_lazy_load_flter( $image, array( 'class' => 's-img-switch', 'alt' => $image2_alt ) );
                    } if ( ! empty( $overlay ) ) { ?>
                        <span class="overlay"></span>
                    <?php } ?>
                    <?php if ($animation && $style_banner == 'elementary') { ?>
                        <div class="images-wrap" id="scene1">
                            <div class="img-wrap img-wrap-1 layer" data-depth="0.45"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-2/01.png'; ?>" alt="<?php esc_attr_e('elements', 'pixxy'); ?>"></div>
                            <div class="img-wrap img-wrap-2 layer" data-depth="1.45"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-2/02.png'; ?>" alt="<?php esc_attr_e('elements', 'pixxy'); ?>"></div>
                            <div class="img-wrap img-wrap-3 layer" data-depth="0.6"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-2/03.png'; ?>" alt="<?php esc_attr_e('elements', 'pixxy'); ?>"></div>
                            <div class="img-wrap img-wrap-4 layer" data-depth="0.45"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-2/04.png'; ?>" alt="<?php esc_attr_e('elements', 'pixxy'); ?>"></div>
                        </div>
                    <?php } ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <?php if ( ! empty( $subtitle ) ) { ?>
                                    <h5 class="subtitle <?php echo esc_attr($animation_child); ?>"><span class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $subtitle ); ?></span></h5>
                                <?php } ?>
                                <?php if ( ! empty( $title ) ) { ?>
                                    <h3 class="title <?php echo esc_attr($animation_child); ?>">
                                        <span class="<?php echo esc_attr($animation_content); ?>">
                                            <?php echo wp_kses_post( $title ); ?>
                                        </span>
                                    </h3>
                                <?php }
                                if ( ! empty( $text ) ) { ?>
                                    <div class="descr <?php echo esc_attr($animation_child); ?>">
                                        <div class="<?php echo esc_attr($animation_content); ?>">
                                            <?php echo wp_kses_post( $text ); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

			<?php // end output

			return ob_get_clean();
		}
	}
}