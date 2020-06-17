<?php

//Services shortcode

if ( function_exists( 'vc_map' ) ) {
	vc_map(
		array(
			'name'        => __( 'Single Media', 'js_composer' ),
			'base'        => 'single_media',
			'description' => __( 'Media item with custom position', 'js_composer' ),
            'params'      => array(
                array(
                    'type'       => 'dropdown',
                    'param_name' => 'format',
                    'heading'    => esc_html__( 'Media format', 'js_composer' ),
                    'value'      => array(
	                    'Image' => 'image',
	                    'Video' => 'video',
                    ),
                ),
                array(
                    'type'       => 'attach_image',
                    'heading'    => __( 'Content Image', 'js_composer' ),
                    'param_name' => 'image',
                    'dependency' => array( 'element' => 'format', 'value' => array( 'image' ) )
                ),
	            array(
		            'type'       => 'attach_image',
		            'heading'    => __( 'Preview Image', 'js_composer' ),
		            'param_name' => 'preview',
		            'dependency' => array( 'element' => 'format', 'value' => array( 'video' ) )
	            ),
	            array(
		            'type'       => 'textfield',
		            'heading'    => __( 'Video link', 'js_composer' ),
		            'description' => __( 'Insert your youtube video link', 'js_composer' ),
		            'param_name' => 'video_link',
		            'dependency' => array( 'element' => 'format', 'value' => array( 'video' ) ),
		            'value'      => ''
	            ),
	            array(
		            'type'       => 'checkbox',
		            'heading'    => esc_html__( 'Mute sound', 'js_composer' ),
		            'param_name' => 'mute',
		            'dependency' => array( 'element' => 'format', 'value' => array( 'video' ) ),
		            'value' => array( __( 'Yes', 'js_composer' ) => 'on' ),
		            'std'  => 'off'
	            ),
				array(
					'type' => 'checkbox',
					'heading' => __( 'Media position for extra large devices', 'js_composer' ),
					'param_name' => 'xl_size',
					'description' => __( 'For devices more 1200px. Specify units in px.', 'js_composer' ),
					'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Top',
					'param_name' => 'xl_top',
					"value"       => '0',
					'dependency' => array(
						'element' => 'xl_size',
						'not_empty' => true,
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Right',
					'param_name' => 'xl_right',
					"value"       => '0',
					'dependency' => array(
						'element' => 'xl_size',
						'not_empty' => true,
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Bottom',
					'param_name' => 'xl_bottom',
					"value"       => '0',
					'dependency' => array(
						'element' => 'xl_size',
						'not_empty' => true,
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Left',
					'param_name' => 'xl_left',
					"value"       => '0',
					'dependency' => array(
						'element' => 'xl_size',
						'not_empty' => true,
					),
				),
				array(
					'type' => 'checkbox',
					'heading' => __( 'Media position for large devices', 'js_composer' ),
					'param_name' => 'lg_size',
					'description' => __( 'For devices more 992px. Specify units in px.', 'js_composer' ),
					'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Top',
					'param_name' => 'lg_top',
					"value"       => '0',
					'dependency' => array(
						'element' => 'lg_size',
						'not_empty' => true,
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Right',
					'param_name' => 'lg_right',
					"value"       => '0',
					'dependency' => array(
						'element' => 'lg_size',
						'not_empty' => true,
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Bottom',
					'param_name' => 'lg_bottom',
					"value"       => '0',
					'dependency' => array(
						'element' => 'lg_size',
						'not_empty' => true,
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Left',
					'param_name' => 'lg_left',
					"value"       => '0',
					'dependency' => array(
						'element' => 'lg_size',
						'not_empty' => true,
					),
				),
				array(
					'type' => 'checkbox',
					'heading' => __( 'Media position for medium devices', 'js_composer' ),
					'param_name' => 'md_size',
					'description' => __( 'For devices more 768px. Specify units in px.', 'js_composer' ),
					'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Top',
					'param_name' => 'md_top',
					"value"       => '0',
					'dependency' => array(
						'element' => 'md_size',
						'not_empty' => true,
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Right',
					'param_name' => 'md_right',
					"value"       => '0',
					'dependency' => array(
						'element' => 'md_size',
						'not_empty' => true,
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Bottom',
					'param_name' => 'md_bottom',
					"value"       => '0',
					'dependency' => array(
						'element' => 'md_size',
						'not_empty' => true,
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Left',
					'param_name' => 'md_left',
					"value"       => '0',
					'dependency' => array(
						'element' => 'md_size',
						'not_empty' => true,
					),
				),
				array(
					'type' => 'checkbox',
					'heading' => __( 'Media position for small devices', 'js_composer' ),
					'param_name' => 'sm_size',
					'description' => __( 'For devices less 768px. Specify units in px.', 'js_composer' ),
					'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Top',
					'param_name' => 'sm_top',
					"value"       => '0',
					'dependency' => array(
						'element' => 'sm_size',
						'not_empty' => true,
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Right',
					'param_name' => 'sm_right',
					"value"       => '0',
					'dependency' => array(
						'element' => 'sm_size',
						'not_empty' => true,
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Bottom',
					'param_name' => 'sm_bottom',
					"value"       => '0',
					'dependency' => array(
						'element' => 'sm_size',
						'not_empty' => true,
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Left',
					'param_name' => 'sm_left',
					"value"       => '0',
					'dependency' => array(
						'element' => 'sm_size',
						'not_empty' => true,
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => 'Max width for media item',
					'param_name' => 'max_width',
					'dependency' => array(
						'element' => 'sm_size',
						'not_empty' => true,
					),
				),
			)
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_single_media extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'format' => 'image',
				'image' => '',
				'preview' => '',
				'video_link' => '',
				'mute' => 'off',
				'xl_size' => '',
				'xl_top' => '0',
				'xl_right' => '0',
				'xl_bottom' => '0',
				'xl_left' => '0',
				'lg_size' => '',
				'lg_top' => '0',
				'lg_right' => '0',
				'lg_bottom' => '0',
				'lg_left' => '0',
				'md_size' => '',
				'md_top' => '0',
				'md_right' => '0',
				'md_bottom' => '0',
				'md_left' => '0',
				'sm_size' => '',
				'sm_top' => '0',
				'sm_right' => '0',
				'sm_bottom' => '0',
				'sm_left' => '0',
				'max_width' => '0',
			), $atts ) );

			// include needed stylesheets
			if ( ! in_array( "pixxy_single_media-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_single_media-css";
			}

			if ( !in_array( "pixxy_video_banner-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_video_banner-css";
			}
			$this->enqueueCss();

			if ( ! in_array( "pixxy_single_media", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_single_media";
			}

			if ( !in_array( "pixxy_youtube", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_youtube";
			}

			if ( !in_array( "pixxy_video_banner", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_video_banner";
			}
			$this->enqueueJs();

			if (empty($max_width) || $max_width == 0) {
                $max_width = 'auto';
            }

			// for youtube

			$mute = ($mute == 'on') ? 1 : 0;

			$video_params = array(
				'enablejsapi' => 1,
				'autoplay' => 0 ,
				'loop' => 1,
				'controls' => 0 ,
				'modestbranding' => 0,
				'rel' => 0,
				'showinfo' => 0,
				'mute' => $mute,
				'start' => 0,
			);

			$classAutoplay = '';
			$classAutoplayPause = '';

			$preview_url = !empty($preview) ? wp_get_attachment_url( $preview )  : '';

			ob_start(); ?>

            <div class="px-media">
                <?php if ( $format == 'image' ) : ?>
                    <div class="px-media__item"
                        <?php if ( esc_attr( $xl_size ) ) : ?> data-xl-size="<?php echo esc_attr( $xl_top . ' ' . $xl_right . ' ' . $xl_bottom . ' ' . $xl_left ) ?>" <?php endif; ?>
                        <?php if ( esc_attr( $lg_size ) ) : ?> data-lg-size="<?php echo esc_attr( $lg_top . ' ' . $lg_right . ' ' . $lg_bottom . ' ' . $lg_left ) ?>" <?php endif; ?>
                        <?php if ( esc_attr( $md_size ) ) : ?> data-md-size="<?php echo esc_attr( $md_top . ' ' . $md_right . ' ' . $md_bottom . ' ' . $md_left ) ?>" <?php endif; ?>
                        <?php if ( esc_attr( $sm_size ) ) : ?> data-sm-size="<?php echo esc_attr( $sm_top . ' ' . $sm_right . ' ' . $sm_bottom . ' ' . $sm_left ) ?>" <?php endif; ?>
                        <?php if ( esc_attr( $max_width ) ) : ?> data-max-width="<?php echo esc_attr( $max_width ) ?>" <?php endif; ?>
                    >
                        <?php if ( ! empty( $image ) ) {
                            echo pixxy_the_lazy_load_flter( $image, array( 'class' => 'js-single-media', 'alt' => '' ) );
                        } ?>
                    </div>
                <?php elseif ( $format == 'video' ) : ?>
                    <div class="px-media__item"
	                    <?php if ( esc_attr( $xl_size ) ) : ?> data-xl-size="<?php echo esc_attr( $xl_top . ' ' . $xl_right . ' ' . $xl_bottom . ' ' . $xl_left ) ?>" <?php endif; ?>
	                    <?php if ( esc_attr( $lg_size ) ) : ?> data-lg-size="<?php echo esc_attr( $lg_top . ' ' . $lg_right . ' ' . $lg_bottom . ' ' . $lg_left ) ?>" <?php endif; ?>
	                    <?php if ( esc_attr( $md_size ) ) : ?> data-md-size="<?php echo esc_attr( $md_top . ' ' . $md_right . ' ' . $md_bottom . ' ' . $md_left ) ?>" <?php endif; ?>
	                    <?php if ( esc_attr( $sm_size ) ) : ?> data-sm-size="<?php echo esc_attr( $sm_top . ' ' . $sm_right . ' ' . $sm_bottom . ' ' . $sm_left ) ?>" <?php endif; ?>
	                    <?php if ( esc_attr( $max_width ) ) : ?> data-max-width="<?php echo esc_attr( $max_width ) ?>" <?php endif; ?>
                    >
                        <div class="iframe-video banner-video simple youtube <?php echo esc_attr( $classAutoplay ); ?>" data-type-start="click" data-mute="<?php echo esc_attr( $mute ); ?>" >
                            <?php if ( !empty( $title ) ) { ?>
                                <div class="title">
                                    <?php echo wp_kses_post( $title ); ?>
                                </div>
                            <?php } ?>
                            <?php if ( !empty ( $video_link ) ) {
                                echo str_replace("?feature=oembed", "?feature=oembed&" . http_build_query ( $video_params ), wp_oembed_get( $video_link ));
                            }
                            if ( $preview_url ) :
                                echo pixxy_the_lazy_load_flter( $preview_url, array(
                                    'class' => 's-img-switch',
                                    'alt'   => ''
                                ) );
                            endif; ?>
                            <div class="video-content">
                                <span class="mute-button mute<?php echo esc_attr( $mute ); ?>"></span>
                                <span class="play-button <?php echo esc_attr( $classAutoplayPause ); ?>"></span>
                                <span class="full-button"></span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

			<?php

			return ob_get_clean();
		}
	}
}
