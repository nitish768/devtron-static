<?php

//Portfolio list shortcode

if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/portfolio_list/';
	$url_btn = EF_URL . '/admin/assets/images/shortcodes_images/buttons/';
	vc_map(
		array(
			'name'        => __( 'Portfolio list', 'js_composer' ),
			'base'        => 'pixxy_portfolio_list',
			'description' => __( 'List of portfolio items', 'js_composer' ),
			'category'    => __( 'Content', 'js_composer' ),
			'params'      => array(
                array(
                    'type'       => 'select_preview',
                    'param_name' => 'style',
                    'heading'    => esc_html__( 'Style', 'js_composer' ),
                    'value'      => array(
                        array(
                            'label' => esc_html__( 'Parallax Showcase', 'js_composer' ),
                            'value' => 'parallax_showcase',
                            'image' => $url . 'portfolio-list-parallax-showcase.jpg'
                        ),
                    ),
                    'admin_label' => true,
                    'save_always' => true,
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => esc_html__( 'Enable parallax on mobile devices?', 'js_composer' ),
                    'param_name' => 'parallax_mobile',
                    'std'        => '',
                ),
				array(
					'type'       => 'dropdown',
					'heading'    => 'Image original size',
					'param_name' => 'image_original_size',
					'value'      => array_merge( array( 'full' ), get_intermediate_image_sizes() )
				),
				array(
					'type'        => 'vc_efa_chosen',
					'heading'     => __( 'Select Categories', 'js_composer' ),
					'param_name'  => 'cats',
					'placeholder' => __( 'Select category', 'js_composer' ),
					'value'       => pixxy_element_values( 'categories', array(
						'sort_order' => 'ASC',
						'taxonomy'   => 'portfolio-category',
						'hide_empty' => false,
					) ),
					'std'         => '',
				),
				array(
					'type'        => 'dropdown',
					'heading'     => __( 'Order by', 'js_composer' ),
					'param_name'  => 'orderby',
					'value'       => array(
						'',
						__( 'Date', 'js_composer' )          => 'date',
						__( 'ID', 'js_composer' )            => 'ID',
						__( 'Author', 'js_composer' )        => 'author',
						__( 'Title', 'js_composer' )         => 'title',
						__( 'Modified', 'js_composer' )      => 'modified',
						__( 'Random', 'js_composer' )        => 'rand',
						__( 'Comment count', 'js_composer' ) => 'comment_count'
					),
					'description' => sprintf( __( 'Select how to sort retrieved posts. More at %s.', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' )
				),
				array(
					'type'        => 'dropdown',
					'heading'     => __( 'Sort order', 'js_composer' ),
					'param_name'  => 'order',
					'value'       => array(
						__( 'Descending', 'js_composer' ) => 'DESC',
						__( 'Ascending', 'js_composer' )  => 'ASC',
					),
					'description' => sprintf( __( 'Select ascending or descending order. More at %s.', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' )
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Count items', 'js_composer' ),
					'param_name' => 'count',
				),
				array(
					'type'       => 'dropdown',
					'heading'    => 'Linked to detail page',
					'param_name' => 'linked',
					'value'      => array(
						'Yes'  => 'yes',
						'None' => 'none'
					)
				),
                array(
                    'type'       => 'dropdown',
                    'heading'    => 'Open link in a new tab?',
                    'param_name' => 'blank',
                    'value'      => array(
                        'None' => 'none',
                        'Yes'  => 'yes'
                    ),
                ),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Text for button', 'js_composer' ),
					'param_name'  => 'btn_text',
					'description' => __( 'By default - "See more".', 'js_composer' ),
					'dependency' => array(
					        'element' => 'style',
                            'value' => array(
                                'parallax_showcase'
                            )
                    )
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
					'dependency' => array(
					        'element' => 'style',
                            'value' => array(
                                'parallax_showcase'
                            )
                    )
				),
			),

			//end params
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pixxy_portfolio_list extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'cats'                => '',
				'btn_style'           => 'a-btn',
				'image_original_size' => 'full',
				'linked'              => 'yes',
				'blank'               => 'none',
				'btn_text'            => 'See more',
				'style'               => 'parallax_showcase',
				'count'               => '',
				'orderby'             => '',
				'order'               => 'date',
                'parallax_mobile'     => ''

			), $atts ) );

			if ( ! in_array( "pixxy_anime", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_anime";
			}

			$this->enqueueJs();

			// include needed stylesheets
			if ( ! in_array( "pixxy_portfolio_list-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_portfolio_list-css";
			}
			$this->enqueueCss();

			$btn_text  = isset( $btn_text ) && ! empty( $btn_text ) ? $btn_text : 'See more';

			// base args
			$args = array(
				'post_type'      => 'portfolio',
				'posts_per_page' => ( ! empty( $count ) && is_numeric( $count ) ) ? $count : 9,
				'paged'          => ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
			);

			// Order posts
			if ( null !== $orderby ) {
				$args['orderby'] = $orderby;
			}
			$args['order'] = $order;

			// category
			if ( ! empty( $cats ) ) {

				$term_array = explode( ',', $cats );
				$cats       = array();

				foreach ( $term_array as $term_slug ) {
					$term_info = get_term_by( 'slug', $term_slug, 'portfolio-category' );
					$cats[]    = $term_info->term_id;
				}

				$cats              = implode( ',', $cats );
				$args['tax_query'] = array(
					array(
						'taxonomy' => 'portfolio-category',
						'field'    => 'term_id',
						'terms'    => explode( ',', $cats ),
					)
				);
			}

			$counter = 0;

            $posts = new WP_Query( $args );

            wp_localize_script(
				'pixxy_main-js',
				'load_more_post',
				array(
					'ajaxurl'   => admin_url( 'admin-ajax.php' ),
					'startPage' => $args['paged'],
					'maxPage'   => $posts->max_num_pages,
					'nextLink'  => next_posts( 0, false )
				)
			);

			ob_start();
			if($style == 'parallax_showcase') { ?>
                <div class="parallax-showcase-wrapper">
					<?php if ( $posts->have_posts() ) {
						while ( $posts->have_posts() ) :
							$posts->the_post();

							$portfolio_meta = get_post_meta( get_the_ID(), 'pixxy_portfolio_options', true );
							$images         = explode( ',', $portfolio_meta['slider'] );

							$link = get_the_permalink();

							if ( $linked == 'none' && ! empty( $portfolio_meta['ext_link'] ) ) {
								$link   = $portfolio_meta['ext_link'];
							}

							if ( $blank == 'none' ) {
								$target = '_self';
							} elseif ( $blank == 'yes' ) {
								$target = '_blank';
							}

							if ( ! get_post_thumbnail_id( $posts->ID ) ) {
								$url      = ( ! empty( $images[0] ) && is_numeric( $images[0] ) ) ? wp_get_attachment_image_src( $images[0], $image_original_size ) : '';
								$url_main = $url[0];
								$image_alt = ( ! empty( $images[0] ) && is_numeric( $images[0] ) ) ? get_post_meta( $images[0], '_wp_attachment_image_alt', true) : '';
							} else {
								$image_id = get_post_thumbnail_id( $posts->ID );
								$image    = ( is_numeric( $image_id ) && ! empty( $image_id ) ) ? wp_get_attachment_image_src( $image_id, $image_original_size ) : '';
								$url_main = $image[0];
								$image_alt = ( ! empty( $image_id ) && is_numeric( $image_id ) ) ? get_post_meta( $image_id, '_wp_attachment_image_alt', true) : '';
							}

                            $parallaxMobile = ($parallax_mobile) ? ' data-ios-disabled="false" data-android-disabled="false"' : '';
							$parallaxClass = ( $counter % 2 == 0 ) ? '' : 'parallax-window';
							$parallaxAttr = ( $counter % 2 == 0 ) ? '' : 'data-parallax="scroll" data-position-Y="top"
                                            data-image-src="' . esc_url($url_main) . '" data-bleed="500" data-overScrollFix="true"' . $parallaxMobile; ?>

                            <div class="parallax-showcase-item <?php echo esc_attr($parallaxClass); ?>" <?php echo $parallaxAttr; ?>>
								<?php if($counter % 2 == 0){ ?>
                                    <img src="<?php echo esc_url( $url_main ); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="s-img-switch">
								<?php } ?>
                                <div class="parallax-showcase-content">
									<?php the_title( '<div class="title">', '</div>' ); ?>
                                    <div class="desc">
										<?php echo get_the_excerpt(); ?>
                                    </div>
                                    <a href="<?php echo esc_url( $link ); ?>" class="<?php echo esc_attr($btn_style); ?>"
                                       target="<?php echo esc_attr( $target ); ?>"><?php echo esc_html( $btn_text ); ?></a>
                                </div>
                            </div>
							<?php
							$counter ++;
						endwhile;
					} ?>
                </div>
			<?php }


			wp_reset_postdata();

			return ob_get_clean();


		}
	}
}

