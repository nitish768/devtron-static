<?php

//Portfolio list shortcode

if ( function_exists( 'vc_map' ) ) {
	$url = EF_URL . '/admin/assets/images/shortcodes_images/portfolio_list/';
	vc_map(
		array(
			'name'        => __( 'Media parallax', 'js_composer' ),
			'base'        => 'pixxy_media_parallax',
			'description' => __( 'List of media items', 'js_composer' ),
			'category'    => __( 'Content', 'js_composer' ),
			'params'      => array(
				array(
					'type'       => 'param_group',
					'heading'    => __( 'Items', 'js_composer' ),
					'param_name' => 'items',
					'value'      => urlencode( json_encode( array() ) ),
					'params'     => array(
						array (
							'type' => 'dropdown',
							'param_name' => 'format',
							'heading' => 'Content',
							'value' => array (
								esc_html__( 'Image', 'js_composer' ) => 'image_content',
								esc_html__( 'Video', 'js_composer' ) => 'video_content',
							),
						),
						array(
							'type'       => 'attach_image',
							'heading'    => __( 'Image', 'js_composer' ),
							'param_name' => 'image',
							'dependency' => array( 'element' => 'format', 'value' => array( 'image_content' ) )
						),
						array(
							'type'       => 'textfield',
							'heading'    => __( 'Title', 'js_composer' ),
							'param_name' => 'title',
							'dependency' => array( 'element' => 'format', 'value' => array( 'image_content' ) )
						),
						array(
							'type'       => 'textarea',
							'heading'    => __( 'Description', 'js_composer' ),
							'param_name' => 'description',
							'dependency' => array( 'element' => 'format', 'value' => array( 'image_content' ) )
						),
						array(
							'type'       => 'colorpicker',
							'heading'    => __( 'Text color', 'js_composer' ),
							'param_name' => 'text_color',
							'value'      => '',
							'dependency' => array( 'element' => 'format', 'value' => array( 'image_content' ) )
						),
                        array(
							'type'       => 'attach_image',
							'heading'    => __( 'Preview Image', 'js_composer' ),
							'param_name' => 'preview',
							'dependency' => array( 'element' => 'format', 'value' => array( 'video_content' ) )
						),
						array(
							'type'       => 'textfield',
							'heading'    => __( 'Video link', 'js_composer' ),
							'description' => __( 'Insert your youtube video link', 'js_composer' ),
							'param_name' => 'video_link',
							'dependency' => array( 'element' => 'format', 'value' => array( 'video_content' ) ),
							'value'      => ''
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__( 'Mute sound', 'js_composer' ),
							'param_name' => 'mute',
							'dependency' => array( 'element' => 'format', 'value' => array( 'video_content' ) ),
							'value' => array( __( 'Yes', 'js_composer' ) => 'on' ),
							'std'  => 'off'
						),
					),
				),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Enable parallax on mobile devices?', 'js_composer' ),
                    'param_name' => 'parallax_mobile',
                    'std'        => '',
                ),
			),

			//end params
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pixxy_media_parallax extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'items' => '',
                'parallax_mobile' => '',
			), $atts ) );

			if ( ! in_array( "pixxy_anime", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_anime";
			}
			if ( !in_array( "pixxy_youtube", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_youtube";
			}
			$this->enqueueJs();

			if ( ! in_array( "pixxy_media_parallax-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_media_parallax-css";
			}
			$this->enqueueCss();

			$counter = 0;

			// for youtube

			$mute = (isset($mute) && !empty($mute) && $mute == 'on') ? 1 : 0;

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

			ob_start(); ?>

            <div class="px-parallax">

			    <?php if ( ! empty( $items ) ) {
				    $items = (array) vc_param_group_parse_atts( $items );
				    foreach ( $items as $item ) {

				        $imageSrc = !empty($item['image']) ? wp_get_attachment_image_url( $item['image'], 'full' ) : '';
					    $image_alt = ( ! empty( $item['image'] ) && is_numeric( $item['image'] ) ) ? get_post_meta( $item['image'], '_wp_attachment_image_alt', true) : '';

                        $parallaxClass = ( $counter % 2 == 0 ) ? '' : 'parallax-window';
					    $preview_url = !empty($item['preview']) ? wp_get_attachment_image_url( $item['preview'], 'full' ) : '';

                        if( $item['format'] == 'video_content' ) {
						    $imageSrc = $preview_url;
					    }

					    $parallaxMobile = ($parallax_mobile) ? ' data-ios-disabled="false" data-android-disabled="false"' : '';

                        $parallaxAttr = ( $counter % 2 == 0 ) ? '' : 'data-image-src="' . $imageSrc . '" data-parallax="scroll" data-position-Y="top" data-bleed="500" data-overScrollFix="true"' . $parallaxMobile;
					    $text_color = ! empty( $item['text_color'] ) ? $item['text_color'] : '#222';
					    $video_link = !empty($item['video_link']) ? $item['video_link'] : '';
				?>

                    <section class="px-parallax__item parallax-showcase-item <?php echo esc_attr($parallaxClass); ?>" <?php echo $parallaxAttr; ?>>
                        <?php if( $item['format'] == 'video_content' ) { ?>

                            <div class="px-parallax__video-wrapper iframe-video youtube" data-type-start="click" data-mute="<?php echo esc_attr( $mute ); ?>" >
                                <?php if ( !empty ( $video_link ) ) {
                                    echo str_replace("?feature=oembed", "?feature=oembed&" . http_build_query ( $video_params ), wp_oembed_get( $video_link ));
                                }

                                if ( $counter % 2 == 0 ) { ?>
                                    <img src="<?php echo esc_url($preview_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="s-img-switch">
                                <?php } ?>
                                <div class="video-content">
                                    <span class="mute-button mute<?php echo esc_attr( $mute ); ?>"></span>
                                    <span class="play-button"></span>
                                    <span class="full-button"></span>
                                </div>
                            </div>

                        <?php } else { ?>

                            <?php if ( $counter % 2 == 0 ) { ?>
                                <img src="<?php echo esc_url($imageSrc); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="s-img-switch">
                            <?php } ?>

                            <div class="px-parallax__content" style="color: <?php echo esc_attr( $text_color ); ?>;">
                                <?php if(!empty($item['title'])){ ?>
                                    <h3 class="px-parallax__title"><?php echo esc_html( $item['title'] ) ?></h3>
                                <?php }

                                if(!empty($item['description'])){ ?>
                                    <p class="px-parallax__description"><?php echo esc_html( $item['description'] ) ?></p>
                                <?php }?>
                            </div>

                        <?php } ?>
                    </section>

                <?php
					$counter ++;
				    }
			    } ?>

            </div>

			<?php // end output

			return ob_get_clean();
		}
	}
}

