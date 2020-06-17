<?php

//Physics shortcode

if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/physics/';
	$url_btn = EF_URL . '/admin/assets/images/shortcodes_images/buttons/';
	vc_map(
		array(
			'name'   => __( 'Physics banner', 'js_composer' ),
			'base'   => 'pixxy_physics_banner',
			'params' => array(
                array(
                    'type'       => 'select_preview',
                    'param_name' => 'type',
                    'heading'    => esc_html__( 'Style', 'js_composer' ),
                    'value'      => array(

                        array(
                            'value' => 'fizio',
                            'label' => esc_html__( 'Fizio', 'js_composer' ),
                            'image' => $url . 'physics-banner-fizio.jpg'
                        ),

                        array(
                            'label' => esc_html__( 'Decori', 'js_composer' ),
                            'value' => 'decori',
                            'image' => $url . 'physics-banner-decori.jpg'
                        ),
                        array(
                            'label' => esc_html__( 'Linira', 'js_composer' ),
                            'value' => 'linira',
                            'image' => $url . 'physics-banner-linira.jpg'
                        )
                    ),
                    'admin_label' => true,
                    'save_always' => true,
                ),
				array(
					'type'       => 'textarea',
					'heading'    => __( 'Title', 'js_composer' ),
					'param_name' => 'title'
				),
				array(
					'type'       => 'textarea',
					'heading'    => __( 'Text', 'js_composer' ),
					'param_name' => 'text',
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => __( 'Title color', 'js_composer' ),
					'param_name' => 'title_color',
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => __( 'Text color', 'js_composer' ),
					'param_name' => 'text_color',
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => __( 'Animation color', 'js_composer' ),
					'param_name' => 'animation_color',
                    'value'      => '#0069ba'
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => __( 'Animation color 2', 'js_composer' ),
					'param_name' => 'animation_color_2',
					'dependency' => array( 'element' => 'type', 'value' => 'decori' ),
                    'value'      => '#004796'
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => __( 'Background color', 'js_composer' ),
					'param_name' => 'bg_color',
                    'value'      => '#000000'
				),
				array(
					'type'       => 'vc_link',
					'heading'    => __( 'Button', 'js_composer' ),
					'param_name' => 'button',
				),
				array(
					'type'       => 'select_preview',
					'heading'    => __( 'Style', 'js_composer' ),
					'param_name' => 'style',
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
				),
				array(
					'type'       => 'checkbox',
					'heading'    => __( 'Enable button scroll down', 'js_composer' ),
					'param_name' => 'enable_btn',
					'value'      => '',
					'dependency' => array(
						'element' => 'type_slider',
						'value'   => 'horizontal',
					)
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => __( 'Button scroll down color', 'js_composer' ),
					'param_name' => 'button_color',
				),
			),
			//end params
		)
	);
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pixxy_physics_banner extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'title'             => '',
				'type'              => 'fizio',
				'button'            => '',
				'button_color'      => '#ffffff',
				'style'             => 'a-btn',
				'text'              => '',
				'title_color'       => '',
				'text_color'        => '',
				'animation_color'   => '',
				'animation_color_2' => '',
				'bg_color'          => '',
				'enable_btn'        => '',

			), $atts ) );

			$title_color       = isset( $title_color ) && ! empty( $title_color ) ? $title_color : '#fff';
			$text_color        = isset( $text_color ) && ! empty( $text_color ) ? $text_color : '#fff';
			$animation_color   = isset( $animation_color ) && ! empty( $animation_color ) ? $animation_color : '#0069ba';
			$animation_color_2 = isset( $animation_color_2 ) && ! empty( $animation_color_2 ) ? $animation_color_2 : '#004796';
			$bg_color          = isset( $bg_color ) && ! empty( $bg_color ) ? $bg_color : '#000';
			$button_color      = isset( $button_color ) && ! empty( $button_color ) ? $button_color : '#ffffff';

            $button = vc_build_link( $button );

			// include needed stylesheets
			if ( ! in_array( "pixxy_physics_banner-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_physics_banner-css";
			}

			$this->enqueueCss();

			if ( ! in_array( "pixxy_physics_three", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_physics_three";
			}

			if ( ! in_array( "pixxy_physics_perlin", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_physics_perlin";
			}

			if ( ! in_array( "pixxy_tweenmax", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_tweenmax";
			}

			if ( ! in_array( "pixxy_physics_banner", self::$js_scripts ) && $type == 'fizio' ) {
				self::$js_scripts[] = "pixxy_physics_banner";
			}


			if ( ! in_array( "pixxy_linira_banner", self::$js_scripts ) && $type == 'linira' ) {
				self::$js_scripts[] = "pixxy_linira_banner";
			}

			if ( ! in_array( "pixxy_decori_banner", self::$js_scripts ) && $type == 'decori' ) {
				self::$js_scripts[] = "pixxy_decori_banner";
			}


			$this->enqueueJs();


			ob_start();

			if ( $type == 'fizio' ) { ?>
                <section class="physics-banner" style="background-color: <?php echo esc_attr( $bg_color ); ?>"
                         data-animation-color="<?php echo esc_attr( $animation_color ); ?>">
                    <canvas class="scene scene--full" id="scene"></canvas>
                    <div class="container">
                        <div class="row">
                            <div class="physics-banner__content">
								<?php if ( ! empty( $title ) ) { ?>
                                    <h2 class="title" style="color: <?php echo esc_attr( $title_color ); ?>">
                                        <span class="devider" style="background-color: <?php echo esc_attr( $title_color ); ?>"></span>
										<?php echo wp_kses_post( $title ); ?>
                                    </h2>
								<?php } ?>

                                <?php if ( ! empty( $text ) ) { ?>
                                    <div class="text"
                                         style="color: <?php echo esc_attr( $text_color ); ?>">
                                        <?php echo wp_kses_post( $text ); ?>
                                    </div>
                                <?php }
                                if ( ! empty( $button ) && !(empty($button['title'])) ) { ?>
                                    <div class="button-wrapper text-center">
                                        <a href="<?php echo esc_url( $button['url'] ); ?>"
                                           class="<?php echo esc_attr( $style ); ?>"
                                           target="<?php echo esc_attr( $button['target'] ); ?>">
											<?php echo esc_html( $button['title'] ); ?>
                                        </a>
                                    </div>
								<?php } ?>
                            </div>
                        </div>
                    </div>
					<?php if ( isset( $enable_btn ) && $enable_btn ) { ?>
                        <div class="scroll-down-wrapper">
                            <svg class="arrows btn-scroll-down">
                                <path class="a1" d="M0 0 L15 16 L30 0" style="stroke: <?php echo esc_attr($button_color); ?>"></path>
                                <path class="a2" d="M0 10 L15 26 L30 10" style="stroke: <?php echo esc_attr($button_color); ?>"></path>
                                <path class="a3" d="M0 20 L15 36 L30 20" style="stroke: <?php echo esc_attr($button_color); ?>"></path>
                            </svg>
                        </div>
					<?php } ?>
                </section>
			<?php } elseif ( $type == 'decori' ) { ?>
                <section class="decori-banner physics-banner"
                         style="background-color: <?php echo esc_attr( $bg_color ); ?>"
                         data-animation-color="<?php echo esc_attr( $animation_color ); ?>"
                         data-animation-color-2="<?php echo esc_attr( $animation_color_2 ); ?>"
                         data-bg-color="<?php echo esc_attr( $bg_color ); ?>">

                    <script type="x-shader/x-vertex" id="wrapVertexShader">
					attribute float size;
					attribute vec3 color;
					varying vec3 vColor;
					void main() {
						vColor = color;
						vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );
						gl_PointSize = size * ( 350.0 / - mvPosition.z );
						gl_Position = projectionMatrix * mvPosition;
					}

                    </script>
                    <script type="x-shader/x-fragment" id="wrapFragmentShader">
					varying vec3 vColor;
					uniform sampler2D texture;
					void main(){
						vec4 textureColor = texture2D( texture, gl_PointCoord );
						if ( textureColor.a < 0.3 ) discard;
						vec4 color = vec4(vColor.xyz, 1.0) * textureColor;
						gl_FragColor = color;
					}

                    </script>
                    <canvas class="scene scene--full" id="scene"></canvas>
                    <div class="container">
                        <div class="row">
                            <div class="decori-banner__content">
								<?php if ( ! empty( $title ) ) { ?>
                                    <h2 class="title" style="color: <?php echo esc_attr( $title_color ); ?>">
                                        <span class="devider" style="background-color: <?php echo esc_attr( $title_color ); ?>"></span>
										<?php echo wp_kses_post( $title ); ?>
                                    </h2>
								<?php } ?>

								<?php if ( ! empty( $text ) ) { ?>
                                    <div class="text"
                                        style="color: <?php echo esc_attr( $text_color ); ?>">
										<?php echo wp_kses_post( $text ); ?>
                                    </div>
								<?php }
                                if ( ! empty( $button ) && !(empty($button['title'])) ) { ?>
                                    <div class="button-wrapper text-center">
                                        <a href="<?php echo esc_url( $button['url'] ); ?>"
                                           class="<?php echo esc_attr( $style ); ?>"
                                           target="<?php echo esc_attr( $button['target'] ); ?>">
                                            <?php echo esc_html( $button['title'] ); ?>
                                        </a>
                                    </div>
                                <?php } ?>


                            </div>
                        </div>
                    </div>
					<?php if ( isset( $enable_btn ) && $enable_btn ) { ?>
                        <div class="scroll-down-wrapper">
                            <svg class="arrows btn-scroll-down">
                                <path class="a1" d="M0 0 L15 16 L30 0" style="stroke: <?php echo esc_attr($button_color); ?>"></path>
                                <path class="a2" d="M0 10 L15 26 L30 10" style="stroke: <?php echo esc_attr($button_color); ?>"></path>
                                <path class="a3" d="M0 20 L15 36 L30 20" style="stroke: <?php echo esc_attr($button_color); ?>"></path>
                            </svg>
                        </div>
					<?php } ?>
                </section>
			<?php } else { ?>
                <section class="linira-banner physics-banner"
                         style="background-color: <?php echo esc_attr( $bg_color ); ?>"
                         data-animation-color="<?php echo esc_attr( $animation_color ); ?>"
                         data-bg-color="<?php echo esc_attr( $bg_color ); ?>">
                    <canvas class="scene scene--full" id="scene"></canvas>
                    <div class="container">
                        <div class="row">
                            <div class="linira-banner__content">
								<?php if ( ! empty( $title ) ) { ?>
                                    <h2 class="title" style="color: <?php echo esc_attr( $title_color ); ?>">
                                        <span class="devider" style="background-color: <?php echo esc_attr( $title_color ); ?>"></span>
										<?php echo wp_kses_post( $title ); ?>
                                    </h2>
								<?php } ?>
                                <?php if ( ! empty( $text ) ) { ?>
                                    <div class="text"
                                         style="color: <?php echo esc_attr( $text_color ); ?>">
                                        <?php echo wp_kses_post( $text ); ?>
                                    </div>
                                <?php } if ( ! empty( $button ) && ! (empty($button['title'])) ) { ?>
                                    <div class="button-wrapper text-center">
                                        <a href="<?php echo esc_url( $button['url'] ); ?>"
                                           class="<?php echo esc_attr( $style ); ?>"
                                           target="<?php echo esc_attr( $button['target'] ); ?>">
                                            <?php echo esc_html( $button['title'] ); ?>
                                        </a>
                                    </div>
                                <?php } ?>


                            </div>
                        </div>
                    </div>
					<?php if ( isset( $enable_btn ) && $enable_btn ) { ?>
                        <div class="scroll-down-wrapper">
                            <svg class="arrows btn-scroll-down">
                                <path class="a1" d="M0 0 L15 16 L30 0" style="stroke: <?php echo esc_attr($button_color); ?>"></path>
                                <path class="a2" d="M0 10 L15 26 L30 10" style="stroke: <?php echo esc_attr($button_color); ?>"></path>
                                <path class="a3" d="M0 20 L15 36 L30 20" style="stroke: <?php echo esc_attr($button_color); ?>"></path>
                            </svg>
                        </div>
					<?php } ?>
                </section>
			<?php } ?>


			<?php // end output

			return ob_get_clean();
		}
	}
}