<?php

//Button shortcode

if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/buttons/';
	vc_map(
		array(
			'name'     => __( 'Buttons', 'js_composer' ),
			'base'     => 'pixxy_button',
			'category' => __( 'Content', 'js_composer' ),
			'params'   => array(
                array(
                    'type'       => 'dropdown',
                    'heading'    => __( 'Buttons align', 'js_composer' ),
                    'param_name' => 'text_align',
                    'value'      => array(
                        'Left content'   => 'text-left',
                        'Center content' => 'text-center',
                        'Right content'  => 'text-right',
                    ),
                ),
                array(
                    'type'        => 'param_group',
                    'heading'     => __( 'Buttons', 'js_composer' ),
                    'param_name'  => 'buttons',
                    'value'       => '',
                    'params'      => array(
                        array(
                            'type'       => 'dropdown',
                            'heading'    => __( 'Button for video link', 'js_composer' ),
                            'param_name' => 'video_btn',
                            'value'      => array(
                                'No'  => 'no',
                                'Yes' => 'yes',
                            ),
                        ),
                        array(
                            'type'       => 'vc_link',
                            'heading'    => __( 'Link/Button', 'js_composer' ),
                            'param_name' => 'button',
                            'dependency' => array( 'element' => 'video_btn', 'value' => 'no' ),
                        ),
                        array(
                            'type'       => 'textfield',
                            'heading'    => __( 'Video link URL', 'js_composer' ),
                            'description' => __( 'Insert your video link(from Youtube or Vimeo)', 'js_composer' ),
                            'param_name' => 'video_link',
                            'value'      => '',
                            'dependency' => array( 'element' => 'video_btn', 'value' => 'yes' ),
                        ),
                        array(
                            'type'       => 'textfield',
                            'heading'    => __( 'Video link Name', 'js_composer' ),
                            'description' => __( 'Insert your video link(from Youtube or Vimeo)', 'js_composer' ),
                            'param_name' => 'video_name',
                            'value'      => '',
                            'dependency' => array( 'element' => 'video_btn', 'value' => 'yes' ),
                        ),
                        array (
                            'param_name' => 'style',
                            'type' => 'select_preview',
                            'description' => '',
                            'heading' => 'Style',
                            'value' => array (
	                            array(
                                    'value' => 'a-btn',
                                    'label' => esc_html__( 'Default', 'js_composer' ),
                                    'image' => $url . 'default.jpg'
                                ),
	                            array(
		                            'value' => 'a-btn-2',
		                            'label' => esc_html__( 'Dark', 'js_composer' ),
		                            'image' => $url . 'dark.jpg'
	                            ),
	                            array(
		                            'value' => 'a-btn-3',
		                            'label' => esc_html__( 'Light', 'js_composer' ),
		                            'image' => $url . 'light.jpg'
	                            ),
	                            array(
		                            'value' => 'a-btn-4',
		                            'label' => esc_html__( 'White', 'js_composer' ),
		                            'image' => $url . 'white.jpg'
	                            ),
	                            array(
		                            'value' => 'a-btn-5',
		                            'label' => esc_html__( 'Transparent', 'js_composer' ),
		                            'image' => $url . 'transparent.jpg'
	                            ),
	                            array(
		                            'value' => 'a-btn-6',
		                            'label' => esc_html__( 'Link style', 'js_composer' ),
		                            'image' => $url . 'link.jpg'
	                            ),
	                            array(
		                            'value' => 'a-btn-7',
		                            'label' => esc_html__( 'Gradient', 'js_composer' ),
		                            'image' => $url . 'gradient.jpg'
	                            ),
                            ),
                            'admin_label' => true,
                            'save_always' => true,
                        ),
                    ),
                ),

			)
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pixxy_button extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
                'buttons'    => array(),
                'text_align' => 'text-left'
			), $atts ) );

			ob_start();

            $buttons = (array) vc_param_group_parse_atts( $buttons );

            foreach ($buttons as $button) {
                if ($button['video_btn'] == 'yes') {
                    if ( !in_array( "pixxy_magnific-popup-css", self::$css_scripts ) ) {
                        self::$css_scripts[] = "pixxy_magnific-popup-css";
                    }

                    if ( !in_array( "pixxy_video_btn-css", self::$css_scripts ) ) {
                        self::$css_scripts[] = "pixxy_video_btn-css";
                    }
                }
            }

            $this->enqueueCss();

            foreach ($buttons as $button) {
                if ($button['video_btn'] == 'yes') {
                    if ( !in_array( "pixxy_magnific", self::$js_scripts ) ) {
                        self::$js_scripts[] = "pixxy_magnific";
                    }

                    if ( !in_array( "pixxy_info_block", self::$js_scripts ) ) {
                        self::$js_scripts[] = "pixxy_info_block";
                    }
                }
            }

            $this->enqueueJs();


			if ( ! empty( $buttons ) ) { ?>
                <div class="button-wrapper <?php echo esc_attr( $text_align ); ?>">
                    <?php foreach ($buttons as $button) {
                        if ($button['video_btn'] == 'no') {
                            if ( ! empty( $button['button'] ) ) {
                                $url = vc_build_link( $button['button'] );
                            } else {
                                $url['url']    = '#';
                                $url['title']  = 'title';
                                $url['target'] = '_self';
                            }

	                        $url['target'] = isset($url['target']) && !empty($url['target']) ? $url['target'] : '_self'; ?>
                                <a href="<?php echo esc_url( $url['url'] ); ?>" class="<?php echo esc_attr( $button['style'] ); ?>"
                                   target="<?php echo esc_attr( $url['target'] ); ?>">
                                    <?php echo esc_html( $url['title'] ); ?>
                                </a>
                        <?php } else { ?>
                            <a href="<?php echo esc_url( $button['video_link'] ); ?>" class="<?php echo esc_attr( $button['style'] ); ?> btn-video ion-play">
                                <?php echo esc_html( $button['video_name'] ); ?>
                            </a>
                        <?php } ?>
                    <?php } ?>
                </div>
			<?php }

			return ob_get_clean();
		}
	}
}


