<?php

//Custom text block shortcode

if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/headings/';
	vc_map(
		array(
			'name'        => __( 'Headings', 'js_composer' ),
			'base'        => 'pixxy_headings',
			'description' => __( 'Section with text button (with paddings)', 'js_composer' ),
			'category'    => __( 'Content', 'js_composer' ),
			'params'      => array(
                array (
                    'param_name' => 'style',
                    'type' => 'select_preview',
                    'description' => '',
                    'heading' => 'Style',
                    'value' => array (
	                    array(
		                    'value' => 'simple',
		                    'label' => esc_html__( 'Simple', 'js_composer' ),
		                    'image' => $url . 'simple.jpg'
	                    ),

	                    array(
		                    'value' => 'modern',
		                    'label' => esc_html__( 'Modern', 'js_composer' ),
		                    'image' => $url . 'modern.jpg'
	                    ),

	                    array(
		                    'value' => 'bg_title',
		                    'label' => esc_html__( 'With background title', 'js_composer' ),
		                    'image' => $url . 'bg_title.jpg'
	                    ),

	                    array(
		                    'value' => 'with-image',
		                    'label' => esc_html__( 'With image', 'js_composer' ),
		                    'image' => $url . 'with-image.jpg'
	                    ),

	                    array(
		                    'value' => 'with-media',
		                    'label' => esc_html__( 'With media', 'js_composer' ),
		                    'image' => $url . 'with-media.jpg'
	                    ),
	                    array(
		                    'value' => 'typing',
		                    'label' => esc_html__( 'Text with typing animation', 'js_composer' ),
		                    'image' => $url . 'typing.jpg'
	                    ),

	                    array(
		                    'value' => 'bg-animation',
		                    'label' => esc_html__( 'Colorful text', 'js_composer' ),
		                    'image' => $url . 'bg-animation.jpg'
	                    ),
                    ),
                    'admin_label' => true,
                    'save_always' => true,
                ),
                array(
                    'type'       => 'attach_image',
                    'heading'    => __( 'Image', 'js_composer' ),
                    'param_name' => 'image',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'with-image' ) )
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Background title', 'js_composer' ),
                    'param_name' => 'bg_title',
                    'value'      => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'bg_title' ) )
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Subtitle', 'js_composer' ),
                    'param_name' => 'subtitle',
                    'value'      => '',
                    'description'=> 'If you want to add the word which will be marked by main color, please insert it in &lt;b&gt; tag, for example: &lt;b&gt;Hello&lt;/b&gt;',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple', 'with-media' ) )
                ),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Title', 'js_composer' ),
					'param_name' => 'title',
					'value'      => '',
                    'description'=> 'If you want to add the word which will be marked by main color, please insert it in &lt;b&gt; tag, for example: &lt;b&gt;Hello&lt;/b&gt;',
				),
                array (
                    'param_name' => 'title_size',
                    'type' => 'dropdown',
                    'heading' => 'Title size',
                    'value' => array (
                        esc_html__( 'Middle', 'js_composer' ) => '',
                        esc_html__( 'Big', 'js_composer' ) => 'title--big',
                        esc_html__( 'Small', 'js_composer' ) => 'title--small',
                    ),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple', 'with-image', 'with-media' ) )
                ),
                array(
                    'type' => 'checkbox',
                    'heading' => __( 'Enable delimiter?', 'js_composer' ),
                    'param_name' => 'delimiter',
                    'description' => __( 'Delimiter after title.', 'js_composer' ),
                    'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple', 'bg_title' ) )
                ),
                array(
                    'type'       => 'textarea',
                    'heading'    => __( 'Description', 'js_composer' ),
                    'param_name' => 'description',
                    'value'      => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'with-image', 'with-media', 'simple', 'modern', 'bg_title' ) )
                ),
				array (
					'param_name' => 'description_size',
					'type' => 'dropdown',
					'heading' => 'Description size',
					'value' => array (
						esc_html__( 'Middle', 'js_composer' ) => '',
						esc_html__( 'Big', 'js_composer' ) => 'description--big',
						esc_html__( 'Small', 'js_composer' ) => 'description--small',
					),
					'dependency' => array( 'element' => 'style', 'value' => array( 'simple', 'with-image', 'with-media' ) )
				),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Light heading text', 'js_composer' ),
                    'param_name' => 'light',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'modern', 'simple', 'with-media', 'typing' ) ),
					'std'        => '',
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Animation text', 'js_composer' ),
                    'param_name' => 'animation_text',
                    'value'      => '',
                    'description' => __( "You can write several words without spaces and separate it by the comma.", 'js_composer' ),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'typing' ) )
                ),
                array(
                    'type'       => 'dropdown',
                    'heading'    => __( 'Text align', 'js_composer' ),
                    'param_name' => 'text_align',
                    'value'      => array(
                        'Center content' => 'text-center',
                        'Left content'   => 'text-left',
                        'Right content'  => 'text-right',
                    ),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple', 'typing' ) )
                ),
				array(
					'type'       => 'vc_link',
					'heading'    => __( 'Link/Button', 'js_composer' ),
					'param_name' => 'button',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple', 'with-image', 'with-media' ) )
				),
                array (
                    'param_name' => 'btn_style',
                    'type' => 'select_preview',
                    'heading' => 'Button style',
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
                    'admin_label' => true,
                    'save_always' => true,
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple', 'with-image', 'with-media' ) )
                ),
				array(
					'type'       => 'checkbox',
					'heading'    => esc_html__( 'Remove fade-in-up animation on load?', 'js_composer' ),
					'param_name' => 'animation_fade',
					'std'        => '',
				),
                array (
                    'param_name' => 'media_style',
                    'type' => 'dropdown',
                    'description' => 'Single image or video',
                    'heading' => 'Choose media',
                    'value' => array (
                        esc_html__( 'Single image', 'js_composer' ) => 'simple_img',
                        esc_html__( 'Video', 'js_composer' ) => 'video',
                    ),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'with-media' ) )
                ),
                array (
                    'param_name' => 'media_pos',
                    'type' => 'dropdown',
                    'heading' => 'Choose position for media',
                    'value' => array (
                        esc_html__( 'Left', 'js_composer' ) => 'left',
                        esc_html__( 'Right', 'js_composer' ) => 'right',
                    ),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'with-media' ) )
                ),
                array(
                    'type'       => 'attach_image',
                    'heading'    => __( 'Image or preview for video', 'js_composer' ),
                    'param_name' => 'media_image',
                    'dependency' => array( 'element' => 'media_style', 'value' => array( 'simple_img', 'video' ) )
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Video link', 'js_composer' ),
                    'description' => __( 'Insert your youtube video link', 'js_composer' ),
                    'param_name' => 'video_link',
                    'value'      => '',
                    'dependency' => array( 'element' => 'media_style', 'value' => array( 'video' ) )
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Mute sound', 'js_composer' ),
                    'param_name' => 'mute',
                    'value' => array( __( 'Yes', 'js_composer' ) => 'on' ),
                    'std'  => 'off',
                    'dependency' => array( 'element' => 'media_style', 'value' => array( 'video' ) )
                ),
			),

			//end params
		)
	);
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pixxy_headings extends WPBakeryShortCode {
		/**
		 * @param $atts
		 * @param null $content
		 *
		 * @return string
		 */
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'title'          => '',
				'title_size'     => '',
				'bg_title'       => '',
				'text_align'     => 'text-center',
                'image'          => '',
				'subtitle'       => '',
				'animation_fade' => '',
				'style'          => 'simple',
				'description'    => '',
                'description_size' => '',
                'button'         => '',
                'btn_style'      => 'a-btn',
                'light'          => '',
                'animation_text' => '',
                'delimiter'      => '',
                'media_style'    => 'simple_img',
                'media_pos'      => 'left',
                'media_image'    => '',
                'video_link'     => '',
                'mute'           => '',
			), $atts ) );


			if  ($style == 'with-media') {
                if ( !in_array( "pixxy_youtube", self::$js_scripts ) ) {
                    self::$js_scripts[] = "pixxy_youtube";
                }
            }

			if  ($style == 'typing') {
                if ( !in_array( "pixxy_typed-js", self::$js_scripts ) ) {
                    self::$js_scripts[] = "pixxy_typed-js";
                }

                if ( !in_array( "pixxy_headings", self::$js_scripts ) ) {
                    self::$js_scripts[] = "pixxy_headings";
                }
            }

            $this->enqueueJs();
            if  ($style == 'with-media') {
                if ( !in_array( "pixxy_video_banner-css", self::$css_scripts ) ) {
                    self::$css_scripts[] = "pixxy_video_banner-css";
                }
            }



			if ( ! in_array( "pixxy_headings-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_headings-css";
			}
			$this->enqueueCss();

            $style = ! empty( $style ) ? $style : 'simple';
            $light = ! empty( $light ) ? ' light' : '';

            $animation_text  = isset($animation_text) && ! empty( $animation_text ) ? $animation_text : '';
            $delimiter = ! empty( $delimiter ) ? $delimiter : false;
            $text_align = ($style == 'modern' || $style == 'with-media') ? 'text-left' : $text_align;

            $animation_parent = isset( $animation_fade ) && ! empty( $animation_fade ) ? '' : 'js-animation';
            $animation_child = isset( $animation_fade ) && ! empty( $animation_fade ) ? '' : 'js-animation-item';
            $animation_content = isset( $animation_fade ) && ! empty( $animation_fade ) ? '' : 'js-animation-content';

			if ( ! empty( $button ) ) {
				$url = vc_build_link( $button );
			} else {
				$url['url']    = '#';
				$url['title']  = '';
				$url['target'] = '_self';
			}

            $image    = ( ! empty( $image ) && is_numeric( $image ) ) ? wp_get_attachment_url( $image ) : '';
			$image_alt = ( ! empty( $image ) && is_numeric( $image ) ) ? get_post_meta( $image, '_wp_attachment_image_alt', true) : '';

            $mute = ($mute == 'on') ? 1 : 0;

            $video_params = array(
                'enablejsapi' => 1,
                'loop' => 1,
                'controls' => 0 ,
                'modestbranding' => 0,
                'rel' => 0,
                'showinfo' => 0,
                'mute' => $mute,
            );

            $classAutoplay = '';
            $classAutoplayPause = '';
            $media_pos = ($media_pos == 'right') ? 'media-right' : 'media-left';

            // start output
			ob_start(); ?>
            <div class="headings-wrap <?php echo esc_attr( $animation_parent ); ?>">
                <div class="headings <?php echo esc_attr( $style . ' ' . $text_align . ' ' . $light ); ?>">
                    <?php if ( $style == 'bg_title') { ?>

                        <?php if ( ! empty($bg_title) ) { ?>
                            <div class="bg-title">
                                <div class="bg-title-wrap"><?php echo esc_html($bg_title); ?></div>
                            </div>
                        <?php }
                        if ( ! empty( $title ) ) { ?>
                            <h3 class="title <?php if( $delimiter ) echo esc_attr('title--delimiter'); ?> <?php echo esc_attr($animation_child); ?>"><span class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $title ); ?></span></h3>
                        <?php }
                        if ( ! empty( $description ) ) { ?>
                            <div class="description <?php echo esc_attr($animation_child); ?>">
                                <div class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $description ); ?></div>
                            </div>
                        <?php } ?>

                    <?php }
                    elseif ( $style == 'modern') { ?>

                        <?php if ( ! empty( $title ) ) { ?>
                            <h3 class="title title--delimiter <?php echo esc_attr($animation_child); ?>"><span class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $title ); ?></span></h3>
                        <?php } ?>
                        <?php if ( ! empty( $description ) ) { ?>
                            <div class="description <?php echo esc_attr($animation_child); ?>">
                                <div class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $description ); ?></div>
                            </div>
                        <?php } ?>

                    <?php }
                    elseif ( $style == 'with-image') { ?>

                        <?php if ( ! empty( $image ) ) { ?>
                            <div class="heading-img <?php echo esc_attr($animation_child); ?>">
                                <span class="<?php echo esc_attr($animation_content); ?>"><img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image_alt); ?>"></span>
                            </div>
                        <?php } ?>

                        <?php if ( ! empty( $title ) ) { ?>
                            <h3 class="title <?php if( $delimiter ) echo esc_attr('title--delimiter'); ?> <?php echo esc_attr($animation_child); ?>"><span class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $title ); ?></span></h3>
                        <?php } ?>

                        <?php if ( ! empty( $description ) ) { ?>
                            <div class="description <?php echo esc_attr($animation_child); ?>">
                                <div class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $description ); ?></div>
                            </div>
                        <?php } ?>

                        <?php if ( ! empty( $button ) && !empty($url['title'])) { ?>
                            <div class="<?php echo esc_attr($animation_child); ?>">
                                <div class="<?php echo esc_attr($animation_content); ?>">
                                    <div class="link-wrap">
                                        <a href="<?php echo esc_url( $url['url'] ); ?>"
                                           class="<?php echo esc_attr( $btn_style ); ?>"
                                           target="<?php echo esc_attr( $url['target'] ); ?>"><?php echo esc_html( $url['title'] ); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php }
                    elseif ( $style == 'with-media' ) { ?>
                        <div class="heading-row <?php echo esc_attr($media_pos); ?>">
                            <div class="heading-media-wrap">
                                <?php
                                    $media_image = !empty($media_image) ? wp_get_attachment_url( $media_image )  : '';
                                    $media_image_alt = ( ! empty( $media_image ) && is_numeric( $media_image ) ) ? get_post_meta( $media_image, '_wp_attachment_image_alt', true) : '';

                                    if ($media_style == 'simple_img') {
                                        if ($media_image) :
                                            echo pixxy_the_lazy_load_flter( $media_image, array(
                                                'class' => 's-img-switch',
                                                'alt'   => $media_image_alt
                                            ) );
                                        endif;
                                } else { ?>
                                    <div class=" iframe-video banner-video youtube simple <?php echo esc_attr( $classAutoplay); ?>" data-type-start="click" data-mute="<?php echo esc_attr( $mute ); ?>" >
                                        <?php if (!empty($video_link)) {
                                            echo str_replace("?feature=oembed", "?feature=oembed&" . http_build_query ( $video_params ), wp_oembed_get($video_link));
                                        }
                                        if ($media_image) :
                                            echo pixxy_the_lazy_load_flter( $media_image, array(
                                                'class' => 's-img-switch',
                                                'alt'   => $media_image_alt
                                            ) );
                                        endif; ?>
                                        <div class="video-content">
                                            <span class="mute-button mute<?php echo esc_attr($mute); ?>"></span>
                                            <span class="play-button <?php echo esc_attr($classAutoplayPause); ?>"></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="heading-media-content">
                                <div class="heading-media-content-wrap">
                                    <?php if ( ! empty( $subtitle ) ) { ?>
                                        <h5 class="subtitle <?php echo esc_attr($animation_child); ?>"><span class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $subtitle ); ?></span></h5>
                                    <?php } ?>

                                    <?php if ( ! empty( $title ) ) { ?>
                                        <h3 class="title <?php if( $delimiter ) echo esc_attr('title--delimiter'); ?> <?php echo esc_attr($animation_child); ?>"><span class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $title ); ?></span></h3>
                                    <?php } ?>

                                    <?php if ( ! empty( $description ) ) { ?>
                                        <div class="description <?php echo esc_attr($animation_child); ?>">
                                            <div class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $description ); ?></div>
                                        </div>
                                    <?php } ?>

                                    <?php if ( ! empty( $button ) && !empty($url['title'])) { ?>
                                        <div class="<?php echo esc_attr($animation_child); ?>">
                                            <div class="<?php echo esc_attr($animation_content); ?>">
                                                <div class="link-wrap">
                                                    <a href="<?php echo esc_url( $url['url'] ); ?>"
                                                       class="<?php echo esc_attr( $btn_style ); ?>"
                                                       target="<?php echo esc_attr( $url['target'] ); ?>"><?php echo esc_html( $url['title'] ); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                    elseif ($style == 'bg-animation') { ?>
                        <div class="container">
                            <?php if ( ! empty( $title ) ) { ?>
                                <h3 class="title <?php echo esc_attr($animation_child); ?>"><span class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $title ); ?></span></h3>
                            <?php } ?>
                        </div>
                    <?php }
                    elseif ($style == 'typing') { ?>
                        <?php if ( ! empty( $title ) ) { ?>
                            <h3 class="title <?php echo esc_attr($animation_child); ?>"><span class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $title ); ?> <span class="typed" data-words="<?php echo esc_attr($animation_text); ?>"></span></span></h3>
                        <?php } ?>
                    <?php } else { ?>
                        <?php if ( ! empty( $subtitle ) ) { ?>
                            <h5 class="subtitle <?php echo esc_attr($animation_child); ?>"><span class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $subtitle ); ?></span></h5>
                        <?php } ?>

                        <?php if ( ! empty( $title ) ) { ?>
                            <h3 class="title <?php if( $delimiter ) echo esc_attr('title--delimiter'); ?> <?php echo esc_attr($animation_child); ?> <?php echo esc_attr( $title_size ); ?>"><span class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $title ); ?></span></h3>
                        <?php } ?>

                        <?php if ( ! empty( $description ) ) { ?>
                            <div class="description <?php echo esc_attr($animation_child); ?> <?php echo esc_attr( $description_size ); ?>">
                                <div class="<?php echo esc_attr($animation_content); ?>"><p><?php echo wp_kses_post( $description ); ?></p></div>
                            </div>
                        <?php } ?>

                        <?php if ( ! empty( $button ) && !empty($url['title'])) { ?>
                            <div class="<?php echo esc_attr($animation_child); ?>">
                                <div class="<?php echo esc_attr($animation_content); ?>">
                                    <div class="link-wrap">
                                        <a href="<?php echo esc_url( $url['url'] ); ?>"
                                           class="<?php echo esc_attr( $btn_style ); ?>"
                                           target="<?php echo esc_attr( $url['target'] ); ?>"><?php echo esc_html( $url['title'] ); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
			<?php // end output

			return ob_get_clean();
		}
	}
}