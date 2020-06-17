<?php

//Banner Slider shortcode

if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/banner_slider/';
	vc_map(
		array(
			'name'                    => __( 'Banner Slider', 'js_composer' ),
			'base'                    => 'banner_slider',
			'as_parent'               => array( 'only' => 'banner_slider_items' ),
			'content_element'         => true,
			'show_settings_on_create' => true,
			'js_view'                 => 'VcColumnView',
			'params'                  => array(
                array(
                    'type'       => 'select_preview',
                    'param_name' => 'type_slider',
                    'heading'    => esc_html__( 'Type Slider', 'js_composer' ),
                    'value'      => array(

                        array(
                            'value' => 'vertical-2',
                            'label' => esc_html__( 'Vertical Slider', 'js_composer' ),
                            'image' => $url . 'vertical-2.jpg'
                        ),
                    ),
                    'admin_label' => true,
                    'save_always' => true,
                ),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Autoplay (sec)', 'js_composer' ),
					'description' => __( '0 - off autoplay.', 'js_composer' ),
					'param_name'  => 'autoplay',
					'value'       => '0',
					'group'       => __( 'Animation', 'js_composer' )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Speed (milliseconds)', 'js_composer' ),
					'description' => __( 'Speed Animation. Default 1000 milliseconds', 'js_composer' ),
					'param_name'  => 'speed',
					'value'       => '500',
					'group'       => __( 'Animation', 'js_composer' )
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
	class WPBakeryShortCode_banner_slider extends WPBakeryShortCodesContainer {
		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'type_slider' => 'vertical-2',
				'autoplay'    => '0',
				'speed'       => '500',
				'css'         => '',
				'el_class'    => ''
			), $atts ) );


			if ( ! in_array( "pixxy_banner_slider", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_banner_slider";
			}
			$this->enqueueJs();

			// include needed stylesheets
			if ( ! in_array( "pixxy_banner_slider-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_banner_slider-css";
			}
			$this->enqueueCss();

			$autoplay = is_numeric( $autoplay ) ? $autoplay * 1000 : 0;
			$speed    = is_numeric( $speed ) ? $speed : '500';
			$class    = ( ! empty( $el_class ) ) ? $el_class : '';
			$class    .= vc_shortcode_custom_css_class( $css, ' ' );

			global $banner_slider_items;
			$banner_slider_items = array();

			$data_type_slider = ($type_slider == 'vertical' || $type_slider == 'vertical-2') ? 'vertical' : 'horizontal';
			$sliderClass      = ($type_slider == 'urban' || $type_slider == 'vertical-2') ? 'full-height-window-hard' : '';
            $class_slider = ($type_slider == 'vertical-2') ? ' js-change-color js-check-pagination'  : '';
            $class_slider .= ($type_slider == 'vertical-2') ? ' full-height-window-hard'  : '';
			$class .= ' ' . $type_slider;

			$paginationType = ($type_slider == 'vertical' || $type_slider == 'vertical-2') ? 'bullets' : 'fraction';

			do_shortcode( $content );

			ob_start();

			if ( ! empty( $banner_slider_items ) ) { ?>

                <div class="banner-slider-wrap <?php echo esc_attr( $class ); ?>">
                    <div class="swiper-container <?php echo esc_attr($class_slider) ?>"
                         data-mouse="0" data-autoplay="<?php echo esc_attr( $autoplay ); ?>"
                         data-loop="1" data-speed="<?php echo esc_attr( $speed ); ?>" data-center="1"
                         data-space="0" data-pagination-type="<?php echo esc_attr( $paginationType ); ?>"
                         data-mode="<?php echo esc_attr( $data_type_slider ); ?>">
                        <div class="swiper-wrapper">
							<?php

							foreach ( $banner_slider_items as $item ) {
								$value = (object) $item['atts'];

								$img_url = ( ! empty( $value->image ) && is_numeric( $value->image ) ) ? wp_get_attachment_url( $value->image ) : '';

								$image_alt = ( ! empty( $value->image  ) && is_numeric( $value->image  ) ) ? get_post_meta( $value->image , '_wp_attachment_image_alt', true) : '';

								$pag_title   = isset( $value->pagination_title ) && ! empty( $value->pagination_title ) ? $value->pagination_title : '';
								$light                = isset( $value->light ) && ! empty( $value->light ) ? 'light' : '';
								$title                = isset( $value->title ) && ! empty( $value->title ) ? $value->title : '';
								$subtitle             = isset( $value->subtitle ) && ! empty( $value->subtitle ) ? $value->subtitle : '';
								$text                 = isset( $value->text ) && ! empty( $value->text ) ? $value->text : '';
								$button               = isset( $value->button ) && ! empty( $value->button ) ? $value->button : '';
								$btn_style            = isset( $value->btn_style ) && ! empty( $value->btn_style ) ? $value->btn_style : 'a-btn';

                                if (!empty($light)) {
                                    $light_option = 'data-content-color=light';
                                } else {
                                    $light_option = 'data-content-color=dark';
                                } ?>

                                <div class="swiper-slide swiper-no-swiping <?php echo esc_attr( $sliderClass . ' ' . $light ); ?>" data-title="<?php echo esc_html( $pag_title ); ?>"
                                     <?php echo esc_attr($light_option); ?>>
									<?php if($type_slider == 'vertical-2' ){
									    if ( ! empty( $img_url ) ) {
                                            echo pixxy_the_lazy_load_flter( $img_url,
                                                array(
                                                    'class' => 's-img-switch',
                                                    'alt'   => $image_alt
                                                )
                                            );
                                        } ?>
                                        <div class="container no-padd-md">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="content-wrap">
                                                        <?php if ( ! empty( $subtitle ) && $type_slider == 'vertical-2' ) { ?>
                                                            <div class="subtitle"><?php echo wp_kses_post( $subtitle ); ?></div>
                                                        <?php } if ( ! empty( $title ) ) { ?>
                                                            <h3 class="title">
                                                                <?php echo wp_kses_post( $title ); ?>
                                                            </h3>
                                                        <?php } if ( ! empty( $text ) && $type_slider == 'vertical-2' ) { ?>
                                                            <div class="text">
                                                                <?php echo wp_kses_post( $value->text ); ?>
                                                            </div>
                                                        <?php }
                                                        if ( ! empty( $button ) ) {
                                                            $url = vc_build_link( $button );
                                                        } else {
                                                            $url['url']    = '#';
                                                            $url['title']  = 'title';
                                                            $url['target'] = '_self';
                                                        }
                                                        if ( ! empty( $button ) ) { ?>
                                                            <a href="<?php echo esc_attr( $url['url'] ); ?>"
                                                               class="<?php echo esc_attr( $btn_style ); ?>"
                                                               target="<?php echo esc_attr( $url['target'] ); ?>"><?php echo esc_html( $url['title'] ); ?></a>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
								<?php
							} ?>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
			<?php }

			return ob_get_clean();
		}
	}
}

if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/banner_slider/';
	vc_map(
		array(
			'name'            => 'Slider item',
			'base'            => 'banner_slider_items',
			'as_child'        => array( 'only' => 'banner_slider' ),
			'content_element' => true,
			'params'          => array(
				array(
					'type'       => 'attach_image',
					'heading'    => __( 'Background Image', 'js_composer' ),
					'param_name' => 'image',
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Subtitle', 'js_composer' ),
					'param_name' => 'subtitle',
					'value'      => '',
				),
				array(
					'type'       => 'textarea',
					'heading'    => __( 'Title', 'js_composer' ),
					'param_name' => 'title',
					'value'      => '',
				),
				array(
					'type'       => 'textarea',
					'heading'    => __( 'Text', 'js_composer' ),
					'param_name' => 'text',
					'value'      => '',
				),
				array(
					'type'       => 'vc_link',
					'heading'    => __( 'Button', 'js_composer' ),
					'param_name' => 'button',
				),
                array(
                    'type'       => 'dropdown',
                    'heading'    => __( 'Button style', 'js_composer' ),
                    'param_name' => 'btn_style',
                    'value'      => array(
                        esc_html__( 'Default', 'js_composer' ) => 'a-btn',
                        esc_html__( 'Dark', 'js_composer' ) => 'a-btn-2',
                        esc_html__( 'Light', 'js_composer' ) => 'a-btn-3',
                        esc_html__( 'White', 'js_composer' ) => 'a-btn-4',
                        esc_html__( 'Transparent', 'js_composer' ) => 'a-btn-5',
                    ),
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => __( 'Text light color', 'js_composer' ),
                    'param_name' => 'light',
                    'value'      => array( __( 'Yes, please', 'js_composer' ) => 'yes' ),
                ),

			) //end params
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_banner_slider_items extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			global $banner_slider_items;
			$banner_slider_items[] = array( 'atts' => $atts, 'content' => $content );

			return;
		}
	}
}