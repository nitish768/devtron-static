<?php

/* Init Visual Composer Map */
if ( function_exists( 'vc_map' ) ) {
	$url = EF_URL . '/admin/assets/images/shortcodes_images/products_slider/';

	vc_map( array(
			'name'        => __( 'Products Slider', 'js_composer' ),
			'base'        => 'pixxy_products_slider',
			'description' => __( 'This outputs list shows any of the post-type items', 'js_composer' ),
			'params'      => array(
				array(
					'type'       => 'select_preview',
					'heading'    => __( 'Style', 'js_composer' ),
					'param_name' => 'style',
					'value'      => array(
						array(
							'value' => 'vertical',
							'label' => esc_html__( 'Vertical', 'js_composer' ),
							'image' => $url . 'vertical.jpg'
						),
						array(
							'value' => 'tabs_sliders',
							'label' => esc_html__( 'Tabs slider', 'js_composer' ),
							'image' => $url . 'tabs_sliders.jpg'
						),
					),
					'admin_label' => true,
					'save_always' => true,
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Title', 'js_composer' ),
					'param_name' => 'title',
					'dependency' => array( 'element' => 'style', 'value' => 'tabs_sliders' )
				),
				array(
					'type'       => 'param_group',
					'heading'    => __( 'Socials', 'js_composer' ),
					'param_name' => 'socials',
					'value'      => '',
					'params'     => array(
						array(
							'type'       => 'iconpicker',
							'heading'    => 'Select icon',
							'param_name' => 'icon',
							'value'      => '',
						),
						array(
							'type'        => 'textfield',
							'heading'     => __( 'url', 'js_composer' ),
							'param_name'  => 'social_url',
							'value'       => '',
							'description' => __( 'Enter social link url.', 'js_composer' ),
						),
					),
					'dependency' => array( 'element' => 'style', 'value' => 'vertical' )
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Additional Link Text', 'js_composer' ),
					'param_name' => 'additional_text',
					'value'      => '',
					'dependency' => array( 'element' => 'style', 'value' => 'vertical' )
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Additional Link URL', 'js_composer' ),
					'param_name' => 'additional_url',
					'value'      => '',
					'dependency' => array( 'element' => 'style', 'value' => 'vertical' )
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Email', 'js_composer' ),
					'param_name' => 'email',
					'value'      => '',
					'dependency' => array( 'element' => 'style', 'value' => 'vertical' )
				),
				array(
					'type'        => 'vc_efa_chosen',
					'heading'     => __( 'Select Categories', 'js_composer' ),
					'param_name'  => 'cats_product',
					'value'       => pixxy_element_values( 'categories', array(
						'sort_order' => 'ASC',
						'taxonomy'   => 'product_cat',
						'hide_empty' => false,
					) ),
					'std'         => '',
					'description' => __( 'You can choose specific categories for products, default is all categories', 'js_composer' ),

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
						__( 'Comment count', 'js_composer' ) => 'comment_count',
						__( 'Menu order', 'js_composer' )    => 'menu_order',
					),
					'description' => sprintf( __( 'Select how to sort retrieved posts. More at %s.', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
				),
				array(
					'type'        => 'dropdown',
					'heading'     => __( 'Sort order', 'js_composer' ),
					'param_name'  => 'order',
					'value'       => array(
						__( 'Descending', 'js_composer' ) => 'DESC',
						__( 'Ascending', 'js_composer' )  => 'ASC',
					),
					'description' => sprintf( __( 'Select ascending or descending order. More at %s.', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count posts', 'js_composer' ),
					'param_name'  => 'count',
					'description' => 'Only number'
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count of slides for large desktop', 'js_composer' ),
					'param_name'  => 'lg_count',
					'value'      => '4',
					'description' => __( 'Only numbers', 'js_composer' ),
					'dependency' => array( 'element' => 'style', 'value' => 'tabs_sliders' )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count of slides for middle desktop', 'js_composer' ),
					'param_name'  => 'md_count',
					'value'      => '3',
					'description' => __( 'Only numbers', 'js_composer' ),
					'dependency' => array( 'element' => 'style', 'value' => 'tabs_sliders' )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count of slides for tablet', 'js_composer' ),
					'param_name'  => 'sm_count',
					'value'      => '2',
					'description' => __( 'Only numbers', 'js_composer' ),
					'dependency' => array( 'element' => 'style', 'value' => 'tabs_sliders' )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count of slides for mobile', 'js_composer' ),
					'param_name'  => 'xs_count',
					'value'      => '1',
					'description' => __( 'Only numbers', 'js_composer' ),
					'dependency' => array( 'element' => 'style', 'value' => 'tabs_sliders' )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Autoplay (sec)', 'js_composer' ),
					'description' => __( '0 - off autoplay.', 'js_composer' ),
					'param_name'  => 'autoplay',
					'value'       => '0'
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Speed (milliseconds)', 'js_composer' ),
					'description' => __( 'Speed Animation. Default 1000 milliseconds', 'js_composer' ),
					'param_name'  => 'speed',
					'value'       => '500'
				),
				array(
					'type'       => 'checkbox',
					'heading'    => __( 'Loop', 'js_composer' ),
					'param_name' => 'loop',
					'value'      => '1',
				),
			),
		)
	);
}


/* Output */
if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_pixxy_products_slider extends WPBakeryShortCode {

		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'count'           => '',
				'speed'           => '',
				'style'           => 'vertical',
				'title'        => '',
				'bg_title'        => '',
				'lg_count'    	=> '',
				'md_count'   	=> '',
				'sm_count'      => '',
				'xs_count'      => '',
				'socials'         => '',
				'btn_style'       => '',
				'email'           => '',
				'additional_text' => '',
				'additional_url'  => '',
				'image'           => '',
				'autoplay'        => '',
				'loop'            => '',
				'orderby'         => 'date',
				'order'           => 'DESC',
				'cats_product'    => ''
			), $atts ) );


			// include needed stylesheets
			if ( ! in_array( "pixxy_product-slider-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_product-slider-css";
			}
			$this->enqueueCss();

			$lg_count    = !empty( $lg_count ) && is_numeric( $lg_count ) ? $lg_count : '4';
			$md_count    = !empty( $md_count ) && is_numeric( $md_count ) ? $md_count : '3';
			$sm_count    = !empty( $sm_count ) && is_numeric( $sm_count ) ? $sm_count : '2';
			$xs_count    = !empty( $xs_count ) && is_numeric( $xs_count ) ? $xs_count : '1';

			$responsive = 'data-responsive="responsive" data-add-slides="' . $lg_count . '" data-lg-slides="' . $lg_count . '" data-md-slides="' . $md_count . '" data-sm-slides="' . $sm_count . '" data-xs-slides="' . $xs_count . '"';


			$args = array(
				'post_type' => 'product',
				'order'     => $order,
			);

			if ( ! empty( $cats_product ) ) {
				$cats_product        = explode( ',', $cats_product );
				$args['tax_query'][] = array(
					'taxonomy' => 'product_cat',
					'terms'    => $cats_product,
					'field'    => 'slug',
				);
			}
			$orderby = null !== $orderby ? $orderby : 'date';
			$count =  ! empty( $count ) && is_numeric( $count ) ? $count : 100;
			// Order posts
			$args['orderby'] = $orderby;
			$args['posts_per_page'] = $count;


			$autoplay = is_numeric( $autoplay ) ? $autoplay * 1000 : 0;
			$speed    = is_numeric( $speed ) ? $speed : '500';
			$loop     = ! empty( $loop ) ? '1' : '0';

			$paginationType = $style == 'vertical' ? 'bullets' : 'custom';
			$btn_style      = isset( $btn_style ) && ! empty( $btn_style ) ? $btn_style : 'a-btn';
			$socials        = (array) vc_param_group_parse_atts( $socials );

			$data_type_slider = ( $style == 'vertical' ) ? 'vertical' : 'horizontal';
			$img_url          = ( ! empty( $image ) && is_numeric( $image ) ) ? wp_get_attachment_url( $image ) : '';

			$prod             = new WP_Query( $args );

			wp_localize_script(
				'pixxy_main-js',
				'products_load',
				array(
					'ajaxurl'   => admin_url( 'admin-ajax.php' ),
				)
			);

			ob_start();

			if ( $prod->have_posts() ) {
				if($style == 'vertical'){ ?>
					<div class="product-slider-wrapper">

						<?php if ( ! empty( $socials ) && $style == 'vertical' ) { ?>
							<div class="socials">
								<?php foreach ( $socials as $item ) { ?>
									<a href="<?php echo esc_url( $item['social_url'] ); ?>" target="_blank">
										<i class="fa <?php echo esc_attr( $item['icon'] ); ?>"></i>
									</a>
								<?php } ?>
							</div>
						<?php } ?>


						<?php if ( ! empty( $additional_text ) && ! empty( $additional_url ) ) { ?>
							<a href="<?php echo esc_url( $additional_url ); ?>" class="additional-link">
								<?php echo esc_html( $additional_text ); ?>
							</a>
						<?php } ?>

						<?php if ( ! empty( $email ) ) { ?>
							<a href="mailto:<?php echo esc_attr( $email ); ?>"
							   class="additional-email"><?php echo esc_html( $email ); ?></a>
						<?php } ?>

						<div class="swiper-container pixxy-product-swiper full-height-window-hard js-change-color" data-mouse="0"
						     data-autoplay="<?php echo esc_attr( $autoplay ); ?>"
						     data-loop="<?php echo esc_attr( $loop ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>"
						     data-space="0" data-pagination-type="<?php echo esc_attr( $paginationType ); ?>"
						     data-mode="<?php echo esc_attr( $data_type_slider ); ?>">
							<div class="swiper-wrapper">

								<?php while ( $prod->have_posts() ) : $prod->the_post();

									global $post;

									$product_meta = get_post_meta($post->ID, 'pixxy_product_options');
									$product_slider = get_post_meta($post->ID, 'pixxy_product_slider');
									$bgColor = ! empty( $product_slider[0]['pixxy_slider_background-color'] ) ? $product_slider[0]['pixxy_slider_background-color'] : 'transparent';
									$textColor = ! empty( $product_slider[0]['pixxy_slider_content'] ) ? $product_slider[0]['pixxy_slider_content'] : '';
									$btnColor = ! empty( $product_slider[0]['pixxy_slider_button'] ) ? $product_slider[0]['pixxy_slider_button'] : '';
									?>

									<div class="swiper-slide" style="background-color: <?php echo $bgColor; ?>;" <?php if( ! empty( $textColor ) ) { echo 'data-content-color="' . $textColor . '"'; } ?>>
                                        <?php if ( ! empty( $product_slider[0]['pixxy_slider_background-image'] ) ) {
                                            echo pixxy_the_lazy_load_flter( $product_slider[0]['pixxy_slider_background-image'],
                                            array(
                                                'class' => 's-img-switch',
                                                'alt' => ''
                                                )
                                            );
                                        } ?>

										<?php if ( ! empty( $bg_title ) ) { ?>
                                            <div class="bg-title">
												<?php echo $product_slider[0]['pixxy_slider_label']; ?>
                                            </div>
										<?php } ?>

										<div class="pixxy-prod-list-image">

											<div class="info">
												<div class="container">
													<div class="title"><?php do_action( 'woocommerce_shop_loop_item_title' ); ?></div>
													<?php if(isset($product_meta[0]['pixxy_additional_text']) && !empty($product_meta[0]['pixxy_additional_text'])){ ?>
														<div class="prod-descr">
															<?php echo wp_kses_post($product_meta[0]['pixxy_additional_text']); ?>
														</div>
													<?php } ?>

													<?php $image_size = apply_filters( 'single_product_archive_thumbnail_size', 'shop_catalog' );

													if ( has_post_thumbnail() ) {
														$props = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
														echo get_the_post_thumbnail( $post->ID, 'full', array(
															'title' => $props['title'],
															'alt'   => $props['alt'],
															'class' => '',
														) );
													} elseif ( wc_placeholder_img_src() ) {
														echo wc_placeholder_img( $image_size );
													} ?>

													<div class="btn-wrap <?php if( ! empty( $btnColor ) ) { echo $btnColor; } ?>">
														<a href="<?php the_permalink(); ?>"
														   class="<?php echo esc_attr( $btn_style ); ?>">
															<?php esc_html_e( 'Shop Now', 'pixxy' ); ?>
                                                            <i class="ion-arrow-right-c"></i>
														</a>
													</div>
												</div>
											</div>
										</div>

									</div>

									<?php
								endwhile; ?>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				<?php }
				elseif($style == 'tabs_sliders'){ ?>
					<div class="product-tabs-wrapper">
						<div class="product-filter-wrap">
							<?php if ( ! empty( $title ) ) { ?>
								<div class="title">
									<?php echo esc_html( $title ); ?>
								</div>
							<?php } ?>

							<div class="filters" data-order="<?php echo esc_attr($order); ?>" data-orderby="<?php echo esc_attr($orderby); ?>" data-count="<?php echo esc_attr($count); ?>">
								<ul>
									<?php $categories = get_terms('product_cat', '');
									$allcategories = array();
									foreach ($categories as $category) {
										$allcategories[] = $category->slug;
									}
									$allcategories = implode(",", $allcategories); ?>
									<li data-filter="<?php echo esc_attr($allcategories); ?>" class="active"><?php esc_html_e('all', 'pixxy'); ?><span><?php echo esc_html($prod->found_posts);?></span></li>
									<?php foreach ($categories as $category) {
										if (!empty($cats_product)) {
											if (in_array($category->slug, $cats_product) !== false) { ?>
												<li data-filter="<?php echo esc_attr($category->slug); ?>"><?php echo esc_html( $category->name ); ?><span><?php echo esc_html( $category->count ); ?></span></li>
											<?php }
										}
									} ?>
								</ul>
							</div>
						</div>
						<div class="swiper-wrapper-tab" data-add-slides="<?php echo esc_attr($lg_count); ?>" data-md-slides="<?php echo esc_attr( $md_count ); ?>" data-sm-slides="<?php echo esc_attr( $sm_count ); ?>" data-xs-slides="<?php echo esc_attr( $xs_count ); ?>">
							<div class="swiper-container pixxy-product-filter" data-mouse="0"
							     data-autoplay="<?php echo esc_attr( $autoplay ); ?>" <?php echo $responsive; ?>
							     data-loop="<?php echo esc_attr( $loop ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>"
							     data-space="0" data-pagination-type="bullets"
							     data-mode="horizontal">
								<div class="swiper-wrapper">

									<?php while ( $prod->have_posts() ) : $prod->the_post();

										global $post, $product;

										$product_meta = get_post_meta($post->ID, 'pixxy_product_options');
										$label_new = isset($product_meta[0]['pixxy_product_new']) ? $product_meta[0]['pixxy_product_new'] : false;?>

										<div class="swiper-slide">

											<div class="pixxy-prod-list-image">
												<div class="image-wrap">
													<?php if ( $product->is_on_sale() && !$label_new) : ?>

														<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'sale', 'pixxy' ) . '</span>', $post, $product ); ?>

													<?php endif;

													if($label_new && !$product->is_on_sale()){ ?>
														<span class="on-new"><?php echo esc_html__( 'New', 'pixxy' ); ?></span>
													<?php }

													$image_size = apply_filters( 'single_product_archive_thumbnail_size', 'shop_catalog' );

													if ( has_post_thumbnail() ) {
														$props = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
														echo get_the_post_thumbnail( $post->ID, 'full', array(
															'title' => $props['title'],
															'alt'   => $props['alt'],
															'class' => '',
														) );
													} elseif ( wc_placeholder_img_src() ) {
														echo wc_placeholder_img( $image_size );
													} ?>


													<div class="product-links-wrapp">
														<div class="pixxy-add-to-cart">
                                                            <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
														</div>
														<a href="<?php the_permalink(); ?>" class="pixxy-link ion-ios-eye-outline">
														</a>
                                                        <a href="" class="pixxy-link ion-ios-heart-outline"></a>
													</div>

												</div>
												<div class="info">
													<div class="title"><?php do_action( 'woocommerce_shop_loop_item_title' ); ?></div>
													<div class="price">
														<?php wc_get_template( 'loop/price.php' ); ?>
													</div>
												</div>


											</div>

										</div>

										<?php
									endwhile; ?>
								</div>
								<div class="swiper-pagination"></div>
							</div>
						</div>
					</div>
				<?php }?>

			<?php }

			wp_reset_postdata(); ?>

			<?php
			return ob_get_clean();
		}
	}
}