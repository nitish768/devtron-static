<?php

//Custom block shortcode

$url_btn = EF_URL . '/admin/assets/images/shortcodes_images/buttons/';
$url = EF_URL . '/admin/assets/images/shortcodes_images/call_to_action/';

if ( function_exists( 'vc_map' ) ) {
    vc_map(
        array(
            'name'        => __( 'Call to action', 'js_composer' ),
            'base'        => 'pixxy_call_to_action',
            'description' => __( 'Section with text button (with paddings)', 'js_composer' ),
            'category'    => __( 'Content', 'js_composer' ),
            'params'      => array(
                array (
                    'param_name' => 'style',
                    'type' => 'select_preview',
                    'description' => '',
                    'heading' => 'Style',
                    'value' => array (
	                    array(
		                    'value' => 'simple',
		                    'label' => esc_html__( 'Simple with icon', 'js_composer' ),
		                    'image' => $url . 'simple.jpg'
	                    ),
	                    array(
		                    'value' => 'classic',
		                    'label' => esc_html__( 'Classic', 'js_composer' ),
		                    'image' => $url . 'classic.jpg'
	                    ),
	                    array(
		                    'value' => 'with_images',
		                    'label' => esc_html__( 'With images', 'js_composer' ),
		                    'image' => $url . 'with_images.jpg'
	                    ),
                    ),
                    'admin_label' => true,
                    'save_always' => true,
                ),
                array(
                    'type'       => 'attach_image',
                    'heading'    => __( 'Add icon', 'js_composer' ),
                    'param_name' => 'image',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple' ) ),
                ),
                array(
                    'type'       => 'attach_image',
                    'heading'    => __( 'First image', 'js_composer' ),
                    'desc'       => 'Please, choose first image',
                    'param_name' => 'first_image',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'with_images' ) ),
                ),
                array(
                    'type'       => 'attach_image',
                    'heading'    => __( 'Second image', 'js_composer' ),
                    'desc'       => 'Please, choose second image',
                    'param_name' => 'second_image',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'with_images' ) ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Title', 'js_composer' ),
                    'param_name' => 'title',
                    'value'      => '',
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Description', 'js_composer' ),
                    'param_name' => 'description',
                    'value'      => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple' ) ),
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Light heading text', 'js_composer' ),
                    'param_name' => 'light',
                    'std'        => '',
                ),
                array(
                    'type'       => 'vc_link',
                    'heading'    => __( 'Link/Button', 'js_composer' ),
                    'param_name' => 'button',
                ),
                array (
                    'param_name' => 'btn_style',
                    'type' => 'select_preview',
                    'heading' => 'Button style',
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
                    'type' => 'checkbox',
                    'heading'    => __( 'Enable Background gradient?', 'js_composer' ),
                    'param_name' => 'bg_gradient',
                    'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'with_images' ) ),
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
            ),

            //end params
        )
    );
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    /* Frontend Output Shortcode */

    class WPBakeryShortCode_pixxy_call_to_action extends WPBakeryShortCode {
        /**
         * @param $atts
         * @param null $content
         *
         * @return string
         */
        protected function content( $atts, $content = null ) {
            /* get all params */
            extract( shortcode_atts( array(
                'title'          => '',
                'image'          => '',
                'first_image'    => '',
                'second_image'   => '',
                'animation_fade' => '',
                'style'          => 'simple',
                'description'    => '',
                'button'         => '',
                'btn_style'      => 'a-btn',
                'light'          => '',
                'bg_gradient'      => '',
                'bg_gradient_color_1' => '',
                'bg_gradient_color_2' => '',
                'bg_gradient_dir' => '180deg',
            ), $atts ) );

            // include needed stylesheets
            if ( ! in_array( "call-to-action-css", self::$css_scripts ) ) {
                self::$css_scripts[] = "call-to-action-css";
            }
            $this->enqueueCss();

            $style = ! empty( $style ) ? $style : 'simple';
            $light = ! empty( $light ) ? ' light' : '';

            if ( ! empty( $button ) ) {
                $url = vc_build_link( $button );
            } else {
                $url['url']    = '#';
                $url['title']  = '';
                $url['target'] = '_self';
            }

            $image    = ( ! empty( $image ) && is_numeric( $image ) ) ? wp_get_attachment_url( $image ) : '';
	        $image_alt = ( ! empty( $image ) && is_numeric( $image ) ) ? get_post_meta( $image, '_wp_attachment_image_alt', true) : '';
            $gradient = '';
            if ($bg_gradient) {
                $gradient = 'background: linear-gradient(' . $bg_gradient_dir . ', ' . $bg_gradient_color_1 . ', ' . $bg_gradient_color_2 . ');';
            }

            // start output
            ob_start(); ?>
            <div class="cta-wrap">
                <div class="cta <?php echo esc_attr( $style . ' ' . $light ); ?>">
                    <?php if ( $style == 'simple') { ?>
                        <?php if ( ! empty( $image ) ) { ?>
                            <div class="cta-img"><img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image_alt); ?>"></div>
                        <?php } ?>

                        <?php if ( ! empty( $title ) || ! empty( $description ) ) { ?>
                            <div class="cta-heading">
                                <?php if ( ! empty( $title ) ) { ?>
                                    <h3 class="cta-title"><?php echo esc_html( $title ); ?></h3>
                                <?php } ?>

                                <?php if ( ! empty( $description ) ) { ?>
                                    <div class="cta-description"><?php echo esc_html( $description ); ?></div>
                                <?php } ?>
                            </div>
                        <?php } ?>

                        <?php if ( ! empty( $button ) && !empty($url['title'])) { ?>
                            <div class="cta-link-wrap"><a href="<?php echo esc_url( $url['url'] ); ?>"
                                         class="<?php echo esc_attr( $btn_style ); ?>"
                                         target="<?php echo esc_attr( $url['target'] ); ?>"><?php echo esc_html( $url['title'] ); ?></a>                            </div>
                        <?php } ?>
                    <?php } elseif ($style == 'with_images') {
                        if ( ! empty( $first_image ) &&  ! empty( $second_image ) && (! empty( $button ) || ! empty( $title )) ) {
	                        $first_image_alt = ( ! empty( $first_image ) && is_numeric( $first_image ) ) ? get_post_meta( $first_image, '_wp_attachment_image_alt', true) : '';
	                        $first_image = wp_get_attachment_url( $first_image );

	                        $second_image_alt = ( ! empty( $second_image ) && is_numeric( $second_image ) ) ? get_post_meta( $second_image, '_wp_attachment_image_alt', true) : '';
                            $second_image = wp_get_attachment_url( $second_image ); ?>
                            <div class="cta-img">
                                <?php if ($first_image) :
                                    echo pixxy_the_lazy_load_flter( $first_image, array(
                                        'class' => 's-img-switch',
                                        'alt'   => $first_image_alt
                                    ) );
                                endif; ?>
                            </div>
                            <div class="cta-img">
                                <?php if ($second_image) :
                                    echo pixxy_the_lazy_load_flter( $second_image, array(
                                        'class' => 's-img-switch',
                                        'alt'   => $second_image_alt
                                    ) );
                                endif; ?>
                            </div>
                            <div class="cta-heading" style="<?php echo $gradient ?>">
                                <div class="cta-heading-wrap">
                                    <?php if ( ! empty( $title ) ) { ?>
                                        <h3 class="cta-title"><?php echo esc_html( $title ); ?></h3>
                                    <?php } ?>
                                    <?php if ( ! empty( $button ) && !empty($url['title'])) { ?>
                                        <div class="cta-link-wrap"><a href="<?php echo esc_url( $url['url'] ); ?>"
                                                                      class="<?php echo esc_attr( $btn_style ); ?>"
                                                                      target="<?php echo esc_attr( $url['target'] ); ?>"><?php echo esc_html( $url['title'] ); ?></a>                            </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } elseif ($style == 'classic') { ?>
                        <div class="cta-heading">
                            <?php if ( ! empty( $title ) ) { ?>
                                <h3 class="cta-title"><?php echo esc_html( $title ); ?></h3>
                            <?php } ?>
                        </div>
                        <?php if ( ! empty( $button ) && !empty($url['title'])) { ?>
                            <div class="cta-link-wrap"><a href="<?php echo esc_url( $url['url'] ); ?>"
                                                          class="<?php echo esc_attr( $btn_style ); ?>"
                                                          target="<?php echo esc_attr( $url['target'] ); ?>"><?php echo esc_html( $url['title'] ); ?></a>                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <?php // end output

            return ob_get_clean();
        }
    }
}