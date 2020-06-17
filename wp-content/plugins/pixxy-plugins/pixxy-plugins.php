<?php
/*
Plugin Name: Pixxy Plugins
Version: 1.0.9
Description: Includes Portfolio Custom Post Type and Visual Composer Shortcodes
*/

// Define Constants
defined( 'EF_ROOT' ) or define( 'EF_ROOT', dirname( __FILE__ ) );
defined( 'EF_URL' ) or define( 'EF_URL', plugins_url( 'pixxy-plugins' ) );
defined( 'EF_VERSION' ) or define( 'EF_VERSION', '1.0' );

if ( ! class_exists( 'Pixxy_Plugins' ) ) {

    require_once EF_ROOT . '/cs-framework/cs-framework.php';
    require_once EF_ROOT . '/lib/aq_resizer.php';
    require_once EF_ROOT . '/lib/pixxy-justified-gallery/pixxy-justified-gallery.php';
    // include functions
    require_once EF_ROOT . '/includes/functions_plugins.php';
    require_once EF_ROOT . '/register_post_types.php';
    require_once EF_ROOT . '/includes/lib/vendor/autoload.php';

    require_once EF_ROOT . '/lib/TwitterAPIExchange.php';

    // Import Integration
    require_once( EF_ROOT . '/importer/index.php' );

	require_once( EF_ROOT . '/wp-updates-plugin.php');
	new WPUpdatesPluginUpdater_1990( 'http://wp-updates.com/api/2/plugin', plugin_basename(__FILE__));


    // add a skin in a plugin/theme
    add_filter('tg_add_item_skin', function($skins) {


        $dir            = __DIR__ . '/the-grid/';
        $directory_list = scandir( $dir );

        $directory_list = array_slice( $directory_list, 2 );
        foreach ( $directory_list as $directory ) {

            $directory_templates_list = scandir( $dir . $directory );
            $directory_templates_list = array_slice( $directory_templates_list, 2 );

            foreach ( $directory_templates_list as $list ) {

                $name = str_replace( '-', ' ', $list );
                $name = substr( $name, 3 );

                // register a skin and add it to the main skins array
                $skins[$list] = array(
                    'type'   => $directory,
                    'slug'   => $list,
                    'name'   => $name,
                    'php'    => EF_ROOT . '/the-grid/'. $directory .'/'. $list .'/'. $list .'.php',
                    'css'    => EF_ROOT . '/the-grid/'. $directory .'/'. $list .'/'. $list .'.css',
                    'col'    => 1, // col number in preview skin mode
                    'row'    => 1  // row number in preview skin mode
                );
            }


        }

        // return the skins array + the new one you added (in this example 2 new skins was added)
        return $skins;

    });



    /**
     * Template editor init.
     */
    if ( ! function_exists( 'pixxy_include_vc_templates' ) ) {
        function pixxy_include_vc_templates() {
            if ( class_exists( 'WPBakeryVisualComposerAbstract' ) ) {
                require_once EF_ROOT . '/vc-templates/theme-vc-template-editor.php';
                require_once EF_ROOT . '/vc-templates/theme-vc-templates.php';
                $pixxy_templates = new Pixxy_Vc_Templates_Editor();

                return $pixxy_templates->init();
            }
        }
    }

    add_action( 'init', 'pixxy_include_vc_templates');



    // register scripts and styles for shortcodes
    add_action( 'wp_enqueue_scripts', 'pixxy_register_scripts' );
    function pixxy_register_scripts() {

        // styles
        wp_register_style( 'pixxy_slick-css', EF_URL . '/shortcodes/assets/css/slick.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_magnific-popup-css', EF_URL . '/shortcodes/assets/css/magnific-popup.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_line_of_images-css', EF_URL . '/shortcodes/assets/css/line_of_images.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_line_of_icons-css', EF_URL . '/shortcodes/assets/css/line_of_icons.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_team-css', EF_URL . '/shortcodes/assets/css/team.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_skills-css', EF_URL . '/shortcodes/assets/css/skills.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_counter-css', EF_URL . '/shortcodes/assets/css/counter.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_about-css', EF_URL . '/shortcodes/assets/css/about.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_discount-css', EF_URL . '/shortcodes/assets/css/discount.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_headings-css', EF_URL . '/shortcodes/assets/css/headings.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_services-css', EF_URL . '/shortcodes/assets/css/services.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_media_parallax-css', EF_URL . '/shortcodes/assets/css/media-parallax.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_accordion-css', EF_URL . '/shortcodes/assets/css/accordion.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_single_media-css', EF_URL . '/shortcodes/assets/css/single_media.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_product-categories-css', EF_URL . '/shortcodes/assets/css/product-categories.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_last-post-css', EF_URL . '/shortcodes/assets/css/last-posts.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_banner_slider-css', EF_URL . '/shortcodes/assets/css/banner_slider.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_testimonial-css', EF_URL . '/shortcodes/assets/css/testimonial.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_product-slider-css', EF_URL . '/shortcodes/assets/css/product-slider.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_contacts-css', EF_URL . '/shortcodes/assets/css/contacts.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_post_slider-css', EF_URL . '/shortcodes/assets/css/post_slider.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_split-slider-css', EF_URL . '/shortcodes/assets/css/split-slider.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_video_btn-css', EF_URL . '/shortcodes/assets/css/video_btn.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_banner_image-css', EF_URL . '/shortcodes/assets/css/banner_image.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_pricing-css', EF_URL . '/shortcodes/assets/css/pricing.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_coming_soon-css', EF_URL . '/shortcodes/assets/css/coming_soon.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_portfolio_sliders-css', EF_URL . '/shortcodes/assets/css/portfolio_sliders.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_portfolio_list-css', EF_URL . '/shortcodes/assets/css/portfolio_list.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_disortion-css', EF_URL . '/shortcodes/assets/css/disortion.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_services_list-css', EF_URL . '/shortcodes/assets/css/services_list.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_instagram-css', EF_URL . '/shortcodes/assets/css/instagram.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_physics_banner-css', EF_URL . '/shortcodes/assets/css/physics_banner.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_glitch-css', EF_URL . '/shortcodes/assets/css/glitch.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_video_banner-css', EF_URL . '/shortcodes/assets/css/video_banner.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_slider-css', EF_URL . '/shortcodes/assets/css/pixxy_slider.min.css', array('pixxy_base_css') );
        wp_register_style( 'call-to-action-css', EF_URL . '/shortcodes/assets/css/call_to_action.min.css', array('pixxy_base_css') );
        wp_register_style( 'info-list-css', EF_URL . '/shortcodes/assets/css/info_list.min.css', array('pixxy_base_css') );
        wp_register_style( 'flipster-css', EF_URL . '/shortcodes/assets/css/flipster.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_content-block-css', EF_URL . '/shortcodes/assets/css/content-block.min.css', array('pixxy_base_css') );
        wp_register_style( 'pixxy_animate_banner-css', EF_URL . '/shortcodes/assets/css/animate_banner.min.css', array('pixxy_base_css') );

        // scripts
        wp_register_script( 'pixxy_youtube', 'https://www.youtube.com/iframe_api', '', true );
        wp_register_script( 'pixxy_parallax-fragments', EF_URL . '/shortcodes/assets/js/parallax.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_anime', EF_URL . '/shortcodes/assets/js/anime.min.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_line_of_images', EF_URL . '/shortcodes/assets/js/line_of_images.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_magnific', EF_URL . '/shortcodes/assets/js/magnific.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_multiscroll', EF_URL . '/shortcodes/assets/js/jquery.multiscroll.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_portfolio_sliders', EF_URL . '/shortcodes/assets/js/portfolio_sliders.js', array( 'jquery', 'swiper' ), false, true );
        wp_register_script( 'pixxy_team-js', EF_URL . '/shortcodes/assets/js/team.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_services', EF_URL . '/shortcodes/assets/js/services.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_single_media', EF_URL . '/shortcodes/assets/js/single_media.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_discount', EF_URL . '/shortcodes/assets/js/discount.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_countTo-js', EF_URL . '/shortcodes/assets/js/countTo.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_skills-js', EF_URL . '/shortcodes/assets/js/skills.js', array(
            'jquery',
            'pixxy_countTo-js'
        ), false, true );
        wp_register_script( 'pixxy_banner_slider', EF_URL . '/shortcodes/assets/js/banner_slider.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_animeBulb', EF_URL . '/shortcodes/assets/js/anime_bubl.min.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_animate_banner', EF_URL . '/shortcodes/assets/js/animate_banner.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_flipster-js', EF_URL . '/shortcodes/assets/js/flipster.min.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_testimonials-js', EF_URL . '/shortcodes/assets/js/testimonials.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_image_banner', EF_URL . '/shortcodes/assets/js/image_banner.js', array( 'jquery', 'pixxy_parallax-fragments' ), false, true );
        wp_register_script( 'pixxy_coming_soon', EF_URL . '/shortcodes/assets/js/coming_soon.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_accordion', EF_URL . '/shortcodes/assets/js/accordion.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_portfolio_list', EF_URL . '/shortcodes/assets/js/portfolio_list.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_info_block', EF_URL . '/shortcodes/assets/js/info_block.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_physics_three', EF_URL . '/shortcodes/assets/js/three.min.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_physics_perlin', EF_URL . '/shortcodes/assets/js/perlin.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_tweenmax', EF_URL . '/shortcodes/assets/js/TweenMax.min.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_physics_banner', EF_URL . '/shortcodes/assets/js/physics_banner.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_linira_banner', EF_URL . '/shortcodes/assets/js/linira_banner.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_decori_banner', EF_URL . '/shortcodes/assets/js/decori_banner.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_typed-js', EF_URL . '/shortcodes/assets/js/typed.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_headings', EF_URL . '/shortcodes/assets/js/headings.js', array( 'jquery', 'pixxy_typed-js' ), false, true );
        wp_register_script( 'pixxy_instagram', EF_URL . '/shortcodes/assets/js/instagram.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_video_banner', EF_URL . '/shortcodes/assets/js/video_banner.js', array( 'jquery', 'pixxy_youtube' ), false, true );
        wp_register_script( 'glitch', EF_URL . '/shortcodes/assets/js/glitch.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_pricing', EF_URL . '/shortcodes/assets/js/pricing.js', array( 'jquery' ), false, true );
        wp_register_script( 'pixxy_split-slider', EF_URL . '/shortcodes/assets/js/split-slider.js', array( 'jquery' ), false, true );
    }

    /* For Help */
//	add_action( 'admin_print_scripts', 'pixxy_add_help_script', 10, 1 );
    function pixxy_add_help_script() { ?>
        <script>!function (e, o, n) {
            window.HSCW = o, window.HS = n, n.beacon = n.beacon || {};
            var t = n.beacon;
            t.userConfig = {}, t.readyQueue = [], t.config = function (e) {
              this.userConfig = e
            }, t.ready = function (e) {
              this.readyQueue.push(e)
            }, o.config = {
              docs: {enabled: !0, baseUrl: "//foxthemes.helpscoutdocs.com/"},
              contact: {enabled: !0, formId: "e754a0af-250c-11e7-9841-0ab63ef01522"}
            };
            var r = e.getElementsByTagName("script")[0], c = e.createElement("script");
            c.type = "text/javascript", c.async = !0, c.src = "https://djtflbt20bdde.cloudfront.net/", r.parentNode.insertBefore(c, r)
          }(document, window.HSCW || {}, window.HS || {});</script>

        <script>
          HS.beacon.config({

            color: '#104787',
              <?php $theme = wp_get_theme(); ?>
            topics: [
              {val: 'custom', label: 'I would Like to get Customization'},
              {val: 'pixxy', label: 'Pixxy - Modern Photography Portfolio Theme'}
            ],
            collection: "58edd660dd8c8e5c5731510d", /* Id documentation Pixxy */
            icon: "message",
            showSubject: true,
            showContactFields: true,
            attachment: true,
            instructions: 'Please submit your question, and we will do our best to help.'
          });
        </script>

        <?php
    }

    new Pixxy_Plugins;

    // kill default gallery
    if ( ! function_exists( 'pixxy_kill_default_gallery' ) ) {
        function pixxy_kill_default_gallery() {
            global $post;

            if ( ! empty( $post ) && get_post_type( $post->ID ) == 'post' ) {
                remove_shortcode( 'gallery' );
                $create_new_shortcode = 'add' . '_' . 'shortcode';
                $create_new_shortcode( 'gallery', 'pixxy_gallery_to_slider' );
            }
        }
    }

    add_action( 'wp', 'pixxy_kill_default_gallery' );


//  change gallery to slider
    if ( ! function_exists( 'pixxy_gallery_to_slider' ) ) {
        function pixxy_gallery_to_slider( $atts, $content = '', $id = '' ) {

            extract( shortcode_atts( array(
                'ids' => ''
            ), $atts ) );
            $ids = explode( ',', $ids );

            $output = '<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-add-slides="1" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1" data-space="0">';
            $output .= '<div class="swiper-wrapper">';
            $i      = 0;

            foreach ( $ids as $id ) {
                $all_img_info      = $attachment = get_post( $id );
                $image_description = $attachment->post_excerpt;
                $img_url           = wp_get_attachment_image_src( $id, 'pixxy_slider_portfolio' );
                $output            .= '<div class="swiper-slide active" data-val="' . $id . '">';
                $output            .= '<div class="img-wrap">';
                $output            .= '<img class="s-img-switch" src="' . $img_url[0] . '" alt="">';
                $output            .= '</div>';
                $output            .= '<div class="description">' . wp_kses_post( $image_description ) . '</div>';
                $output            .= '</div>';
                $i ++;
            }
            $output .= '</div>';
            $output .= '<div class="pagination hidden"></div>';
            $output .= '<div class="swiper-arrow-right"><div><i class="ion-ios-arrow-thin-right" aria-hidden="true"></i></div></div>';
            $output .= '<div class="swiper-arrow-left"><div><i class="ion-ios-arrow-thin-left" aria-hidden="true"></i></div></div>';
            $output .= '</div>';

            return $output;
        }
    }


    if ( ! function_exists( 'pixxyiframeDecoder' ) ) {
        function pixxyiframeDecoder( $iframe_code ) {
            $iframe_code = base64_decode( strip_tags( $iframe_code ) );
        }

        add_action( 'pixxyiframeDecoder', 'pixxyiframeDecoder' );
    }


    if ( ! function_exists( 'pixxy_products_slider_load' ) ) {
        function pixxy_products_slider_load() {

            $category = sanitize_text_field( $_POST['cats'] );
            $order    = sanitize_text_field($_POST['order']);
            $orderby  = sanitize_text_field($_POST['orderby']);
            $count    = sanitize_text_field($_POST['count']);

            $autoplay    = sanitize_text_field($_POST['autoplay']);
            $loop    = sanitize_text_field($_POST['loop']);
            $speed    = sanitize_text_field($_POST['speed']);
            $lg_count    = sanitize_text_field($_POST['addslides']);
            $md_count    = sanitize_text_field($_POST['mdslides']);
            $sm_count    = sanitize_text_field($_POST['smslides']);
            $xs_count    = sanitize_text_field($_POST['xsslides']);

            $args = array(
                'post_type'      => 'product',
                'order'          => $order,
                'orderby'        => $orderby,
                'posts_per_page' => $count,
            );

            $category = explode(",", $category);

            $args['tax_query'][] = array(
                'taxonomy' => 'product_cat',
                'terms'    => $category,
                'field'    => 'slug',
            );


            $prod_filter = new WP_Query( $args );



            $lg_count = $lg_count < ($prod_filter->found_posts) ? $lg_count : $prod_filter->found_posts;
            $md_count = $md_count < $prod_filter->found_posts ? $md_count : $prod_filter->found_posts;
            $sm_count = $sm_count < $prod_filter->found_posts ? $sm_count : $prod_filter->found_posts;
            $xs_count = $xs_count < $prod_filter->found_posts ? $xs_count : $prod_filter->found_posts;

            ob_start(); ?>

            <div class="swiper-container pixxy-product-filter" data-mouse="0"
                 data-autoplay="<?php echo esc_attr( $autoplay ); ?>" data-responsive="responsive" data-add-slides="<?php echo esc_attr($lg_count); ?>" data-lg-slides="<?php echo esc_attr($lg_count); ?>" data-md-slides="<?php echo esc_attr($md_count); ?>" data-sm-slides="<?php echo esc_attr($sm_count); ?>" data-xs-slides="<?php echo esc_attr($xs_count); ?>"
                 data-loop="<?php echo esc_attr( $loop ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>"
                 data-space="0" data-pagination-type="bullets"
                 data-mode="horizontal">
                <div class="swiper-wrapper">

                    <?php while ( $prod_filter->have_posts() ) : $prod_filter->the_post();

                        global $post, $product;

                        $filter_terms = wp_get_post_terms( $post->ID, 'product_cat' );
                        $termClass    = '';
                        if ( isset( $filter_terms ) && ! empty( $filter_terms ) ) {
                            foreach ( $filter_terms as $term ) {
                                $termClass .= '.' . $term->slug . ' ';
                            }
                        }

                        $product_meta = get_post_meta( $post->ID, 'pixxy_product_options' );
                        $label_new    = isset( $product_meta[0]['pixxy_product_new'] ) ? $product_meta[0]['pixxy_product_new'] : false; ?>

                        <div class="swiper-slide <?php echo esc_attr( $termClass ); ?>">

                            <div class="pixxy-prod-list-image">
                                <div class="image-wrap">
                                    <?php if ( $product->is_on_sale() && ! $label_new ) : ?>

                                        <?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'pixxy' ) . '</span>', $post, $product ); ?>

                                    <?php endif;

                                    if ( $label_new && ! $product->is_on_sale() ) { ?>
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
            <?php
            echo ob_get_clean();

            wp_die();
        }
    }


    add_action( 'wp_ajax_pixxy_products_slider_load', 'pixxy_products_slider_load' );
    add_action( 'wp_ajax_nopriv_pixxy_products_slider_load', 'pixxy_products_slider_load' );


	/**
	 *
	 * Image Picker and Theme options styling.
	 * @since 1.0.0
	 * @version 1.0.0
	 *
	 **/

	if ( ! function_exists( 'pixxy_enqueue_select' ) ){
		function pixxy_enqueue_select() {
			wp_enqueue_style( 'pixxy-admin-css', EF_URL . '/admin/assets/image-picker/admin.css' );
			wp_enqueue_style( 'pixxy-imagepicker-css', EF_URL . '/admin/assets/image-picker/image-picker.css' );
			wp_enqueue_script( 'pixxy-image-picker', EF_URL . '/admin/assets/image-picker/image-picker.min.js', array( 'jquery' ), false, true );
		}
	}

	add_action( 'admin_enqueue_scripts', 'pixxy_enqueue_select',99);


    if ( ! function_exists( 'pixxy_portfolio_slider_load' ) ) {
        function pixxy_portfolio_slider_load() {

            $category = sanitize_text_field( $_POST['cats'] );
            $order    = sanitize_text_field($_POST['order']);
            $orderby  = sanitize_text_field($_POST['orderby']);
            $count    = sanitize_text_field($_POST['count']);

            $autoplay    = sanitize_text_field($_POST['autoplay']);
            $speed    = sanitize_text_field($_POST['speed']);

            $args = array(
                'post_type'      => 'portfolio',
                'order'          => $order,
                'orderby'        => $orderby,
                'posts_per_page' => $count,
            );

            $category = explode(",", $category);

            $args['tax_query'][] = array(
                'taxonomy' => 'portfolio-category',
                'terms'    => $category,
                'field'    => 'slug',
            );


            $portfolio_filter = new WP_Query( $args );

            ob_start(); ?>

            <div class="swiper-container pixxy-portfolio-filter" data-mouse="0"
                 data-autoplay="<?php echo esc_attr( $autoplay ); ?>"
                 data-loop="1"
                 data-speed="<?php echo esc_attr( $speed ); ?>"
                 data-center="1" data-space="0" data-pagination-type="bullets"
                 data-mode="horizontal">
                <div class="swiper-wrapper">

                    <?php while ( $portfolio_filter->have_posts() ) : $portfolio_filter->the_post();

                        $filter_terms = wp_get_post_terms( $portfolio_filter->ID, 'portfolio-category' );
                        $termClass    = '';
                        if ( isset( $filter_terms ) && ! empty( $filter_terms ) ) {
                            foreach ( $filter_terms as $term ) {
                                $termClass .= '.' . $term->slug . ' ';
                            }
                        }

                        $portfolio_meta = get_post_meta( $portfolio_filter->ID, 'pixxy_portfolio_options' );
                        $link      = get_the_permalink();
                        $target    = '_self';

                        if ( $linked == 'none' && ! empty( $portfolio_meta['ext_link'] ) ) {
                            $link   = $portfolio_meta['ext_link'];
                            $target = '_blank';
                        }

                        if ( $blank == 'none' ) {
                            $target = '_self';
                        } elseif ( $blank == 'yes' ) {
                            $target = '_blank';
                        }
                        $images    = explode( ',', $portfolio_meta[0]['slider'] ); ?>


                        <div class="swiper-slide <?php echo esc_attr( $termClass ); ?>">

                            <div class="pixxy-portfolio-list-image">
                                <div class="image-wrap">
                                    <?php
                                    $image_id = get_post_thumbnail_id( $portfolio_meta->ID );
                                    if ( ! empty( $image_id ) && is_numeric( $image_id ) ) {
                                        $imageUrl = wp_get_attachment_image_url( $image_id, $image_original_size );
                                    } elseif ( ! empty( $images ) ) {
                                        $imageUrl = wp_get_attachment_image_url( $images[0], $image_original_size );
                                    } else {
                                        $imageUrl = '';
                                    }

                                    if(!empty($imageUrl)){
                                        echo pixxy_the_lazy_load_flter( $imageUrl, array(
                                            'class' => 's-img-switch',
                                        ) );
                                    } ?>

                                    <a href="<?php echo esc_attr($link); ?>" class="title" target="<?php echo esc_attr($target); ?>">
                                        <?php echo esc_html(get_the_title()); ?>
                                    </a>
                                </div>

                            </div>

                        </div>

                        <?php
                    endwhile; ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <?php
            echo ob_get_clean();

            wp_die();
        }
    }


    add_action( 'wp_ajax_pixxy_portfolio_slider_load', 'pixxy_portfolio_slider_load' );
    add_action( 'wp_ajax_nopriv_pixxy_portfolio_slider_load', 'pixxy_portfolio_slider_load' );


    /**
     *
     * Get instagram images.
     * @since 1.0.0
     * @version 1.0.0
     *
     **/
    if ( ! function_exists( 'pixxy_get_imstagram' ) ) {
        function pixxy_get_imstagram( $username, $count_photos = 7 ) {

	        if ( empty( $username ) ) {


		        $response = wp_remote_get( sprintf( 'https://api.instagram.com/v1/users/self/media/recent/?access_token=%s&count=%s', cs_get_option( 'access_token_instagram' ), $count_photos ) );
		        if ( is_wp_error( $response ) || 200 != wp_remote_retrieve_response_code( $response ) ) {
			        return false;
		        }

		        $data = json_decode( wp_remote_retrieve_body( $response ) );

		        $result = array();


		        $username = '';

		        foreach ( $data->data as $item ) {


			        $username = $item->user->username;


			        $crop_function = false;
			        $thumbnail     = $item->images->thumbnail->url;
			        preg_match( "/\/([c]\d{1,4}\.\d{1,4}\.\d{1,4}\.\d{1,4})\//", $thumbnail, $crop_function );

			        $result[] = array(
				        'link'      => $item->link,
				        'image-url' => $item->images->standard_resolution->url
			        );
		        }
		        $result = array( 'items' => $result, 'username' => $username );

		        return $result;

	        }
	        else {

		        $instagram = get_transient( 'instagram-media-' . sanitize_title_with_dashes( $username ) );
		        $remote_wp = wp_remote_get( "https://api.instagram.com/v1/users/" . cs_get_option( 'access_user_id' ) . "/media/recent/?access_token=" . cs_get_option( 'access_token_instagram' ), $count_photos);
		        $instagram_response = json_decode( $remote_wp['body'] );

		        $error = '';
		        if ( is_wp_error( $remote_wp ) ) {
			        $error = esc_html__( 'Unable to communicate with Instagram.', 'wiso' );
		        }

		        if ( 200 != wp_remote_retrieve_response_code( $remote_wp ) ) {
			        $error = esc_html__( 'Instagram error.', 'wiso' );
		        }

		        if ( empty( $error ) ) {
			        $result = array();

			        foreach ( $instagram_response->data as $key => $image ) {

				        $result[] = array(
					        'link'      =>  $image->link,
					        'image-url' =>  $image->images->standard_resolution->url
				        );

				        if ($key == $count_photos - 1) {
					        break;
				        }

			        }

			        $result = base64_encode( serialize( $result ) );
			        set_transient( 'instagram-media-' . sanitize_title_with_dashes( $username ), $result, apply_filters( 'null_instagram_cache_time', HOUR_IN_SECONDS * 2 ) );
		        }

		        if ( $error ) {
			        return $icontent = $error;
		        } else {
			        $result = unserialize( base64_decode( $result ) );
			        $result = array( 'items' => $result, 'username' => $username );

			        return $result;
		        }
	        }
        }
    }

} // end of class_exists