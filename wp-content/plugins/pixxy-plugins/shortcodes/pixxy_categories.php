<?php

/* Init Visual Composer Map */
if ( function_exists( 'vc_map' ) ) {
	vc_map( array(
			'name'        => __( 'Products Categories', 'js_composer' ),
			'base'        => 'pixxy_product_category',
			'params'      => array(
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
			),
		)
	);
}


/* Output */
if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_pixxy_product_category extends WPBakeryShortCode {

		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'orderby'         => 'date',
				'order'           => 'DESC',
				'cats_product'    => ''
			), $atts ) );


			// include needed stylesheets
			if ( ! in_array( "pixxy_product-categories-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_product-categories-css";
			}
			$this->enqueueCss();

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
			$count =  ! empty( $count ) && is_numeric( $count ) ? $count : 4;
			// Order posts
			$args['orderby'] = $orderby;
			$args['posts_per_page'] = $count;

			ob_start(); ?>

				<div class="px-categories" data-order="<?php echo esc_attr($order); ?>" data-orderby="<?php echo esc_attr($orderby); ?>" data-count="<?php echo esc_attr($count); ?>">

                    <div class="swiper-container js-mobile-init" data-mouse="0" data-autoplay="0" data-responsive="responsive" data-add-slides="5" data-lg-slides="4" data-md-slides="4" data-sm-slides="3" data-xs-slides="1" data-loop="0" data-speed="500" data-space="0" data-pagination-type="bullets" data-mode="horizontal">
                        <div class="swiper-wrapper">

	                        <?php $categories = get_terms('product_cat', '');
	                        foreach ($categories as $category) {
		                        $allcategories[] = $category->slug;
	                        } ?>
	                        <?php foreach ($categories as $category) {
		                        if (!empty($cats_product)) {
			                        if (in_array($category->slug, $cats_product) !== false) { ?>
                                        <div class="swiper-slide">
                                            <a class="px-categories__item" href="<?php echo esc_url(get_category_link( $category )); ?>" data-filter="<?php echo esc_attr($category->slug); ?>">

                                                <?php
                                                $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                                                $image = ( ! empty( $thumbnail_id ) && is_numeric( $thumbnail_id ) ) ? wp_get_attachment_url( $thumbnail_id ) : '';
                                                $image_alt = ( ! empty( $thumbnail_id ) && is_numeric( $thumbnail_id ) ) ? get_post_meta( $thumbnail_id , '_wp_attachment_image_alt', true) : '';
                                                echo pixxy_the_lazy_load_flter( $image, array( 'class' => 's-img-switch', 'alt' => $image_alt ) ) ?>

                                                <h4 class="px-categories__title"><?php echo esc_html( $category->name ); ?></h4>
                                            </a>
                                        </div>
			                        <?php }
		                        }
	                        } ?>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
				</div>

				<?php wp_reset_postdata();

			return ob_get_clean();
		}
	}
}