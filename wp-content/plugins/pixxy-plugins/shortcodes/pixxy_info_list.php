<?php

//Info list shortcode

if ( function_exists( 'vc_map' ) ) {
    vc_map( array(
        'name'                    => __( 'Info list', 'js_composer' ),
        'base'                    => 'pixxy_info_list',
        'content_element'         => true,
        'show_settings_on_create' => true,
        'description'             => __( 'Info list', 'js_composer' ),
        'params'                  => array(
            array(
                'type'        => 'param_group',
                'heading'     => __( 'Info item', 'js_composer' ),
                'param_name'  => 'info_list',
                'description' => __( 'Enter values for skill', 'js_composer' ),
                'value'       => '',
                'params'      => array(
                    array(
                        'type'        => 'textfield',
                        'heading'     => __( 'Title', 'js_composer' ),
                        'param_name'  => 'title',
                        'description' => __( 'Add title for info.', 'js_composer' ),
                    ),
                    array(
                        'type'        => 'textarea',
                        'heading'     => __( 'Description', 'js_composer' ),
                        'param_name'  => 'description',
                        'description' => __( 'Add description for info.', 'js_composer' ),
                    ),
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
    class WPBakeryShortCode_pixxy_info_list extends WPBakeryShortCode {
        protected function content( $atts, $content = null ) {

            extract( shortcode_atts( array(
                'el_class'         => '',
                'css'              => '',
                'info_list'        => array()
            ), $atts ) );


            if ( !in_array( "info-list-css", self::$css_scripts ) ) {
                self::$css_scripts[] = "info-list-css";
            }
            $this->enqueueCss();

            $class = ( ! empty( $el_class ) ) ? $el_class : '';    // custum class
            $class .= vc_shortcode_custom_css_class( $css, ' ' );        // custum css


            $info_list = (array) vc_param_group_parse_atts( $info_list );

            ob_start();
            ?>

            <div class="info-wrapper <?php echo esc_attr( $class ); ?>">
                <div class="info-list">
                    <?php foreach ($info_list as $key => $info_item) { ?>
                        <div class="info-item">
                            <?php if ($info_item['title']) { ?>
                                <h5 class="title" data-count="<?php echo ($key >= 9) ? ($key + 1) : '0' . ($key + 1) ?>"><?php echo esc_html($info_item['title']) ?></h5>
                            <?php } ?>
                            <?php if ($info_item['description']) { ?>
                                <div class="description"><?php echo esc_html($info_item['description']) ?></div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <?php return ob_get_clean();
        } // end content()
    } // end class
} // end if

?>
