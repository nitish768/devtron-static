<?php

//Portfolio with animation shortcode
$url_btn = EF_URL . '/admin/assets/images/shortcodes_images/buttons/';

vc_map( array(
	'name'                    => esc_html__( 'Portfolio with animation', 'js_composer' ),
	'base'                    => 'pixxy_album_animation',
	'description'             => __( 'Section with custom portfolio with animation style', 'js_composer' ),
	'show_settings_on_create' => false,
	'params'                  => array(
		array(
			'type'       => 'dropdown',
			'heading'    => 'Image original size',
			'description' => __( 'Please select image size', 'js_composer' ),
			'param_name' => 'image_original_size',
			'value'      => array_merge( array( 'full' ), get_intermediate_image_sizes() )
		),
		array(
			'type'        => 'vc_efa_chosen',
			'heading'     => __( 'Select Categories', 'js_composer' ),
			'description' => __( 'Please select portfolio category', 'js_composer' ),
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
			'description' => __( 'Please specify how many elements of the portfolio will appear on the page', 'js_composer' ),
			'param_name' => 'count',
		),
		array(
			'type'        => 'textfield',
			'heading'     => __( 'Text for button', 'js_composer' ),
			'param_name'  => 'btn_text',
			'description' => __( 'By default - "see more".', 'js_composer' )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => 'Linked to detail page',
			'description' => __( 'Enable link to detail page', 'js_composer' ),
			'param_name' => 'linked',
			'value'      => array(
				'Yes'  => 'yes',
				'None' => 'none'
			)
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => __( 'Background color', 'js_composer' ),
			'description' => __( 'Please select main background color ', 'js_composer' ),
			'param_name' => 'colormain',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => __( 'Change first color for bubble', 'js_composer' ),
			'description' => __( 'Please select first background color for bubble', 'js_composer' ),
			'param_name' => 'color1',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => __( 'Change second color for bubble', 'js_composer' ),
			'description' => __( 'Please select second background color for bubble', 'js_composer' ),
			'param_name' => 'color2',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => __( 'Change third color for bubble', 'js_composer' ),
			'description' => __( 'Please select third background color for bubble', 'js_composer' ),
			'param_name' => 'color3',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => __( 'Change fourth color for bubble', 'js_composer' ),
			'description' => __( 'Please select forth background color for bubble', 'js_composer' ),
			'param_name' => 'color4',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => __( 'Change fifth color for bubble', 'js_composer' ),
			'description' => __( 'Please select fifth background color for bubble', 'js_composer' ),
			'param_name' => 'color5',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => __( 'Change sixth color for bubble', 'js_composer' ),
			'description' => __( 'Please select sixth background color for bubble', 'js_composer' ),
			'param_name' => 'color6',
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
	) //end params
) );
class WPBakeryShortCode_pixxy_album_animation extends WPBakeryShortCode {
	protected function content( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'cats'                => '',
			'image_original_size' => 'full',
			'linked'              => 'yes',
			'btn_style'              => 'a-btn',
			'count'               => '',
			'btn_text'            => 'see more',
			'orderby'             => '',
			'order'               => 'date',
			'colormain'              => '#9ED2EE',
			'color1'              => '#fbddec',
			'color2'              => '#9fe2df',
			'color3'              => '#fbddec',
			'color4'              => '#9fe2df',
			'color5'              => '#fbddec',
			'color6'              => '#9fe2df'
		), $atts ) );
		$colormain = isset( $colormain ) && ! empty( $colormain ) ? $colormain : '#9ED2EE';
		$color1 = isset( $color1 ) && ! empty( $color1 ) ? $color1 : '#fbddec';
		$color2 = isset( $color2 ) && ! empty( $color2 ) ? $color2 : '#9fe2df';
		$color3 = isset( $color3 ) && ! empty( $color3 ) ? $color3 : '#fbddec';
		$color4 = isset( $color4 ) && ! empty( $color4 ) ? $color4 : '#9fe2df';
		$color5 = isset( $color5 ) && ! empty( $color5 ) ? $color5 : '#fbddec';
		$color6 = isset( $color6 ) && ! empty( $color6 ) ? $color6 : '#9fe2df';
		$btn_text = isset( $btn_text ) && ! empty( $btn_text ) ? $btn_text : 'SEE MORE';
		// include needed stylesheets
		if ( !in_array( "pixxy_animate_banner-css", self::$css_scripts ) ) {
			self::$css_scripts[] = "pixxy_animate_banner-css";
		}
		$this->enqueueCss();
		if ( !in_array( "pixxy_animeBulb", self::$js_scripts )) {
			self::$js_scripts[] = "pixxy_animeBulb";
		}
		if ( !in_array( "pixxy_animate_banner", self::$js_scripts )) {
			self::$js_scripts[] = "pixxy_animate_banner";
		}
		$this->enqueueJs();
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
			$cats = array();
			foreach ( $term_array as $term_slug ) {
				$term_info = get_term_by( 'slug', $term_slug, 'portfolio-category' );
				$cats[]    = $term_info->term_id;
			}
			$cats = implode( ',', $cats );
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
			'pixxy-main-js',
			'load_more_post',
			array(
				'ajaxurl'   => admin_url( 'admin-ajax.php' ),
				'startPage' => $args['paged'],
				'maxPage'   => $posts->max_num_pages,
				'nextLink'  => next_posts( 0, false )
			)
		);
		ob_start();
		if ( $posts->have_posts() ) { ?>

			<div class="main-album-anim-wrap" style="background-color: <?php echo esc_attr($colormain); ?>">
				<div class="morph-wrap">
					<svg class="morph" width="1400" height="770" viewBox="0 0 1400 770"
					     data-color1="<?php echo esc_attr( $color1 ); ?>"
					     data-color2="<?php echo esc_attr( $color2 ); ?>"
					     data-color3="<?php echo esc_attr( $color3 ); ?>"
					     data-color4="<?php echo esc_attr( $color4 ); ?>"
					     data-color5="<?php echo esc_attr( $color5 ); ?>"
					     data-color6="<?php echo esc_attr( $color6 ); ?>">
						<path style="fill: <?php echo esc_attr( $color1 ); ?>" d="M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z"/>
					</svg>
				</div>

				<?php while ( $posts->have_posts() ) :
					$posts->the_post();
					$portfolio_meta           = get_post_meta( $posts->ID, 'pixxy_portfolio_options', true );
					$portfolio_category_items = '';
					$portfolio_category       = '';
					$categories               = get_the_terms( $posts->ID, 'portfolio-category' );
					if ( $categories ) {
						foreach ( $categories as $categorsy ) {
							$portfolio_category       .= $categorsy->slug . ' ';
							$portfolio_category_items .= '<span>' . trim( $categorsy->slug ) . '</span>';
						}
					}
					$link = get_the_permalink();
					$target = '_self';
					if ( ! empty( $linked ) && $linked == 'none' && ! empty( $portfolio_meta['ext_link'] ) ) {
						$link   = $portfolio_meta['ext_link'];
						$target = '_blank';
					}
					$images = explode( ',', $portfolio_meta[0]['slider'] );
					$class  = ( $counter % 2 == 0 ) ? 'content--layout-1' : 'content--layout-2'; ?>

					<div class="album_animation_content-wrap">
						<div class="content content--layout <?php echo esc_attr( $class ); ?>">
							<div class="content__img s-back-switch">
								<?php if ( ! get_post_thumbnail_id( $posts->ID ) ) {
									$url = ( ! empty( $images[0] ) && is_numeric( $images[0] ) ) ? wp_get_attachment_image_src( $images[0], $image_original_size ) : '';
									$alt = ( ! empty( $images[0] ) && is_numeric( $images[0] ) ) ? get_post_meta( $images[0], '_wp_attachment_image_alt', true ) : ''; ?>

									<img src="<?php echo esc_url( $url[0] ); ?>" alt="<?php echo esc_attr( $alt ); ?>"
									     class="s-img-switch">

								<?php } else {
									$image_id = get_post_thumbnail_id( $posts->ID );
									$image    = ( ! empty( $image_id ) && is_numeric( $image_id ) ) ? wp_get_attachment_image_src( $image_id, $image_original_size ) : '';
									$alt      = ( ! empty( $image_id ) && is_numeric( $image_id ) ) ? get_post_meta( $image_id, '_wp_attachment_image_alt', true ) : ''; ?>

									<img src="<?php echo esc_url( $image[0] ); ?>" alt="<?php echo esc_attr( $alt ); ?>"
									     class="s-img-switch">

								<?php } ?>
							</div>
							<div class="album-text-wrap">
								<?php the_title( '<h3 class="content__title"><mark>', '</mark></h3>' ); ?>
								<p class="content__desc">
									<?php echo get_the_excerpt(); ?>
								</p>
								<a href="<?php echo esc_url( $link ); ?>" class="content__link <?php echo esc_attr($btn_style); ?>"
								   target="<?php echo esc_attr( $target ); ?>">
									<?php echo esc_html( $btn_text ); ?>
								</a>
							</div>
						</div>
					</div>

					<?php $counter ++;
				endwhile; ?>

			</div>

		<?php }
		return ob_get_clean();
	}
}