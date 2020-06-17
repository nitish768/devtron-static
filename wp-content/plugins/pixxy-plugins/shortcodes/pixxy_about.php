<?php

//About shortcode

if ( function_exists( 'vc_map' ) ) {

    $url = EF_URL . '/admin/assets/images/shortcodes_images/about/';
	$url_btn = EF_URL . '/admin/assets/images/shortcodes_images/buttons/';

	vc_map(
		array(
			'name'        => esc_html__( 'About', 'js_composer' ),
			'base'        => 'pixxy_about',
			'description' => __( 'Section with image, text and button', 'js_composer' ),
			'category'    => __( 'Content', 'js_composer' ),
			'params'      => array(

				array(
					'type'       => 'select_preview',
					'param_name' => 'style',
					'heading'    => esc_html__( 'Style', 'js_composer' ),
					'value'      => array(
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
					'heading'    => __( 'Section image', 'js_composer' ),
					'param_name' => 'image1',
				),
				array(
					'type'       => 'attach_image',
					'heading'    => __( 'Section addition image', 'js_composer' ),
					'param_name' => 'image2',
				),
				array(
					'type'       => 'textarea',
					'heading'    => __( 'Title', 'js_composer' ),
					'param_name' => 'title',
				),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Background title', 'js_composer' ),
                    'param_name' => 'bg_title',
                ),
                array(
                    'type'       => 'textarea_html',
                    'heading'    => __( 'Description', 'js_composer' ),
                    'param_name' => 'content',
                ),
				array(
					'type'       => 'vc_link',
					'heading'    => __( 'Button', 'js_composer' ),
					'param_name' => 'button',
				),
				array (
					'type' => 'select_preview',
					'description' => '',
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
			),

			//end params
		)
	);
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pixxy_about extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'style'     => 'with_images',
				'title'     => '',
				'bg_title'  => '',
                'image1'    => '',
                'image2'    => '',
                'button'    => '',
                'section_padding'    => '',
                'btn_icon'  => '',
                'btn_style' => '',
            ), $atts ) );

			// include needed stylesheets
			if ( ! in_array( "pixxy_about-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_about-css";
			}
			$this->enqueueCss();


			$btn_style = isset( $btn_style ) && ! empty( $btn_style ) ? $btn_style : 'a-btn';
			$btn_icon = ($btn_icon) ? '<i class="ion-arrow-right-c"></i>' : '';
            $section_padding = ($section_padding) ? 'section-padd' : '';
			// start output
			ob_start();

			if ($style == 'with_images') {  ?>
                <div class="about-section <?php echo esc_attr( $style . ' ' . $section_padding ); ?>">
                    <div class="about-row">
                        <?php if (!empty($image1)) { ?>
                            <div class="about-image-col">
                                <div class="about-image">
                                    <?php
                                    $image1_alt = ( ! empty( $image1 ) && is_numeric( $image1 ) ) ? get_post_meta( $image1, '_wp_attachment_image_alt', true) : '';

                                    $image1 =  ( ! empty( $image1 ) && is_numeric( $image1 ) ) ? wp_get_attachment_url( $image1 ) : '';
                                    if ($image1) :
                                        echo pixxy_the_lazy_load_flter( $image1, array(
                                            'class' => 's-img-switch',
                                            'alt'   => $image1_alt
                                        ) );
                                    endif; ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if (!empty($image2)) { ?>
                            <div class="about-image-col">
                                <div class="about-image">
                                    <?php
                                    $image2_alt = ( ! empty( $image2 ) && is_numeric( $image2 ) ) ? get_post_meta( $image2, '_wp_attachment_image_alt', true) : '';

                                    $image2 =  ( ! empty( $image2 ) && is_numeric( $image2 ) ) ? wp_get_attachment_url( $image2 ) : '';
                                    if ($image2) :
                                        echo pixxy_the_lazy_load_flter( $image2, array(
                                            'class' => 's-img-switch',
                                            'alt'   => $image2_alt
                                        ) );
                                    endif; ?>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="content-wrap">
                            <div class="content">
                                <?php if ( ! empty( $title ) ) { ?>
                                    <h2 class="title"><?php echo wp_kses_post( $title ); ?></h2>
                                <?php }
                                if ( ! empty( $content ) ) { ?>
                                    <div class="description"><?php echo wp_kses_post( $content ); ?></div>
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
                                <?php if ( ! empty( $bg_title ) ) { ?>
                                    <div class="bg-title"><?php echo wp_kses_post( $bg_title ); ?></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
			<?php }

			return ob_get_clean();
		}
	}
}