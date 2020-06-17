<?php

//Testimonial shortcode

if ( function_exists( 'vc_map' ) ) {
	$url = EF_URL . '/admin/assets/images/shortcodes_images/slider/';

	vc_map(
		array(
			'name'                    => __( 'Slider', 'js_composer' ),
			'base'                    => 'pixxy_slider',
			'as_parent'               => array( 'only' => 'pixxy_slider_items' ),
			'content_element'         => true,
			'show_settings_on_create' => true,
			'js_view'                 => 'VcColumnView',
			'params'                  => array(
				array(
					'type'        => 'select_preview',
					'param_name'  => 'direction',
					'heading'     => __( 'Direction', 'js_composer' ),
					'value'       => array(
						array(
							'value' => 'horizontal',
							'label' => esc_html__( 'Horizontal multiple (Style 1)', 'js_composer' ),
							'image' => $url . 'horizontal.jpg'
						),
						array(
							'value' => 'horizontal_2',
							'label' => esc_html__( 'Horizontal multiple (Style 2)', 'js_composer' ),
							'image' => $url . 'horizontal_2.jpg'
						),
						array(
							'value' => 'vertical',
							'label' => esc_html__( 'Vertical multiple', 'js_composer' ),
							'image' => $url . 'vertical.jpg'
						),
					),
					'admin_label' => true,
					'save_always' => true,
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => __( 'Change color for text', 'js_composer' ),
					'param_name' => 'color',
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Autoplay (sec)', 'js_composer' ),
					'description' => __( '0 - off autoplay.', 'js_composer' ),
					'param_name'  => 'autoplay',
					'value'       => '0'
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Speed (milliseconds)', 'js_composer' ),
					'description' => __( 'Speed Animation. Default 1000 milliseconds', 'js_composer' ),
					'param_name'  => 'speed',
					'value'       => '500'
				),
				array(
					'type'       => 'checkbox',
					'heading'    => __( 'Loop', 'js_composer' ),
					'param_name' => 'loop',
					'value'      => '1',
				),
				array(
					'type'       => 'checkbox',
					'heading'    => __( 'Pagination', 'js_composer' ),
					'param_name' => 'pagination',
					'value'      => array( __( 'Yes', 'js_composer' ) => 'yes' ),
					'dependency' => array( 'element' => 'direction', 'value' => array( 'horizontal', 'vertical' ) )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count of slides for large desktop', 'js_composer' ),
					'description' => __( 'Only numbers. By default is 4.', 'js_composer' ),
					'param_name'  => 'lg_count',
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count of slides for middle desktop', 'js_composer' ),
					'description' => __( 'Only numbers. By default is 3.', 'js_composer' ),
					'param_name'  => 'md_count',
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count of slides for tablet', 'js_composer' ),
					'description' => __( 'Only numbers. By default is 2.', 'js_composer' ),
					'param_name'  => 'sm_count',
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count of slides for mobile', 'js_composer' ),
					'description' => __( 'Only numbers. By default is 1.', 'js_composer' ),
					'param_name'  => 'xs_count',
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Extra class name', 'js_composer' ),
					'param_name'  => 'el_class',
					'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
					'value'       => ''
				),
				array(
					'type'       => 'checkbox',
					'heading'    => __( 'Enable slide number?', 'js_composer' ),
					'param_name' => 'iterator',
					'value'      => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				),
				array(
					'type'       => 'css_editor',
					'heading'    => __( 'CSS box', 'js_composer' ),
					'param_name' => 'css',
					'group'      => __( 'Design options', 'js_composer' )
				),
			) //end params
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_pixxy_slider extends WPBakeryShortCodesContainer {
		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'autoplay'  => '',
				'loop'      => '',
				'color'     => '',
				'speed'     => '',
				'pagination' => '',
				'css'       => '',
				'class'     => '',
				'icon'     => '',
				'el_class'  => '',
				'direction' => '',
				'iterator'  => '',
				'lg_count'  => '4',
				'md_count'  => '3',
				'sm_count'  => '2',
				'xs_count'  => '1',
			), $atts ) );

			// include needed stylesheets
			if ( ! in_array( "pixxy_slider-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_slider-css";
			}
			$this->enqueueCss();

			$autoplay  = is_numeric( $autoplay ) ? $autoplay * 1000 : 0;
			$speed     = is_numeric( $speed ) ? $speed : '500';
			$loop      = ! empty( $loop ) ? '1' : '0';
			$direction = ! empty( $direction ) ? $direction : 'horizontal';
			if( $direction == 'horizontal' || $direction == 'vertical' ) {
				$slider_mode = $direction;
			} else {
				$slider_mode = 'horizontal';
			}

			$lg_count = ! empty( $lg_count ) && is_numeric( $lg_count ) ? $lg_count : '3';
			$md_count = ! empty( $md_count ) && is_numeric( $md_count ) ? $md_count : '3';
			$sm_count = ! empty( $sm_count ) && is_numeric( $sm_count ) ? $sm_count : '2';
			$xs_count = ! empty( $xs_count ) && is_numeric( $xs_count ) ? $xs_count : '1';

			$color = isset( $color ) && ! empty( $color ) ? 'style=color:' . $color . ';' : '';

			$class = ( ! empty( $el_class ) ) ? $el_class : '';
			$class .= vc_shortcode_custom_css_class( $css, ' ' );

			global $pixxy_slider_items;
			$pixxy_slider_items = array();

			ob_start();

			do_shortcode( $content );

			if ( ! empty( $pixxy_slider_items ) && count( $pixxy_slider_items ) > 0 ) { ?>

                <div class="px-slider <?php echo esc_attr( $direction ); ?> <?php echo esc_attr( $class ); ?>">
                    <div class="swiper-container"
                         data-mouse="0"
                         data-autoplay="<?php echo esc_attr( $autoplay ); ?>"
                         data-loop="<?php echo esc_attr( $loop ); ?>"
                         data-speed="<?php echo esc_attr( $speed ); ?>"
                         data-space="0"
                         data-pagination-type="bullets"
                         data-mode="<?php echo esc_attr( $slider_mode ); ?>"
						<?php if ( $direction == 'horizontal' || $direction == 'horizontal_2' ) : ?>
                            data-responsive='responsive'
						<?php endif ?>
                         data-add-slides="<?php echo esc_attr( $lg_count ); ?>"
                         data-xs-slides="<?php echo esc_attr( $xs_count ); ?>"
                         data-sm-slides="<?php echo esc_attr( $sm_count ); ?>"
                         data-md-slides="<?php echo esc_attr( $md_count ); ?>"
                         data-lg-slides="<?php echo esc_attr( $lg_count ); ?>"
						<?php if ( $direction == 'vertical' && ! $loop ) : ?>
                            data-center="1"
						<?php endif; ?>>
                        <div class="swiper-wrapper">

							<?php $index = 1;

							    $counter = 1;
							foreach ( $pixxy_slider_items as $item ) {
								$value       = (object) $item['atts'];
								$class_slide = '';


								if ( $index < 10 ) {
									$index = "0" . $index;
								}

								if ( ! empty( $value->css ) ) {
									$class_slide .= vc_shortcode_custom_css_class( $value->css, ' ' );
								} ?>

                                <div class="swiper-slide <?php echo esc_attr( $class_slide ); ?>">

									<?php if ( $direction == 'horizontal' ) : ?>
                                        <div class="px-slider__line px-slider__line--even">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider_wave_1.png" alt="<?php esc_attr_e('elements', 'pixxy'); ?>">
                                        </div>
                                        <div class="px-slider__line px-slider__line--odd">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider_wave_2.png" alt="<?php esc_attr_e('elements', 'pixxy'); ?>">
                                        </div>
									<?php endif ?>

									<?php if ( $direction == 'horizontal_2' && $iterator ) : ?>
                                        <div class="px-slider__line px-slider__line--even">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider_wave_3.png" alt="<?php esc_attr_e('elements', 'pixxy'); ?>">
                                        </div>
                                        <div class="px-slider__line px-slider__line--odd">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider_wave_4.png" alt="<?php esc_attr_e('elements', 'pixxy'); ?>">
                                        </div>
									<?php endif; ?>

                                    <div class="px-slider__item <?php if ( $iterator ) : ?>px-slider__item--iterator<?php endif; ?>" <?php if ( $iterator ) : ?> data-index="<?php echo $index ?>"<?php endif; ?>>

										<?php if ( $direction == 'horizontal' ) : ?>
                                            <div class="px-slider__point px-slider__point--active">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="67" height="75" viewBox="0 0 67 75">
                                                    <defs>
                                                        <linearGradient id="a<?php echo esc_attr($counter); ?>" x1="0%" y1="0%" y2="100%">
                                                            <stop offset="0%" stop-color="#FAD961"/>
                                                            <stop offset="100%" stop-color="#FA8B4C"/>
                                                        </linearGradient>
                                                        <linearGradient id="b<?php echo esc_attr($counter); ?>" x1="0%" y1="0%" y2="100%">
                                                            <stop offset="0%" stop-color="#FAD961"/>
                                                            <stop offset="11.507%" stop-color="#FAD05F"/>
                                                            <stop offset="100%" stop-color="#FA8B4C"/>
                                                        </linearGradient>
                                                    </defs>
                                                    <g fill="none" fill-rule="evenodd">
                                                        <path fill="url(#a<?php echo esc_attr($counter); ?>)" d="M38.396 1.34L61.79 14.847a10 10 0 0 1 5 8.66v27.016a10 10 0 0 1-5 8.66L38.396 72.69a10 10 0 0 1-10 0L5 59.183a10 10 0 0 1-5-8.66V23.508a10 10 0 0 1 5-8.66L28.396 1.34a10 10 0 0 1 10 0z" opacity=".113"/>
                                                        <path fill="url(#a<?php echo esc_attr($counter); ?>)" d="M38 13.301l13 7.506a10 10 0 0 1 5 8.66v15.011a10 10 0 0 1-5 8.66l-13 7.506a10 10 0 0 1-10 0l-13-7.506a10 10 0 0 1-5-8.66V29.467a10 10 0 0 1 5-8.66L28 13.3a10 10 0 0 1 10 0z" opacity=".1"/>
                                                        <path fill="url(#b<?php echo esc_attr($counter); ?>)" d="M33 23.648l11 6.676v13.352l-11 6.676-11-6.676V30.324z"/>
                                                    </g>
                                                </svg>
                                            </div>

                                            <div class="px-slider__point px-slider__point--next">
                                                <svg width="67px" height="75px" viewBox="0 0 67 75" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>Group 23</title>
                                                    <desc>Created with Sketch.</desc>
                                                    <defs>
                                                        <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-1<?php echo esc_attr($counter); ?>">
                                                            <stop stop-color="#2532FF" offset="0%"></stop>
                                                            <stop stop-color="#4EF9FE" offset="100%"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="Home-11-Crypto-Startup<?php echo esc_attr($counter); ?>" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-927.000000, -3019.000000)" fill="url(#linearGradient-1<?php echo esc_attr($counter); ?>)" id="Group-23<?php echo esc_attr($counter); ?>">
                                                            <g transform="translate(927.000000, 3019.000000)">
                                                                <path d="M38.3957215,1.33974596 L61.7914431,14.8472721 C64.8854538,16.6336 66.7914431,19.9348702 66.7914431,23.5075261 L66.7914431,50.5225784 C66.7914431,54.0952343 64.8854538,57.3965045 61.7914431,59.1828324 L38.3957215,72.6903585 C35.3017108,74.4766865 31.4897323,74.4766865 28.3957215,72.6903585 L5,59.1828324 C1.90598923,57.3965045 1.59872116e-14,54.0952343 1.24344979e-14,50.5225784 L-5.32907052e-15,23.5075261 C-8.8817842e-15,19.9348702 1.90598923,16.6336 5,14.8472721 L28.3957215,1.33974596 C31.4897323,-0.446581987 35.3017108,-0.446581987 38.3957215,1.33974596 Z" opacity="0.06"></path>
                                                                <path d="M38,13.301226 L51,20.8067795 C54.0940108,22.5931075 56,25.8943777 56,29.4670336 L56,44.4781406 C56,48.0507965 54.0940108,51.3520667 51,53.1383946 L38,60.6439481 C34.9059892,62.4302761 31.0940108,62.4302761 28,60.6439481 L15,53.1383946 C11.9059892,51.3520667 10,48.0507965 10,44.4781406 L10,29.4670336 C10,25.8943777 11.9059892,22.5931075 15,20.8067795 L28,13.301226 C31.0940108,11.5148981 34.9059892,11.5148981 38,13.301226 Z" opacity="0.1"></path>
                                                                <polygon points="33 23.6480159 44 30.3240079 44 43.6759921 33 50.3519841 22 43.6759921 22 30.3240079"></polygon>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
										<?php endif ?>

                                        <div class="px-slider__content">
											<?php if ( ! empty( $value->logo_image ) && is_numeric( $value->logo_image ) ) {
												$alt = get_post_meta( $value->logo_image, '_wp_attachment_image_alt', true ); ?>
                                                <img class="px-slider__image"
                                                     src="<?php echo esc_url( wp_get_attachment_url( $value->logo_image ) ); ?>"
                                                     alt="<?php echo esc_attr( $alt ); ?>">
											<?php } ?>
											<?php if ( ! empty( $value->title ) ) { ?>
                                                <h5 class="px-slider__title" <?php echo $color; ?>>
													<?php
													if ( ! empty( $value->icon ) && ($direction == 'horizontal_2' || $direction == 'horizontal' ) ) { ?>
                                                        <i class="fa <?php echo esc_attr( $value->icon ); ?>"></i>
													<?php } ?>
													<?php echo esc_html( $value->title ); ?>
                                                </h5>
											<?php } ?>
											<?php if ( ! empty( $item['content'] ) ) { ?>
                                                <p class="px-slider__description" <?php echo $color; ?>>
													<?php echo do_shortcode( $item['content'] ); ?>
                                                </p>
											<?php } ?>
                                        </div>
                                    </div>
                                </div>

								<?php
								$index = (int) $index;
								$index ++;
								$counter ++;
							} ?>
                        </div>

						<?php if ( $direction == 'horizontal_2' ) : ?>
                            <div class="swiper-pagination" <?php echo $color; ?>></div>
						<?php endif; ?>
                    </div>
					<?php if ( $pagination ) : ?>
                        <div class="swiper-pagination-wrapper">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination" <?php echo $color; ?>></div>
                            <div class="swiper-button-next"></div>
                        </div>
					<?php endif; ?>
                </div>
			<?php }

			return ob_get_clean();
		}
	}
}


if ( function_exists( 'vc_map' ) ) {
	vc_map(
		array(
			'name'            => 'Slider item',
			'base'            => 'pixxy_slider_items',
			'as_child'        => array( 'only' => 'pixxy_slider' ),
			'content_element' => true,
			'params'          => array(
				array (
					'param_name' => 'direction',
					'type' => 'select_preview',
					'description' => '',
					'heading' => 'Style',
					'value'       => array(
						array(
							'value' => 'horizontal',
							'label' => esc_html__( 'Horizontal multiple (Style 1)', 'js_composer' ),
							'image' => $url . 'horizontal.jpg'
						),
						array(
							'value' => 'horizontal_2',
							'label' => esc_html__( 'Horizontal multiple (Style 2)', 'js_composer' ),
							'image' => $url . 'horizontal_2.jpg'
						),
						array(
							'value' => 'vertical',
							'label' => esc_html__( 'Vertical multiple', 'js_composer' ),
							'image' => $url . 'vertical.jpg'
						),
					),
					'admin_label' => true,
					'save_always' => true,
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( "Title", 'js_composer' ),
					'param_name' => 'title',
					'value'      => ''
				),
				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'js_composer' ),
					'param_name'  => 'icon',
					'value'       => 'icon-arrow-1-circle-down',
					'settings'    => array(
						'emptyIcon'    => false,
						'type'         => 'info',
						'source'       => pixxy_ionicons_icons(),
						'iconsPerPage' => 4000,
					),
					'description' => __( 'Select icon from library.', 'js_composer' ),
					'dependency' => array( 'element' => 'direction', 'value' => array( 'horizontal' ) )
				),
				array(
					'type'       => 'textarea_html',
					'heading'    => __( 'Content', 'js_composer' ),
					'param_name' => 'content',
					'holder'     => 'div',
					'value'      => ''
				),
				array(
					'type'       => 'css_editor',
					'heading'    => __( 'CSS box', 'js_composer' ),
					'param_name' => 'css',
					'group'      => __( 'Design options', 'js_composer' )
				)
			) //end params
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_pixxy_slider_items extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			global $pixxy_slider_items;
			$pixxy_slider_items[] = array( 'atts' => $atts, 'content' => $content );

			return;
		}
	}
}