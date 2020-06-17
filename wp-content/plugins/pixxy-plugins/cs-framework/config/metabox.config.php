<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.

$options = array();

$options[] = array(
    'id' => 'pixxy_post_options',
    'title' => 'Post preview settings',
    'post_type' => 'post',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        array(
            'name' => 'section_3',
            'fields' => array(
                array(
                    'id' => 'post_preview_style',
                    'type' => 'select',
                    'title' => 'Preview style',
                    'options' => array(
                        'image' => 'Post image',
                        'text' => 'Quote',
                        'audio' => 'Soundcloud audio',
                        'video' => 'Video',
                        'slider' => 'Image slider',
                        'link' => 'Link'
                    ),
                    'default' => array('image')
                ),
                
                array(
                    'id' => 'post_preview_text',
                    'type' => 'wysiwyg',
                    'title' => 'Post preview text',
                    'dependency' => array('post_preview_style', '==', 'text')
                ),
	            array(
		            'id' => 'post_preview_author',
		            'type' => 'text',
		            'title' => 'Author',
		            'dependency' => array('post_preview_style', '==', 'text')
	            ),
	            array(
		            'id' => 'post_preview_link',
		            'type' => 'text',
		            'title' => 'Link',
		            'dependency' => array('post_preview_style', '==', 'link')
	            ),
                array(
                    'id' => 'post_preview_audio',
                    'type' => 'wysiwyg',
                    'title' => 'Soundcloud iframe',
                    'dependency' => array('post_preview_style', '==', 'audio')
                ),
                array(
                    'id' => 'post_preview_video',
                    'type' => 'text',
                    'title' => 'Video url from Youtube',
                    'dependency' => array('post_preview_style', '==', 'video')
                ),
                array(
                    'id' => 'post_preview_slider',
                    'type' => 'gallery',
                    'title' => 'Slider images',
                    'add_title' => 'Add Images',
                    'edit_title' => 'Edit Images',
                    'clear_title' => 'Remove Images',
                    'dependency' => array('post_preview_style', '==', 'slider')
                ),
                array(
                    'id' => 'pixxy_navigation_posts',
                    'type' => 'switcher',
                    'title' => 'Navigation in post item',
                    'default' => true
                ),
            )
        )
    )
);

$options[] = array(
    'id' => 'pixxy_portfolio_options',
    'title' => 'Portfolio details',
    'post_type' => 'portfolio',
    'context' => 'normal',
    'priority' => 'high',
    'sections' => array(
        array(
            'title' => 'Portfolio Options',
            'name' => 'section_4',
            'fields' => array(
                array(
                    'id' => 'portfolio_style',
                    'type' => 'image_select',
                    'title' => 'Select style for gallery',
                    'options' => array(
	                    'parallax'    => EF_URL . '/admin/assets/images/cs_images/portfolio_parallax.jpg',
	                    'left_gallery'    => EF_URL . '/admin/assets/images/cs_images/portfolio_left_gallery.jpg',
	                    'simple_gallery'    => EF_URL . '/admin/assets/images/cs_images/portfolio_simple_gallery.jpg',
	                    'simple_slider'    => EF_URL . '/admin/assets/images/cs_images/portfolio_simple_slider.jpg',
	                    'urban'    => EF_URL . '/admin/assets/images/cs_images/portfolio_urban.jpg',
	                    'tile_info'    => EF_URL . '/admin/assets/images/cs_images/portfolio_tile_info.jpg',
	                    'alia'    => EF_URL . '/admin/assets/images/cs_images/portfolio_alia.jpg',
	                    'menio'    => EF_URL . '/admin/assets/images/cs_images/portfolio_menio.jpg',
	                    'another'    => EF_URL . '/admin/assets/images/cs_images/portfolio_another.jpg',
                    ),
                    'radio'     => true,
                    'attributes'   => array(
	                    'data-depend-id' => 'portfolio_style',
                    ),
                ),
                array(
                    'id' => 'slider',
                    'type' => 'gallery',
                    'title' => 'Image gallery',
                    'add_title' => 'Add Images',
                    'edit_title' => 'Edit Images',
                    'clear_title' => 'Remove Images',
                ),
                array(
                    'id' => 'portfolio_img_size',
                    'type' => 'select',
                    'title' => 'Select size for images of gallery',
                    'options' => array_merge(array('full'),get_intermediate_image_sizes()),
                    'default'  => 'full',
                ),
	            array(
		            'id'             => 'gallery_column',
		            'type'           => 'select',
		            'title'          => 'Select count of columns for gallery',
		            'options'    => array(
			            'col-4' => 'Four',
			            'col-3'  => 'Three',
			            'col-6' => 'Two',
		            ),
		            'default' => 'col-4',
		            'dependency' => array('portfolio_style', 'any', 'masonry,grid,full_screen'),
	            ),
	            array(
		            'id'             => 'gallery_hover',
		            'type'           => 'select',
		            'title'          => 'Select hover for gallery',
		            'options'    => array(
			            'default' => 'Default',
			            'hover1'  => 'Zoom Out',
			            'hover2' => 'Slide',
			            'hover3' => 'Rotate',
			            'hover4' => 'Blur',
			            'hover5' => 'Gray Scale',
			            'hover6' => 'Sepia',
			            'hover7' => 'Blur + Gray Scale',
			            'hover8' => 'Opacity',
			            'hover9' => 'Shine',
		            ),
		            'default' => 'default',
		            'dependency' => array('portfolio_style', 'any', 'masonry,grid,full_screen,metro_2,metro_3,metro_4'),
	            ),

	            array(
		            'id' => 'additional_title',
		            'type' => 'text',
		            'title' => 'Additional title for content text',
		            'default' => '',
		            'dependency' => array('portfolio_style', '==', 'alia'),
	            ),
	            array(
		            'id' => 'additional_text',
		            'type' => 'textarea',
		            'title' => 'Additional text',
		            'default' => '',
		            'dependency' => array('portfolio_style', 'any', 'alia,menio'),
	            ),
	            array(
		            'id' => 'images',
		            'type' => 'gallery',
		            'title' => 'Additional gallery',
		            'add_title' => 'Add Images',
		            'edit_title' => 'Edit Images',
		            'clear_title' => 'Remove Images',
		            'dependency' => array('portfolio_style', 'any', 'simple_slider,alia,menio'),
	            ),
	            array(
		            'id' => 'blockquote',
		            'type' => 'textarea',
		            'title' => 'Blockquote text',
		            'default' => '',
		            'dependency' => array('portfolio_style', 'any', 'simple_slider,urban,tile_info,menio'),
	            ),
	            array(
		            'id' => 'blockquote_author',
		            'type' => 'text',
		            'title' => 'Blockquote author',
		            'default' => '',
		            'dependency' => array('portfolio_style', 'any', 'simple_slider,urban,tile_info,menio'),
	            ),
	            array(
		            'id'      => 'enable_recent_posts',
		            'type'    => 'switcher',
		            'title'   => 'Enable Recent Posts?',
		            'default' => true,
		            'dependency' => array('portfolio_style', 'any', 'tile_info,menio'),
	            ),
	            array(
		            'id' => 'recent_subtitle',
		            'type' => 'text',
		            'title' => 'Subtitle for recent posts',
		            'default' => '',
		            'dependency' => array('portfolio_style|enable_recent_posts', 'any|==', 'menio,tile_info|true'),
	            ),
	            array(
		            'id' => 'recent_title',
		            'type' => 'text',
		            'title' => 'Title for recent posts',
		            'default' => '',
		            'dependency' => array('portfolio_style|enable_recent_posts', 'any|==', 'menio,tile_info|true'),
	            ),
                array(
                    'id' => 'parallax_mobile',
                    'type' => 'switcher',
                    'title' => 'Enable parallax on mobile devices?',
                    'default' => false,
                    'dependency' => array('portfolio_style', '==', 'parallax'),
                ),
                array(
                    'id' => 'pixxy_social_portfolio',
                    'type' => 'switcher',
                    'title' => 'Social sharing in portfolio post',
                    'default' => true
                ),
	            array(
		            'id' => 'portfolio_btn',
		            'type' => 'text',
		            'title' => 'Additional button',
		            'default' => '',
		            'dependency' => array('portfolio_style', 'any', 'left_gallery,simple,simple_slider,urban,alia'),
	            ),
	            array(
		            'id' => 'portfolio_btn_url',
		            'type' => 'text',
		            'title' => 'Additional button URL',
		            'default' => '',
		            'dependency' => array('portfolio_style', 'any', 'left_gallery,simple,simple_slider,urban,alia'),
	            ),
	            array(
		            'id' => 'btn_style',
		            'type' => 'image_select',
		            'title' => 'Button style',
		            'options'   => array(
			            'a-btn'    => EF_URL . '/admin/assets/images/cs_images/button_default.jpg',
			            'a-btn-2'   => EF_URL . '/admin/assets/images/cs_images/button_dark.jpg',
			            'a-btn-3'   => EF_URL . '/admin/assets/images/cs_images/button_light.jpg',
			            'a-btn-4'   => EF_URL . '/admin/assets/images/cs_images/button_white.jpg',
			            'a-btn-5'   => EF_URL . '/admin/assets/images/cs_images/button_transparent.jpg',
			            'a-btn-6'   => EF_URL . '/admin/assets/images/cs_images/button_link.jpg',
			            'a-btn-7'   => EF_URL . '/admin/assets/images/cs_images/button_gradient.jpg',
		            ),
		            'radio'     => true,
		            'attributes'   => array(
			            'data-depend-id' => 'btn_style',
		            ),
		            'dependency' => array('portfolio_style', 'any', 'left_gallery,simple,simple_slider,urban,alia'),
	            ),
                array(
                    'id' => 'pixxy_navigation_portfolio',
                    'type' => 'switcher',
                    'title' => 'Navigation in portfolio post',
                    'default' => true
                ),
                array(
                    'id' => 'ext_link',
                    'type' => 'text',
                    'title' => 'External link',
                ),
            )
        ),
        array(
            'title' => 'Header Options',
            'name' => 'section_4_1',
            'fields' => array(
	            array(
		            'id' => 'change_menu',
		            'type' => 'switcher',
		            'title' => 'Change menu style for this page?',
		            'default' => false
	            ),
	            array(
		            'id'      => 'menu_style',
		            'type'    => 'image_select',
		            'title'   => 'Menu style',
		            'options'   => array(
			            'classic'    => EF_URL . '/admin/assets/images/cs_images/menu_classic.jpg',
			            'simple'   => EF_URL . '/admin/assets/images/cs_images/menu_simple.jpg',
			            'only_logo'   => EF_URL . '/admin/assets/images/cs_images/menu_only_logo.jpg',
		            ),
		            'radio'     => true,
		            'attributes'   => array(
			            'data-depend-id' => 'menu_style',
		            ),
		            'default' => 'classic',
		            'dependency' => array( 'change_menu', '==', true ),
	            ),
                array(
                    'id' => 'scroll_bg_menu',
                    'type' => 'switcher',
                    'title' => 'Change style menu on scroll for dark style?',
                    'desc' => '',
                    'dependency' => array( 'change_menu', '==', true ),
                    'default' => false
                ),
	            array(
		            'id'      => 'menu_container',
		            'type'    => 'switcher',
		            'title'   => 'Menu in container?',
		            'default' => false,
                    'desc'    => 'Only for classic menu style',
		            'dependency' => array( 'menu_style|change_menu', '==|==', 'classic|true' ),
	            ),
                array(
                    'id' => 'menu_light_text',
                    'type' => 'switcher',
                    'title' => 'Light style for header',
                    'default' => false,
                    'dependency' => array( 'change_menu', '==', 'true' ),
                ),
                array(
                    'id'      => 'underline_menu',
                    'type'    => 'switcher',
                    'title'   => 'Enable underline style for menu',
                    'default' => false,
                    'desc'    => 'Only for classic menu style && header style light && header style - fixed transparent',
                    'dependency' => array( 'menu_style|change_menu|menu_light_text', '==|==', 'classic|true|true' ),
                ),
	            array(
		            'id'    => 'style_header',
		            'type'  => 'select',
		            'title' => 'Select header style',
		            'options' => array(
                        'transparent' => 'Fixed transparent',
                        'default'     => 'Static',
                        'fixed'       => 'Fixed',
			            'none' => 'None'
		            ),
		            'default' => 'empty',
		            'desc' => 'Only for Classic and Modern and Only Logo menu style.',
	            ),
	            array(
		            'id' => 'image_page_logo',
		            'type' => 'upload',
		            'title' => 'Site Logo',
		            'default' => '',
		            'desc' => 'Only if option "Type of site logo" = "Image Logo"(Themes Options). Upload any media using the WordPress Native Uploader.',
	            ),
	            array(
		            'id'         => 'image_logo_scroll',
		            'type'       => 'upload',
		            'title'      => 'Site Logo on scroll',
		            'default'    => '',
                    'desc' => 'Only if options "Type of site logo" = "Image Logo"(Themes Options) and "Header style" = "Fixed transparent". Upload any media using the WordPress Native Uploader.',
	            ),
	            array(
		            'id'         => 'image_logo_mobile',
		            'type'       => 'upload',
		            'title'      => 'Site Logo on mobile',
		            'default'    => '',
                    'desc' => 'Only if option "Type of site logo" = "Image Logo"(Themes Options). Upload any media using the WordPress Native Uploader.',
	            ),
	            array(
		            'id'      => 'header_scroll_bg',
		            'type'    => 'color_picker',
		            'title'   => 'Change Header Scroll Background Color',
		            'default' => '',
                    'desc' => 'Only if options "Change style menu on scroll for dark style?" = "Off" and "Header style" = "Fixed transparent".'
	            ),
	            array(
		            'id'      => 'header_scroll_text',
		            'type'    => 'color_picker',
		            'title'   => 'Change Header Scroll Text Color',
		            'default' => '',
                    'desc' => 'Only if options "Change style menu on scroll for dark style?" = "Off" and "Header style" = "Fixed transparent".'
	            ),
            )
        ),
        array(
            'title' => 'Footer Options',
            'name' => 'section_4_2',
            'fields' => array(
	            array(
		            'id'             => 'pixxy_footer_style',
		            'type'           => 'image_select',
		            'title'          => 'Footer style',
		            'options'   => array(
			            'default'    => EF_URL . '/admin/assets/images/cs_images/footer_default.jpg',
			            'simple'    => EF_URL . '/admin/assets/images/cs_images/footer_simple.jpg',
			            'modern'   => EF_URL . '/admin/assets/images/cs_images/footer_modern.jpg',
			            'classic'   => EF_URL . '/admin/assets/images/cs_images/footer_classic.jpg',
			            'none'   => EF_URL . '/admin/assets/images/cs_images/footer_none.jpg',
		            ),
		            'radio'     => true,
		            'attributes'   => array(
			            'data-depend-id' => 'pixxy_footer_style',
		            ),
	            ),
	            array(
		            'id' => 'fixed_transparent_footer',
		            'type' => 'switcher',
		            'title' => 'Fixed and tranparent footer',
		            'label' => 'Do you want to it ?',
		            'default' => false
	            ),
	            array(
		            'id'      => 'enable_parallax_footer_page',
		            'type'    => 'switcher',
		            'title'   => 'Enable Parallax Footer',
		            'default' => false,
		            'dependency' => array( 'fixed_transparent_footer', '==|!=', 'false' ),
	            ),
	            array(
		            'id'      => 'footer_color',
		            'type'    => 'color_picker',
		            'title'   => 'Change Footer Background Color',
		            'default' => '',
	            ),
                array(
                    'id'      => 'enable_footer_top',
                    'type'    => 'switcher',
                    'title'   => 'Enable Footer Top Section',
                    'default' => true,
                    'dependency' => array( 'pixxy_footer_style', 'any', 'simple,modern' ),
                ),
                array(
                    'id'      => 'enable_footer_copy_page',
                    'type'    => 'switcher',
                    'title'   => 'Enable Footer copyright',
                    'default' => true,
                    'dependency' => array( 'pixxy_footer_style', '==', 'simple' ),
                ),
                array(
                    'id'      => 'enable_footer_instagram',
                    'type'    => 'switcher',
                    'title'   => 'Enable Footer instagram',
                    'default' => true,
                    'dependency' => array( 'pixxy_footer_style', '==', 'simple' ),
                ),
                array(
                    'id'      => 'enable_footer_social',
                    'type'    => 'switcher',
                    'title'   => 'Enable Footer social',
                    'default' => true,
                    'dependency' => array( 'pixxy_footer_style', '==', 'simple' ),
                ),
            )
        ),
    )
);

$options[] = array(
	'id' => 'pixxy_product_options',
	'title' => 'Product options',
	'post_type' => 'product',
	'context' => 'side',
	'priority' => 'default',
	'sections' => array(
		array(
			'name' => 'section_product',
			'fields' => array(
				array(
					'id' => 'pixxy_product_new',
					'type' => 'switcher',
					'title' => 'Add label New?',
					'default' => false
				),
				array(
					'id' => 'pixxy_additional_text',
					'type' => 'textarea',
					'title' => 'Additional text'
				),
			)
		)
	)
);

$options[] = array(
	'id' => 'pixxy_product_slider',
	'title' => 'Product addition params',
	'post_type' => 'product',
	'context' => 'side',
	'priority' => 'default',
	'sections' => array(
		array(
			'name' => 'section_product',
			'fields' => array(
				array(
					'id' => 'pixxy_slider_background-image',
					'type' => 'upload',
					'title' => 'Background image',
					'default' => '',
					'desc' => 'Will be used in product slider shortcode. Upload any media using the WordPress Native Uploader.',
				),
				array(
					'id'      => 'pixxy_slider_background-color',
					'type'    => 'color_picker',
					'title'   => 'Background Color',
					'default' => '',
                    'desc' => 'Will be used in product slider shortcode and for product background color.'
				),
				array(
					'id' => 'pixxy_slider_label',
					'type' => 'text',
					'title' => 'Background title',
                    'desc' => 'Will be used in product slider shortcode.'
				),
				array(
					'id'    => 'pixxy_slider_content',
					'type'  => 'select',
					'title' => 'Content color',
					'options' => array(
						'dark'  => 'Dark',
						'light' => 'Light'
					),
                    'desc' => 'Will be used in product slider shortcode.'
				),
				array(
					'id'    => 'pixxy_slider_button',
					'type'  => 'select',
					'title' => 'Button style',
					'options' => array(
						'blue' => 'Blue',
						'dark'  => 'Dark',
						'light' => 'Light'
					),
                    'desc' => 'Will be used in product slider shortcode.'
				),
			)
		)
	)
);

$options[] = array(
    'id' => '_custom_page_options',
    'title' => 'Custom Options',
    'post_type' => 'page', // or post or CPT
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        array(
            'name' => 'header_options',
            'title' => 'Header Options',
            'fields' => array(
                array(
                    'id' => 'change_menu',
                    'type' => 'switcher',
                    'title' => 'Change menu style for this page?',
                    'default' => false
                ),
                array(
                    'id'      => 'menu_style',
                    'type'    => 'image_select',
                    'title'   => 'Menu style',
                    'options'   => array(
	                    'classic'    => EF_URL . '/admin/assets/images/cs_images/menu_classic.jpg',
	                    'simple'   => EF_URL . '/admin/assets/images/cs_images/menu_simple.jpg',
	                    'only_logo'   => EF_URL . '/admin/assets/images/cs_images/menu_only_logo.jpg',
                    ),
                    'radio'     => true,
                    'attributes'   => array(
	                    'data-depend-id' => 'menu_style',
                    ),
                    'default' => 'classic',
                    'dependency' => array( 'change_menu', '==', true ),
                ),
                array(
                    'id' => 'scroll_bg_menu',
                    'type' => 'switcher',
                    'title' => 'Change style menu on scroll for dark style?',
                    'desc' => '',
                    'dependency' => array( 'change_menu', '==', true ),
                    'default' => false
                ),
                array(
                    'id'      => 'menu_container',
                    'type'    => 'switcher',
                    'title'   => 'Menu in container?',
                    'default' => false,
                    'desc'    => 'Only for classic menu style',
                    'dependency' => array( 'menu_style|change_menu', '==|==', 'classic|true' ),
                ),
                array(
                    'id' => 'menu_light_text',
                    'type' => 'switcher',
                    'title' => 'Light style for header',
                    'default' => false,
                    'dependency' => array( 'change_menu', '==', 'true' ),
                ),
                array(
                    'id'      => 'underline_menu',
                    'type'    => 'switcher',
                    'title'   => 'Enable underline style for menu',
                    'default' => false,
                    'desc'    => 'Only for classic menu style && header style light && header style - fixed transparent',
                    'dependency' => array( 'menu_style|change_menu', '==|==', 'classic|true' ),
                    'dependency' => array( 'menu_style|change_menu|menu_light_text', '==|==', 'classic|true|true' ),
                ),
                array(
                    'id'    => 'style_header',
                    'type'  => 'select',
                    'title' => 'Select header style',
                    'options' => array(
                        'transparent' => 'Fixed transparent',
                        'default'     => 'Static',
                        'fixed'       => 'Fixed',
                        'none' => 'None'
                    ),
                    'default' => 'empty',
                    'desc' => 'Only for Classic and Modern and Only Logo menu style.',
                ),
                array(
                    'id' => 'image_page_logo',
                    'type' => 'upload',
                    'title' => 'Site Logo',
                    'default' => '',
                    'desc' => 'Only if option "Type of site logo" = "Image Logo"(Themes Options). Upload any media using the WordPress Native Uploader.',
                ),
                array(
                    'id'         => 'image_logo_scroll',
                    'type'       => 'upload',
                    'title'      => 'Site Logo on scroll',
                    'default'    => '',
                    'desc' => 'Only if options "Type of site logo" = "Image Logo"(Themes Options) and "Header style" = "Fixed transparent". Upload any media using the WordPress Native Uploader.',
                ),
                array(
                    'id'         => 'image_logo_mobile',
                    'type'       => 'upload',
                    'title'      => 'Site Logo on mobile',
                    'default'    => '',
                    'desc' => 'Only if option "Type of site logo" = "Image Logo"(Themes Options). Upload any media using the WordPress Native Uploader.',
                ),
                array(
                    'id'      => 'header_scroll_bg',
                    'type'    => 'color_picker',
                    'title'   => 'Change Header Scroll Background Color',
                    'default' => '',
                    'desc' => 'Only if options "Change style menu on scroll for dark style?" = "Off" and "Header style" = "Fixed transparent".'
                ),
                array(
                    'id'      => 'header_scroll_text',
                    'type'    => 'color_picker',
                    'title'   => 'Change Header Scroll Text Color',
                    'default' => '',
                    'desc' => 'Only if options "Change style menu on scroll for dark style?" = "Off" and "Header style" = "Fixed transparent".'
                ),
            ),
        ),
        array(
            'name' => 'footer_options',
            'title' => 'Footer Options',
            'fields' => array(
	            array(
		            'id'             => 'pixxy_footer_style',
		            'type'           => 'image_select',
		            'title'          => 'Footer style',
		            'options'   => array(
			            'default'    => EF_URL . '/admin/assets/images/cs_images/footer_default.jpg',
			            'simple'    => EF_URL . '/admin/assets/images/cs_images/footer_simple.jpg',
			            'modern'   => EF_URL . '/admin/assets/images/cs_images/footer_modern.jpg',
			            'classic'   => EF_URL . '/admin/assets/images/cs_images/footer_classic.jpg',
			            'none'   => EF_URL . '/admin/assets/images/cs_images/footer_none.jpg',
		            ),
		            'radio'     => true,
		            'attributes'   => array(
			            'data-depend-id' => 'pixxy_footer_style',
		            ),
	            ),
	            array(
		            'id' => 'fixed_transparent_footer',
		            'type' => 'switcher',
		            'title' => 'Fixed and tranparent footer',
		            'label' => 'Do you want to it ?',
		            'default' => false
	            ),
	            array(
		            'id'      => 'enable_parallax_footer_page',
		            'type'    => 'switcher',
		            'title'   => 'Enable Parallax Footer',
		            'default' => false,
                    'dependency' => array( 'fixed_transparent_footer', '==|!=', 'false' ),
	            ),
	            array(
		            'id'      => 'footer_color',
		            'type'    => 'color_picker',
		            'title'   => 'Change Footer Background Color',
		            'default' => '',
	            ),
                array(
                    'id'      => 'enable_footer_top',
                    'type'    => 'switcher',
                    'title'   => 'Enable Footer Top Section',
                    'default' => true,
                    'dependency' => array( 'pixxy_footer_style', 'any', 'simple,modern' ),
                ),
                array(
                    'id'      => 'enable_footer_copy_page',
                    'type'    => 'switcher',
                    'title'   => 'Enable Footer copyright',
                    'default' => true,
                    'dependency' => array( 'pixxy_footer_style', '==', 'simple' ),
                ),
                array(
                    'id'      => 'enable_footer_instagram',
                    'type'    => 'switcher',
                    'title'   => 'Enable Footer instagram',
                    'default' => true,
                    'dependency' => array( 'pixxy_footer_style', '==', 'simple' ),
                ),
                array(
                    'id'      => 'enable_footer_social',
                    'type'    => 'switcher',
                    'title'   => 'Enable Footer social',
                    'default' => true,
                    'dependency' => array( 'pixxy_footer_style', '==', 'simple' ),
                ),
            ),
        ),
        array(
            'name' => 'other_options',
            'title' => 'Other Options',
            'fields' => array(
                array(
                    'id'    => 'padding_desktop',
                    'type'  => 'text',
                    'title' => 'Custom desktop paddings (left and right) for page'
                ),
                array(
                    'id'    => 'padding_mobile',
                    'type'  => 'text',
                    'title' => 'Custom mobile paddings (left and right) for page'
                ),
	            array(
		            'id' => 'disable_lazy_load',
		            'type'  => 'select',
		            'title' => 'Do you want disable lazy on this page?',
		            'options' => array(
			            'no' => 'No',
			            'yes'  => 'Yes',
		            ),
	            ),
            ),
        ),
    ),
);

CSFramework_Metabox::instance($options);
