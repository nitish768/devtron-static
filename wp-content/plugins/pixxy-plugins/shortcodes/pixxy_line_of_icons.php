<?php

//Line of icons shortcode
if ( function_exists( 'vc_map' ) ) {
    vc_map( array(
        'name'                    => __( 'Line of icons', 'js_composer' ),
        'base'                    => 'pixxy_line_of_icons',
        'content_element'         => true,
        'show_settings_on_create' => true,
        'params'                  => array(
            array(
                'type'       => 'param_group',
                'heading'    => __( 'Values', 'js_composer' ),
                'param_name' => 'icons',
                'value'      => urlencode( json_encode( array() ) ),
                'params'     => array(
                    array(
                        'type'        => 'iconpicker',
                        'heading'     => __( 'Icon', 'js_composer' ),
                        'param_name'  => 'icon',
                        'value'       => 'icon-arrow-1-circle-down',
                        'settings'    => array(
                            'emptyIcon'    => false,
                            'type'         => 'info',
                            'source'       => pixxy_dripicons_icons(),
                            'iconsPerPage' => 4000,
                        ),
                        'description' => __( 'Select icon from library.', 'js_composer' ),
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => __( 'Title', 'js_composer' ),
                        'param_name'  => 'title',
                    ),
                ),
            ),
            array(
                'type'       => 'css_editor',
                'heading'    => __( 'CSS box', 'js_composer' ),
                'param_name' => 'css',
                'group'      => __( 'Design options', 'js_composer' ),
            ),
        )
    ) );
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_pixxy_line_of_icons extends WPBakeryShortCode {
        protected function content( $atts, $content = null ) {

            extract( shortcode_atts( array(
                'icons' => array(),
            ), $atts ) );

            // include needed stylesheets
            if ( !in_array( "pixxy_line_of_icons-css", self::$css_scripts ) ) {
                self::$css_scripts[] = "pixxy_line_of_icons-css";
            }
            $this->enqueueCss();
            $icons = (array) vc_param_group_parse_atts( $icons );

            ob_start(); ?>

            <?php if (!empty($icons) && isset($icons)) : ?>
                <div class="line-of-icons">
                    <div class="line-icons-wrap">
                        <?php foreach ($icons as $icon): ?>
                            <?php if (!empty($icon['title'])) { ?>
                                <div class="icons-item <?php echo esc_html($icon['icon'])?>"><?php echo esc_html($icon['title']) ?></div>
                            <?php } ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php
            return ob_get_clean();
        }
    }
}