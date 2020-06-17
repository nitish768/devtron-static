<?php

//Video Banner shortcode

if ( function_exists( 'vc_map' ) ) {

	$url = EF_URL . '/admin/assets/images/shortcodes_images/video_banner/';

	vc_map(
		array(
			'name'            => 'Video Banner',
			'base'            => 'video_banner',
			'content_element' => true,
			'params'          => array(
                array (
                    'param_name' => 'style_banner',
                    'type' => 'select_preview',
                    'description' => '',
                    'heading' => 'Style',
                    'value'      => array(
	                    array(
		                    'value' => 'simple',
		                    'label' => esc_html__( 'Simple', 'js_composer' ),
		                    'image' => $url . 'simple.jpg'
	                    ),
                    ),
                    'admin_label' => true,
                    'save_always' => true,
                ),
				array(
					'type'       => 'attach_image',
					'heading'    => __( 'Preview Image', 'js_composer' ),
					'param_name' => 'preview',
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Video link', 'js_composer' ),
					'description' => __( 'Insert your youtube video link', 'js_composer' ),
					'param_name' => 'video_link',
					'value'      => ''
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Title', 'js_composer' ),
					'param_name' => 'title',
					'value'      => '',
					'dependency' => array( 'element' => 'style_banner', 'value' => array( 'default' ) )
				),
				array(
					'type'       => 'checkbox',
					'heading'    => esc_html__( 'Autoplay', 'js_composer' ),
					'param_name'       => 'autoplay',
					'value' => array( __( 'Yes', 'js_composer' ) => 'on' ),
					'std'  => 'off',
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'default' ) )
				),
				array(
					'type'       => 'checkbox',
					'heading'    => esc_html__( 'Mute sound', 'js_composer' ),
					'param_name' => 'mute',
					'value' => array( __( 'Yes', 'js_composer' ) => 'on' ),
					'std'  => 'off'
				),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Video start(second)', 'js_composer' ),
                    'param_name' => 'start',
                    'value'      => '',
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'default' ) )
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Video end(second)', 'js_composer' ),
                    'param_name' => 'end',
                    'value'      => '',
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'default' ) )
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
			),

			//end params
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_video_banner extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'css'      => '',
				'el_class' => '',
				'preview' => '',
				'style_banner' => 'simple',
				'video_link' => '',
				'title' => '',
				'autoplay' => '0',
				'mute' => 'off',
				'start' => '',
				'end' => '',

			), $atts ) );


			if ( !in_array( "pixxy_video_banner-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_video_banner-css";
			}
			$this->enqueueCss();

			if ( !in_array( "pixxy_youtube", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_youtube";
			}
			if ( !in_array( "pixxy_video_banner", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_video_banner";
			}
			$this->enqueueJs();


            $class = ( ! empty( $el_class ) ) ? $el_class : '';
            $class .= vc_shortcode_custom_css_class( $css, ' ' );

            // for youtube
            $mute = ($mute == 'on') ? 1 : 0;

            $video_params = array(
				'enablejsapi' => 1,
				'autoplay' => $autoplay == 'on' ? 1 : 0 ,
				'loop' => 1,
				'controls' => 0 ,
				'modestbranding' => 0,
				'rel' => 0,
                'showinfo' => 0,
                'mute' => $mute,
                'start' => ($start) ? $start : 0,
			);

            if ($end) {
                $video_params['end'] = $end;
            }

			$classAutoplay = $autoplay == 'on' ? ' play':'';
			$classAutoplayPause = $autoplay == 'on' ? ' start':'';

			$preview_url = !empty($preview) ? wp_get_attachment_url( $preview )  : '';

			ob_start(); ?>

            <?php if ($style_banner == 'default') : ?>
                <div class="<?php echo esc_attr( $class ); ?>">
                    <div class="full-height-window-hard iframe-video banner-video youtube <?php echo esc_attr( $classAutoplay); ?>" data-type-start="click" data-mute="<?php echo esc_attr( $mute ); ?>" >
                        <?php if(!empty($title)){ ?>
                            <div class="title">
                                <?php echo wp_kses_post($title); ?>
                            </div>
                        <?php } ?>
                        <?php if (!empty($video_link)) {
                            echo str_replace("?feature=oembed", "?feature=oembed&" . http_build_query ( $video_params ), wp_oembed_get($video_link));
                        }
                        if ($preview_url) :
                            echo pixxy_the_lazy_load_flter( $preview_url, array(
                                'class' => 's-img-switch',
                                'alt'   => ''
                            ) );
                        endif; ?>
                        <div class="video-content">
                            <span class="mute-button mute<?php echo esc_attr($mute); ?>"></span>
                            <span class="play-button <?php echo esc_attr($classAutoplayPause); ?>"></span>
                            <span class="full-button"></span>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="<?php echo esc_attr( $class ); ?>">
                    <div class="iframe-video banner-video youtube <?php echo esc_attr($style_banner); ?>" data-type-start="click" data-mute="<?php echo esc_attr( $mute ); ?>">
                        <?php if (!empty($video_link)) {
                            echo str_replace("?feature=oembed", "?feature=oembed&" . http_build_query ( $video_params ), wp_oembed_get($video_link));
                        }
                        if ($preview_url) :
                            echo pixxy_the_lazy_load_flter( $preview_url, array(
                                'class' => 's-img-switch',
                                'alt'   => ''
                            ) );
                        endif; ?>
                        <div class="video-content">
                            <span class="mute-button mute<?php echo esc_attr($mute); ?>"></span>
                            <span class="play-button <?php echo esc_attr($classAutoplayPause); ?>"></span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>


			<?php
			return ob_get_clean();
		}
	}
}
