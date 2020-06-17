<?php

//Services shortcode

if ( function_exists( 'vc_map' ) ) {
	$url = EF_URL . '/admin/assets/images/shortcodes_images/services/';
	vc_map(
		array(
			'name'        => __( 'Services', 'js_composer' ),
			'base'        => 'pixxy_services',
			'category'    => __( 'Content', 'js_composer' ),
			'description' => __( 'Block with image and text', 'js_composer' ),
			'params'      => array(
				array(
					'type'       => 'select_preview',
					'param_name' => 'style',
					'heading'    => esc_html__( 'Style', 'js_composer' ),
					'value'      => array(

						array(
							'label' => esc_html__( 'Icon classic', 'js_composer' ),
							'value' => 'icon',
							'image' => $url . 'icon.jpg'
						),
						array(
                            'label' => esc_html__( 'Icon modern', 'js_composer' ),
                            'value' => 'image',
                            'image' => $url . 'image.jpg'
                        ),
						array(
							'label' => esc_html__( 'Gradient', 'js_composer' ),
							'value' => 'gradient',
							'image' => $url . 'gradient.jpg'
						),
					),
					'admin_label' => true,
					'save_always' => true,
				),
				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'js_composer' ),
					'param_name'  => 'icon',
					'value'       => 'icon-arrow-1-circle-down',
					'settings'    => array(
						'emptyIcon'    => false,
						'type'         => 'info',
						'source'       => pixxy_simple_line_icons(),
						'iconsPerPage' => 4000,
					),
					'description' => __( 'Select icon from library.', 'js_composer' ),
					'dependency'  => array( 'element' => 'style', 'value' => array( 'icon', 'gradient' ) )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => 'Icon gradient color 1',
					'param_name' => 'icon_gradient_color_1',
					"value"       => '#2585e6', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'icon' ) )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => 'Icon gradient color 2',
					'param_name' => 'icon_gradient_color_2',
					"value"       => '#63ffdd', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'icon' ) )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => 'Icon color',
					'param_name' => 'icon_color',
					"value"       => '#0696ff;', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'gradient' ) )
				),
				array (
					'type'       => 'colorpicker',
					'heading'    => 'Icon hover color',
					'param_name' => 'icon_hover_color',
					"value"       => '#ffffff;', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'gradient' ) )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => 'Icon background gradient color 1',
					'param_name' => 'icon_background_gradient_color_1',
					"value"       => '#eef8ff', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'gradient' ) )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => 'Icon background gradient color 2',
					'param_name' => 'icon_background_gradient_color_2',
					"value"       => '#ffffff', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'gradient' ) )
				),
                array(
                    'type'       => 'attach_image',
                    'heading'    => __( 'Image', 'js_composer' ),
                    'param_name' => 'image',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'image' ) )
                ),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Title', 'js_composer' ),
					'param_name' => 'title'
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Link for title', 'js_composer' ),
					'param_name' => 'link_title',
					'dependency' => array( 'element' => 'style', 'value' => array( 'image' ) )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => 'Title color',
					'param_name' => 'title_color',
					"value"       => '#222222', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'image', 'icon' ) )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => 'Title color on hover',
					'param_name' => 'title_color_hover',
					"value"       => '#0073e6', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'image', 'icon' ) )
				),
				array(
					'type'       => 'textarea',
					'heading'    => __( 'Text', 'js_composer' ),
					'param_name' => 'text'
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => 'Text color',
					'param_name' => 'text_color',
					"value"       => '#222222;', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'gradient' ) )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => 'Text color on hover',
					'param_name' => 'text_color_hover',
					"value"       => '#ffffff;', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'gradient' ) )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => 'Background',
					'param_name' => 'background',
					"value"       => '#ffffff;', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'gradient' ) )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => 'Background gradient color 1 on hover',
					'param_name' => 'background_gradient_1',
					"value"       => '#ffffff;', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'gradient' ) )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => 'Background gradient color 2 on hover',
					'param_name' => 'background_gradient_2',
					"value"       => '#ffffff;', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'gradient' ) )
				),
				array(
					'type'       => 'dropdown',
					'heading'    => __( 'Text align', 'js_composer' ),
					'param_name' => 'text_align',
					'value'      => array(
						'Center' => 'text-center',
						'Left'   => 'text-left',
						'Right'  => 'text-right',
					),
				),
				array(
					'type' => 'checkbox',
					'heading' => __( 'Enable shadow', 'js_composer' ),
					'param_name' => 'shadow',
					'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				),
				array(
					'type' => 'checkbox',
					'heading' => __( 'Enable shadow on hover', 'js_composer' ),
					'param_name' => 'shadow_hover',
					'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
					'dependency' => array( 'element' => 'style', 'value' => array( 'gradient' ) )
				),
                array(
					'type' => 'checkbox',
					'heading' => __( 'Enable border bottom', 'js_composer' ),
					'param_name' => 'border_bottom',
					'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => 'Border color',
					'param_name' => 'border_color',
					"value"       => '#0073e6',
					'dependency' => array(
						'element' => 'border_bottom',
						'not_empty' => true,
					)
				),
				array(
					'type' => 'checkbox',
					'heading' => __( 'Small vertical paddings', 'js_composer' ),
					'param_name' => 'small_paddings',
					'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				),
			)
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pixxy_services extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'title'            => '',
				'link_title'            => '',
				'title_color'      => '',
				'title_color_hover' => '',
				'icon'             => 'icon-basic-accelerator',
				'icon_color' => '#0696ff',
				'icon_hover_color' => '#ffffff',
				'icon_background_gradient_color_1' => '#eef8ff',
				'icon_background_gradient_color_2' => '#fff',
				'items_accordion'  => '',
				'icon_color' => '',
				'icon_gradient_color_1' => '',
				'icon_gradient_color_2' => '',
				'text_color' => '#222222',
				'text_color_hover' => '#ffffff',
				'background' => '#ffffff',
				'background_gradient_1' => '#0696ff',
				'background_gradient_2' => '#4ef9fe',
				'style'      => 'icon',
				'items_tile' => '',
				'image'      => '',
				'text'       => '',
				'text_align' => 'text-center',
				'shadow'     => '',
				'shadow_hover' => '',
				'border_bottom' => '',
				'border_color' => '',
				'small_paddings' => '',
			), $atts ) );


			// include needed stylesheets
			if ( ! in_array( "pixxy_services-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_services-css";
			}
			$this->enqueueCss();


			if ( ! in_array( "pixxy_services", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_services";
			}
			$this->enqueueJs();


			$url = ( ! empty( $image ) && is_numeric( $image ) ) ? wp_get_attachment_url( $image ) : '';
			$icon_color = ! empty( $icon_color ) ? $icon_color : '#0696ff';
			$icon_hover_color = ! empty( $icon_hover_color ) ? $icon_hover_color : '#fff';
			$icon_gradient_color_1 = ! empty( $icon_gradient_color_1 ) ? $icon_gradient_color_1 : '#0073e6';
			$icon_gradient_color_2 = ! empty( $icon_gradient_color_2 ) ? $icon_gradient_color_2 : '#63ffdd';
			$icon_background_gradient_color_1 = ! empty( $icon_background_gradient_color_1 ) ? $icon_background_gradient_color_1 : '#eef8ff';
			$icon_background_gradient_color_2 = ! empty( $icon_background_gradient_color_2 ) ? $icon_background_gradient_color_2 : '#fff';
			$title_color = ! empty( $title_color ) ? $title_color : '#222';
			$title_color_hover = ! empty( $title_color_hover ) ? $title_color_hover : '#0073e6';
			$text_color = ! empty( $text_color ) ? $text_color : '#222';
			$text_color_hover = ! empty( $text_color_hover ) ? $text_color_hover : '#ffffff';
			$shadow = ! empty( $shadow ) ? $shadow : false;
			$small_paddings = ! empty( $small_paddings ) ? $small_paddings : false;
			$shadow_hover = ! empty( $shadow_hover ) ? $shadow_hover : false;
			$border_color = ! empty( $border_color ) ? $border_color : '#0073e6';
			$background = ! empty( $background ) ? $background : '#fff';
			$background_gradient_1 = ! empty( $background_gradient_1 ) ? $background_gradient_1 : '#0696ff';
			$background_gradient_2 = ! empty( $background_gradient_2 ) ? $background_gradient_2 : '#4ef9fe';
			$link_title = isset($link_title) && !empty($link_title) ? $link_title : '';


			ob_start(); ?>

        <div class="services <?php echo esc_attr( $style ) . ' '; echo esc_attr( $text_align ) . ' '; if( $shadow ) echo 'services--shadow '; if( $small_paddings ) echo 'services--small-paddings '; if( $shadow_hover ) echo 'services--shadow-hover ' ?>"
			 <?php if ( $style == 'icon' || $style == 'image' ) : ?>
             onmouseover="this.querySelector('.title').style.color='<?php echo esc_attr( $title_color_hover ); ?>';"
             onmouseout="this.querySelector('.title').style.color='<?php echo esc_attr( $title_color ); ?>';"
             <?php elseif ( $style == 'gradient' ) : ?>
             onmouseover="
                     this.querySelector('.content').style.color='<?php echo esc_attr( $text_color_hover ) ?>';
                     this.querySelector('.icon-wrapper > i').style.color='<?php echo esc_attr( $icon_hover_color ) ?>';"
             onmouseout="
                     this.style.backgroundImage='none';
                     this.querySelector('.content').style.color='<?php echo esc_attr ( $text_color ); ?>';
                     this.querySelector('.icon-wrapper > i').style.color='<?php echo esc_attr( $icon_color ) ?>';"
             <?php endif; ?>
        >

			    <?php if ( $style == 'image' ) { ?>
                    <div class="content">

					    <?php if ( ! empty( $url ) ) { ?>
                            <img class="img-wrap" src="<?php echo esc_html( $url ); ?>" alt="">
						<?php } ?>

	                    <?php if ( ! empty( $title ) ) { ?>
                          <h4 class="title" style="color: <?php echo esc_attr( $title_color ); ?>">
                              <?php if(!empty($link_title)){ ?>
                                  <a href="<?php echo esc_url($link_title); ?>"><?php echo esc_html( $title ); ?></a>
                              <?php }else{
	                              echo esc_html( $title );
                              } ?>
                          </h4>
	                    <?php }

	                    if ( ! empty( $text ) ) { ?>
                          <p class="text"><?php echo wp_kses_post( $text ); ?></p>
	                    <?php } ?>
                    </div>
				<?php } elseif ( $style == 'icon' ) { ?>
                  <div class="content">
                                    <?php
                                    if ( ! empty( $icon ) ) { ?>
                        <i class="<?php echo esc_attr( $icon ); ?>"
                           style="background: -webkit-linear-gradient(42deg, <?php echo esc_attr( $icon_gradient_color_1 ); ?>, <?php echo esc_attr( $icon_gradient_color_2 ); ?>); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
                                    <?php } ?>

                                    <?php if ( ! empty( $title ) ) { ?>
                        <h4 class="title" style="color: <?php echo esc_attr( $title_color ); ?>"><?php echo esc_html( $title ); ?></h4>
                                    <?php }

                                    if ( ! empty( $text ) ) { ?>
                        <p class="text"><?php echo wp_kses_post( $text ); ?></p>
                                    <?php } ?>
                  </div>
			    <?php } elseif ( $style == 'gradient' ) { ?>
                    <?php if ( esc_attr( $background_gradient_1 ) ) : ?>
                    <span class="gradient-overlay" style="background-image: linear-gradient(133deg, <?php echo esc_attr( $background_gradient_1 ); ?>, <?php echo esc_attr( $background_gradient_2 ); ?>)"></span>
                    <?php endif; ?>

                    <div class="content" style="color: <?php echo esc_attr( $text_color ) ?>">
                        <?php if ( ! empty( $icon ) ) { ?>
                        <div class="icon-wrapper">
                            <span class="icon-gradient" style="
                                    background-image: -moz-linear-gradient(top, <?php echo esc_attr( $icon_background_gradient_color_1 ) ?>, <?php echo esc_attr( $icon_background_gradient_color_2 ) ?> );
                                    background-image: -webkit-linear-gradient(top, <?php echo esc_attr( $icon_background_gradient_color_1 ) ?>, <?php echo esc_attr( $icon_background_gradient_color_2 ) ?> );
                                    background-image: linear-gradient(to bottom, <?php echo esc_attr( $icon_background_gradient_color_1 ) ?>, <?php echo esc_attr( $icon_background_gradient_color_2 ) ?> );
                                "></span>
                            <i class="<?php echo esc_attr( $icon ); ?>" style="color: <?php echo esc_attr( $icon_color ) ?>"></i>
                        </div>

                        <?php } ?>

                        <?php if ( ! empty( $title ) ) { ?>
                            <h4 class="title"><?php echo esc_html( $title ); ?></h4>
                        <?php }

                        if ( ! empty( $text ) ) { ?>
                            <p class="text"><?php echo wp_kses_post( $text ); ?></p>
                        <?php } ?>
                    </div>
				<?php }?>

            <?php if ( esc_attr( $border_bottom ) ) : ?>
                <span class="services__border" style="background-color: <?php echo esc_attr( $border_color ); ?>"></span>
            <?php endif; ?>

        </div>

			<?php

			return ob_get_clean();
		}
	}
}
