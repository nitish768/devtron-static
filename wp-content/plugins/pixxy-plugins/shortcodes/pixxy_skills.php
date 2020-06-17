<?php

//Skills shortcode

if ( function_exists( 'vc_map' ) ) {
	$url = EF_URL . '/admin/assets/images/shortcodes_images/skills/';
	vc_map( array(
		'name'                    => __( 'Skills', 'js_composer' ),
		'base'                    => 'pixxy_skills',
		'content_element'         => true,
		'show_settings_on_create' => true,
		'description'             => __( 'Image, title, position, social links', 'js_composer' ),
		'params'                  => array(
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
		                'value' => 'with-image',
		                'label' => esc_html__( 'With image', 'js_composer' ),
		                'image' => $url . 'with-image.jpg'
	                ),
                ),
                'admin_label' => true,
                'save_always' => true,
            ),
            array(
                'type'       => 'attach_image',
                'heading'    => __( 'Image', 'js_composer' ),
                'param_name' => 'image',
                'dependency' => array( 'element' => 'style', 'value' => array( 'with-image' ) ),
            ),
            array(
                'type' => 'checkbox',
                'heading'    => __( 'Enable Background gradient?', 'js_composer' ),
                'param_name' => 'bg_gradient',
                'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
                'dependency' => array( 'element' => 'style', 'value' => array( 'with-image' ) ),
            ),
            array(
                'type'       => 'colorpicker',
                'heading'    => __( 'Choose first color for gradient?', 'js_composer' ),
                'param_name' => 'bg_gradient_color_1',
                'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
                'dependency' => array(
                    'element' => 'bg_gradient',
                    'not_empty' => true,
                ),
            ),
            array(
                'type'       => 'colorpicker',
                'heading'    => __( 'Choose second color for gradient?', 'js_composer' ),
                'param_name' => 'bg_gradient_color_2',
                'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
                'dependency' => array(
                    'element' => 'bg_gradient',
                    'not_empty' => true,
                ),
            ),
            array(
                'type' => 'textfield',
                'heading'    => __( 'Enter direction', 'js_composer' ),
                'desc' => 'Enter angle for gradient direction (by default 180deg)',
                'param_name' => 'bg_gradient_dir',
                'value' => '180deg',
                'dependency' => array(
                    'element' => 'bg_gradient',
                    'not_empty' => true,
                ),
            ),
            array (
                'param_name' => 'image_pos',
                'type' => 'dropdown',
                'heading' => 'Choose position for image',
                'value' => array (
                    esc_html__( 'Left', 'js_composer' ) => 'left',
                    esc_html__( 'Right', 'js_composer' ) => 'right',
                ),
                'dependency' => array( 'element' => 'style', 'value' => array( 'with-image' ) ),
            ),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Main title', 'js_composer' ),
				'param_name' => 'title',
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Subtitle', 'js_composer' ),
				'param_name' => 'subtitle',
			),
			array(
				'type'       => 'textarea',
				'heading'    => __( 'Text', 'js_composer' ),
				'param_name' => 'text',
			),
			array(
				'type'        => 'param_group',
				'heading'     => __( 'Skills', 'js_composer' ),
				'param_name'  => 'linear_skills',
				'description' => __( 'Enter values for skill', 'js_composer' ),
				'value'       => '',
				'params'      => array(
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Title', 'js_composer' ),
						'param_name'  => 'title',
						'description' => __( 'Add title for your skill.', 'js_composer' ),
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Number', 'js_composer' ),
						'param_name'  => 'number',
						'description' => __( 'Only number.', 'js_composer' ),
					),
                    array (
                        'param_name' => 'number_style',
                        'type' => 'dropdown',
                        'description' => '',
                        'heading' => 'Number position',
                        'value' => array (
                            esc_html__( 'End of all line', 'js_composer' ) => 'all-line',
                            esc_html__( 'End of active line', 'js_composer' ) => 'active-line',
                        ),
                    ),
					array(
						"type"        => "colorpicker",
						"heading"     => __( "Line color", "js_composer" ),
						"param_name"  => "line_color",
						"value"       => '#222222', //Default color
						"description" => __( "Choose line color", "js_composer" ),
					),
				),
			),
            array(
                'type'       => 'checkbox',
                'heading'    => esc_html__( 'Light heading text', 'js_composer' ),
                'param_name' => 'light',
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
	class WPBakeryShortCode_pixxy_skills extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'style'            => 'simple',
				'title'            => '',
				'subtitle'         => '',
				'image'            => '',
				'image_pos'        => 'left',
				'text'             => '',
				'linear_skills'    => array(),
                'light'            => '',
				'el_class'         => '',
				'bg_gradient'      => '',
				'bg_gradient_color_1' => '',
				'bg_gradient_color_2' => '',
				'bg_gradient_dir' => '180deg',
				'css'              => ''
			), $atts ) );

			// include needed scripts
			if ( !in_array( "pixxy_countTo-js", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_countTo-js";
			}

            if ( !in_array( "pixxy_skills-js", self::$js_scripts ) ) {
                self::$js_scripts[] = "pixxy_skills-js";
            }

			$this->enqueueJs();

			// include needed stylesheets
            if ( !in_array( "pixxy_skills-css", self::$css_scripts ) ) {
                self::$css_scripts[] = "pixxy_skills-css";
            }
			$this->enqueueCss();

			$class = ( ! empty( $el_class ) ) ? $el_class : '';    // custum class
			$class .= vc_shortcode_custom_css_class( $css, ' ' );        // custum css
			$class .= ' ' . $style;        // custum css
            $light = ! empty( $light ) ? ' light' : '';

			ob_start();

            $linear_skills = (array) vc_param_group_parse_atts( $linear_skills );
            $image_pos = ($image_pos == 'right') ? 'media-right' : 'media-left';

            $gradient = '';
            if ($bg_gradient) {
                $gradient = 'background: linear-gradient(' . $bg_gradient_dir . ', ' . $bg_gradient_color_1 . ', ' . $bg_gradient_color_2 . ');';
            }

            if ($style == 'simple'): ?>

                <div class="skill-wrapper linear linear-text <?php echo esc_attr( $class . ' ' . $light ); ?>">

					<?php if ( ! empty( $title ) || !empty( $subtitle ) || !empty( $text )) { ?>

                        <div class="text-wrap">
	                        <?php

	                        if ( ! empty( $subtitle ) ) { ?>
                                <h6 class="subtitle">
			                        <?php echo esc_html( $subtitle ); ?>
                                </h6>
	                        <?php }

                            if ( ! empty( $title ) ) { ?>
                                <h3 class="title">
			                        <?php echo esc_html( $title ); ?>
                                </h3>
	                        <?php }
	                        if ( ! empty( $text ) ) { ?>
                                <div class="text">
			                        <?php echo wp_kses_post( $text ); ?>
                                </div>
	                        <?php } ?>
                        </div>
					<?php } ?>
                    <?php if ( ! empty( $linear_skills ) ) { ?>
                        <div class="skills <?php echo esc_attr($light) ?>">
                            <?php foreach ( $linear_skills as $skill ) {
                                if ( ! empty( $skill['title'] ) && ! empty( $skill['number'] ) && is_numeric( $skill['number'] ) && ! empty( $skill['line_color'] ) ) { ?>

                                    <div class="skill" data-value="<?php echo esc_attr( $skill['number'] ); ?>">
                                    <span class="skill-label">
                                        <?php echo esc_html( $skill['title'] ); ?>
                                    </span>
                                        <div class="skill-value <?php echo esc_attr($skill['number_style']); ?>">
                                            <span class="counter" data-from="0" data-speed="1000"
                                                  data-to="<?php echo esc_attr( $skill['number'] ); ?>">0</span>%
                                        </div>
                                        <div class="line">
                                            <div class="active-line"
                                                 style="background-color: <?php echo esc_attr( $skill['line_color'] ); ?>"></div>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    <?php } // end if
                    ?>
                </div>

            <?php else: ?>
                <div class="skill-row <?php echo esc_attr($image_pos); ?>">
                    <div class="skill-image-wrap">
                        <?php $image = !empty($image) ? wp_get_attachment_url( $image )  : '';
                        if ($image) :
                            echo pixxy_the_lazy_load_flter( $image, array(
                                'class' => 's-img-switch',
                                'alt'   => ''
                            ) );
                        endif; ?>
                    </div>
                    <div class="skill-media-content" style="<?php echo $gradient ?>">
                        <div class="skill-wrapper linear linear-text <?php echo esc_attr( $class . ' ' . $light ); ?>">
                            <?php if ( ! empty( $title ) || !empty( $subtitle ) || !empty( $text )) { ?>

                                <div class="text-wrap">
                                    <?php

                                    if ( ! empty( $subtitle ) ) { ?>
                                        <h6 class="subtitle">
                                            <?php echo esc_html( $subtitle ); ?>
                                        </h6>
                                    <?php }

                                    if ( ! empty( $title ) ) { ?>
                                        <h3 class="title">
                                            <?php echo esc_html( $title ); ?>
                                        </h3>
                                    <?php }
                                    if ( ! empty( $text ) ) { ?>
                                        <div class="text">
                                            <?php echo wp_kses_post( $text ); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <?php if ( ! empty( $linear_skills ) ) { ?>
                                <div class="skills <?php echo esc_attr($light) ?>">
                                    <?php foreach ( $linear_skills as $skill ) {
                                        if ( ! empty( $skill['title'] ) && ! empty( $skill['number'] ) && is_numeric( $skill['number'] ) && ! empty( $skill['line_color'] ) ) { ?>

                                            <div class="skill" data-value="<?php echo esc_attr( $skill['number'] ); ?>">
                                    <span class="skill-label">
                                        <?php echo esc_html( $skill['title'] ); ?>
                                    </span>
                                                <div class="skill-value <?php echo esc_attr($skill['number_style']); ?>">
                                            <span class="counter" data-from="0" data-speed="1000"
                                                  data-to="<?php echo esc_attr( $skill['number'] ); ?>">0</span>%
                                                </div>
                                                <div class="line">
                                                    <div class="active-line"
                                                         style="background-color: <?php echo esc_attr( $skill['line_color'] ); ?>"></div>
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

			<?php return ob_get_clean();
		} // end content()
	} // end class
} // end if

?>
