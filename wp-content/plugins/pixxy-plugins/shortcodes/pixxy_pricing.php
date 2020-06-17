<?php
//Pricing shortcode

if ( function_exists( 'vc_map' ) ) {
	$url = EF_URL . '/admin/assets/images/shortcodes_images/pricing/';
	$url_btn = EF_URL . '/admin/assets/images/shortcodes_images/buttons/';

	vc_map(
		array(
			'name'                    => esc_html__( 'Pricing', 'js_composer' ),
			'base'                    => 'vc_pricing',
			'content_element'         => true,
			'show_settings_on_create' => true,
			'description'             => esc_html__( '', 'js_composer' ),
			'params'                  => array(
                array (
                    'param_name' => 'style',
                    'type' => 'select_preview',
                    'description' => '',
                    'heading' => 'Style',
                    'value' => array (
	                    array(
		                    'value' => 'pricing_list',
		                    'label' => esc_html__( 'Pricing list', 'js_composer' ),
		                    'image' => $url . 'pricing_list.jpg'
	                    ),
	                    array(
		                    'value' => 'pricing_item',
		                    'label' => esc_html__( 'Pricing item', 'js_composer' ),
		                    'image' => $url . 'pricing_item.jpg'
	                    ),
                    ),
                    'admin_label' => true,
                    'save_always' => true,
                ),
                array(
                    'param_name'  => 'title',
                    'type'        => 'textfield',
                    'description' => '',
                    'heading'     => 'Title',
                    'value'       => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'pricing_list' ) )
                ),
				array(
					'param_name'  => 'description',
					'type'        => 'textarea',
					'description' => '',
					'heading'     => 'Description',
					'value'       => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'pricing_list' ) )
				),
                array(
                    'param_name'  => 'name',
                    'type'        => 'textfield',
                    'heading'     => 'Pricing name',
                    'value'       => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'pricing_item' ) ),
                ),
                array(
                    'param_name'  => 'cost',
                    'type'        => 'textfield',
                    'heading'     => 'Pricing cost',
                    'value'       => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'pricing_item' ) ),
                ),
                array(
                    'param_name'  => 'currency',
                    'type'        => 'textfield',
                    'heading'     => 'Pricing currency',
                    'value'       => '$',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'pricing_item' ) ),
                ),
                array(
                    'param_name'  => 'label_name',
                    'type'        => 'textfield',
                    'heading'     => 'Category name',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'pricing_item' ) ),
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
                    'type'        => 'param_group',
                    'heading'     => __( 'Pricing params list', 'js_composer' ),
                    'param_name'  => 'pricing_params',
                    'value'       => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'pricing_item' ) ),
                    'params'      => array(
                        array(
                            'param_name'  => 'param_name',
                            'type'        => 'textfield',
                            'description' => '',
                            'heading'     => 'Param name',
                            'value'       => '',
                        ),
                        array(
                            'type'       => 'checkbox',
                            'heading'    => __( 'Visible as passive', 'js_composer' ),
                            'param_name' => 'param_passive',
                            'std'        => '',
                        ),
                    ),
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Select item as active', 'js_composer' ),
                    'param_name' => 'active_item',
                    'std'        => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'pricing_item' ) ),
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Add border', 'js_composer' ),
                    'param_name' => 'border_item',
                    'std'        => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'pricing_item' ) ),
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Add label?', 'js_composer' ),
                    'param_name' => 'label',
                    'std'        => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'pricing_item' ) ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Enter label text', 'js_composer' ),
                    'param_name' => 'label_text',
                    'dependency' => array(
                        'element' => 'label',
                        'not_empty' => true,
                    ),
                ),
                array(
                    'type'        => 'param_group',
                    'heading'     => __( 'Pricing List', 'js_composer' ),
                    'param_name'  => 'pricing_list',
                    'value'       => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'pricing_list' ) ),
                    'params'      => array(
                        array(
                            'param_name'  => 'title',
                            'type'        => 'textfield',
                            'description' => '',
                            'heading'     => 'Pricing title',
                            'value'       => '',
                        ),
                        array(
                            'type'        => 'param_group',
                            'heading'     => __( 'Pricing Item', 'js_composer' ),
                            'param_name'  => 'pricing_item',
                            'value'       => '',
                            'params'      => array(
                                array(
                                    'param_name'  => 'item_title',
                                    'type'        => 'textfield',
                                    'description' => '',
                                    'heading'     => 'Pricing item title',
                                    'value'       => '',
                                ),
                                array(
                                    'param_name'  => 'item_price',
                                    'type'        => 'textfield',
                                    'description' => '',
                                    'heading'     => 'Pricing item cost and currency',
                                    'value'       => '',
                                ),
                                array(
                                    'param_name'  => 'item_list',
                                    'type'        => 'textarea',
                                    'description' => 'Please, enter each param from the new line',
                                    'heading'     => 'Pricing item params',
                                    'value'       => '',
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
                                        esc_html__( 'Link style', 'js_composer' ) => 'a-btn-6',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Remove fade-in-up animation on load?', 'js_composer' ),
                    'param_name' => 'animation_fade',
                    'std'        => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'pricing_list' ) ),
                ),
				array(
					'type'       => 'css_editor',
					'heading'    => 'CSS box',
					'param_name' => 'css',
					'group'      => 'Design options',
				),
			)
			//end params
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_vc_pricing extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
                'style' => 'pricing_list',
				'title'       => '',
				'description'    => '',
				'name'        => '',
				'currency'    => '$',
				'cost'       => '',
				'label_name'  => '',
				'animation_fade'    => '',
                'button'     => '',
                'btn_style'  => 'a-btn',
				'el_class'    => '',
				'css'         => '',
                'pricing_list'=> array(),
                'pricing_params'=> array(),
                'label'       => '',
                'label_text'  => '',
                'border_item'  => '',
                'active_item'  => '',
			), $atts ) );


			// include needed stylesheets
			if ( ! in_array( "pixxy_pricing-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_pricing-css";
			}
			$this->enqueueCss();

            if ( ! in_array( "pixxy_pricing", self::$js_scripts ) ) {
                self::$js_scripts[] = "pixxy_pricing";
            }
            $this->enqueueJs();

			/* get custum css as class*/
			// el class
			$css_classes = array(
				$this->getExtraClass( $el_class )
			);

			$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts );

			// custum css
			$css_class .= vc_shortcode_custom_css_class( $css, ' ' );

			// custum class
			$css_class .= ( ! empty( $css_class ) ) ? ' ' . $css_class : '';

            if ($style == 'pricing_list') {
                $pricing_list = (array) vc_param_group_parse_atts( $pricing_list );
                $item_count = 0;

                $animation_parent = isset( $animation_fade ) && ! empty( $animation_fade ) ? '' : 'js-animation';
                $animation_child = isset( $animation_fade ) && ! empty( $animation_fade ) ? '' : 'js-animation-item';
                $animation_content = isset( $animation_fade ) && ! empty( $animation_fade ) ? '' : 'js-animation-content';

                foreach ($pricing_list as $pricing) {
                    $pricing = (array) vc_param_group_parse_atts( $pricing['pricing_item'] );
                    if (count($pricing) > $item_count) {
                        $item_count = count($pricing);
                    }
                }

                if ($item_count < 2) {
                    $item_class = '';
                } elseif ($item_count == 2) {
                    $item_class = 'two-column';
                } elseif ($item_count == 3) {
                    $item_class = 'three-column';
                } else {
                    $item_class = 'more-column';
                }
            }

			// start output
			ob_start(); ?>
                <?php if ($style == 'pricing_list') { ?>
                    <div class="row">
                        <div class="pricing <?php echo esc_attr( $css_class ) . ' ' . esc_attr($item_class); ?> js-tab-wrap">
                            <div class="pricing-heading <?php echo esc_attr( $animation_parent ); ?>">
                                <div class="js-heading">
                                    <?php if ( ! empty( $title ) ) : ?>
                                        <h3 class="title title--delimiter <?php echo esc_attr($animation_child); ?>">
                                            <span class="<?php echo esc_attr($animation_content); ?>">
                                                <?php echo esc_html( $title ); ?>
                                            </span>
                                        </h3>
                                    <?php endif; ?>

                                    <?php if (!empty($pricing_list)) { ?>
                                        <div class="<?php echo esc_attr($animation_child); ?>">
                                            <div class="<?php echo esc_attr($animation_content); ?>">
                                                <div class="pricing-tab">
                                                    <?php foreach ($pricing_list as $key => $pricing) {
                                                        $active = ($key == 0) ? 'active' : ''; ?>
                                                        <div class="pricing-tab-item js-tab-link <?php echo esc_attr( $active ); ?>"><a href=""><?php echo esc_html( $pricing['title'] ); ?></a></div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if ( ! empty( $description ) ) : ?>
                                        <div class="description <?php echo esc_attr($animation_child); ?>">
                                            <div class="<?php echo esc_attr($animation_content); ?>"><?php echo wp_kses_post( $description ); ?></div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ( ! empty( $button ) ) {
                                        $url = vc_build_link( $button );
                                    } else {
                                        $url['url']    = '#';
                                        $url['title']  = 'title';
                                        $url['target'] = '_self';
                                    }
                                    if ( ! empty( $button ) ) { ?>
                                        <div class="<?php echo esc_attr($animation_child); ?>">
                                            <div class="<?php echo esc_attr($animation_content); ?>">
                                                <div class="btn-wrap">
                                                    <a href="<?php echo esc_attr( $url['url'] ); ?>"
                                                        class="<?php echo esc_attr( $btn_style ); ?>"
                                                        target="<?php echo esc_attr( $url['target'] ); ?>"><?php echo esc_html( $url['title'] ); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php if (!empty($pricing_list)) { ?>
                                <div class="pricing-content">
                                    <?php foreach ($pricing_list as $key => $pricing) {
                                        $active = ($key == 0) ? 'active' : ''; ?>
                                        <div class="pricing-item-list js-tab-item <?php echo esc_attr( $active ); ?>">
                                            <?php
                                            $pricing = (array) vc_param_group_parse_atts( $pricing['pricing_item'] );

                                            $item_count = count($pricing);
                                            if ($item_count < 2) {
                                                $item_class = '';
                                            } elseif ($item_count == 2) {
                                                $item_class = 'two-column';
                                            } elseif ($item_count == 3) {
                                                $item_class = 'three-column';
                                            } elseif ($item_count > 3 && $item_count % 4 == 1 || $item_count % 4 == 2) {
                                                $item_class = 'more-column three-column';
                                            } elseif ($item_count > 3 && $item_count % 4 == 0 || $item_count % 4 == 3) {
                                                $item_class = 'more-column four-column';
                                            }

                                            foreach ( $pricing as $key => $pricing_item) {

                                                if ($item_count == '3') {
                                                    $pricing_item_big = ($key % 2 == 1) ? 'large' : '';
                                                } elseif ($item_count == '4') {
                                                    $pricing_item_big = ($key % 4 == 0 || $key % 4 == 2) ? 'large' : '';
                                                } else {
                                                    $pricing_item_big = ($key % 2 == 0) ? 'large' : '';
                                                }
                                                ?>
                                                <div class="pricing-item <?php echo esc_attr( $pricing_item_big ) . ' ' . esc_attr($item_class); ?>">
                                                    <div class="pricing-item-title"><?php echo esc_html( $pricing_item['item_title'] ); ?></div>
                                                    <div class="pricing-item-price"><?php echo esc_html( $pricing_item['item_price'] ); ?></div>
                                                    <div class="pricing-item-params-list">
                                                        <?php
                                                        $pricing_params = wpautop($pricing_item['item_list']);
                                                        $pricing_params = substr($pricing_params, 3, -5);
                                                        $pricing_params = preg_split('/<br[^>]*>/i', $pricing_params);
                                                        foreach ($pricing_params as $pricing_param) { ?>
                                                            <p><?php echo esc_html( $pricing_param ); ?></p>
                                                        <?php }?>
                                                    </div>
                                                    <?php if ( ! empty( $pricing_item['button'] ) ) {
                                                        $url = vc_build_link( $pricing_item['button'] );
                                                    } else {
                                                        $url['url']    = '#';
                                                        $url['title']  = 'title';
                                                        $url['target'] = '_self';
                                                    }
                                                    if ( ! empty( $pricing_item['button'] ) ) { ?>
                                                        <div class="btn-wrap">
                                                            <a href="<?php echo esc_attr( $url['url'] ); ?>"
                                                               class="<?php echo esc_attr( $pricing_item['btn_style'] ); ?>"
                                                               target="<?php echo esc_attr( $url['target'] ); ?>"><?php echo esc_html( $url['title'] ); ?></a>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } elseif ($style == 'pricing_item'){
                    $active_item = ($active_item) ? 'active' : '';
                    $border_item = ($border_item) ? 'border' : '';
                    ?>
                    <div class="pricing-simple-item <?php echo esc_attr($active_item . ' ' . $border_item); ?>">
                        <?php if ($label && !empty($label_text) && isset($label_text)) : ?>
                            <div class="pricing-simple-label"><?php echo esc_html($label_text); ?></div>
                        <?php endif; ?>
                        <div class="pricing-simple-head">
                            <?php if ($cost  && !empty($cost)) : ?>
                                <div class="pricing-simple-cost">
                                    <?php echo esc_html($cost); ?>
                                    <?php if ($currency  && !empty($currency)) : ?>
                                        <span><?php echo esc_html($currency); ?></span>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <div class="pricing-simple-labels">
                                <?php if (isset($label_name) && !empty($label_name)) { ?>
                                    <span class="pricing-simple-lab"><?php echo esc_html($label_name); ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="pricing-simple-content">
                            <h5 class="pricing-simple-title"><?php echo esc_html($name); ?></h5>
                            <?php if (!empty($pricing_params) && $pricing_params):
                                $pricing_params = (array) vc_param_group_parse_atts( $pricing_params );
                                ?>
                                <div class="pricing-simple-params">
                                    <?php foreach ($pricing_params as $pricing_param):
                                        if ($pricing_param['param_name'] && !empty($pricing_param['param_name'])) :
                                            $pricing_param_pass = isset($pricing_param['param_passive']) && $pricing_param['param_passive'] ? 'passive' : '';
                                            ?>
                                            <p class="<?php echo esc_attr($pricing_param_pass); ?>"><?php echo esc_html($pricing_param['param_name']); ?></p>
                                        <?php endif;
                                    endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <?php if ( ! empty( $button ) ) {
                                $url = vc_build_link( $button );
                            } else {
                                $url['url']    = '#';
                                $url['title']  = 'title';
                                $url['target'] = '_self';
                            }
                            if ( ! empty( $button ) ) { ?>
                                <div class="btn-wrap">
                                    <a href="<?php echo esc_attr( $url['url'] ); ?>"
                                       class="<?php echo esc_attr( $btn_style ); ?>"
                                       target="<?php echo esc_attr( $url['target'] ); ?>"><?php echo esc_html( $url['title'] ); ?></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
			<?php
			// end output
			return ob_get_clean();
		}
	}
}
