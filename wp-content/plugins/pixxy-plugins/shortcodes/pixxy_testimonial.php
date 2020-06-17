<?php

//Testimonial shortcode

if ( function_exists( 'vc_map' ) ) {
	$url = EF_URL . '/admin/assets/images/shortcodes_images/testimonial/';
	vc_map(
		array(
			'name'                    => __( 'Testimonial', 'js_composer' ),
			'base'                    => 'pixxy_testimonial',
			'as_parent'               => array( 'only' => 'pixxy_testimonial_items' ),
			'content_element'         => true,
			'show_settings_on_create' => true,
			'js_view'                 => 'VcColumnView',
			'params'                  => array(
				array(
					'type'        => 'select_preview',
					'param_name'  => 'style',
					'heading'     => esc_html__( 'Style', 'js_composer' ),
					'value'       => array(
						array(
							'value' => 'full_width',
							'label' => esc_html__( 'Full width slides', 'js_composer' ),
							'image' => $url . 'full_width.jpg'
						),
						array(
							'value' => 'multiple',
							'label' => esc_html__( 'Multiple slides (Style 1)', 'js_composer' ),
							'image' => $url . 'multiple.jpg'
						),
						array(
							'value' => 'multiple_style_2',
							'label' => esc_html__( 'Multiple slides (Style 2)', 'js_composer' ),
							'image' => $url . 'multiple_style_2.jpg'
						),
						array(
							'value' => 'flipping',
							'label' => esc_html__( 'Flipping slides', 'js_composer' ),
							'image' => $url . 'flipping.jpg'
						)
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
					'value'       => '0',
					'dependency'  => array(
						'element' => 'style',
						'value'   => array( 'full_width', 'multiple', 'multiple_style_2' )
					)
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Speed (milliseconds)', 'js_composer' ),
					'description' => __( 'Speed Animation. Default 1000 milliseconds', 'js_composer' ),
					'param_name'  => 'speed',
					'value'       => '500',
					'dependency'  => array(
						'element' => 'style',
						'value'   => array( 'full_width', 'multiple', 'multiple_style_2' )
					)
				),
				array(
					'type'       => 'checkbox',
					'heading'    => __( 'Loop', 'js_composer' ),
					'param_name' => 'loop',
					'value'      => '1',
					'dependency' => array(
						'element' => 'style',
						'value'   => array( 'full_width', 'multiple', 'multiple_style_2' )
					)
				),

				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count of slides for large desktop', 'js_composer' ),
					'description' => __( 'Only numbers. By default is 4.', 'js_composer' ),
					'param_name'  => 'lg_count',
					'dependency'  => array( 'element' => 'style', 'value' => array( 'multiple', 'multiple_style_2' ) )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count of slides for middle desktop', 'js_composer' ),
					'description' => __( 'Only numbers. By default is 3.', 'js_composer' ),
					'param_name'  => 'md_count',
					'dependency'  => array( 'element' => 'style', 'value' => array( 'multiple', 'multiple_style_2' ) )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count of slides for tablet', 'js_composer' ),
					'description' => __( 'Only numbers. By default is 2.', 'js_composer' ),
					'param_name'  => 'sm_count',
					'dependency'  => array( 'element' => 'style', 'value' => array( 'multiple', 'multiple_style_2' ) )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count of slides for mobile', 'js_composer' ),
					'description' => __( 'Only numbers. By default is 1.', 'js_composer' ),
					'param_name'  => 'xs_count',
					'dependency'  => array( 'element' => 'style', 'value' => array( 'multiple', 'multiple_style_2' ) )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Extra class name', 'js_composer' ),
					'param_name'  => 'el_class',
					'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
					'value'       => ''
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
	class WPBakeryShortCode_pixxy_testimonial extends WPBakeryShortCodesContainer {
		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'style'    => 'full_width',
				'autoplay' => '',
				'loop'     => '',
				'color'    => '',
				'speed'    => '',
				'css'      => '',
				'class'    => '',
				'el_class' => '',
				'lg_count' => '4',
				'md_count' => '3',
				'sm_count' => '2',
				'xs_count' => '1',
			), $atts ) );

			// include needed stylesheets
			if ( ! in_array( "pixxy_testimonial-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_testimonial-css";
			}

			if ( ! in_array( "flipster-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "flipster-css";
			}
			$this->enqueueCss();

			if ( ! in_array( "pixxy_flipster-js", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_flipster-js";
			}

			if ( ! in_array( "pixxy_testimonials-js", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_testimonials-js";
			}

			$this->enqueueJs();

			$autoplay = is_numeric( $autoplay ) ? $autoplay * 1000 : 0;
			$speed    = is_numeric( $speed ) ? $speed : '500';
			$loop     = ! empty( $loop ) ? '1' : '0';

			$lg_count = ! empty( $lg_count ) && is_numeric( $lg_count ) ? $lg_count : '4';
			$md_count = ! empty( $md_count ) && is_numeric( $md_count ) ? $md_count : '3';
			$sm_count = ! empty( $sm_count ) && is_numeric( $sm_count ) ? $sm_count : '2';
			$xs_count = ! empty( $xs_count ) && is_numeric( $xs_count ) ? $xs_count : '1';

			$color = isset( $color ) && ! empty( $color ) ? 'style=color:' . $color . ';' : '';

			$class = ( ! empty( $el_class ) ) ? $el_class : '';
			$class .= vc_shortcode_custom_css_class( $css, ' ' );

			global $pixxy_testimonial_items;
			$pixxy_testimonial_items = array();

			ob_start();

			do_shortcode( $content );

			if ( ! empty( $pixxy_testimonial_items ) && count( $pixxy_testimonial_items ) > 0 ) { ?>

                <div class="px-testimonial <?php echo esc_attr( $style ); ?>">

					<?php if ( $style == 'full_width' || $style == 'multiple' || $style == 'multiple_style_2' ) : ?>

                        <div class="swiper-container <?php echo esc_attr( $class ); ?>"
                             data-mouse="0"
                             data-autoplay="<?php echo esc_attr( $autoplay ); ?>"
                             data-loop="<?php if ( $style == 'flipping' ) {
							     echo 1;
						     } else {
							     echo esc_attr( $loop );
						     } ?>"
                             data-speed="<?php echo esc_attr( $speed ); ?>"
                             data-space="0"
                             data-pagination-type="bullets"
							<?php if ( $style == 'multiple' || $style == 'multiple_style_2' ) : ?>
                                data-responsive="responsive"
                                data-add-slides="<?php echo esc_attr( $lg_count ); ?>"
                                data-xs-slides="<?php echo esc_attr( $xs_count ); ?>"
                                data-sm-slides="<?php echo esc_attr( $sm_count ); ?>"
                                data-md-slides="<?php echo esc_attr( $md_count ); ?>"
                                data-lg-slides="<?php echo esc_attr( $lg_count ); ?>"
							<?php endif; ?>
                        >
                            <div class="swiper-wrapper">

								<?php foreach ( $pixxy_testimonial_items as $item ) {
									$value = (object) $item['atts'];

									$class_slide = '';
									if ( ! empty( $value->css ) ) {
										$class_slide .= vc_shortcode_custom_css_class( $value->css, ' ' );
									} ?>

									<?php if ( $style == 'full_width' ) : ?>

                                        <div class="swiper-slide <?php echo esc_attr( $class_slide ); ?>">
                                            <div class="content-slide">

												<?php if ( ( float ) $value->rating > 0 ) { ?>
                                                    <div class="rating">
														<?php
														$rating = $value->rating;
														if ( ( $rating - floor( $rating ) ) == 0.5 ) {
															$rating_star_full  = floor( $rating );
															$rating_star_half  = 1;
															$rating_star_empty = 4 - floor( $rating );
														} else {
															$rating_star_full  = floor( $rating );
															$rating_star_half  = 0;
															$rating_star_empty = 5 - floor( $rating );
														} ?>
														<?php for ( $i = 0; $i < $rating_star_full; $i ++ ) { ?>
                                                            <i class="ion-ios-star"></i>
														<?php }; ?>
														<?php for ( $i = 0; $i < $rating_star_half; $i ++ ) { ?>
                                                            <i class="ion-ios-star-half"></i>
														<?php }; ?>
														<?php for ( $i = 0; $i < $rating_star_empty; $i ++ ) { ?>
                                                            <i class="ion-ios-star-outline"></i>
														<?php }; ?>
                                                    </div>
												<?php } ?>

												<?php if ( ! empty( $item['content'] ) ) { ?>
                                                    <div class="description clearfix">
                                                        <p <?php echo $color; ?>><?php echo do_shortcode( $item['content'] ); ?></p>
                                                    </div>
												<?php } ?>
                                                <div class="user">
													<?php if ( ! empty( $value->logo_image ) && is_numeric( $value->logo_image ) ) {
														$alt = get_post_meta( $value->logo_image, '_wp_attachment_image_alt', true ); ?>
                                                        <div class="logo-customer">
                                                            <img src="<?php echo esc_url( wp_get_attachment_url( $value->logo_image ) ); ?>"
                                                                 alt="<?php echo esc_attr( $alt ); ?>"
                                                                 class="s-img-switch">
                                                        </div>
													<?php } ?>
                                                    <div class="user-info">
														<?php if ( ! empty( $value->author ) ) { ?>
                                                            <div class="name" <?php echo $color; ?>><?php echo esc_html( $value->author ); ?></div>
														<?php }

														if ( ! empty( $value->position ) ) { ?>
                                                            <div class="position" <?php echo $color; ?>><?php echo esc_html( $value->position ); ?></div>
														<?php } ?>
                                                    </div>
                                                </div>

												<?php if ( ! empty( $value->socials ) ) {
													$item_socials = (array) vc_param_group_parse_atts( (string) $value->socials ); ?>
                                                    <div class="social">
														<?php foreach ( $item_socials as $social ) { ?>
															<?php if ( ! empty( $social['icon'] ) ) { ?>
                                                                <a href="<?php echo esc_url( $social['social_url'] ); ?>"
                                                                   target="_blank" class="soc-item">
                                                                    <i class="fa <?php echo esc_attr( $social['icon'] ); ?>"></i>
                                                                </a>
															<?php } ?>
														<?php } // end foreach ?>
                                                    </div>
												<?php } // end if ?>

                                            </div>
                                        </div>

									<?php elseif ( $style == 'multiple' || $style == 'multiple_style_2' ) : ?>

                                        <div class="swiper-slide <?php echo esc_attr( $class_slide ); ?>">
                                            <div class="content-slide">
                                                <div>
                                                    <div class="user">
														<?php if ( ! empty( $value->logo_image ) && is_numeric( $value->logo_image ) ) {
															$alt = get_post_meta( $value->logo_image, '_wp_attachment_image_alt', true ); ?>
                                                            <div class="logo-customer">
                                                                <img src="<?php echo esc_url( wp_get_attachment_url( $value->logo_image ) ); ?>"
                                                                     alt="<?php echo esc_attr( $alt ); ?>"
                                                                     class="s-img-switch">
                                                            </div>
														<?php } ?>
                                                        <div class="user-info">
															<?php if ( ! empty( $value->author ) ) { ?>
                                                                <div class="name" <?php echo $color; ?>><?php echo esc_html( $value->author ); ?></div>
															<?php }

															if ( ! empty( $value->position ) ) { ?>
                                                                <div class="position" <?php echo $color; ?>><?php echo esc_html( $value->position ); ?></div>
															<?php } ?>

															<?php if ( ( float ) $value->rating > 0 ) { ?>
                                                                <div class="rating">
																	<?php
																	$rating = $value->rating;
																	if ( ( $rating - floor( $rating ) ) == 0.5 ) {
																		$rating_star_full  = floor( $rating );
																		$rating_star_half  = 1;
																		$rating_star_empty = 4 - floor( $rating );
																	} else {
																		$rating_star_full  = floor( $rating );
																		$rating_star_half  = 0;
																		$rating_star_empty = 5 - floor( $rating );
																	}

																	for ( $i = 0; $i < $rating_star_full; $i ++ ) { ?>
                                                                        <i class="ion-ios-star"></i>
																	<?php };

																	for ( $i = 0; $i < $rating_star_half; $i ++ ) { ?>
                                                                        <i class="ion-ios-star-half"></i>
																	<?php };

																	for ( $i = 0; $i < $rating_star_empty; $i ++ ) { ?>
                                                                        <i class="ion-ios-star-outline"></i>
																	<?php }; ?>
                                                                </div>
															<?php } ?>

                                                        </div>
                                                    </div>

													<?php


													if ( ! empty( $item['content'] ) ) { ?>
                                                        <div class="description clearfix">
                                                            <p <?php echo $color; ?>><?php echo do_shortcode( $item['content'] ); ?></p>
                                                        </div>
													<?php } ?>
                                                </div>

												<?php if ( ! empty( $value->socials ) ) {
													$item_socials = (array) vc_param_group_parse_atts( (string) $value->socials ); ?>
                                                    <div class="social">
														<?php foreach ( $item_socials as $social ) { ?>
															<?php if ( ! empty( $social['icon'] ) ) { ?>
                                                                <a href="<?php echo esc_url( $social['social_url'] ); ?>"

                                                                   target="_blank" class="soc-item">
                                                                    <i class="fa <?php echo esc_attr( $social['icon'] ); ?>"></i>
                                                                </a>
															<?php } ?>
														<?php } // end foreach ?>
                                                    </div>
												<?php } // end if ?>

                                            </div>
                                        </div>

									<?php endif; ?>

								<?php } ?>
                            </div>
                        </div>
						<?php if ( $style == 'full_width' ) : ?>
                            <div class="swiper-pagination" <?php echo $color; ?>></div>
                            <div class="swiper-button-prev ion-arrow-left-c"></div>
                            <div class="swiper-button-next ion-arrow-right-c"></div>
						<?php elseif ( $style == 'multiple' ) : ?>
                            <div class="swiper-pagination-wrapper">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination" <?php echo $color; ?>></div>
                                <div class="swiper-button-next"></div>
                            </div>
						<?php elseif ( $style == 'multiple_style_2' ) : ?>
                            <div class="swiper-pagination" <?php echo $color; ?>></div>
						<?php endif; ?>

					<?php elseif ( $style == 'flipping' ) : ?>

                        <div class="flipster-slider" data-keyboard="1" data-mousewheel="1" data-controls="1">
                            <ul>
								<?php foreach ( $pixxy_testimonial_items as $item ) {
									$value = (object) $item['atts'];

									$class_slide = '';
									if ( ! empty( $value->css ) ) {
										$class_slide .= vc_shortcode_custom_css_class( $value->css, ' ' );
									} ?>
                                    <li>
                                        <div class="content-slide">

                                            <div class="user">
												<?php if ( ! empty( $value->logo_image ) && is_numeric( $value->logo_image ) ) {
													$alt = get_post_meta( $value->logo_image, '_wp_attachment_image_alt', true ); ?>
                                                    <div class="logo-customer">
                                                        <img src="<?php echo esc_url( wp_get_attachment_url( $value->logo_image ) ); ?>"
                                                             alt="<?php echo esc_attr( $alt ); ?>" class="s-img-switch">
                                                    </div>
												<?php } ?>
                                                <div class="user-info">
													<?php if ( ! empty( $value->author ) ) { ?>
                                                        <span class="name" <?php echo $color; ?>><?php echo esc_html( $value->author ); ?></span>
													<?php }

													if ( ! empty( $value->position ) ) { ?>
                                                        <span class="position" <?php echo $color; ?>><?php echo esc_html( $value->position ); ?></span>
													<?php } ?>
                                                </div>


												<?php if ( ! empty( $item['content'] ) ) { ?>
                                                    <div class="description clearfix">
                                                        <p <?php echo $color; ?>><?php echo do_shortcode( $item['content'] ); ?></p>
                                                    </div>
												<?php } ?>

												<?php if ( ( float ) $value->rating > 0 ) { ?>
                                                    <div class="rating">
														<?php
														$rating = $value->rating;
														if ( ( $rating - floor( $rating ) ) == 0.5 ) {
															$rating_star_full  = floor( $rating );
															$rating_star_half  = 1;
															$rating_star_empty = 4 - floor( $rating );
														} else {
															$rating_star_full  = floor( $rating );
															$rating_star_half  = 0;
															$rating_star_empty = 5 - floor( $rating );
														}

														for ( $i = 0; $i < $rating_star_full; $i ++ ) { ?>
                                                            <i class="ion-ios-star"></i>
														<?php };

														for ( $i = 0; $i < $rating_star_half; $i ++ ) { ?>
                                                            <i class="ion-ios-star-half"></i>
														<?php };

														for ( $i = 0; $i < $rating_star_empty; $i ++ ) { ?>
                                                            <i class="ion-ios-star-outline"></i>
														<?php }; ?>
                                                    </div>
												<?php } ?>

												<?php if ( ! empty( $value->socials ) ) {
													$item_socials = (array) vc_param_group_parse_atts( (string) $value->socials ); ?>
                                                    <div class="social">
														<?php foreach ( $item_socials as $social ) {
															if ( ! empty( $social['icon'] ) ) { ?>
                                                                <a href="<?php echo esc_url( $social['social_url'] ); ?>"
                                                                   target="_blank" class="soc-item">
                                                                    <i class="fa <?php echo esc_attr( $social['icon'] ); ?>"></i>
                                                                </a>
															<?php }
                                                        } // end foreach ?>
                                                    </div>
												<?php } // end if ?>
                                            </div>
                                        </div>
                                    </li>
								<?php } ?>
                            </ul>
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
			'name'            => 'Testimonial item',
			'base'            => 'pixxy_testimonial_items',
			'as_child'        => array( 'only' => 'pixxy_testimonial' ),
			'content_element' => true,
			'params'          => array(
				array(
					'type'       => 'attach_image',
					'heading'    => __( 'Image', 'js_composer' ),
					'param_name' => 'logo_image',
				),
				array(
					'type'       => 'textarea_html',
					'heading'    => __( 'Content', 'js_composer' ),
					'param_name' => 'content',
					'holder'     => 'div',
					'value'      => ''
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( "Author's name", 'js_composer' ),
					'param_name' => 'author',
					'value'      => ''
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( "Position", 'js_composer' ),
					'param_name' => 'position',
					'value'      => '',
					/*'description' => __('Only for Classic slider style', 'js_composer' )*/
				),
				array(
					'type'       => 'dropdown',
					'heading'    => __( 'Rating', 'js_composer' ),
					'param_name' => 'rating',
					'value'      => array(
						'No rating' => '0',
						'0.5'       => '0.5',
						'1'         => '1',
						'1.5'       => '1.5',
						'2'         => '2',
						'2.5'       => '2.5',
						'3'         => '3',
						'3.5'       => '3.5',
						'4'         => '4',
						'4.5'       => '4.5',
						'5'         => '5',
					),
				),
				array(
					'type'       => 'css_editor',
					'heading'    => __( 'CSS box', 'js_composer' ),
					'param_name' => 'css',
					'group'      => __( 'Design options', 'js_composer' )
				),
				array(
					'type'       => 'param_group',
					'heading'    => __( 'Socials', 'js_composer' ),
					'param_name' => 'socials',
					'value'      => '',
					'params'     => array(
						array(
							'type'       => 'iconpicker',
							'heading'    => 'Select icon',
							'param_name' => 'icon',
							'value'      => '',
						),
						array(
							'type'        => 'textfield',
							'heading'     => __( 'url', 'js_composer' ),
							'param_name'  => 'social_url',
							'value'       => '',
							'description' => __( 'Enter social link url.', 'js_composer' ),
						),
					)
				),
			) //end params
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_pixxy_testimonial_items extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			global $pixxy_testimonial_items;
			$pixxy_testimonial_items[] = array( 'atts' => $atts, 'content' => $content );

			return;
		}
	}
}