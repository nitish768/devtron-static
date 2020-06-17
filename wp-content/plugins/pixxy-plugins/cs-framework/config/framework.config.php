<?php if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings = array(
	'menu_title' => 'Theme Options',
	'menu_type'  => 'add_menu_page',
	'menu_slug'  => 'cs-framework',
	'ajax_save'  => false,
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// ----------------------------------------
// general option section
// ----------------------------------------
$options[] = array(
	'name'   => 'general',
	'title'  => 'General',
	'icon'   => 'fa fa-globe',
	'fields' => array(
		array(
			'id'      => 'enable_lazy_load',
			'type'    => 'switcher',
			'title'   => 'Enable lazy load',
			'desc'    => 'This option is available for Images and Maps',
			'default' => true
		),
		array(
		  'id'    => 'pixxy_enable_coming_soon',
		  'type'  => 'switcher',
		  'title' => 'Enable Coming Soon',
		),
		array(
		  'id'             => 'pixxy_page_coming_soon',
		  'type'           => 'select',
		  'title'          => 'Page Coming Soon',
		  'options'        => 'pages',
		  'query_args'    => array(
		      'sort_order'  => 'ASC',
		      'sort_column' => 'post_title',
		   ),
		),
		array(
			'id'    => 'enable_copyright',
			'type'  => 'switcher',
			'title' => 'Enable Copyright',
			'default' => false,
		),
		array(
			'id'         => 'text_copyright',
			'type'       => 'wysiwyg',
			'title'      => 'Text Copyright',
			'default'    => '@2017 Pixxy',
			'dependency' => array( 'enable_copyright', '==', 'true' ),
		),
		array(
		  'id'    => 'pixxy_disable_preloader',
		  'type'  => 'switcher',
		  'title' => 'Disable Preloader',
		  'default' => false,
		),
		array(
			'id'      => 'preloader_type',
			'type'    => 'select',
			'title'   => 'Type of preloader:',
			'options' => array(
				'image' => 'Image',
				'spinner' => 'Spinner',
				'modern_text' => 'Modern text'
			),
			'dependency' => array( 'pixxy_disable_preloader', '==', false ),
		),
        array(
            'id'         => 'first_preloader_text',
            'type'       => 'text',
            'title'      => 'First text for modern preloader',
            'default'    => 'loading',
            'dependency' => array( 'pixxy_disable_preloader|preloader_type', '==|==', 'false|modern_text' ),
            'desc' =>  'Enter first text for preloader',
        ),
        array(
            'id'         => 'second_preloader_text',
            'type'       => 'text',
            'title'      => 'Second text for modern preloader',
            'default'    => 'please wait',
            'dependency' => array( 'pixxy_disable_preloader|preloader_type', '==|==', 'false|modern_text' ),
            'desc' =>  'Enter second text for preloader',
        ),
		array(
			'id'         => 'preloader_text',
			'type'       => 'text',
			'title'      => 'Text for preloader',
			'default'    => 'I',
			'dependency' => array( 'pixxy_disable_preloader|preloader_type', '==|==', 'false|text' ),
		),
		array(
			'id'      => 'preloader_image',
			'type'    => 'image',
			'title'   => 'Preloader Image',
			'default' => '',
			'dependency' => array( 'pixxy_disable_preloader|preloader_type', '==|==', 'false|image' ),
		),
	) // end: fields
);


// ----------------------------------------
// Socials API Configuration
// ----------------------------------------
$options[]      = array(
	'name'        => 'socials',
	'title'       => 'Social',
	'icon'        => 'fa fa-instagram',

	// begin: fields
	'fields'      => array(
		array(
			'id'      => 'insta_username',
			'type'    => 'text',
			'title'   => 'Instagram username',
			'default' => '',
			'desc' => 'Enter Instagram username'
		),
		array(
			'id'      => 'insta_count',
			'type'    => 'text',
			'title'   => 'Instagram count images',
			'default' => '',
			'desc' => 'Enter count images'
		),
		array(
			'id'      => 'access_token_instagram',
			'type'    => 'text',
			'title'   => 'Instagram access token',
			'default' => '',
			'desc' => 'Enter Instagram access token'
		),
		array(
			'id'      => 'access_user_id',
			'type'    => 'text',
			'title'   => 'Instagram user id',
			'default' => '',
			'desc' => 'Enter Instagram user id'
		),
	) // end: fields
);


// ----------------------------------------
// Header option section
// ----------------------------------------
$options[] = array(
	'name'   => 'header',
	'title'  => 'Header',
	'icon'   => 'fa fa-star',
	'fields' => array(
		//enable fixed menu
		//Site logo
		array(
			'id'      => 'menu_style',
			'type'    => 'image_select',
			'title'   => 'Menu style',
			'default' => 'classic',
			'options'   => array(
				'classic'    => EF_URL . '/admin/assets/images/cs_images/menu_classic.jpg',
				'simple'   => EF_URL . '/admin/assets/images/cs_images/menu_simple.jpg',
				'only_logo'   => EF_URL . '/admin/assets/images/cs_images/menu_only_logo.jpg',
			),
			'radio'     => true,
			'attributes'   => array(
				'data-depend-id' => 'menu_style',
			),
		),
		array(
			'id'      => 'mobile_menu',
			'type'    => 'switcher',
			'title'   => 'Enable mobile menu from width 1024px?',
			'default' => false,
            'dependency' => array( 'menu_style', '==', 'classic' ),
		),
		array(
			'id'      => 'site_logo',
			'type'    => 'radio',
			'title'   => 'Type of site logo',
			'options' => array(
				'txtlogo' => 'Text Logo',
				'imglogo' => 'Image Logo',
			),
			'default' => array( 'txtlogo' ),
		),
		array(
			'id'         => 'text_logo',
			'type'       => 'text',
			'title'      => 'Text Logo',
			'default'    => 'Pixxy',
			'sanitize'    => 'textarea',
			'dependency' => array( 'site_logo_txtlogo', '==', 'true' ),
		),
		array(
			'id'         => 'text_logo_style',
			'type'       => 'radio',
			'title'      => 'Text logo style',
			'options'    => array(
				'default' => 'Default',
				'custom'  => 'Custom',
			),
			'default'    => array( 'default' ),
			'dependency' => array( 'site_logo_txtlogo', '==', 'true' )
		),
		array(
			'id'         => 'text_logo_width',
			'type'       => 'text',
			'title'      => 'Max width logo section',
			'default'    => '70px',
			'dependency' => array( 'text_logo_style_custom|site_logo_txtlogo', '==|==', 'true|true' )
		),
		array(
			'id'         => 'text_logo_color',
			'type'       => 'color_picker',
			'title'      => 'Text Logo Color',
			'default'    => '#fff',
			'dependency' => array( 'text_logo_style_custom|site_logo_txtlogo', '==|==', 'true|true' )
		),
		array(
			'id'         => 'text_logo_font_size',
			'type'       => 'text',
			'title'      => 'Text logo font size',
			'desc'       => 'By default the logo have 30px font size',
			'default'    => '30px',
			'dependency' => array( 'text_logo_style_custom|site_logo_txtlogo', '==|==', 'true|true' )
		),
		array(
			'id'         => 'image_logo',
			'type'       => 'upload',
			'title'      => 'Site Logo',
			'default'    => get_template_directory_uri() . '/assets/images/logo.png',
			'desc'       => 'Upload any media using the WordPress Native Uploader.',
			'dependency' => array( 'site_logo_imglogo', '==|==', 'true' ),
		),
		array(
			'id'         => 'image_logo_light',
			'type'       => 'upload',
			'title'      => 'Site Logo for light style',
			'default'    => get_template_directory_uri() . '/assets/images/logo-light.png',
			'desc'       => 'Upload any media using the WordPress Native Uploader.',
			'dependency' => array( 'site_logo_imglogo', '==|==', 'true' ),
		),
        array(
            'id'         => 'image_logo_scroll',
            'type'       => 'upload',
            'title'      => 'Site Logo on scroll',
            'default'    => get_template_directory_uri() . '/assets/images/logo.png',
            'desc'       => 'Upload any media using the WordPress Native Uploader.',
            'dependency' => array( 'site_logo_imglogo', '==', 'true' ),
        ),
		array(
			'id'         => 'img_logo_style',
			'type'       => 'radio',
			'title'      => 'Image logo style',
			'options'    => array(
				'default' => 'Default',
				'custom'  => 'Custom',
			),
			'default'    => array( 'default' ),
			'dependency' => array( 'site_logo_imglogo', '==', 'true' )
		),
		array(
			'id'         => 'img_logo_width',
			'type'       => 'text',
			'title'      => 'Site Logo Width Size*',
			'desc'       => 'By default the logo have 60px width size',
			'dependency' => array( 'img_logo_style_custom|site_logo_imglogo', '==|==', 'true|true' )
		),
		array(
			'id'         => 'img_logo_height',
			'type'       => 'text',
			'title'      => 'Site Logo Height Size*',
			'desc'       => 'By default the logo have 52px height size',
			'dependency' => array( 'img_logo_style_custom|site_logo_imglogo', '==|==', 'true|true' )
		),

	) // end: fields
);

// Typography
$options[] = array(
	'name'   => 'typography',
	'title'  => 'Typography',
	'icon'   => 'fa fa-font',
	'fields'      => array(

		array(
		  'type'    => 'heading',
		  'content' => 'Typography Headings',
		),
		array(
			'id'              => 'heading',
			'type'            => 'group',
			'title'           => 'Typography Headings',
			'button_title'    => 'Add New',
			'accordion_title' => 'Add New',

			// begin: fields
			'fields'      => array(

			    // header size
			    array(
			      'id'             => 'heading_tag',
			      'type'           => 'select',
			      'title'          => 'Title Tag',
			      'options'        => array(
			        'h1'             => esc_html__('H1','pixxy'),
			        'h2'             => esc_html__('H2','pixxy'),
			        'h3'             => esc_html__('H3','pixxy'),
			        'h4'             => esc_html__('H4','pixxy'),
			        'h5'             => esc_html__('H5','pixxy'),
			        'h6'             => esc_html__('H6','pixxy'),
			        'p'             => esc_html__('Paragraph','pixxy'),
			      ),
			    ),

			    // font family
			    array(
			      'id'        => 'heading_family',
			      'type'      => 'typography',
			      'title'     => 'Font Family',
			      'default'   => array(
			        'family'  => 'Open Sans',
			        'variant' => 'regular',
			        'font'    => 'google', // this is helper for output
			      ),
			    ),

			    // font size
			    array(
			      'id'          => 'heading_size',
			      'type'        => 'text',
			      'title'       => 'Font Size (in px)',
			      'default'     => '54px',
			    ),
			),
		),

		array(
		  'type'    => 'heading',
		  'content' => 'Typography Menu',
		),
		// menu
		array(
		  'id'        => 'menu_item_family',
		  'type'      => 'typography',
		  'title'     => 'Menu Item Font Family',
		  'default'   => array(
		    'family'  => 'Montserrat',
		    'variant' => 'regular',
		    'font'    => 'google', // this is helper for output
		  ),
		),

		// font size
		array(
		  'id'          => 'menu_item_size',
		  'type'        => 'text',
		  'title'       => 'Menu Item Font Size (in px)',
		  'default'     => '',
		),

		// line height
		array(
		  'id'          => 'menu_line_height',
		  'type'        => 'text',
		  'title'       => 'Menu Line Height',
		  'default'     => '',
		),

		//submenu
		array(
		  'id'        => 'submenu_item_family',
		  'type'      => 'typography',
		  'title'     => 'Submenu Item Font Family',
		  'default'   => array(
		    'family'  => 'Montserrat',
		    'variant' => 'regular',
		    'font'    => 'google', // this is helper for output
		  ),
		),

		// font size
		array(
		  'id'          => 'submenu_item_size',
		  'type'        => 'text',
		  'title'       => 'Submenu Item Font Size (in px)',
		  'default'     => '',
		),

		// line height
		array(
		  'id'          => 'submenu_line_height',
		  'type'        => 'text',
		  'title'       => 'Submenu Line Height',
		  'default'     => '',
		),
		array(
		  'type'    => 'heading',
		  'content' => 'Typography Button',
		),

		array(
		  'id'        => 'all_button_font_family',
		  'type'      => 'typography',
		  'title'     => 'Button Font Family',
		  'default'   => array(
		    'family'  => '',
		    'variant' => 'regular',
		    'font'    => 'websafe', // this is helper for output
		  ),
		),

		// font size
		array(
		  'id'          => 'all_button_font_size',
		  'type'        => 'text',
		  'title'       => 'Button Font Size (in px)',
		  'default'     => '',
		),

		// line height
		array(
		  'id'          => 'all_button_line_height',
		  'type'        => 'text',
		  'title'       => 'Button Line Height',
		  'default'     => '',
		),

		// font color
		array(
		  'id'          => 'all_button_letter_spacing',
		  'type'        => 'text',
		  'title'       => 'Letter Spacing (in px)',
		  'default' => '',
		),
		array(
		  'type'    => 'heading',
		  'content' => 'Typography Links',
		),

		array(
		  'id'        => 'all_links_font_family',
		  'type'      => 'typography',
		  'title'     => 'Button Font Family',
		  'default'   => array(
		    'family'  => '',
		    'variant' => 'regular',
		    'font'    => 'websafe', // this is helper for output
		  ),
		),

		// font size
		array(
		  'id'          => 'all_links_font_size',
		  'type'        => 'text',
		  'title'       => 'Links Font Size (in px)',
		  'default'     => '',
		),

		// line height
		array(
		  'id'          => 'all_links_line_height',
		  'type'        => 'text',
		  'title'       => 'Links Line Height',
		  'default'     => '',
		),

		// font color
		array(
		  'id'          => 'all_links_letter_spacing',
		  'type'        => 'text',
		  'title'       => 'Links Letter Spacing (in px)',
		  'default' => '',
		),
	),
);


// ----------------------------------------
// Custom color
// ----------------------------------------

$options[] = array(
	'name'   => 'theme_colors',
	'title'  => 'Theme Color',
	'icon'   => 'fa fa-magic',
	// begin: fields
	'fields' => array(
		array(
			'id'      => 'change_colors',
			'type'    => 'switcher',
			'title'   => 'Change colors?',
			'default' => false
		),
		array(
			'id'      => 'menu_font_color',
			'type'    => 'color_picker',
			'title'   => 'Menu Font Color',
			'default' => '#222222',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'menu_bg_color',
			'type'    => 'color_picker',
			'title'   => 'Menu Background Color',
			'default' => '#ffffff',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'submenu_bg_color',
			'type'    => 'color_picker',
			'title'   => 'Submenu Background Color',
			'default' => '#ffffff',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'menu_bg_color_scroll',
			'type'    => 'color_picker',
			'title'   => 'Menu Background Color On Scroll',
			'default' => '#ffffff',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'menu_text_color_scroll',
			'type'    => 'color_picker',
			'title'   => 'Menu Text Color On Scroll',
			'default' => '#222222',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'menu_font_color_t',
			'type'    => 'color_picker',
			'title'   => 'Menu Font Color For Transparent Style',
			'default' => '#222222',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'front_color_1',
			'type'    => 'color_picker',
			'title'   => 'First Front Color',
			'default' => '#0073e6',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'front_color_2',
			'type'    => 'color_picker',
			'title'   => 'Second Front Color',
			'default' => '#888',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'front_color_3',
			'type'    => 'color_picker',
			'title'   => 'Third Front Color',
			'default' => '#222',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'light_color',
			'type'    => 'color_picker',
			'title'   => 'Light Color',
			'default' => '#fff',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'base_color_1',
			'type'    => 'color_picker',
			'title'   => 'Color for gradient elements',
			'default' => '#fcf9f6',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
//		SIMPLE
		array(
			'id'      => 'footer_simple_bg_color',
			'type'    => 'color_picker',
			'title'   => 'Footer Simple Background Color',
			'default' => '#fff',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'footer_simple_dark_text_color',
			'type'    => 'color_picker',
			'title'   => 'Footer Simple Dark Text Color',
			'default' => '#222222',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'footer_simple_main_text_color',
			'type'    => 'color_picker',
			'title'   => 'Footer Simple Main Text Color',
			'default' => '#2585e6',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'footer_simple_grey_text_color',
			'type'    => 'color_picker',
			'title'   => 'Footer Simple Grey Text Color',
			'default' => '#888',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
//		MODERN
		array(
			'id'      => 'footer_modern_bg_color',
			'type'    => 'color_picker',
			'title'   => 'Footer Modern Background Color',
			'default' => '#222222',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'footer_modern_light_text_color',
			'type'    => 'color_picker',
			'title'   => 'Footer Modern Light Text Color',
			'default' => '#ffffff',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'footer_modern_grey_text_color',
			'type'    => 'color_picker',
			'title'   => 'Footer Modern Grey Text Color',
			'default' => '#888',
			'dependency' => array( 'change_colors', '==', 'true' )
		),

	//		CLASSIC
		array(
			'id'      => 'footer_classic_bg_color',
			'type'    => 'color_picker',
			'title'   => 'Footer Classic Background Color',
			'default' => '#ffffff',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'footer_classic_dark_text_color',
			'type'    => 'color_picker',
			'title'   => 'Footer Classic Dark Text Color',
			'default' => '#222222',
			'dependency' => array( 'change_colors', '==', 'true' )
		),
		array(
			'id'      => 'footer_classic_grey_text_color',
			'type'    => 'color_picker',
			'title'   => 'Footer Classic Grey Text Color',
			'default' => '#999999',
			'dependency' => array( 'change_colors', '==', 'true' )
		),

	), // end: fields
);

// ----------------------------------------
// Blog option section
// ----------------------------------------
$options[] = array(
	'name'   => 'blog',
	'title'  => 'Blog',
	'icon'   => 'fa fa-newspaper-o',
	'fields' => array(
		array(
			'id'      => 'sidebar',
			'type'    => 'checkbox',
			'title'   => 'Show sidebar on pages:',
			'options' => array(
				'post' => 'Post',
				'blog' => 'Blog'
			)
		),
        array(
            'id'      => 'sidebar_position',
            'type'    => 'select',
            'title'   => 'Sidebar Position',
            'options' => array(
                'left_sidebar' => 'Left Sidebar',
                'right_sidebar' => 'Right Sidebar',
            ),
        ),
		array(
			'id'             => 'blog_type',
			'type'           => 'image_select',
			'title'          => 'Blog Style',
			'options'   => array(
				'masonry'   => EF_URL . '/admin/assets/images/cs_images/blog_masonry.jpg',
				'center'    => EF_URL . '/admin/assets/images/cs_images/blog_center.jpg',
				'metro'   => EF_URL . '/admin/assets/images/cs_images/blog_metro.jpg',
			),
			'radio'     => true,
			'attributes'   => array(
				'data-depend-id' => 'blog_type',
			),
			'default' => 'masonry',
		),
		array(
			'id'         => 'blog_title',
			'type'       => 'text',
			'title'      => 'Blog title',
			'default'    => 'Blog'
		),
		array(
			'id'      => 'blog_categories_show',
			'type'    => 'switcher',
			'title'   => 'Show posts from not all categories?',
			'default' => false
		),
		array(
			'id'             => 'blog_categories',
			'type'           => 'select',
			'title'          => 'Show posts from categories:',
			'options'    => pixxy_element_values( 'post_category'),
			'attributes' => array(
				'multiple' => 'multiple',
			),
			'dependency' => array( 'blog_categories_show', '==', true ),
		),
		array(
			'id' => 'fixed_transparent_menu_blog',
			'type' => 'switcher',
			'title' => 'Transparent header for single post',
			'default' => false,
		),
		array(
			'id'      => 'pixxy_post_tags',
			'type'    => 'switcher',
			'title'   => 'Tags in posts',
			'default' => false
		),
		array(
			'id'      => 'pixxy_post_cat',
			'type'    => 'switcher',
			'title'   => 'Categories in posts',
			'default' => false
		),
		array(
			'id'      => 'pixxy_post_author',
			'type'    => 'switcher',
			'title'   => 'Author in post details page',
			'default' => false
		),
		array(
			'id'      => 'post_author_info',
			'type'    => 'switcher',
			'title'   => "Show Biographical Info from User's profile",
			'default' => false
		),
        array(
            'id'             => 'blog_footer_style',
            'type'           => 'image_select',
            'title'          => 'Choose footer style for Blog',
            'options'   => array(
	            'simple'    => EF_URL . '/admin/assets/images/cs_images/footer_simple.jpg',
	            'modern'   => EF_URL . '/admin/assets/images/cs_images/footer_modern.jpg',
	            'classic'   => EF_URL . '/admin/assets/images/cs_images/footer_classic.jpg',
            ),
            'radio'     => true,
            'attributes'   => array(
	            'data-depend-id' => 'blog_footer_style',
            ),
        ),
	) // end: fields
);


// ----------------------------------------
// Portfolio option section
// ----------------------------------------
$options[] = array(
	'name'   => 'portfolio',
	'title'  => 'Portfolio',
	'icon'   => 'fa fa-file-text-o',
	'fields' => array(
		array(
			'id'      => 'social_portfolio',
			'type'    => 'switcher',
			'title'   => 'Social sharing in portfolio (for all portfolios)',
			'default' => true
		),
		array(
			'id'      => 'navigation_portfolio',
			'type'    => 'switcher',
			'title'   => 'Navigation in portfolio (for all portfolios)',
			'default' => true
		),
        array(
            'id'      => 'portfolio_protect_title',
            'type'    => 'textarea',
            'title'   => 'Portfolio protected text',
            'default' => '',
        ),
		array(
			'id'      => 'portfolio_slug',
			'type'    => 'text',
			'title'   => 'Portfolio Url Slug',
			'default' => '',
			'desc'    => 'Please update <a href="'.home_url('wp-admin/options-permalink.php').'">permalinks</a> after this. ' 
		),
		array(
			'id'      => 'portfolio_category_slug',
			'type'    => 'text',
			'title'   => 'Portfolio Url Category Slug',
			'default' => '',
			'desc'    => 'Please update <a href="'.home_url('wp-admin/options-permalink.php').'">permalinks</a> after this. ' 
		),
	) // end: fields
);


// ----------------------------------------
// Ecommerce
// ----------------------------------------
$options[] = array(
	'name'   => 'ecommerce_options',
	'title'  => 'Ecommerce',
	'icon'   => 'fa fa-shopping-cart',
	// begin: fields
	'fields' => array(
		array(
			'id'      => 'shop_cart_on',
			'type'    => 'switcher',
			'title'   => 'Enable shop cart in menu?',
			'default' => true
		),
        array(
			'id'      => 'enable_sidebar_ecommerce',
			'type'    => 'switcher',
			'title'   => 'Enable Sidebar on Shop (product list page)',
			'default' => true
		),
		array(
			'id'      => 'enable_sidebar_ecommerce_detail',
			'type'    => 'switcher',
			'title'   => 'Enable Sidebar on Product Detail Page',
			'default' => true
		),
		array(
			'id'      => 'enable_socials_share',
			'type'    => 'switcher',
			'title'   => 'Enable Socials share on product detail page',
			'default' => true
		),
        array(
            'id'             => 'ecommerce_footer_style',
            'type'           => 'image_select',
            'title'          => 'Choose footer style for ecommerce',
            'options'   => array(
	            'simple'    => EF_URL . '/admin/assets/images/cs_images/footer_simple.jpg',
	            'modern'   => EF_URL . '/admin/assets/images/cs_images/footer_modern.jpg',
	            'classic'   => EF_URL . '/admin/assets/images/cs_images/footer_classic.jpg',
            ),
            'radio'     => true,
            'attributes'   => array(
	            'data-depend-id' => 'ecommerce_footer_style',
            ),
        ),
	),
);




// ----------------------------------------
// Footer option section                  -
// ----------------------------------------
$options[] = array(
	'name'   => 'footer',
	'title'  => 'Footer',
	'icon'   => 'fa fa-copyright',
	'fields' => array(
		// Footer with margin bottom.
		array(
			'id'             => 'pixxy_footer_style',
			'type'           => 'image_select',
			'title'          => 'Footer style',
			'options'   => array(
				'simple'    => EF_URL . '/admin/assets/images/cs_images/footer_simple.jpg',
				'modern'   => EF_URL . '/admin/assets/images/cs_images/footer_modern.jpg',
				'classic'   => EF_URL . '/admin/assets/images/cs_images/footer_classic.jpg',
			),
			'radio'     => true,
			'attributes'   => array(
				'data-depend-id' => 'pixxy_footer_style',
			),
        ),
        array(
            'id'      => 'footer_logo_radio',
            'type'    => 'radio',
            'title'   => 'Type of footer logo',
            'options' => array(
                'imglogo' => 'Image Logo',
                'txtlogo' => 'Text Logo',
            ),
            'default' => array( 'imglogo' ),
        ),
        array(
            'id'         => 'footer_logo',
            'type'       => 'upload',
            'title'      => 'Footer Logo for simple and classic styles',
            'desc'       => 'Upload any media using the WordPress Native Uploader.',
            'dependency' => array( 'footer_logo_radio_imglogo', '==', 'true' ),
        ),
        array(
            'id'         => 'footer_logo_modern',
            'type'       => 'upload',
            'title'      => 'Footer Logo for modern style',
            'desc'       => 'Upload any media using the WordPress Native Uploader.',
            'dependency' => array( 'footer_logo_radio_imglogo', '==', 'true' ),
        ),
        array(
            'id'         => 'footer_logo_text',
            'type'       => 'text',
            'title'      => 'Footer Logo',
            'dependency' => array( 'footer_logo_radio_txtlogo', '==', 'true' ),
        ),
        array(
            'id'       => 'footer_info',
            'type'     => 'wysiwyg',
            'title'    => 'Footer information',
            'desc'     => 'For simple and modern styles footer',
            'settings' => array(
                'textarea_rows' => 6,
                'media_buttons' => false,
            ),
        ),
        array(
            'id'      => 'footer_inst',
            'type'    => 'text',
            'desc'     => 'For simple style footer',
            'title'   => 'Instagram username',
            'default' => '',
        ),
		array(
			'id'       => 'footer_text',
			'type'     => 'wysiwyg',
			'title'    => 'Copyright text',
			'settings' => array(
				'textarea_rows' => 5,
				'media_buttons' => false,
			),
			'default'  => 'Pixxy &copy; ' . date( 'Y' ) . '. Development with love by <a href="http://foxthemes.com">FOXTHEMES</a>',
		),
        array(
            'id'      => 'footer_social',
            'type'    => 'switcher',
            'title'   => 'Enable Social',
            'default' => false,
        ),
        array(
            'id'         => 'twitter_url',
            'type'       => 'text',
            'title'      => 'Twitter URL',
            'dependency' => array( 'footer_social', '==', 'true' ),
        ),
        array(
            'id'         => 'facebook_url',
            'type'       => 'text',
            'title'      => 'Facebook URL',
            'dependency' => array( 'footer_social', '==', 'true' ),
        ),
        array(
            'id'         => 'instagram_url',
            'type'       => 'text',
            'title'      => 'Instagram URL',
            'dependency' => array( 'footer_social', '==', 'true' ),
        ),
        array(
            'id'         => 'google_plus_url',
            'type'       => 'text',
            'title'      => 'Google Plus URL',
            'dependency' => array( 'footer_social', '==', 'true' ),
        ),
        array(
            'id'         => 'bahance_url',
            'type'       => 'text',
            'title'      => 'Behance URL',
            'dependency' => array( 'footer_social', '==', 'true' ),
        ),
        array(
            'id'         => 'linkedin_url',
            'type'       => 'text',
            'title'      => 'Linkedin URL',
            'dependency' => array( 'footer_social', '==', 'true' ),
        ),
        array(
            'id'         => 'dribble_url',
            'type'       => 'text',
            'title'      => 'Dribbble URL',
            'dependency' => array( 'footer_social', '==', 'true' ),
        ),
        array(
            'id'         => 'pinterest_url',
            'type'       => 'text',
            'title'      => 'Pinterest URL',
            'dependency' => array( 'footer_social', '==', 'true' ),
        ),
		array(
			'id'      => 'enable_parallax_footer',
			'type'    => 'switcher',
			'title'   => 'Enable Parallax Footer',
			'default' => false,
		),

	) // end: fields
);

// ----------------------------------------
// Custom Css and JavaScript
// ----------------------------------------
$options[] = array(
	'name'   => 'custom_css',
	'title'  => 'Custom JavaScript',
	'icon'   => 'fa fa-paint-brush',
	'fields' => array(
		array(
			'id'    => 'custom_js_scripts',
			'desc'  => 'Only JS code, without tag &lt;script&gt;.',
			'type'  => 'textarea',
			'title' => 'Custom JavaScript code'
		)
	)
);
// ----------------------------------------
// 404 Page                               -
// ----------------------------------------
$options[] = array(
	'name'   => 'error_page',
	'title'  => '404 Page',
	'icon'   => 'fa fa-bolt',

	// begin: fields
	'fields' => array(
		array(
			'id'      => 'error_logo',
			'type'    => 'switcher',
			'title'   => 'Change logo for 404 page',
			'default' => false
		),
		array(
			'id'      => 'error_site_logo',
			'type'    => 'radio',
			'title'   => 'Type of site logo',
			'options' => array(
				'txtlogo' => 'Text Logo',
				'imglogo' => 'Image Logo',
			),
			'default' => array( 'imglogo' ),
			'dependency' => array( 'error_logo', '==', true ),
		),
		array(
			'id'         => 'error_text_logo',
			'type'       => 'text',
			'title'      => 'Text Logo',
			'default'    => 'Pixxy',
			'sanitize'    => 'textarea',
			'dependency' => array( 'error_site_logo_txtlogo|error_logo', '==|==', 'true|true' ),
		),
		array(
			'id'         => 'error_image_logo',
			'type'       => 'upload',
			'title'      => 'Image Logo',
			'default'    => get_template_directory_uri() . '/assets/images/logo.png',
			'desc'       => 'Upload any media using the WordPress Native Uploader.',
			'dependency' => array( 'error_site_logo_imglogo|error_logo', '==|==', 'true|true' ),
		),
		array(
			'id'      => 'error_title',
			'type'    => 'text',
			'title'   => 'Title',
			'default' => 'Page not found',
		),
		array(
			'id'      => 'error_subtitle',
			'type'    => 'text',
			'title'   => 'Subtitle',
			'default' => '',
		),
		array(
			'id'      => 'error_btn_text',
			'type'    => 'textarea',
			'title'   => 'Button name',
			'default' => 'Go home',
		),
        array(
            'id' => 'error_light_text',
            'type' => 'switcher',
            'title' => 'Light text color',
            'default' => false,
        ),
		array(
			'id'             => 'btn_style',
			'type'           => 'image_select',
			'title'          => 'Button style',
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

		),
		array(
			'id'      => 'image_404',
			'type'    => 'upload',
			'title'   => '404 page background',
			'default' => get_template_directory_uri() . '/assets/images/404.jpg'
		),
	) // end: fields
);
// ----------------------------------------
// Backup
// ----------------------------------------
$options[] = array(
	'name'   => 'backup_section',
	'title'  => 'Backup',
	'icon'   => 'fa fa-shield',

	// begin: fields
	'fields' => array(

		array(
			'type'    => 'notice',
			'class'   => 'warning',
			'content' => 'You can save your current options. Download a Backup and Import.',
		),

		array(
			'type' => 'backup',
		),

	)  // end: fields
);

CSFramework::instance( $settings, $options );