<?php

//Contacts shortcode

if ( function_exists( 'vc_map' ) ) {
	$url = EF_URL . '/admin/assets/images/shortcodes_images/contacts/';
	$url_btn = EF_URL . '/admin/assets/images/shortcodes_images/buttons/';

	vc_map(
		array(
			'name'        => __( 'Contacts', 'js_composer' ),
			'base'        => 'pixxy_contacts',
			'description' => __( 'Contacts info', 'js_composer' ),
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
		                    'label' => esc_html__( 'Simple', 'js_composer' ),
		                    'image' => $url . 'simple.jpg'
	                    ),
	                    array(
		                    'value' => 'modern',
		                    'label' => esc_html__( 'Modern', 'js_composer' ),
		                    'image' => $url . 'modern.jpg'
	                    ),
	                    array(
		                    'value' => 'info_with_form',
		                    'label' => esc_html__( 'Info with form', 'js_composer' ),
		                    'image' => $url . 'info_with_form.jpg'
	                    ),
	                    array(
		                    'value' => 'simple_form',
		                    'label' => esc_html__( 'Simple form', 'js_composer' ),
		                    'image' => $url . 'simple_form.jpg'
	                    ),
	                    array(
		                    'value' => 'info_list',
		                    'label' => esc_html__( 'Info list', 'js_composer' ),
		                    'image' => $url . 'info_list.jpg'
	                    ),
	                    array(
		                    'value' => 'style_6',
		                    'label' => esc_html__( 'Classic', 'js_composer' ),
		                    'image' => $url . 'style_6.jpg'
	                    ),
                    ),
                    'admin_label' => true,
                    'save_always' => true,
                ),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Subtitle', 'js_composer' ),
					'param_name' => 'subtitle',
					'value'      => '',
					'dependency' => array( 'element' => 'style', 'value' => array( 'info_with_form' , 'simple_form' ) )
                ),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Title', 'js_composer' ),
					'param_name' => 'title',
					'value'      => '',
					'description' => 'For modern style title color is white.',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple', 'modern', 'info_with_form' , 'simple_form' ) )
                ),
				array(
					'type'       => 'textarea_html',
					'heading'    => __( 'Description', 'js_composer' ),
					'param_name' => 'content',
					'description' => 'For modern style description color is white.',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple', 'modern', 'info_with_form' , 'simple_form' ) )
                ),
                array (
                    'param_name' => 'content_pos',
                    'type' => 'dropdown',
                    'heading' => 'Description position',
                    'value' => array (
                        esc_html__( 'Under form', 'js_composer' ) => 'under_form',
                        esc_html__( 'Above form', 'js_composer' ) => 'above_form',
                    ),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple' ) )
                ),
                array (
                    'param_name' => 'content_size',
                    'type' => 'dropdown',
                    'heading' => 'Description size',
                    'value' => array (
                        esc_html__( 'Middle', 'js_composer' ) => '',
                        esc_html__( 'Big', 'js_composer' ) => 'description--big',
                    ),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple' ) )
                ),
				array(
					'type'       => 'param_group',
					'heading'    => __( 'Address', 'js_composer' ),
					'param_name' => 'address_info',
					'value'      => urlencode( json_encode( array() ) ),
					'params'     => array(
						array(
							'type'       => 'textarea',
							'heading'    => __( 'Add your address', 'js_composer' ),
							'param_name' => 'address',
						),
					),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'info_with_form' ) ),
                ),
                array(
                    'type'       => 'param_group',
                    'heading'    => __( 'Phone', 'js_composer' ),
                    'param_name' => 'phone_info',
                    'value'      => urlencode( json_encode( array() ) ),
                    'params'     => array(
                        array(
                            'type'       => 'textfield',
                            'heading'    => __( 'Add your phone', 'js_composer' ),
                            'param_name' => 'phone',
                            'value'      => ''
                        ),
                        array(
                            'type'       => 'textfield',
                            'heading'    => __( 'URL for link', 'js_composer' ),
                            'param_name' => 'url',
                            'value'      => ''
                        ),
                    ),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'info_with_form' ) ),
                ),
				array(
					'type'       => 'param_group',
					'heading'    => __( 'Email', 'js_composer' ),
					'param_name' => 'email_info',
					'value'      => urlencode( json_encode( array() ) ),
					'params'     => array(
						array(
							'type'       => 'textfield',
							'heading'    => __( 'Add your email', 'js_composer' ),
							'param_name' => 'email',
							'value'      => ''
						),
                        array(
                            'type'       => 'textfield',
                            'heading'    => __( 'URL for link', 'js_composer' ),
                            'param_name' => 'url',
                            'value'      => ''
                        ),
					),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'info_with_form' ) ),
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Contact form', 'js_composer' ),
					'param_name'  => 'form',
					'description' => __( 'Add your form id from shortcode Contact Form 7 Plugin.', 'js_composer' ),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple', 'modern', 'info_with_form' , 'simple_form', 'style_6' ) )
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Add shadows to form?', 'js_composer' ),
                    'param_name' => 'shadows',
                    'std'        => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple' ) ),
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Remove border from form?', 'js_composer' ),
                    'param_name' => 'borders',
                    'std'        => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple' ) ),
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Remove padding from form?', 'js_composer' ),
                    'param_name' => 'padding',
                    'std'        => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple', 'modern' ) ),
                ),
				array(
					'type'       => 'select_preview',
					'heading'    => __( 'Button style for form', 'js_composer' ),
					'param_name' => 'btn_style',
					'value'      => array(
						array(
							'value' => 'a-btn-style-1',
							'label' => esc_html__( 'Default', 'js_composer' ),
							'image' => $url_btn . 'default.jpg'
						),
						array(
							'value' => 'a-btn-style-2',
							'label' => esc_html__( 'Dark', 'js_composer' ),
							'image' => $url_btn . 'dark.jpg'
						),
						array(
							'value' => 'a-btn-style-3',
							'label' => esc_html__( 'Light', 'js_composer' ),
							'image' => $url_btn . 'light.jpg'
						),
						array(
							'value' => 'a-btn-style-4',
							'label' => esc_html__( 'White', 'js_composer' ),
							'image' => $url_btn . 'white.jpg'
						),
						array(
							'value' => 'a-btn-style-5',
							'label' => esc_html__( 'Transparent', 'js_composer' ),
							'image' => $url_btn . 'transparent.jpg'
						),
						array(
							'value' => 'a-btn-style-6',
							'label' => esc_html__( 'Link style', 'js_composer' ),
							'image' => $url_btn . 'link.jpg'
						),
						array(
							'value' => 'a-btn-style-7',
							'label' => esc_html__( 'Gradient', 'js_composer' ),
							'image' => $url_btn . 'gradient.jpg'
						),
					),
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple', 'modern', 'info_with_form' , 'simple_form', 'style_6' ) ),
                    'admin_label' => true,
					'save_always' => true,
				),
                array(
                    'type'       => 'attach_image',
                    'heading'    => __( 'Background image', 'js_composer' ),
                    'param_name' => 'background_image',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple' ) )
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Add padding for section?', 'js_composer' ),
                    'param_name' => 'section_padding',
                    'std'        => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple' ) ),
                ),
				array(
					'type' => 'param_group',
					'heading' => __( 'Items', 'js_composer' ),
					'param_name' => 'items',
					'value' => '',
					'params' => array(
						array(
							'type' => 'iconpicker',
							'heading' => 'Select icon',
							'param_name'  => 'icon',
							'value'       => 'icon-arrow-1-circle-down',
							'settings'    => array(
								'emptyIcon'    => false,
								'type'         => 'info',
								'source'       => pixxy_simple_line_icons(),
								'iconsPerPage' => 4000,
							),
							'description' => __( 'Select icon from library.', 'js_composer' ),
						),
						array(
							'type'       => 'colorpicker',
							'heading'    => 'Icon color 1',
							'param_name' => 'icon_color_1',
						),
						array(
							'type'       => 'colorpicker',
							'heading'    => 'Icon color 2',
							'param_name' => 'icon_color_2',
						),
						array(
							'type' => 'param_group',
							'heading' => __( 'Info', 'js_composer' ),
							'param_name' => 'items_child',
							'value' => '',
							'params' => array(
                                array(
                                    'type'       => 'textfield',
                                    'heading'    => __( 'Title', 'js_composer' ),
                                    'param_name' => 'title',
                                ),
								array(
									'type'       => 'textfield',
									'heading'    => __( 'Phone', 'js_composer' ),
									'param_name' => 'phone'
								),
								array(
									'type'       => 'textfield',
									'heading'    => __( 'Text before phone', 'js_composer' ),
									'param_name' => 'before_phone'
								),
								array(
									'type'       => 'textfield',
									'heading'    => __( 'Email', 'js_composer' ),
									'param_name' => 'email'
								),
                                array(
                                    'type'       => 'textfield',
                                    'heading'    => __( 'Text before email', 'js_composer' ),
                                    'param_name' => 'before_email'
                                ),
								array(
									'type'       => 'textarea',
									'heading'    => __( 'Text', 'js_composer' ),
									'param_name' => 'text'
								),
                                array(
                                    'type'       => 'vc_link',
                                    'heading'    => __( 'Link/Button', 'js_composer' ),
                                    'param_name' => 'button',
                                ),
							),
						),
					),
					'dependency' => array( 'element' => 'style', 'value' => array('info_list') ),
				),
			),
			//end params
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pixxy_contacts extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'style'        => 'simple',
				'btn_style'    => 'a-btn-style-1',
				'form'         => '',
				'title'        => '',
				'subtitle'     => '',
				'background_image'   => '',
				'content_pos'  => 'under_form',
				'content_size' => '',
                'address_info' => array(),
				'email_info'   => array(),
				'phone_info'   => array(),
				'shadows'      => '',
				'borders'      => '',
				'padding'      => '',
				'section_padding' => '',
				'items'   => '',

			), $atts ) );

			if ( !in_array( "pixxy_contacts-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_contacts-css";
			}

            if ( ! in_array( "pixxy_headings-css", self::$css_scripts ) ) {
                self::$css_scripts[] = "pixxy_headings-css";
            }

			$this->enqueueCss();

			if ( !in_array( "pixxy_contacts-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_contacts-css";
			}
			$this->enqueueCss();


			// el class
			$url   = ( ! empty( $image ) && is_numeric( $image ) ) ? wp_get_attachment_image_src( $image, 'full' ) : '';
			$style = ($style == 'parallax_info' || $style == 'parallax_content' ) ? $style . ' full-height' : $style;

			if (isset($address_info) && !empty($address_info)) {
                $address_info = (array) vc_param_group_parse_atts( $address_info );
            }

			if (isset($email_info) && !empty($email_info)) {
                $email_info = (array) vc_param_group_parse_atts( $email_info );
            }

			if (isset($phone_info) && !empty($phone_info)) {
                $phone_info = (array) vc_param_group_parse_atts( $phone_info );
            }

            $shadows = ($shadows) ? 'shadows' : '';
            $borders = ($borders) ? 'no-borders' : '';
            $padding = ($padding) ? 'no-padd-form' : '';
            $section_padding = ($section_padding) ? 'section-padd' : '';

            $content_size = ($style == 'simple') ? $content_size : '';
            $content_pos = ($style == 'modern') ? 'under_form' : $content_pos;

            if ($style == 'simple') {
                if (!empty($background_image) && is_numeric( $background_image ) ) {
	                $image_alt = get_post_meta( $background_image , '_wp_attachment_image_alt', true);
                    $background_image = wp_get_attachment_url( $background_image );

                    $bg_class = 'with-bg';
                } else {
	                $image_alt = '';
                    $bg_class = '';
                }
            }else{
	            $bg_class = '';
            }

                // start output
            ob_start(); ?>

                <div class="contacts-info-wrap <?php echo esc_attr( $style . ' ' . $shadows . ' ' . $borders . ' ' . $padding . ' ' . $section_padding . ' ' . $bg_class ); ?>">
                    <?php if ( $style == 'simple' || $style == 'modern' ) {
                        if ($style == 'simple' && !empty($background_image)) {
                            echo pixxy_the_lazy_load_flter($background_image, array(
                                'class' => 's-img-switch',
                                'alt' => $image_alt
                            ));
                        } ?>
                        <div class="contacts-info">
                            <?php if ( ! empty( $title ) ) { ?>
                                <div class="headings-wrap">
                                    <div class="headings modern text-center">
                                        <h3 class="title"><?php echo wp_kses_post( $title ); ?></h3>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ( ! empty( $content ) && ($content_pos == 'above_form')) { ?>
                                <div class="contact-content <?php echo esc_attr($content_size); ?>">
                                    <?php echo wp_kses_post( $content ); ?>
                                </div>
                            <?php } ?>
                            <?php if ( ! empty( $form ) ) { ?>
                                <div class="form <?php echo esc_attr($btn_style); ?>"><?php echo do_shortcode( '[contact-form-7 id="' . esc_attr( $form ) . '"]' ); ?></div>
                            <?php } ?>
                            <?php if ( ! empty( $content ) && ($content_pos == 'under_form') ) { ?>
                                <div class="contact-content <?php echo esc_attr($content_size); ?>">
                                    <?php echo wp_kses_post( $content ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } elseif ( $style == 'info_with_form' || $style == 'simple_form' ) {
                        if ($style == 'info_with_form') {
                            $classInfo = ! empty( $form ) ? 'col-sm-6' : '';
                            $classForm = ! empty( $form ) ? 'col-sm-6' : '';
                        }else{
	                        $classInfo = '';
	                        $classForm = '';
                        } ?>

                        <div class="container no-padd">
                            <div class="row">
                                <div class="col-xs-12 <?php echo esc_attr( $classInfo ); ?>">
                                    <div class="content-wrap">
                                        <?php if ( ! empty( $subtitle ) ) { ?>
                                            <h5 class="subtitle"><?php echo wp_kses_post( $subtitle ); ?></h5>
                                        <?php } ?>
                                        <?php if ( ! empty( $title ) ) { ?>
                                            <h3 class="title"><?php echo wp_kses_post( $title ); ?></h3>
                                        <?php } ?>
                                        <?php if ( ! empty( $content ) ) { ?>
                                            <div class="contact-content">
                                                <?php echo wp_kses_post( $content ); ?>
                                            </div>
                                        <?php } ?>
                                        <?php if (( ! empty( $address_info ) || ! empty( $email_info ) || ! empty( $phone_info ) ) && $style == 'info_with_form') { ?>
                                            <div class="contact-list">
                                                <?php if ( ! empty( $address_info ) ) { ?>
                                                    <div class="contact-item contact-item--address">
                                                        <?php foreach ($address_info as $address) {
                                                            if(!empty($address['address'])){
	                                                            echo esc_html($address['address'] ) . '<br>';
                                                            }
                                                        } ?>
                                                    </div>
                                                <?php } ?>
                                                <?php if ( ! empty( $phone_info ) ) { ?>
                                                    <div class="contact-item contact-item--phone">
                                                        <?php foreach ($phone_info as $phone) {
                                                            if (!empty($phone['phone']) && isset($phone['phone'])) {
                                                                $phone_url = (!empty($phone['url'])) ? $phone['url'] : $phone['phone']; ?>
                                                                <a href="tel:<?php echo esc_attr($phone_url) ?>"><?php echo esc_html($phone['phone'] ); ?></a>
                                                            <?php }
                                                        } ?>
                                                    </div>
                                                <?php } ?>
                                                <?php if ( ! empty( $email_info ) ) { ?>
                                                    <div class="contact-item contact-item--email">
                                                        <?php foreach ($email_info as $email) {
                                                            if (!empty($email['email']) && isset($email['email'])) {
                                                                $email_url = (!empty($email['url'])) ? $email['url'] : $email['email']; ?>
                                                                <a href="mailto:<?php echo esc_attr($email_url) ?>"><?php echo esc_html($email['email'] ); ?></a>
                                                            <?php }
                                                        } ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-xs-12 <?php echo esc_attr( $classForm ); ?>">
                                    <?php if ( ! empty( $form ) ) { ?>
                                        <div class="form <?php echo esc_attr($btn_style); ?>"><?php echo do_shortcode( '[contact-form-7 id="' . esc_attr( $form ) . '"]' ); ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } elseif ( $style == 'info_list' ) {
                        if ( !empty($items) ) {
                            $items = (array) vc_param_group_parse_atts( $items );

                            foreach( $items as $item ) { ?>
                                <div class="item-wrapper">
                                    <?php if(!empty($item['icon'])){
                                        if (!empty($item['icon_color_1'])) {
                                            if (!empty($item['icon_color_2'])) {
                                                $colors = 'style="background-image: linear-gradient(41deg, '. $item['icon_color_1'] .',' . $item['icon_color_2'] . ')"';
                                            } else {
                                                $colors = 'style="background-image: linear-gradient(41deg, '. $item['icon_color_1'] .',' . $item['icon_color_1'] . ')"';
                                            }
                                        } else {
                                            if (!empty($item['icon_color_2'])) {
                                                $colors = 'style="background-image: linear-gradient(41deg, '. $item['icon_color_2'] .',' . $item['icon_color_2'] . ')"';
                                            } else {
                                                $colors = '';
                                            }
                                        } ?>
                                        <i class="<?php echo esc_attr( $item['icon'] ); ?>" <?php echo $colors; ?>></i>
                                    <?php }

                                    if(!empty($item['items_child'])){
                                    $items_child = (array) vc_param_group_parse_atts( $item['items_child'] ); ?>
                                    <div class="flex-wrap">
                                        <?php  foreach ($items_child as $info){ ?>

                                            <?php if(!empty($info['title'])){ ?>
                                                <h5 class="title"><?php echo esc_html($info['title']); ?></h5>
                                            <?php }
                                            if(!empty($info['text'])){ ?>
                                                <div class="text"><?php echo wp_kses_post($info['text']); ?></div>
                                            <?php } if(!empty($info['phone'])){ ?>
                                                <div class="link">
                                                    <?php if(!empty($info['before_phone'])) { ?>
                                                        <span><?php echo esc_html($info['before_phone']); ?></span>
                                                    <?php } ?>
                                                    <a href="tel:<?php echo esc_attr($info['phone']); ?>"><?php echo esc_html($info['phone']); ?></a></div>
                                            <?php }
                                            if(!empty($info['email'])){ ?>
                                                <div class="link">
                                                    <?php if(!empty($info['before_email'])) { ?>
                                                        <span><?php echo esc_html($info['before_email']); ?></span>
                                                    <?php } ?>
                                                    <a href="mailto:<?php echo esc_attr($info['email']); ?>"><?php echo esc_html($info['email']); ?></a></div>
                                            <?php }
                                            if(!empty($info['button'])){
                                                $url = vc_build_link( $info['button'] );
                                                if (!empty($url['title'])) { ?>
                                                    <div class="button">
                                                        <a href="<?php echo esc_url( $url['url'] ); ?>" class="a-btn-6"
                                                           target="<?php echo esc_attr( $url['target'] ); ?>">
                                                            <?php echo esc_html( $url['title'] ); ?>
                                                            <i class="ion-arrow-right-c"></i>
                                                        </a>
                                                    </div>
                                                <?php }
                                            } ?>

                                        <?php }
                                        } ?>
                                    </div>
                                </div>
                                <?php

                            } // end foreach

                        }
	                } elseif ($style == 'style_6') { ?>
                        <?php if ( ! empty( $form ) ) { ?>
                            <div class="form <?php echo esc_attr($btn_style); ?>"><?php echo do_shortcode( '[contact-form-7 id="' . esc_attr( $form ) . '"]' ); ?></div>
                        <?php } ?>
                    <?php } ?>
                </div>

                <?php
                // end output
                return ob_get_clean();
            }

        }
}

