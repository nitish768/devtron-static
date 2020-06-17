<?php

//Last posts shortcode

if ( function_exists( 'vc_map' ) ) {
	$url = EF_URL . '/admin/assets/images/shortcodes_images/last_posts/';

	vc_map(
			array(
					'name'                    => __( 'Last posts', 'js_composer' ),
					'base'                    => 'pixxy_last_posts',
					'params'                  => array(
                            array (
                                'param_name' => 'style_post',
                                'type' => 'select_preview',
                                'description' => '',
                                'heading' => 'Style',
                                'value' => array (
	                                array(
		                                'value' => 'slider',
		                                'label' => esc_html__( 'Post slider', 'js_composer' ),
		                                'image' => $url . 'slider.jpg'
	                                ),
	                                array(
		                                'value' => 'simple',
		                                'label' => esc_html__( 'Post list', 'js_composer' ),
		                                'image' => $url . 'simple.jpg'
	                                ),
                                ),
                                'admin_label' => true,
                                'save_always' => true,
                            ),
                            array(
                                    'type'        => 'vc_efa_chosen',
                                    'heading'     => __( 'Select Categories', 'js_composer' ),
                                    'param_name'  => 'cats',
                                    'placeholder' => __( 'Select category', 'js_composer' ),
                                    'value'       => pixxy_element_values( 'category', array(
                                            'sort_order' => 'ASC',
                                            'taxonomy'   => 'category',
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
                                'type'        => 'dropdown',
                                'heading'     => __( 'Count items in a line', 'js_composer' ),
                                'param_name'  => 'count_line',
                                'value'       => array(
                                    __( 'Two', 'js_composer' ) => 'two',
                                    __( 'Three', 'js_composer' )  => 'three',
                                    __( 'Four', 'js_composer' )  => 'four',
                                ),
                                'dependency' => array( 'element' => 'style_post', 'value' => array( 'simple' ) )
                            ),
                            array(
                                'type'        => 'dropdown',
                                'heading'     => __( 'Title size', 'js_composer' ),
                                'param_name'  => 'title_size',
                                'value'       => array(
                                    __( 'Default', 'js_composer' ) => 'default',
                                    __( 'Smaller', 'js_composer' ) => 'smaller',
                                ),
                                'dependency' => array( 'element' => 'style_post', 'value' => array( 'simple' ) )
                            ),
                            array(
                                'type'        => 'dropdown',
                                'heading'     => __( 'Category position', 'js_composer' ),
                                'param_name'  => 'category_position',
                                'value'       => array(
                                    __( 'In content', 'js_composer' ) => 'content',
                                    __( 'Over image', 'js_composer' ) => 'image',
                                ),
                                'dependency' => array( 'element' => 'style_post', 'value' => array( 'simple' ) )
                            ),
                            array(
                                'type'        => 'dropdown',
                                'heading'     => __( 'Date position', 'js_composer' ),
                                'param_name'  => 'date_position',
                                'value'       => array(
                                    __( 'Bottom of content', 'js_composer' ) => 'bottom',
                                    __( 'Top of content', 'js_composer' ) => 'top',
                                ),
                                'dependency' => array( 'element' => 'style_post', 'value' => array( 'simple' ) )
                            ),
                            array(
                                'type'        => 'dropdown',
                                'heading'     => __( 'Date type', 'js_composer' ),
                                'param_name'  => 'date_type',
                                'value'       => array(
                                    __( 'Time since publication', 'js_composer' ) => 'time_since',
                                    __( 'Publication date', 'js_composer' ) => 'date',
                                ),
                            ),
                            array(
                                'type'       => 'checkbox',
                                'heading'    => __( 'Display description', 'js_composer' ),
                                'description'    => __( 'Display excerpt', 'js_composer' ),
                                'param_name' => 'description',
                                'dependency' => array( 'element' => 'style_post', 'value' => array( 'simple' ) )
                            ),
                            array(
                                'type'       => 'checkbox',
                                'heading'    => __( 'Disable shadows, animation and background for post item', 'js_composer' ),
                                'param_name' => 'disable_style',
                                'dependency' => array( 'element' => 'style_post', 'value' => array( 'simple' ) ),
                                'std'         => 'yes',
                            ),
                            array(
                                'type'       => 'checkbox',
                                'heading'    => __( 'Display link', 'js_composer' ),
                                'param_name' => 'link',
                                'dependency' => array( 'element' => 'style_post', 'value' => array( 'simple' ) ),
                            ),
                            array(
                                'type'       => 'vc_link',
                                'heading'    => __( 'Link options', 'js_composer' ),
                                'param_name' => 'link_options',
                                'dependency' => array(
                                    'element' => 'link',
                                    'not_empty' => true,
                                ),
                            ),
							array(
									'type'        => 'textfield',
									'heading'     => __( 'Autoplay (sec)', 'js_composer' ),
									'description' => __( '0 - off autoplay.', 'js_composer' ),
									'param_name'  => 'autoplay',
									'value'       => '0',
                                    'dependency' => array( 'element' => 'style_post', 'value' => array( 'slider' ) )
							),
							array(
									'type'        => 'textfield',
									'heading'     => __( 'Speed (milliseconds)', 'js_composer' ),
									'description' => __( 'Speed Animation. Default 1000 milliseconds', 'js_composer' ),
									'param_name'  => 'speed',
									'value'       => '500',
                                    'dependency' => array( 'element' => 'style_post', 'value' => array( 'slider' ) )
							),
							array(
									'type'       => 'checkbox',
									'heading'    => __( 'Loop', 'js_composer' ),
									'param_name' => 'loop',
									'value'      => '1',
                                    'dependency' => array( 'element' => 'style_post', 'value' => array( 'slider' ) )
							),
							array(
									'type'        => 'textfield',
									'heading'     => __( 'Extra class name', 'js_composer' ),
									'param_name'  => 'el_class',
									'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
									'value'       => ''
							),
							array(
									'type'       => 'css_editor',
									'heading'    => __( 'CSS box', 'js_composer' ),
									'param_name' => 'css',
									'group'      => __( 'Design options', 'js_composer' )
							)
					) //end params
			)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_pixxy_last_posts extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {

				extract( shortcode_atts( array(
				        'cats'      => '',
				        'style_post' => 'slider',
						'autoplay' => '',
						'loop'     => '',
						'speed'    => '',
						'css'      => '',
						'class'    => '',
						'el_class' => '',
				        'count'    => '',
				        'count_line' => 'two',
				        'title_size' => 'default',
				        'category_position' => 'content',
				        'date_position' => 'bottom',
				        'date_type' => 'time_since',
				        'description' => '',
				        'disable_style' => '',
				        'link' => '',
				        'link_options' => '',
                        'orderby'             => '',
                        'order'               => 'date'
				), $atts ) );


				// include needed stylesheets
				if ( ! in_array( "pixxy_last-post-css", self::$css_scripts ) ) {
					self::$css_scripts[] = "pixxy_last-post-css";
				}
				$this->enqueueCss();

				$autoplay = is_numeric( $autoplay ) ? $autoplay * 1000 : 0;
				$speed    = is_numeric( $speed ) ? $speed : '500';
				$loop     = ! empty( $loop ) ? '1' : '0';

				$color = isset( $color ) && ! empty( $color ) ? 'style=color:' . $color . ';' : '';

				$class = ( ! empty( $el_class ) ) ? $el_class : '';
				$class .= vc_shortcode_custom_css_class( $css, ' ' );

				ob_start();

                if ($style_post == 'simple') {
                    if  ($count_line == 'two') {
                        $col_class = 'col-xs-12 col-md-6';
                        $row_class = 'two-col';
                    } elseif  ($count_line == 'four') {
                        $col_class = 'col-xs-12 col-lg-3 col-md-6';
                        $row_class = 'four-col';
                    } else {
                        $col_class = 'col-xs-12 col-md-4';
                        $row_class = 'three-col';
                    }

                    if (empty($count) || $count < 0) {
                        $count = 3;
                    }
                }

            // base args
                $args = array(
                    'post_type'      => 'post',
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
                        $term_info = get_term_by( 'slug', $term_slug, 'category' );
                        $cats[]    = $term_info->term_id;
                    }

                    $cats              = implode( ',', $cats );
                    $args['tax_query'] = array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'term_id',
                            'terms'    => explode( ',', $cats ),
                        )
                    );
                }

                $disable_style = ($disable_style) ? 'modern' : '';

                $posts = new WP_Query( $args ); ?>

                <?php if ( $posts->have_posts() ) : ?>
                    <div class="last-post-wrap <?php echo esc_attr( $class . ' ' . $style_post ); ?>">
                        <?php if ($style_post == 'slider') : ?>
                            <div class="swiper-container"
                                 data-mouse="0" data-autoplay="<?php echo esc_attr( $autoplay ); ?>"
                                 data-loop="<?php echo esc_attr( $loop ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>"
                                 data-space="0" data-pagination-type="bullets" data-responsive="responsive" data-add-slides="4" data-lg-slides="4" data-md-slides="3" data-sm-slides="2" data-xs-slides="1">
                                <div class="swiper-wrapper last-posts">
                                    <?php while ( $posts->have_posts() ) : $posts->the_post();
                                        if ($date_type == 'time_since') {
                                            $data = get_the_date('U');
                                            $data_now = date('U');
                                            $data_output = human_time_diff( $data, $data_now ) . ' ago';
                                        } else {
                                            $data_output = get_the_date( 'F j, Y' );
                                        } ?>
                                        <div class="swiper-slide post-item">
                                            <article class="post-item__wrapper">
                                                <?php
                                                    $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                                    if ( ! empty( $image ) ) { ?>
                                                    <div class="post-item__image">
                                                        <?php if ( ! empty( $image ) ) {
                                                            echo pixxy_the_lazy_load_flter( $image, array( 'class' => 's-img-switch', 'alt' => esc_attr__('thumbnail', 'pixxy') ) );
                                                        } ?>
                                                    </div>
                                                <?php } ?>
                                                <div class="post-item__content">
                                                    <div class="post-item__head">
                                                        <?php the_category(); ?>
                                                        <h3 class="title"><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h3>
                                                    </div>
                                                    <div class="post-item__date icon-basic-alarm"><?php echo $data_output ?></div>
                                                </div>
                                            </article>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php elseif ($style_post == 'simple'): ?>
                            <div class="container">
                                <div class="row last-posts <?php echo esc_attr( $row_class ); ?>">
                                    <?php while ( $posts->have_posts() ) : $posts->the_post();
                                        if ($date_type == 'time_since') {
                                            $data = get_the_date('U');
                                            $data_now = date('U');
                                            $data_output = human_time_diff( $data, $data_now ) . ' ago';
                                        } else {
                                            $data_output = get_the_date( 'F j, Y' );
                                        }
                                        ?>
                                        <div class="post-item <?php echo esc_attr( $col_class . ' ' . $disable_style); ?>">
                                            <article class="post-item__wrapper">
                                                <?php
                                                $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                                if ( ! empty( $image ) ) { ?>
                                                    <div class="post-item__image">
                                                        <?php if ( ! empty( $image ) ) {
                                                            echo pixxy_the_lazy_load_flter( $image, array( 'class' => 's-img-switch', 'alt' => esc_attr__('thumbnail', 'pixxy') ) );
                                                            if ($category_position == 'image') { ?>
                                                                <?php the_category(); ?>
                                                            <?php }
                                                        } ?>
                                                    </div>
                                                <?php } ?>
                                                <div class="post-item__content">
                                                    <div class="post-item__head">
                                                        <?php if ($date_position == 'top') { ?>
                                                            <div class="post-item__date icon-basic-alarm"><?php echo $data_output ?></div>
                                                        <?php } ?>
                                                        <?php if ($category_position == 'content' || empty($image)) { ?>
                                                            <?php the_category(); ?>
                                                        <?php } ?>
                                                        <h3 class="title <?php echo esc_attr(($title_size == 'smaller') ? 'title--small' : ''); ?>"><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h3>
                                                        <?php if ($description) { ?>
                                                            <?php the_excerpt(); ?>
                                                        <?php } ?>
                                                    </div>
                                                    <?php if ($date_position == 'bottom') { ?>
                                                        <div class="post-item__date icon-basic-alarm"><?php echo $data_output ?></div>
                                                    <?php } ?>
                                                </div>
                                            </article>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                                <?php if ($link && !empty($link_options) ):
                                    $url = vc_build_link( $link_options ); ?>
                                    <div class="last-post-button text-center">
                                        <a href="<?php echo esc_url( $url['url'] ); ?>"
                                           target="<?php echo esc_attr( $url['target'] ); ?>"><?php echo esc_html( $url['title'] ); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php else : ?>
                    <p><?php esc_html_e( 'No posts', 'pixxy' ); ?></p>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

                <?php
            }
        }
}
