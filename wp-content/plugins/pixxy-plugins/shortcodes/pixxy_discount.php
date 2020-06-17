<?php

//Discount shortcode

if ( function_exists( 'vc_map' ) ) {
	$url_btn = EF_URL . '/admin/assets/images/shortcodes_images/buttons/';

    vc_map(
        array(
            'name'        => esc_html__( 'Discount', 'js_composer' ),
            'base'        => 'pixxy_discount',
            'description' => __( 'Section with discount product', 'js_composer' ),
            'category'    => __( 'Content', 'js_composer' ),
            'params'      => array(
                array(
                    'type'       => 'attach_image',
                    'heading'    => __( 'Product image', 'js_composer' ),
                    'param_name' => 'image',
                ),
                array(
                    'type'       => 'attach_image',
                    'heading'    => __( 'Mask image', 'js_composer' ),
                    'param_name' => 'mask_image',
                    'description'=> 'Will be display in top left side in section'
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Subtitle', 'js_composer' ),
                    'param_name' => 'subtitle',
                ),
                array(
                    'type'       => 'textarea',
                    'heading'    => __( 'Title', 'js_composer' ),
                    'param_name' => 'title',
                    'description'=> 'If you want to add the word which will be marked by main color, please insert it in &lt;b&gt; tag, for example: &lt;b&gt;Hello&lt;/b&gt;',
                ),
                array(
                    'type'       => 'vc_link',
                    'heading'    => __( 'Button', 'js_composer' ),
                    'param_name' => 'button',
                ),
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Button style', 'js_composer' ),
                    'param_name' => 'btn_style',
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
                    'heading'    => esc_html__( 'Add icon for button', 'js_composer' ),
                    'param_name' => 'btn_icon',
                    'std'        => '',
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Add padding for section?', 'js_composer' ),
                    'param_name' => 'section_padding',
                    'std'        => '',
                ),
                array(
                    'type'       => 'colorpicker',
                    'heading'    => 'Section color background',
                    'param_name' => 'section_color_bg',
                ),
                array(
                    'type' => 'checkbox',
                    'heading' => __( 'Product position for extra large devices', 'js_composer' ),
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
                    'type'       => 'textfield',
                    'heading'    => 'Add custom padding-top for section',
                    'param_name' => 'xl_padd_top',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'xl_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => 'Add custom padding-bottom for section',
                    'param_name' => 'xl_padd_bot',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'xl_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => 'Add custom margin-top for product',
                    'param_name' => 'xl_marg_top',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'xl_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => 'Add custom margin-bottom for product',
                    'param_name' => 'xl_marg_bot',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'xl_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type' => 'checkbox',
                    'heading' => __( 'Product position for large devices', 'js_composer' ),
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
                    'type'       => 'textfield',
                    'heading'    => 'Add custom padding-top for section',
                    'param_name' => 'lg_padd_top',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'lg_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => 'Add custom padding-bottom for section',
                    'param_name' => 'lg_padd_bot',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'lg_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => 'Add custom margin-top for product',
                    'param_name' => 'lg_marg_top',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'lg_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => 'Add custom margin-bottom for product',
                    'param_name' => 'lg_marg_bot',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'lg_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type' => 'checkbox',
                    'heading' => __( 'Product position for medium devices', 'js_composer' ),
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
                    'type'       => 'textfield',
                    'heading'    => 'Add custom padding-top for section',
                    'param_name' => 'md_padd_top',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'md_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => 'Add custom padding-bottom for section',
                    'param_name' => 'md_padd_bot',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'md_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => 'Add custom margin-top for product',
                    'param_name' => 'md_marg_top',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'md_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => 'Add custom margin-bottom for product',
                    'param_name' => 'md_marg_bot',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'md_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type' => 'checkbox',
                    'heading' => __( 'Product position for small devices', 'js_composer' ),
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
                    'heading'    => 'Max width for product',
                    'param_name' => 'max_width',
                    'dependency' => array(
                        'element' => 'sm_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => 'Add custom padding-top for section',
                    'param_name' => 'sm_padd_top',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'sm_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => 'Add custom padding-bottom for section',
                    'param_name' => 'sm_padd_bot',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'sm_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => 'Add custom margin-top for product',
                    'param_name' => 'sm_marg_top',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'sm_size',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => 'Add custom margin-bottom for product',
                    'param_name' => 'sm_marg_bot',
                    "value"       => '0',
                    'dependency' => array(
                        'element' => 'sm_size',
                        'not_empty' => true,
                    ),
                ),
            ),
            //end params
        )
    );
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    /* Frontend Output Shortcode */

    class WPBakeryShortCode_pixxy_discount extends WPBakeryShortCode {
        protected function content( $atts, $content = null ) {
            /* get all params */
            extract( shortcode_atts( array(
                'subtitle'     => '',
                'title'     => '',
                'image'    => '',
                'mask_image'    => '',
                'button'    => '',
                'section_padding'    => '',
                'btn_icon'  => '',
                'btn_style' => '',
                'section_color_bg' => '',
                'xl_size' => '',
                'xl_top' => '0',
                'xl_right' => '0',
                'xl_bottom' => '0',
                'xl_left' => '0',
                'xl_padd_top' => '0',
                'xl_padd_bot' => '0',
                'xl_marg_top' => '0',
                'xl_marg_bot' => '0',
                'lg_size' => '',
                'lg_top' => '0',
                'lg_right' => '0',
                'lg_bottom' => '0',
                'lg_left' => '0',
                'lg_padd_top' => '0',
                'lg_padd_bot' => '0',
                'lg_marg_top' => '0',
                'lg_marg_bot' => '0',
                'md_size' => '',
                'md_top' => '0',
                'md_right' => '0',
                'md_bottom' => '0',
                'md_left' => '0',
                'md_padd_top' => '0',
                'md_padd_bot' => '0',
                'md_marg_top' => '0',
                'md_marg_bot' => '0',
                'sm_size' => '',
                'sm_top' => '0',
                'sm_right' => '0',
                'sm_bottom' => '0',
                'sm_left' => '0',
                'sm_padd_top' => '0',
                'sm_padd_bot' => '0',
                'sm_marg_top' => '0',
                'sm_marg_bot' => '0',
                'max_width' => '0',
            ), $atts ) );

            // include needed stylesheets
            if ( ! in_array( "pixxy_discount-css", self::$css_scripts ) ) {
                self::$css_scripts[] = "pixxy_discount-css";
            }

            if ( ! in_array( "pixxy_single_media-css", self::$css_scripts ) ) {
                self::$css_scripts[] = "pixxy_single_media-css";
            }
            $this->enqueueCss();

            if ( ! in_array( "pixxy_single_media", self::$js_scripts ) ) {
                self::$js_scripts[] = "pixxy_single_media";
            }

            if ( ! in_array( "pixxy_discount", self::$js_scripts ) ) {
                self::$js_scripts[] = "pixxy_discount";
            }
            $this->enqueueJs();


            $btn_style = isset( $btn_style ) && ! empty( $btn_style ) ? $btn_style : 'a-btn';
            $btn_icon = ($btn_icon) ? '<i class="ion-arrow-right-c"></i>' : '';
            $section_padding = ($section_padding) ? 'section-padd' : '';
            $section_color_bg = (!empty($section_color_bg)) ? 'background-color: ' . $section_color_bg : '';
            // start output
            ob_start(); ?>
                <div class="discount <?php echo esc_attr($section_padding); ?> js-discount"
                    <?php if ( esc_attr( $xl_size ) ) : ?> data-xl-padding="<?php echo esc_attr( $xl_padd_top . ' ' . $xl_padd_bot ) ?>" <?php endif; ?>
                    <?php if ( esc_attr( $lg_size ) ) : ?> data-lg-padding="<?php echo esc_attr( $lg_padd_top . ' ' . $lg_padd_bot ) ?>" <?php endif; ?>
                    <?php if ( esc_attr( $md_size ) ) : ?> data-md-padding="<?php echo esc_attr( $md_padd_top . ' ' . $md_padd_bot ) ?>" <?php endif; ?>
                    <?php if ( esc_attr( $sm_size ) ) : ?> data-sm-padding="<?php echo esc_attr( $sm_padd_top . ' ' . $sm_padd_bot ) ?>" <?php endif; ?>>
                    <div class="discount__wrap" style="<?php echo $section_color_bg ?>">
                        <div class="discount__mask">
                            <?php if (!empty($mask_image)) {
	                            $image_alt = get_post_meta( $mask_image , '_wp_attachment_image_alt', true);
	                            $mask_image =  wp_get_attachment_url( $mask_image );
                                echo pixxy_the_lazy_load_flter( $mask_image, array(
                                    'alt'   => $image_alt,
                                    'class' => ''
                                ) );
                            } ?>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-sm-6 col-xs-12">
                                    <div class="discount__content">
                                        <?php if ( ! empty( $subtitle ) ) { ?>
                                            <h5 class="subtitle"><?php echo wp_kses_post( $subtitle ); ?></h5>
                                        <?php } if ( ! empty( $title ) ) { ?>
                                            <h3 class="title"><?php echo wp_kses_post( $title ); ?></h3>
                                        <?php }
                                        if ( ! empty( $button ) ) {
                                            $url = vc_build_link( $button );
                                        } else {
                                            $url['url']   = '#';
                                            $url['title'] = 'title';
                                            $url['target'] = '_self';
                                        }
                                        if ( ! empty( $button ) ) { ?>
                                            <div class="but-wrap">
                                                <a href="<?php echo esc_attr( $url['url'] ); ?>"
                                                   class="<?php echo esc_attr( $btn_style ); ?>" target="<?php echo esc_attr($url['target']); ?>">
                                                    <?php echo wp_kses_post( $url['title'] ); ?><?php echo wp_kses_post($btn_icon); ?>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-sm-6 col-xs-12">
                                    <div class="discount-product px-media__item"
                                        <?php if ( esc_attr( $xl_size ) ) : ?> data-xl-size="<?php echo esc_attr( $xl_top . ' ' . $xl_right . ' ' . $xl_bottom . ' ' . $xl_left ) ?>" <?php endif; ?>
                                        <?php if ( esc_attr( $lg_size ) ) : ?> data-lg-size="<?php echo esc_attr( $lg_top . ' ' . $lg_right . ' ' . $lg_bottom . ' ' . $lg_left ) ?>" <?php endif; ?>
                                        <?php if ( esc_attr( $md_size ) ) : ?> data-md-size="<?php echo esc_attr( $md_top . ' ' . $md_right . ' ' . $md_bottom . ' ' . $md_left ) ?>" <?php endif; ?>
                                        <?php if ( esc_attr( $sm_size ) ) : ?> data-sm-size="<?php echo esc_attr( $sm_top . ' ' . $sm_right . ' ' . $sm_bottom . ' ' . $sm_left ) ?>" <?php endif; ?>
                                        <?php if ( esc_attr( $max_width ) ) : ?> data-max-width="<?php echo esc_attr( $max_width ) ?>" <?php endif; ?>
                                        <?php if ( esc_attr( $xl_size ) ) : ?> data-xl-margin="<?php echo esc_attr( $xl_marg_top . ' ' . $xl_marg_bot ) ?>" <?php endif; ?>
                                        <?php if ( esc_attr( $lg_size ) ) : ?> data-lg-margin="<?php echo esc_attr( $lg_marg_top . ' ' . $lg_marg_bot ) ?>" <?php endif; ?>
                                        <?php if ( esc_attr( $md_size ) ) : ?> data-md-margin="<?php echo esc_attr( $md_marg_top . ' ' . $md_marg_bot ) ?>" <?php endif; ?>
                                        <?php if ( esc_attr( $sm_size ) ) : ?> data-sm-margin="<?php echo esc_attr( $sm_marg_top . ' ' . $sm_marg_bot ) ?>" <?php endif; ?>>
                                        <?php if (!empty($image)) {
	                                        $image2_alt = get_post_meta( $image , '_wp_attachment_image_alt', true);
                                            $image =  wp_get_attachment_url( $image );
                                            echo pixxy_the_lazy_load_flter( $image, array(
                                                'alt'   => $image2_alt,
                                                'class' => ''
                                            ) );
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php

            return ob_get_clean();
        }
    }
}