<?php

//Skills shortcode

if ( function_exists( 'vc_map' ) ) {

	$url = EF_URL . '/admin/assets/images/shortcodes_images/counters/';

	vc_map( array(
        'name'                    => __( 'Counter', 'js_composer' ),
        'base'                    => 'pixxy_counter',
        'content_element'         => true,
        'show_settings_on_create' => true,
        'description'             => __( 'Image, title, position, social links', 'js_composer' ),
        'params'                  => array(
            array (
                'param_name' => 'style_counter',
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
		                'value' => 'with-media',
		                'label' => esc_html__( 'With media', 'js_composer' ),
		                'image' => $url . 'with-media.jpg'
	                ),
                ),
                'admin_label' => true,
                'save_always' => true,
            ),
            array(
                'type'       => 'textfield',
                'heading'    => __( 'Subtitle', 'js_composer' ),
                'param_name' => 'subtitle',
                'dependency' => array( 'element' => 'style_counter', 'value' => array( 'with-media' ) )
            ),
            array(
                'type'       => 'textfield',
                'heading'    => __( 'Title', 'js_composer' ),
                'param_name' => 'title',
                'dependency' => array( 'element' => 'style_counter', 'value' => array( 'with-media' ) )
            ),
            array(
                'type'        => 'param_group',
                'heading'     => __( 'Counters', 'js_composer' ),
                'param_name'  => 'linear_counter',
                'description' => __( 'Enter values for counter', 'js_composer' ),
                'value'       => '',
                'params'      => array(
                    array(
                        'type'        => 'textfield',
                        'heading'     => __( 'Title', 'js_composer' ),
                        'param_name'  => 'title',
                        'description' => __( 'Add title for your counter.', 'js_composer' ),
                    ),
                    array(
                        'type'        => 'textarea',
                        'heading'     => __( 'Desription', 'js_composer' ),
                        'param_name'  => 'description',
                        'description' => __( 'Add title for your counter.', 'js_composer' ),
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => __( 'Number', 'js_composer' ),
                        'param_name'  => 'number',
                        'description' => __( 'Only number.', 'js_composer' ),
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => __( 'Additional text or symbol', 'js_composer' ),
                        'description' => __( 'Only for counter style "With Media"', 'js_composer' ),
                        'param_name'  => 'symbol',
                    ),
                    array(
                        "type"        => "colorpicker",
                        "heading"     => __( "Text color", "js_composer" ),
                        "param_name"  => "color",
                        "value"       => '#0073e6', //Default color
                        "description" => __( "Choose line color", "js_composer" ),
                    ),
                ),
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
                'dependency' => array( 'element' => 'style_counter', 'value' => array( 'with-media' ) )
            ),
            array (
                'param_name' => 'media_pos',
                'type' => 'dropdown',
                'heading' => 'Choose position for media',
                'value' => array (
                    esc_html__( 'Left', 'js_composer' ) => 'left',
                    esc_html__( 'Right', 'js_composer' ) => 'right',
                ),
                'dependency' => array( 'element' => 'style_counter', 'value' => array( 'with-media' ) )
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
            array(
                'type'       => 'checkbox',
                'heading'    => esc_html__( 'Remove fade-in-up animation on load?', 'js_composer' ),
                'param_name' => 'animation_fade',
                'std'        => '',
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
	class WPBakeryShortCode_pixxy_counter extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
			        'style_counter'    => 'simple',
					'title'            => '',
					'subtitle'         => '',
					'linear_counter'    => array(),
					'el_class'         => '',
					'css'              => '',
                    'media_style'    => 'simple_img',
                    'media_pos'      => 'left',
                    'animation_fade' => '',
                    'media_image'    => '',
                    'video_link'     => '',
                    'mute'           => '',
			), $atts ) );

			// include needed scripts
            if  ($style_counter == 'with-media') {
                if ( !in_array( "pixxy_youtube", self::$js_scripts ) ) {
                    self::$js_scripts[] = "pixxy_youtube";
                }
            }
            if ( !in_array( "pixxy_countTo-js", self::$js_scripts ) ) {
                self::$js_scripts[] = "pixxy_countTo-js";
            }
            if ( !in_array( "pixxy_skills-js", self::$js_scripts ) ) {
                self::$js_scripts[] = "pixxy_skills-js";
            }

			$this->enqueueJs();

            if  ($style_counter == 'with-media') {
                if ( !in_array( "pixxy_video_banner-css", self::$css_scripts ) ) {
                    self::$css_scripts[] = "pixxy_video_banner-css";
                }
            }
			// include needed stylesheets
			if ( !in_array( "pixxy_counter-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_counter-css";
			}
			$this->enqueueCss();

			$class = ( ! empty( $el_class ) ) ? $el_class : '';
			$class .= vc_shortcode_custom_css_class( $css, ' ' );

			ob_start();

            $media_pos = ($media_pos == 'right') ? 'media-right' : 'media-left';

            $mute = ($mute == 'on') ? 1 : 0;

            $animation_parent = isset( $animation_fade ) && ! empty( $animation_fade ) ? '' : 'js-animation';
            $animation_child = isset( $animation_fade ) && ! empty( $animation_fade ) ? '' : 'js-animation-item';
            $animation_content = isset( $animation_fade ) && ! empty( $animation_fade ) ? '' : 'js-animation-content';

            $video_params = array(
                'enablejsapi' => 1,
                'loop' => 1,
                'controls' => 0 ,
                'modestbranding' => 0,
                'rel' => 0,
                'showinfo' => 0,
                'mute' => $mute,
            );

			$linear_counter = (array) vc_param_group_parse_atts( $linear_counter ); ?>

            <div class="counter <?php echo esc_attr( $class . ' ' . $style_counter . ' ' . $animation_parent ); ?>">
                <div class="wrapper-full">
                    <?php if ($style_counter == 'with-media') { ?>
                        <div class="counter-row <?php echo esc_attr($media_pos); ?>">
                            <div class="counter-media">
                                <?php
                                $image_alt = ( ! empty( $media_image ) && is_numeric( $media_image ) ) ? get_post_meta( $media_image, '_wp_attachment_image_alt', true) : '';
                                $media_image = !empty($media_image) ? wp_get_attachment_url( $media_image )  : '';
                                if ($media_style == 'simple_img') {
                                    if ($media_image) :
                                        echo pixxy_the_lazy_load_flter( $media_image, array(
                                            'class' => 's-img-switch',
                                            'alt'   => $image_alt
                                        ) );
                                    endif;
                                } else { ?>
                                    <div class=" iframe-video banner-video youtube simple" data-type-start="click" data-mute="<?php echo esc_attr( $mute ); ?>" >
                                        <?php if (!empty($video_link)) {
                                            echo str_replace("?feature=oembed", "?feature=oembed&" . http_build_query ( $video_params ), wp_oembed_get($video_link));
                                        }
                                        if ($media_image) :
                                            echo pixxy_the_lazy_load_flter( $media_image, array(
                                                'class' => 's-img-switch',
                                                'alt'   => $image_alt
                                            ) );
                                        endif; ?>
                                        <div class="video-content">
                                            <span class="mute-button mute<?php echo esc_attr($mute); ?>"></span>
                                            <span class="play-button"></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="counter-content">
                                <div class="counter-content-wrap">
                                    <?php if ( ! empty( $subtitle ) ) { ?>
                                        <h5 class="subtitle <?php echo esc_attr($animation_child); ?>"><span class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $subtitle ); ?></span></h5>
                                    <?php } ?>
                                    <?php if ( ! empty( $title ) ) { ?>
                                        <h3 class="title <?php echo esc_attr($animation_child); ?>"><span class="<?php echo esc_attr($animation_content); ?>"><?php echo esc_html( $title ); ?></span></h3>
                                    <?php } ?>
                                    <?php if ( ! empty( $linear_counter ) ) { ?>
                                        <div class="counter-list">
                                            <?php foreach ( $linear_counter as $counter ) {
                                                if ( ! empty( $counter['title'] ) && ! empty( $counter['number'] ) && is_numeric( $counter['number'] ) ) { ?>
                                                    <div class="counter__wrapper <?php echo esc_attr($animation_child); ?>">
                                                        <div class="counter__number <?php echo esc_attr($animation_content); ?>"  style="color: <?php echo esc_attr( $counter['color'] ); ?>">
                                                            <span class="counter__number-number js-counter" data-from="0" data-to="<?php echo esc_attr( $counter['number'] ); ?>" data-speed="1000" data-value="<?php echo esc_attr( $counter['number'] ); ?>">0</span>
                                                            <?php if(!empty($counter['symbol'] )){ ?>
                                                                <span class="counter__number-add-text"><?php echo esc_html( $counter['symbol'] )?></span>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="counter__content <?php echo esc_attr($animation_content); ?>">
                                                            <h6 class="counter__label">
                                                                <?php echo esc_html( $counter['title'] ); ?>
                                                            </h6>
                                                            <p class="counter__description">
                                                                <?php echo esc_html( $counter['description'] ); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                <?php } // end if
                                            } // end foreach ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <?php if ( ! empty( $linear_counter ) ) { ?>
                            <?php foreach ( $linear_counter as $counter ) {
                                if ( ! empty( $counter['title'] ) && ! empty( $counter['number'] ) && is_numeric( $counter['number'] ) ) { ?>

                                    <div class="counter__wrapper <?php echo esc_attr($animation_child); ?>" data-value="<?php echo esc_attr( $counter['number'] ); ?>">
                                        <div class="counter__number <?php echo esc_attr($animation_content); ?>"  style="color: <?php echo esc_attr( $counter['color'] ); ?>">
                                            <span class="counter__number-number js-counter" data-from="0" data-to="<?php echo esc_attr( $counter['number'] ); ?>" data-speed="1000" data-value="<?php echo esc_attr( $counter['number'] ); ?>">0</span>
                                        </div>
                                        <div class="counter__content <?php echo esc_attr($animation_content); ?>">
                                            <h6 class="counter__label">
                                                <?php echo esc_html( $counter['title'] ); ?>
                                            </h6>
                                            <p class="counter__description">
                                                <?php echo esc_html( $counter['description'] ); ?>
                                            </p>
                                        </div>
                                    </div>

                                <?php } // end if
                            } // end foreach ?>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>

			<?php return ob_get_clean();
		} // end content()
	} // end class
} // end if

?>
