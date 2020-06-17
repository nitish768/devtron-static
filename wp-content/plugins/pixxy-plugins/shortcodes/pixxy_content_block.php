<?php

//Skills shortcode

if ( function_exists( 'vc_map' ) ) {

	$url = EF_URL . '/admin/assets/images/shortcodes_images/content_block/';

    vc_map( array(
        'name'                    => __( 'Content block', 'js_composer' ),
        'base'                    => 'pixxy_content_block',
        'content_element'         => true,
        'show_settings_on_create' => true,
        'description'             => __( 'Title, description, image', 'js_composer' ),
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
		                'value' => 'faq',
		                'label' => esc_html__( 'FAQ style', 'js_composer' ),
		                'image' => $url . 'faq.jpg'
	                ),
                ),
                'admin_label' => true,
                'save_always' => true,
            ),
            array(
                'type'       => 'textfield',
                'heading'    => __( 'Subtitle', 'js_composer' ),
                'param_name' => 'subtitle',
                'dependency' => array( 'element' => 'style', 'value' => array( 'faq' ) )
            ),
            array(
                'type'       => 'textfield',
                'heading'    => __( 'Title', 'js_composer' ),
                'param_name' => 'title',
            ),
            array(
                'type'       => 'textfield',
                'heading'    => __( 'Background text', 'js_composer' ),
                'param_name' => 'bg_text',
                'dependency' => array( 'element' => 'style', 'value' => array( 'simple' ) )
            ),
            array(
                'type'       => 'textarea',
                'heading'    => __( 'Text', 'js_composer' ),
                'param_name' => 'text',
            ),
            array(
                'type' => 'checkbox',
                'heading'    => __( 'Enable image?', 'js_composer' ),
                'param_name' => 'image_enable',
                'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
                'dependency' => array( 'element' => 'style', 'value' => array( 'simple' ) )
            ),
            array(
                'type'       => 'attach_image',
                'heading'    => __( 'Image', 'js_composer' ),
                'param_name' => 'image',
                'dependency' => array(
                    'element' => 'image_enable',
                    'not_empty' => true,
                ),
            ),
            array (
                'param_name' => 'position_desktop',
                'type' => 'dropdown',
                'description' => '',
                'heading' => 'Image position on desktop',
                'value' => array (
                    esc_html__( 'To the right of the content', 'js_composer' ) => 'desktop-right',
                    esc_html__( 'To the left of the content', 'js_composer' ) => 'desktop-left',
                ),
                'dependency' => array(
                    'element' => 'image_enable',
                    'not_empty' => true,
                ),
            ),
            array (
                'param_name' => 'position_mobile',
                'type' => 'dropdown',
                'description' => '',
                'heading' => 'Image position on mobile',
                'value' => array (
                    esc_html__( 'Below the content', 'js_composer' ) => 'mobile-bottom',
                    esc_html__( 'Above the content', 'js_composer' ) => 'mobile-top',
                ),
                'dependency' => array(
                    'element' => 'image_enable',
                    'not_empty' => true,
                ),
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
    class WPBakeryShortCode_pixxy_content_block extends WPBakeryShortCode {
        protected function content( $atts, $content = null ) {

            extract( shortcode_atts( array(
                'style'            => 'simple',
                'title'            => '',
                'subtitle'         => '',
                'bg_text'          => '',
                'text'             => '',
                'image_enable'     => '',
                'image'            => '',
                'position_desktop' => 'desktop-right',
                'position_mobile'  => 'mobile-bottom',
                'el_class'         => '',
                'css'              => ''
            ), $atts ) );

            // include needed stylesheets
            if ( !in_array( "pixxy_content-block-css", self::$css_scripts ) ) {
                self::$css_scripts[] = "pixxy_content-block-css";
            }
            $this->enqueueCss();

            $class  = ( ! empty( $el_class ) ) ? $el_class : '';    // custum class
            $class .= ( ! empty( $style ) ) ? ' ' . $style : '';    // custum class
            $class .= vc_shortcode_custom_css_class( $css, ' ' );        // custum css

            $position_img = ($image_enable && !empty($image)) ? 'with-image ' .$position_mobile . ' ' . $position_desktop : '';

            ob_start();  ?>

            <div class="content-block <?php echo esc_attr( $class . ' ' . $position_img ); ?>">
                <?php if ($style == 'simple') { ?>

                    <?php if ( ! empty( $title ) || !empty( $text )) { ?>

                        <div class="text-wrap">

                            <?php if ( ! empty( $title ) ) { ?>
                                <h3 class="title <?php echo esc_attr(( ! empty( $bg_text ) ) ? 'title--with-bg' : ''); ?>">
                                    <?php if ( ! empty( $bg_text ) ) { ?>
                                        <span class="bg-text">
                                            <?php echo esc_html( $bg_text ); ?>
                                        </span>
                                    <?php } ?>
                                    <?php echo esc_html( $title ); ?>
                                </h3>
                            <?php }
                            if ( ! empty( $text ) ) { ?>
                                <div class="text">
                                    <?php echo wp_kses_post( $text ); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <?php if ($image_enable && !empty($image))  { ?>
                            <div class="image-wrap">
                                <?php $image = !empty($image) ? wp_get_attachment_url( $image )  : '';
                                $image_alt = ( ! empty( $image ) && is_numeric( $image ) ) ? get_post_meta( $image, '_wp_attachment_image_alt', true) : '';

                                if ($image) : ?>
                                    <img src="<?php echo esc_attr($image) ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                <?php endif; ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } elseif ($style == 'faq') { ?>
                    <?php if ( ! empty( $title ) || !empty( $text )) { ?>
                        <div class="text-wrap">
                            <div class="row">
                                <div class="faq-question">
                                    <?php if ( ! empty( $subtitle ) ) { ?>
                                        <h5 class="subtitle"><?php echo esc_html( $subtitle ); ?> </h5>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="faq-question">
                                    <?php if ( ! empty( $title ) ) { ?>
                                        <h3 class="title"><?php echo esc_html( $title ); ?> </h3>
                                    <?php } ?>
                                </div>
                                <div class="faq-answer">
                                    <?php if ( ! empty( $text ) ) { ?>
                                        <div class="text">
                                            <?php echo wp_kses_post( $text ); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>



            <?php return ob_get_clean();
        } // end content()
    } // end class
} // end if

?>
