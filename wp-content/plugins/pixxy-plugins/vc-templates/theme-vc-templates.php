<?php

function pixxy_reset_default_templates( $data ) {
	return array();
}
add_filter( 'vc_load_default_templates', 'pixxy_reset_default_templates' );

function pixxy_vc_templates(){

	$templates = array();

	//Category Headings
//	Headings (Simple)
	$data = array();
	$data['name'] = esc_html__( 'Headings (Simple)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/headings/simple.jpg' );
	$data['sort_name'] = 'Headings';
	$data['custom_class'] = 'general headings';
	$data['content'] = <<<CONTENT
[vc_row desctop_lg_pt="padding-lg-90t" desctop_lg_pb="padding-lg-75b" tablets_pt="padding-sm-70t" tablets_pb="padding-sm-65b" mobile_pt="padding-xs-35t" mobile_pb="padding-xs-0b"][vc_column][pixxy_headings style="simple" subtitle="Pricing Plans" title="let’s find the perfect plan" btn_style="a-btn"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Headings
//	Headings (With media)
	$data = array();
	$data['name'] = esc_html__( 'Headings (With media)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/headings/with-media.jpg' );
	$data['sort_name'] = 'Headings';
	$data['custom_class'] = 'general headings';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1530031979982{background-color: #f2f9ff !important;}"][vc_column css=".vc_custom_1530031985159{padding-top: 0px !important;}"][pixxy_headings style="with-media" subtitle="Our Company" title="creator of quality designs and thinker of fresh ideas." description="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the
necessary regelialia" btn_style="a-btn-7" media_style="video" video_link="https://youtu.be/wN8_eb3l0mw" mute="on" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Read%20more|target:%20_blank|" media_image="680"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Headings
//	Headings (Modern)
	$data = array();
	$data['name'] = esc_html__( 'Headings (Modern)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/headings/modern.jpg' );
	$data['sort_name'] = 'Headings';
	$data['custom_class'] = 'general headings';
	$data['content'] = <<<CONTENT
[vc_row][vc_column offset="vc_col-lg-5 vc_col-md-6"][pixxy_headings style="modern" title="ahead of our time marketing for people" description="Seo Company – a WordPress theme created for SEO companies, Digital Marketing specialists, and Social Media agencies. Suitable for any business and startup, but mainly designed for Online marketing firms."][vc_row_inner desctop_mt="margin-lg-65t"][vc_column_inner][pixxy_button buttons="%5B%7B%22video_btn%22%3A%22no%22%2C%22button%22%3A%22url%3Ahttp%253A%252F%252Fdev.viewdemo.co%252Fwp%252Fpixxy%252Fservices%252F%7Ctitle%3AAll%2520Services%7Ctarget%3A%2520_blank%7C%22%2C%22style%22%3A%22a-btn%22%7D%2C%7B%22video_btn%22%3A%22no%22%2C%22button%22%3A%22url%3Ahttp%253A%252F%252Fdev.viewdemo.co%252Fwp%252Fpixxy%252Fcontact-us%252F%7Ctitle%3AHire%2520Us%2520Now%7Ctarget%3A%2520_blank%7C%22%2C%22style%22%3A%22a-btn-6%22%7D%5D"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Headings
//	Headings (With background title)
	$data = array();
	$data['name'] = esc_html__( 'Headings (With background title)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/headings/bg_title.jpg' );
	$data['sort_name'] = 'Headings';
	$data['custom_class'] = 'general headings';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][pixxy_headings style="bg_title" bg_title="strong points" title="strong points" delimiter="yes"][vc_row_inner desctop_mt="margin-lg-75t" mobile_mt="margin-xs-35t"][vc_column_inner][pixxy_services_list services_items="%5B%7B%22item_image%22%3A%22437%22%2C%22title%22%3A%22scheduled%20posting%22%2C%22description%22%3A%22Digital%20Marketing%20specialists%2C%20and%20Social%20Media%20agencies.%20%22%2C%22link%22%3A%22learn%20more%22%2C%22url%22%3A%22http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fhow-it-works%2F%22%7D%2C%7B%22item_image%22%3A%22439%22%2C%22title%22%3A%22team%20access%22%2C%22description%22%3A%22Digital%20Marketing%20specialists%2C%20and%20Social%20Media%20agencies.%20%22%2C%22link%22%3A%22learn%20more%22%2C%22url%22%3A%22http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fhow-it-works%2F%22%7D%2C%7B%22item_image%22%3A%22441%22%2C%22title%22%3A%22monthly%20reports%22%2C%22description%22%3A%22Digital%20Marketing%20specialists%2C%20and%20Social%20Media%20agencies.%20%22%2C%22link%22%3A%22learn%20more%22%2C%22url%22%3A%22http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fhow-it-works%2F%22%7D%2C%7B%22item_image%22%3A%22442%22%2C%22title%22%3A%22database%20search%22%2C%22description%22%3A%22Digital%20Marketing%20specialists%2C%20and%20Social%20Media%20agencies.%20%22%2C%22link%22%3A%22learn%20more%22%2C%22url%22%3A%22http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fhow-it-works%2F%22%7D%2C%7B%22item_image%22%3A%22449%22%2C%22title%22%3A%22live%20support%22%2C%22description%22%3A%22Digital%20Marketing%20specialists%2C%20and%20Social%20Media%20agencies.%20%22%2C%22link%22%3A%22learn%20more%22%2C%22url%22%3A%22http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fhow-it-works%2F%22%7D%2C%7B%22item_image%22%3A%22451%22%2C%22title%22%3A%22flexible%20settings%22%2C%22description%22%3A%22Digital%20Marketing%20specialists%2C%20and%20Social%20Media%20agencies.%20%22%2C%22link%22%3A%22learn%20more%22%2C%22url%22%3A%22http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fhow-it-works%2F%22%7D%5D"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Headings
//	Headings (With image)
	$data = array();
	$data['name'] = esc_html__( 'Headings (With image)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/headings/with-image.jpg' );
	$data['sort_name'] = 'Headings';
	$data['custom_class'] = 'general headings';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_lg_pt="padding-lg-180t" desctop_lg_pb="padding-lg-95b" desctop_pt="padding-md-140t" desctop_pb="padding-md-75b" tablets_pt="padding-sm-100t" tablets_pb="padding-sm-60b" mobile_pt="padding-xs-70t" css=".vc_custom_1529496415534{background-image: url(http://dev.viewdemo.co/wp/pixxy/wp-content/uploads/2018/06/bg-2-1.png?id=236) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][pixxy_headings style="with-image" title="grow your business!" description="Suitable for any business and startup, but mainly designed for Online marketing" btn_style="a-btn" image="227" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fpricing%2F|title:Start%20a%2014-Days%20Free%20Trial|target:%20_blank|"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Headings
//	Headings (Colorful text)
	$data = array();
	$data['name'] = esc_html__( 'Headings (Colorful text)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/headings/bg-animation.jpg' );
	$data['sort_name'] = 'Headings';
	$data['custom_class'] = 'general headings';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_headings style="bg-animation" title="I’m very proud to present some of my latest work"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Headings
//	Headings (Text with typing animation)
	$data = array();
	$data['name'] = esc_html__( 'Headings (Text with typing animation)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/headings/typing.jpg' );
	$data['sort_name'] = 'Headings';
	$data['custom_class'] = 'general headings';
	$data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-70t"][vc_column width="1/12"][/vc_column][vc_column width="10/12"][pixxy_headings style="typing" title="every day we create projects, they are" animation_text="modern,flexible"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category About
//	About (With images)
	$data = array();
	$data['name'] = esc_html__( 'About (With images)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/about/with_images.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'general about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_about style="with_images" btn_style="a-btn" btn_icon="true" section_padding="true" image1="990" image2="989" title="Amazing Store" bg_title="About" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fshop%2F|title:View%20More|target:%20_blank|"]European minnow priapumfish mosshead warbonnet shrimpfish bigscale cutlassfish porbeagle shark ricefish walking catfish glassfish. Always remember in the jungle there's a lot of they in there dark, sweet…[/pixxy_about][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Banner
//	Image_Banner (Elementary)
	$data = array();
	$data['name'] = esc_html__( 'Banner (Elementary)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/banner/elementary.jpg' );
	$data['sort_name'] = 'Banner';
	$data['custom_class'] = 'general banner';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_banner style_banner="elementary" light="yes" title="our services" text="We help startups and digital agencies launch projects on time" image="1098"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Banner
//	Image_Banner (Simple with animation)
	$data = array();
	$data['name'] = esc_html__( 'Banner (Simple with animation)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/banner/simple.jpg' );
	$data['sort_name'] = 'Banner';
	$data['custom_class'] = 'general banner';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_md_mb="margin-md-0b" tablets_mb="margin-sm-0b" mobile_mb="margin-xs-0b"][vc_column][pixxy_banner style_banner="simple" btn_style="a-btn" animation="yes" background_position="left_top" title="highly creative website solutions" text="Borrow money for even less, all while saving for tomorrow in your own investment account." button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Learn%20More|target:%20_blank|" content_image="10" image="551"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Banner
//	Image_Banner (Creative)
	$data = array();
	$data['name'] = esc_html__( 'Banner (Creative)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/banner/creative.jpg' );
	$data['sort_name'] = 'Banner';
	$data['custom_class'] = 'general banner';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_md_mb="margin-md-50b" tablets_mb="margin-sm-30b" mobile_mb="margin-xs-0b"][vc_column][pixxy_banner style_banner="creative" height="large_banner" light="yes" btn_style="a-btn" background_position="left_bottom" title="the profesional investment banking" text="Despite our relatively short working history as a company, based on the rich practical, innovative" content_image="90" image="2149" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Learn%20More|target:%20_blank|"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Banner
//	Image_Banner (Classic)
	$data = array();
	$data['name'] = esc_html__( 'Banner (Classic)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/banner/classic.jpg' );
	$data['sort_name'] = 'Banner';
	$data['custom_class'] = 'general banner';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" vc_row_angle_after="yes"][vc_column][pixxy_banner style_banner="classic" light="yes" btn_style="a-btn-4" add_btn_style="a-btn-5" overlay="yes" title="we provide the solutions to grow your business." text="We help startups and digital agencies launch
projects on time, with no pain." button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Read%20More|target:%20_blank|" image="306"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;



	//Category Coming soon
//	Coming soon
	$data = array();
	$data['name'] = esc_html__( 'Coming soon ', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/coming_soon/coming_soon.jpg' );
	$data['sort_name'] = 'Coming soon';
	$data['custom_class'] = 'general coming-soon';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" full_height="yes" desctop_lg_pt="padding-lg-125t" desctop_lg_pb="padding-lg-40b" desctop_pt="padding-md-100t" desctop_pb="padding-md-40b" tablets_pt="padding-sm-80t" tablets_pb="padding-sm-40b" css=".vc_custom_1532334136504{border-top-width: 22px !important;border-right-width: 22px !important;border-bottom-width: 22px !important;border-left-width: 22px !important;background-image: url(http://dev.viewdemo.co/wp/pixxy/wp-content/uploads/2018/07/bg-2.png?id=1337) !important;border-left-color: #0073e6 !important;border-left-style: solid !important;border-right-color: #0073e6 !important;border-right-style: solid !important;border-top-color: #0073e6 !important;border-top-style: solid !important;border-bottom-color: #0073e6 !important;border-bottom-style: solid !important;}"][vc_column][pixxy_coming_soon title="something awesome in the works." subtitle="you can subscribe us to get noticed when our website is ready." date="2018/09/01 00:00" btn_style="a-btn-style-1" days="days" hours="hours" minutes="minutes" seconds="seconds" days_mobile="d" hours_mobile="h" minutes_mobile="min" seconds_mobile="sec" form="1332"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Contacts
//	Contacts (Simple)
	$data = array();
	$data['name'] = esc_html__( 'Contacts (Simple)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/contacts/simple.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row desctop_lg_pt="padding-lg-20t" desctop_lg_pb="padding-lg-110b" desctop_pt="padding-md-60t" desctop_pb="padding-md-95b" tablets_pt="padding-sm-35t" tablets_pb="padding-sm-80b" mobile_pt="padding-xs-10t" mobile_pb="padding-xs-50b"][vc_column width="1/12" css=".vc_custom_1532697132631{padding-top: 0px !important;}"][/vc_column][vc_column width="8/12"][pixxy_contacts style="simple" title="join our newsletter" btn_style="a-btn-style-1" form="190"]Already using Arcena ? <a href="http://dev.viewdemo.co/wp/pixxy/contact-us/">Sign in</a> to your account[/pixxy_contacts][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Contacts
//	Contacts (Modern)
	$data = array();
	$data['name'] = esc_html__( 'Contacts (Modern)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/contacts/modern.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_lg_pt="padding-lg-200t" desctop_lg_pb="padding-lg-200b" tablets_pt="padding-sm-150t" mobile_pt="padding-xs-120t" mobile_pb="padding-xs-170b" css=".vc_custom_1529487131780{background-image: url(http://dev.viewdemo.co/wp/pixxy/wp-content/uploads/2018/06/background.png?id=205) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_row_inner desctop_lg_pt="padding-lg-35t" desctop_lg_pb="padding-lg-145b" desctop_pt="padding-md-0t" desctop_pb="padding-md-110b"][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="10/12"][pixxy_contacts style="modern" title="collaborate, &amp; get results faster." btn_style="a-btn-style-2" form="208"][/pixxy_contacts][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Contacts
//	Contacts (Info with form)
	$data = array();
	$data['name'] = esc_html__( 'Contacts (Info with form)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/contacts/info_with_form.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row desctop_lg_pt="padding-lg-165t" desctop_lg_pb="padding-lg-145b" desctop_pt="padding-md-120t" desctop_pb="padding-md-90b" tablets_pt="padding-sm-110t" tablets_pb="padding-sm-80b" mobile_pt="padding-xs-90t" mobile_pb="padding-xs-60b"][vc_column][pixxy_contacts style="info_with_form" subtitle="Get In Touch" title="let’s work together" address_info="%5B%7B%22address%22%3A%2268%20Jenkins%20Extensions%20Apt.%20640%22%7D%5D" phone_info="%5B%7B%22phone%22%3A%22619-449-6293%22%2C%22url%22%3A%226194496293%22%7D%2C%7B%22phone%22%3A%22975-184-0045%22%2C%22url%22%3A%229751840045%22%7D%5D" btn_style="a-btn-style-1" form="351"]As soon as Computerized Tomography or CT scans became accessible in the 1970s, they reformed the practice of neurology. They did the scans by transmitting x-ray streams all the way through the head at different positions and accumulating the x-ray streams on the other side that was not absorbed by the head.[/pixxy_contacts][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;



	//Category Contacts
//	Contacts (Info list)
	$data = array();
	$data['name'] = esc_html__( 'Contacts (Info list)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/contacts/info_list.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][pixxy_contacts style="info_list" items="%5B%7B%22icon%22%3A%22icon-basic-geolocalize-01%22%2C%22icon_color_1%22%3A%22%232585e6%22%2C%22icon_color_2%22%3A%22%2363ffdd%22%2C%22items_child%22%3A%22%255B%257B%2522title%2522%253A%2522address%2522%252C%2522text%2522%253A%2522476%2520Franecki%2520Underpass%2520Apt.%2520486%255CnUnited%2520Kingdom%2522%252C%2522button%2522%253A%2522url%253Ahttps%25253A%25252F%25252Fwww.google.com.ua%25252Fmaps%25252Fsearch%25252F476%25252BFranecki%25252BUnderpass%25252BApt.%25252B486%25252BUnited%25252BKingdom%25252F%25254046.3580045%25252C-5.3500354%25252C4z%25252Fdata%25253D!3m1!4b1%257Ctitle%253AFind%252520Google%252520Map%257Ctarget%253A%252520_blank%257C%2522%257D%255D%22%7D%2C%7B%22icon%22%3A%22icon-basic-tablet%22%2C%22icon_color_1%22%3A%22%232585e6%22%2C%22icon_color_2%22%3A%22%2363ffdd%22%2C%22items_child%22%3A%22%255B%257B%2522title%2522%253A%2522infomation%2522%252C%2522email%2522%253A%2522contact%2540pixxystud.io%2522%252C%2522before_email%2522%253A%2522Mail%253A%2520%2522%252C%2522text%2522%253A%2522Hotline%253A%25201-800%2520-%2520123-123%2520%255Cn%2522%252C%2522button%2522%253A%2522%257C%257C%257C%2522%257D%255D%22%7D%2C%7B%22icon%22%3A%22icon-basic-message-multiple%22%2C%22icon_color_1%22%3A%22%232585e6%22%2C%22icon_color_2%22%3A%22%2363ffdd%22%2C%22items_child%22%3A%22%255B%257B%2522title%2522%253A%2522open%2520hour%2522%252C%2522text%2522%253A%2522Monday%2520-%2520Friday%253A%252009%253A00%2520-%252020%253A00%255Cn%255CnSunday%2520%2526%2520Saturday%253A%252010%253A30%2520-%252022%253A00%2522%252C%2522button%2522%253A%2522%257C%257C%257C%2522%257D%255D%22%7D%5D"][/pixxy_contacts][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Contacts
//	Contacts (Simple form)
	$data = array();
	$data['name'] = esc_html__( 'Contacts (Simple form)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/contacts/simple_form.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row][vc_column width="1/2" mobile_pt="padding-xs-50t" mobile_pb="padding-xs-50b" css=".vc_custom_1530083796104{padding-top: 0px !important;}"][pixxy_contacts style="simple_form" subtitle="Get In Touch" title="let’s work together" btn_style="a-btn-style-1" form="351"][/pixxy_contacts][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Contacts
//	Contacts (Classic)
	$data = array();
	$data['name'] = esc_html__( 'Contacts (Classic)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/contacts/style_6.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_mb="margin-lg-95b" mobile_mb="margin-xs-50b"][vc_column offset="vc_col-md-offset-2 vc_col-md-8"][pixxy_contacts style="style_6" form="1377"][/pixxy_contacts][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;



	//Category Instagram
//	Instagram
	$data = array();
	$data['name'] = esc_html__( 'Instagram', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/instagram/style2.jpg' );
	$data['sort_name'] = 'Instagram';
	$data['custom_class'] = 'general instagram';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1529489628433{background-color: #f7f7f7 !important;}"][vc_column css=".vc_custom_1529489658120{padding-top: 0px !important;}"][pixxy_instagram username="pixxybusiness" count="6"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Line of images
//	Line of images (logos with link style1)
	$data = array();
	$data['name'] = esc_html__( 'Line of images (logos with link style1)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/line_of_images/logos-with-link-style1.jpg' );
	$data['sort_name'] = 'Line of images';
	$data['custom_class'] = 'general line-of-images';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1529227459010{border-top-width: 1px !important;border-top-color: #eeeeee !important;border-top-style: solid !important;}"][vc_column][pixxy_line_of_images style="logos" logos="%5B%7B%22image%22%3A%22152%22%7D%2C%7B%22image%22%3A%22153%22%7D%2C%7B%22image%22%3A%22154%22%7D%2C%7B%22image%22%3A%22155%22%7D%2C%7B%22image%22%3A%22156%22%7D%5D" mobile_slider="true"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Line of images
//	Line of images (logos with link style2)
	$data = array();
	$data['name'] = esc_html__( 'Line of images (logos with link style2)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/line_of_images/logos-with-link-style2.jpg' );
	$data['sort_name'] = 'Line of images';
	$data['custom_class'] = 'general line-of-images';
	$data['content'] = <<<CONTENT
[vc_row][vc_column_inner][pixxy_line_of_images style="logos2" logos="%5B%7B%22image%22%3A%222295%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%222286%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%222297%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%222287%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%222299%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%222300%22%2C%22url%22%3A%22%23%22%7D%5D" show_more="true" show_more_url="http://dev.viewdemo.co/wp/pixxy/about-us/"][/vc_column_inner][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Services
//	Services (Icon)
	$data = array();
	$data['name'] = esc_html__( 'Services (Icon)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/services/icon.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'general services';
	$data['content'] = <<<CONTENT
[vc_row desctop_md_mb="margin-md-0b" mobile_mb="margin-xs-0b"][vc_column width="1/3" desctop_mb="margin-lg-70b" mobile_mb="margin-xs-40b"][pixxy_services style="icon" icon="icon-basic-accelerator" animation="yes" field_ne="true" border_hover="true" icon_color_hover="#eeee22" title="branding &amp; strategy" text="Bring to the table win-win survival strategies to ensure proactive domination. At the end
of the day, going forward"][/vc_column][vc_column width="1/3" desctop_mb="margin-lg-70b" mobile_mb="margin-xs-40b"][pixxy_services style="icon" icon="icon-basic-life-buoy" shadow="yes" border_bottom="yes" animation="yes" field_ne="true" border_hover="true" icon_color_hover="#eeee22" title="video &amp; animation" text="Bring to the table win-win survival strategies to ensure proactive domination. At the end
of the day, going forward"][/vc_column][vc_column width="1/3" desctop_mb="margin-lg-70b" mobile_mb="margin-xs-40b"][pixxy_services style="icon" icon="icon-basic-lightbulb" animation="yes" field_ne="true" border_hover="true" icon_color_hover="#eeee22" title="ecommerce" text="Bring to the table win-win survival strategies to ensure proactive domination. At the end
of the day, going forward"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Services
//	Services (Icon)
	$data = array();
	$data['name'] = esc_html__( 'Services (Icon)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/services/icon.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'general services';
	$data['content'] = <<<CONTENT
[vc_row desctop_md_mb="margin-md-0b" mobile_mb="margin-xs-0b"][vc_column width="1/3" desctop_mb="margin-lg-70b" mobile_mb="margin-xs-40b"][pixxy_services style="icon" icon="icon-basic-accelerator" animation="yes" field_ne="true" border_hover="true" icon_color_hover="#eeee22" title="branding &amp; strategy" text="Bring to the table win-win survival strategies to ensure proactive domination. At the end
of the day, going forward"][/vc_column][vc_column width="1/3" desctop_mb="margin-lg-70b" mobile_mb="margin-xs-40b"][pixxy_services style="icon" icon="icon-basic-life-buoy" shadow="yes" border_bottom="yes" animation="yes" field_ne="true" border_hover="true" icon_color_hover="#eeee22" title="video &amp; animation" text="Bring to the table win-win survival strategies to ensure proactive domination. At the end
of the day, going forward"][/vc_column][vc_column width="1/3" desctop_mb="margin-lg-70b" mobile_mb="margin-xs-40b"][pixxy_services style="icon" icon="icon-basic-lightbulb" animation="yes" field_ne="true" border_hover="true" icon_color_hover="#eeee22" title="ecommerce" text="Bring to the table win-win survival strategies to ensure proactive domination. At the end
of the day, going forward"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Services
//	Services (Image)
	$data = array();
	$data['name'] = esc_html__( 'Services (Image)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/services/image.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'general services';
	$data['content'] = <<<CONTENT
[vc_row][vc_column width="1/3" desctop_mb="margin-lg-70b" desctop_md_mb="margin-md-25b" tablets_mb="margin-sm-15b" mobile_mb="margin-xs-0b"][pixxy_services style="image" field_ne="true" border_hover="true" icon_color_hover="#eeee22" content_image="140" title="holding private keys" text="Personally holding private keys is the
modern equivalent of keeping cash underthe mattress. Personally held keys are" image="1546"][/vc_column][vc_column width="1/3" desctop_mb="margin-lg-70b" desctop_md_mb="margin-md-25b" tablets_mb="margin-sm-15b" mobile_mb="margin-xs-0b"][pixxy_services style="image" field_ne="true" border_hover="true" icon_color_hover="#eeee22" title="hardware wallets" text="Personally holding private keys is the
modern equivalent of keeping cash underthe mattress. Personally held keys are" image="165"][/vc_column][vc_column width="1/3" desctop_mb="margin-lg-70b" desctop_md_mt="margin-md-0t" desctop_md_mb="margin-md-25b" tablets_mb="margin-sm-15b" mobile_mb="margin-xs-0b"][pixxy_services style="image" field_ne="true" border_hover="true" icon_color_hover="#eeee22" title="mobility vs security" text="Personally holding private keys is the
modern equivalent of keeping cash underthe mattress. Personally held keys are" image="166"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Services
//	Services (Gradient)
	$data = array();
	$data['name'] = esc_html__( 'Services (Gradient)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/services/gradient.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'general services';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_row_inner desctop_lg_pt="padding-lg-115t" desctop_lg_pb="padding-lg-70b"][vc_column_inner][pixxy_headings style="simple" subtitle="Amazing Services" title="we’re a creative agency. ask as about distinctive branding" btn_style="a-btn"][/vc_column_inner][/vc_row_inner][vc_row_inner desctop_mb="margin-lg-70b"][vc_column_inner width="1/2" offset="vc_col-md-3 vc_col-xs-12"][pixxy_services style="gradient" icon="icon-basic-gear" icon_color="#0696ff" icon_hover_color="#ffffff" icon_background_gradient_color_2="rgba(238,248,255,0)" text_color="#222222" text_color_hover="#ffffff" background="#ffffff" background_gradient_1="#0696ff" background_gradient_2="#4ef9fe" shadow_hover="yes" title="workflow automation" text="Bring to the table win-win survival strategies to ensure proactive domination."][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-md-3 vc_col-xs-12"][pixxy_services style="gradient" icon="icon-basic-lightbulb" icon_color="#0696ff" icon_hover_color="#ffffff" icon_background_gradient_color_2="rgba(238,248,255,0)" text_color="#222222" text_color_hover="#ffffff" background="#ffffff" background_gradient_1="#0696ff" background_gradient_2="#4ef9fe" shadow_hover="yes" title="budget accounting" text="Bring to the table win-win survival strategies to ensure proactive domination."][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-md-3 vc_col-xs-12"][pixxy_services style="gradient" icon="icon-basic-accelerator" icon_color="#0696ff" icon_hover_color="#ffffff" icon_background_gradient_color_2="rgba(238,248,255,0)" text_color="#222222" text_color_hover="#ffffff" background="#ffffff" background_gradient_1="#0696ff" background_gradient_2="#4ef9fe" shadow_hover="yes" title="market forecast" text="Bring to the table win-win survival strategies to ensure proactive domination."][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-md-3 vc_col-xs-12"][pixxy_services style="gradient" icon="icon-basic-hammer" icon_color="#0696ff" icon_hover_color="#ffffff" icon_background_gradient_color_2="rgba(238,248,255,0)" text_color="#222222" text_color_hover="#ffffff" background="#ffffff" background_gradient_1="#0696ff" background_gradient_2="#4ef9fe" shadow_hover="yes" title="solution defining" text="Bring to the table win-win survival strategies to ensure proactive domination."][/vc_column_inner][/vc_row_inner][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Skills
//	Skills (With image)
	$data = array();
	$data['name'] = esc_html__( 'Skills (With image)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/skills/with-image.jpg' );
	$data['sort_name'] = 'Skills';
	$data['custom_class'] = 'general skills';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_skills style="with-image" bg_gradient="yes" bg_gradient_color_1="#0696ff" bg_gradient_color_2="#4ef9fe" bg_gradient_dir="71deg" linear_skills="%5B%7B%22title%22%3A%22illustration%22%2C%22number%22%3A%2290%22%2C%22number_style%22%3A%22active-line%22%2C%22line_color%22%3A%22%23ffffff%22%7D%2C%7B%22title%22%3A%22web%20design%22%2C%22number%22%3A%2280%22%2C%22number_style%22%3A%22active-line%22%2C%22line_color%22%3A%22%23ffffff%22%7D%2C%7B%22title%22%3A%22develope%22%2C%22number%22%3A%2290%22%2C%22number_style%22%3A%22active-line%22%2C%22line_color%22%3A%22%23ffffff%22%7D%5D" light="true" title="make it stand out." subtitle="Our Skills" image="943"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Skills
//	Skills (Simple)
	$data = array();
	$data['name'] = esc_html__( 'Skills (Simple)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/skills/simple.jpg' );
	$data['sort_name'] = 'Skills';
	$data['custom_class'] = 'general skills';
	$data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-100t"][vc_column][pixxy_skills style="simple" linear_skills="%5B%7B%22title%22%3A%22graphic%22%2C%22number%22%3A%2287%22%2C%22number_style%22%3A%22all-line%22%2C%22line_color%22%3A%22%23222222%22%7D%2C%7B%22title%22%3A%22media%22%2C%22number%22%3A%2264%22%2C%22number_style%22%3A%22all-line%22%2C%22line_color%22%3A%22%23222222%22%7D%2C%7B%22title%22%3A%22illustration%22%2C%22number%22%3A%2287%22%2C%22number_style%22%3A%22all-line%22%2C%22line_color%22%3A%22%23222222%22%7D%5D" title="awesome for startups &amp; tech" subtitle="Design"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Teams
//	Teams
	$data = array();
	$data['name'] = esc_html__( 'Teams', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/team/team.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'general teams';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-60b" tablets_mb="margin-sm-25b"][vc_column][vc_row_inner desctop_mt="margin-lg-90t" desctop_mb="margin-lg-100b" tablets_mt="margin-sm-50t" tablets_mb="margin-sm-50b"][vc_column_inner][pixxy_headings style="simple" subtitle="our team" title="amazing members" btn_style="a-btn"][/vc_column_inner][/vc_row_inner][pixxy_team team_members="%5B%7B%22image_id%22%3A%22956%22%2C%22name%22%3A%22Alan%20Garrett%22%2C%22position%22%3A%22developer%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-behance%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.behance.net%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-dribbble%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fdribbble.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22958%22%2C%22name%22%3A%22Nell%20Day%22%2C%22position%22%3A%22project%20manager%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-behance%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.behance.net%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-dribbble%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fdribbble.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%221408%22%2C%22name%22%3A%22Millie%20Moran%22%2C%22position%22%3A%22designer%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-behance%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.behance.net%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-dribbble%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fdribbble.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%221409%22%2C%22name%22%3A%22Max%20Watson%22%2C%22position%22%3A%22designer%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-behance%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.behance.net%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-dribbble%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fdribbble.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22959%22%2C%22name%22%3A%22Viola%20Nichols%22%2C%22position%22%3A%22manager%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-behance%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.behance.net%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-dribbble%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fdribbble.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22960%22%2C%22name%22%3A%22Isabella%20Maldonado%22%2C%22position%22%3A%22CEO%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-behance%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.behance.net%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-dribbble%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fdribbble.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22964%22%2C%22name%22%3A%22Helen%20Wells%22%2C%22position%22%3A%22manager%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-behance%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.behance.net%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-dribbble%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fdribbble.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%221410%22%2C%22name%22%3A%22Victoria%20Phelps%22%2C%22position%22%3A%22narrator%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-behance%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.behance.net%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-dribbble%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fdribbble.com%252F%2522%257D%255D%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Pricing
//	Pricing (Pricing item)
	$data = array();
	$data['name'] = esc_html__( 'Pricing (Pricing item)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/pricing/pricing_item.jpg' );
	$data['sort_name'] = 'Pricing';
	$data['custom_class'] = 'general pricing';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_lg_pb="padding-lg-60b" desctop_pb="padding-md-30b" mobile_pb="padding-xs-40b" css=".vc_custom_1531927903083{background-color: #fafafa !important;background-position: center !important;background-repeat: no-repeat !important;background-size: contain !important;}"][vc_column width="1/2" mobile_pt="padding-xs-30t" offset="vc_col-md-4"][vc_pricing style="pricing_item" name="basic plan" cost="80" btn_style="a-btn-3" pricing_params="%5B%7B%22param_name%22%3A%22%20Branding%20strategy%20%26%20identity%22%7D%2C%7B%22param_name%22%3A%22Marketing%20campaign%20%26%20PR%22%2C%22param_passive%22%3A%22true%22%7D%2C%7B%22param_name%22%3A%22Website%20and%20app%20designing%22%2C%22param_passive%22%3A%22true%22%7D%2C%7B%22param_name%22%3A%22Video%20production%20%26%20editing%22%2C%22param_passive%22%3A%22true%22%7D%5D" label_name="Monthly" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Order%20Now|target:%20_blank|"][/vc_column][vc_column width="1/2" offset="vc_col-md-4"][vc_pricing style="pricing_item" name="standard" cost="100" btn_style="a-btn-3" pricing_params="%5B%7B%22param_name%22%3A%22%20Branding%20strategy%20%26%20identity%22%7D%2C%7B%22param_name%22%3A%22Marketing%20campaign%20%26%20PR%22%7D%2C%7B%22param_name%22%3A%22Website%20and%20app%20designing%22%7D%2C%7B%22param_name%22%3A%22Video%20production%20%26%20editing%22%2C%22param_passive%22%3A%22true%22%7D%5D" border_item="true" label="true" label_name="Monthly" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Order%20Now|target:%20_blank|" label_text="Best"][/vc_column][vc_column width="1/2" offset="vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-3"][vc_pricing style="pricing_item" name="premium" cost="120" btn_style="a-btn-3" pricing_params="%5B%7B%22param_name%22%3A%22%20Branding%20strategy%20%26%20identity%22%7D%2C%7B%22param_name%22%3A%22Marketing%20campaign%20%26%20PR%22%7D%2C%7B%22param_name%22%3A%22Website%20and%20app%20designing%22%7D%2C%7B%22param_name%22%3A%22Video%20production%20%26%20editing%22%7D%5D" label_name="Monthly" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Order%20Now|target:%20_blank|"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Pricing
//	Pricing (Pricing list)
	$data = array();
	$data['name'] = esc_html__( 'Pricing (Pricing list)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/pricing/pricing_list.jpg' );
	$data['sort_name'] = 'Pricing';
	$data['custom_class'] = 'general pricing';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_lg_pt="padding-lg-110t" desctop_lg_pb="padding-lg-115b" css=".vc_custom_1529572648470{background-image: url(http://dev.viewdemo.co/wp/pixxy/wp-content/uploads/2018/06/gradient-bg.jpg?id=256) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_pricing style="pricing_list" title="bring the best price to you" description="Seo Company – a WordPress theme created for SEO companies, Digital Marketing specialists, and Social Media agencies." btn_style="a-btn-6" pricing_list="%5B%7B%22title%22%3A%22Personal%22%2C%22pricing_item%22%3A%22%255B%257B%2522item_title%2522%253A%2522premium%2522%252C%2522item_price%2522%253A%2522%252459.00%2522%252C%2522item_list%2522%253A%2522Team%2520Access%255CnSEO%2520Analytics%2520Tools%255CnUnlimited%2520Cloud%2520Storage%255CnPrivacy%2520Settings%255CnFree%2520Document%2520Sharing%2522%252C%2522button%2522%253A%2522url%253Ahttp%25253A%25252F%25252Fdev.viewdemo.co%25252Fwp%25252Fpixxy%25252Fabout-us%25252F%257Ctitle%253AOrder%252520Now%257Ctarget%253A%252520_blank%257C%2522%252C%2522btn_style%2522%253A%2522a-btn%2522%257D%252C%257B%2522item_title%2522%253A%2522started%2522%252C%2522item_price%2522%253A%2522%252439.00%2522%252C%2522item_list%2522%253A%2522Team%2520Access%255CnSEO%2520Analytics%2520Tools%255CnUnlimited%2520Cloud%2520Storage%255CnPrivacy%2520Settings%2522%252C%2522button%2522%253A%2522url%253Ahttp%25253A%25252F%25252Fdev.viewdemo.co%25252Fwp%25252Fpixxy%25252Fabout-us%25252F%257Ctitle%253AOrder%252520Now%257Ctarget%253A%252520_blank%257C%2522%252C%2522btn_style%2522%253A%2522a-btn%2522%257D%255D%22%7D%2C%7B%22title%22%3A%22Company%22%2C%22pricing_item%22%3A%22%255B%257B%2522item_title%2522%253A%2522premium%2522%252C%2522item_price%2522%253A%2522%2524183.00%2522%252C%2522item_list%2522%253A%2522Team%2520Access%255CnSEO%2520Analytics%2520Tools%255CnUnlimited%2520Cloud%2520Storage%255CnPrivacy%2520Settings%255CnFree%2520Document%2520Sharing%2522%252C%2522button%2522%253A%2522url%253Ahttp%25253A%25252F%25252Fdev.viewdemo.co%25252Fwp%25252Fpixxy%25252Fabout-us%25252F%257Ctitle%253AOrder%252520Now%257Ctarget%253A%252520_blank%257C%2522%252C%2522btn_style%2522%253A%2522a-btn%2522%257D%252C%257B%2522item_title%2522%253A%2522started%2522%252C%2522item_price%2522%253A%2522%252499.00%2522%252C%2522item_list%2522%253A%2522Team%2520Access%255CnSEO%2520Analytics%2520Tools%255CnUnlimited%2520Cloud%2520Storage%255CnPrivacy%2520Settings%2522%252C%2522button%2522%253A%2522url%253Ahttp%25253A%25252F%25252Fdev.viewdemo.co%25252Fwp%25252Fpixxy%25252Fabout-us%25252F%257Ctitle%253AOrder%252520Now%257Ctarget%253A%252520_blank%257C%2522%252C%2522btn_style%2522%253A%2522a-btn%2522%257D%255D%22%7D%5D" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fpricing%2F|title:learn%20more|target:%20_blank|"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Testimonials
//	Testimonials (Full with slides)
	$data = array();
	$data['name'] = esc_html__( 'Testimonials (Full with slides)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/testimonial/full_width.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'general testimonials';
	$data['content'] = <<<CONTENT
[vc_row desctop_lg_pt="padding-lg-75t" desctop_lg_pb="padding-lg-70b" desctop_pt="padding-md-40t" tablets_pt="padding-sm-45t" tablets_pb="padding-sm-60b"][vc_column][pixxy_headings style="simple" subtitle="Happy Clients" title="what people will talk about us!" btn_style="a-btn"][pixxy_testimonial style="full_width"][pixxy_testimonial_items author="Tylor Katholling" position="Founder" rating="5" logo_image="147"]“ Working with @SONcreativeteam team of experts to develop our centered, interactive custom home builder website was fantastic! Through passion skill for developing."[/pixxy_testimonial_items][pixxy_testimonial_items author="Tylor Katholling" position="Founder" rating="4" logo_image="147"]“ Working with @SONcreativeteam team of experts to develop our centered, interactive custom home builder website was fantastic! Through passion skill for developing."[/pixxy_testimonial_items][pixxy_testimonial_items author="Tylor Katholling" position="Founder" rating="5" text_align="3" logo_image="147"]“ Working with @SONcreativeteam team of experts to develop our centered, interactive custom home builder website was fantastic! Through passion skill for developing."[/pixxy_testimonial_items][/pixxy_testimonial][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Testimonials
//	Testimonials (Multiple slides (style1))
	$data = array();
	$data['name'] = esc_html__( 'Testimonials (Multiple slides (style1))', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/testimonial/multiple.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'general testimonials';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_lg_pt="padding-lg-85t" desctop_lg_pb="padding-lg-170b" desctop_pt="padding-md-0t" desctop_pb="padding-md-30b" tablets_pb="padding-sm-10b" mobile_pt="padding-xs-0t" mobile_pb="padding-xs-0b" vc_bg_position="bg_center-right" css=".vc_custom_1532696512984{background-image: url(http://dev.viewdemo.co/wp/pixxy/wp-content/uploads/2018/06/bg-3.png?id=425) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column][vc_row_inner desctop_mt="margin-lg-100t" desctop_mb="margin-lg-70b" desctop_md_mt="margin-md-60t" tablets_mt="margin-sm-40t" tablets_mb="margin-sm-60b" mobile_mt="margin-xs-10t" mobile_mb="margin-xs-50b" css=".vc_custom_1532700705219{padding-right: 25px !important;padding-left: 25px !important;}"][vc_column_inner offset="vc_col-md-offset-3 vc_col-md-9"][pixxy_headings style="simple" title="meet our brilliant minds" delimiter="yes" light="true" text_align="text-left" btn_style="a-btn-4"][/vc_column_inner][/vc_row_inner][vc_row_inner desctop_mb="margin-lg-70b" mobile_mb="margin-xs-50b" css=".vc_custom_1532700714305{padding-right: 25px !important;padding-left: 25px !important;}"][vc_column_inner offset="vc_col-md-offset-3 vc_col-md-9"][pixxy_testimonial style="multiple" autoplay="500" loop="true" el_class="container-offset-right" lg_count="4"][pixxy_testimonial_items author="Blanche Fields" position="Service technician" rating="0" socials="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22social_url%22%3A%22http%3A%2F%2Ffacebook.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin-square%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.linkedin.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22social_url%22%3A%22https%3A%2F%2Ftwitter.com%22%7D%5D" logo_image="262"]Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.[/pixxy_testimonial_items][pixxy_testimonial_items author="Mike Farrell" position="Office manager" rating="0" socials="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22social_url%22%3A%22http%3A%2F%2Ffacebook.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin-square%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.linkedin.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22social_url%22%3A%22https%3A%2F%2Ftwitter.com%22%7D%5D" logo_image="263"]Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.[/pixxy_testimonial_items][pixxy_testimonial_items author="Oliver Comtar" position="Founder" rating="0" socials="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22social_url%22%3A%22http%3A%2F%2Ffacebook.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin-square%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.linkedin.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22social_url%22%3A%22https%3A%2F%2Ftwitter.com%22%7D%5D" logo_image="264"]Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.[/pixxy_testimonial_items][pixxy_testimonial_items author="Camilla Shean" position="Business Development" rating="0" socials="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22social_url%22%3A%22http%3A%2F%2Ffacebook.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin-square%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.linkedin.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22social_url%22%3A%22https%3A%2F%2Ftwitter.com%22%7D%5D" logo_image="265"]Graduated in 2014 from New York University with a degree in Finance. Craig hasworked at HSBC Private Wealth Management as an analyst and Merrill Lynch as an Equity Research analyst.[/pixxy_testimonial_items][/pixxy_testimonial][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Testimonials
//	Testimonials (Flipping slides)
	$data = array();
	$data['name'] = esc_html__( 'Testimonials (Flipping slides)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/testimonial/flipping.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'general testimonials';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-25b"][vc_column][vc_row_inner desctop_mt="margin-lg-60t" desctop_mb="margin-lg-80b"][vc_column_inner][pixxy_headings style="simple" title="Testimonials" delimiter="yes" btn_style="a-btn"][/vc_column_inner][/vc_row_inner][pixxy_testimonial style="flipping"][pixxy_testimonial_items author="Tylor Katholling" position="CTO" rating="5" socials="%5B%5D" logo_image="264"]“ SEO Company – a WordPress theme created for SEO companies, Digital Marketing specialists, and Social Media agencies. Suitable for any business and startup, but mainly designed for Online marketing firms ”[/pixxy_testimonial_items][pixxy_testimonial_items author="Maria Bardon" position="Pixxy Founder" rating="4" socials="%5B%5D" logo_image="505"]“ SEO Company – a WordPress theme created for SEO companies, Digital Marketing specialists, and Social Media agencies. Suitable for any business and startup, but mainly designed for Online marketing firms ”[/pixxy_testimonial_items][pixxy_testimonial_items author="Nataly Spilberg" position="Designer" rating="4" socials="%5B%5D" logo_image="265"]“ SEO Company – a WordPress theme created for SEO companies, Digital Marketing specialists, and Social Media agencies. Suitable for any business and startup, but mainly designed for Online marketing firms ”[/pixxy_testimonial_items][/pixxy_testimonial][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;



	//Category Testimonials
//	Testimonials (Multiple slides (style2))
	$data = array();
	$data['name'] = esc_html__( 'Testimonials (Multiple slides (style2))', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/testimonial/multiple_style_2.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'general testimonials';
	$data['content'] = <<<CONTENT
[vc_section full_width="stretch_row" css=".vc_custom_1532534132943{background-image: url(http://dev.viewdemo.co/wp/pixxy/wp-content/uploads/2018/07/bg-2-2.jpg?id=1537) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_row full_width="stretch_row" desctop_lg_pt="padding-lg-100t" desctop_lg_pb="padding-lg-70b" tablets_pt="padding-sm-40t" tablets_pb="padding-sm-50b"][vc_column][pixxy_headings style="simple" subtitle="Testimonials" title="Awesome clients we’ve worked with" light="true" text_align="text-left" btn_style="a-btn"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-120b" tablets_mb="margin-sm-40b" css=".vc_custom_1530031606643{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][pixxy_testimonial style="multiple_style_2" loop="true" lg_count="5" md_count="4"][pixxy_testimonial_items author="David Zhu" position="CEO" rating="0" socials="%5B%5D" logo_image="615"]“Excellent support, fast and very didactic answers. The design meets the expecta, the data import develops very quickly a website.”[/pixxy_testimonial_items][pixxy_testimonial_items author="David Zhu" position="CEO" rating="0" socials="%5B%5D" logo_image="616"]“Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.”[/pixxy_testimonial_items][pixxy_testimonial_items author="David Zhu" position="CEO" rating="0" socials="%5B%5D" logo_image="617"]“Excellent support, fast and very didactic answers. The design meets the expecta, the data import develops very quickly a website.”[/pixxy_testimonial_items][pixxy_testimonial_items author="David Zhu" position="CEO" rating="0" socials="%5B%5D" logo_image="618"]“Excellent support, fast and very didactic answers. The design meets the expecta, the data import develops very quickly a website.”[/pixxy_testimonial_items][pixxy_testimonial_items author="David Zhu" position="CEO" rating="0" socials="%5B%5D" logo_image="615"]“Excellent support, fast and very didactic answers. The design meets the expecta, the data import develops very quickly a website.”[/pixxy_testimonial_items][pixxy_testimonial_items author="David Zhu" position="CEO" rating="0" socials="%5B%5D" logo_image="616"]“Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.”[/pixxy_testimonial_items][/pixxy_testimonial][/vc_column][/vc_row][/vc_section]
CONTENT;
	$templates[] = $data;


	//Category Accordion
//	Accordion
	$data = array();
	$data['name'] = esc_html__( 'Accordion', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/accordion/accordion.jpg' );
	$data['sort_name'] = 'Accordion';
	$data['custom_class'] = 'general accordion';
	$data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-60t" tablets_mt="margin-sm-20t"][vc_column offset="vc_col-md-5"][vc_row_inner desctop_mt="margin-lg-105t" desctop_mb="margin-lg-35b" desctop_md_mt="margin-md-80t" tablets_mt="margin-sm-20t"][vc_column_inner][pixxy_headings style="simple" subtitle="Answer Anything" title="create the lifestyle you really <b>desire.</b>" text_align="text-left" btn_style="a-btn"][/vc_column_inner][/vc_row_inner][pixxy_accordion items="%5B%7B%22item_title%22%3A%22branding%20%26%20design%22%2C%22item_description%22%3A%22A%20wonderful%20serenity%20has%20taken%20possession%20of%20my%20entire%20soul%2C%20like%20these%20sweet%20mornings%20of%20spring%20which%20I%20enjoy%20with%20my%20whole%20heart.%20I%20am%20alone%2C%20and%20feel%20the%20charm%20of%20existence%20in%20this%20spot%2C%20which%20was%20created%20for%20the%20bliss%20of%20souls.%22%7D%2C%7B%22item_title%22%3A%22interface%20design%22%2C%22item_description%22%3A%22A%20wonderful%20serenity%20has%20taken%20possession%20of%20my%20entire%20soul%2C%20like%20these%20sweet%20mornings%20of%20spring%20which%20I%20enjoy%20with%20my%20whole%20heart.%20I%20am%20alone%2C%20and%20feel%20the%20charm%20of%20existence%20in%20this%20spot%2C%20which%20was%20created%20for%20the%20bliss%20of%20souls.%22%7D%2C%7B%22item_title%22%3A%22web%20%26%20mobile%20development%22%2C%22item_description%22%3A%22A%20wonderful%20serenity%20has%20taken%20possession%20of%20my%20entire%20soul%2C%20like%20these%20sweet%20mornings%20of%20spring%20which%20I%20enjoy%20with%20my%20whole%20heart.%20I%20am%20alone%2C%20and%20feel%20the%20charm%20of%20existence%20in%20this%20spot%2C%20which%20was%20created%20for%20the%20bliss%20of%20souls.%22%7D%5D"][/vc_column][vc_column offset="vc_col-md-offset-1 vc_col-md-6"][single_media xl_size="yes" xl_left="-23" image="753"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Portfolio
//	Portfolio (Portfolio with animation)
	$data = array();
	$data['name'] = esc_html__( 'Portfolio (Portfolio with animation)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/portfolio/portfolio_with_animation.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_album_animation cats="business,technology" order="ASC" btn_style="a-btn-2" colormain="#ffffff" count="7"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Banner
//	Banner slider (Vertical slider)
	$data = array();
	$data['name'] = esc_html__( 'Banner slider (Vertical slider)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/banner_slider/vertical-2.jpg' );
	$data['sort_name'] = 'Banner';
	$data['custom_class'] = 'general banner';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][banner_slider type_slider="vertical-2"][banner_slider_items subtitle="new consoles comparing" title="what is our life, just a <b>game</b>" text="Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble! Downloading music" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Read%20More|target:%20_blank|" image="1156"][banner_slider_items subtitle="the new smart watch review" title="nothing added  just <b>design</b>" text="The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a" light="yes" image="1155" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Read%20More|target:%20_blank|"][banner_slider_items subtitle="bluetoothe headhones review" title="to wire or
not to <b>wire</b>" text="Today, many people rely on computers to do homework, work, and create or store useful information. Therefore, it is important for the" light="yes" image="1157" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Read%20More|target:%20_blank|"][/banner_slider][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Call to action
//	Call to action (Simple with icon)
	$data = array();
	$data['name'] = esc_html__( 'Call to action (Simple with icon)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/call_to_action/simple.jpg' );
	$data['sort_name'] = 'Call to action';
	$data['custom_class'] = 'general call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1529583110557{background-color: #0073e6 !important;}"][vc_column css=".vc_custom_1529582953857{padding-top: 0px !important;}"][pixxy_call_to_action style="simple" title="need more features to be available for you ?" description="We’re ready to create an unique plan for you!" light="true" btn_style="a-btn-5" image="282" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fpricing%2F|title:Start%20a%2014-Days%20Free%20Trial|target:%20_blank|"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Call to action
//	Call to action (Classic)
	$data = array();
	$data['name'] = esc_html__( 'Call to action (Classic)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/call_to_action/classic.jpg' );
	$data['sort_name'] = 'Call to action';
	$data['custom_class'] = 'general call-to-action';
	$data['content'] = <<<CONTENT
[vc_row desctop_lg_pt="padding-lg-80t" desctop_lg_pb="padding-lg-80b" desctop_pt="padding-md-70t" desctop_pb="padding-md-70b" tablets_pt="padding-sm-50t" tablets_pb="padding-sm-50b" mobile_pt="padding-xs-40t" mobile_pb="padding-xs-40b"][vc_column css=".vc_custom_1531911158356{padding-top: 0px !important;}"][pixxy_call_to_action style="classic" title="Start a project with pixxy?" btn_style="a-btn-2" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fcontact-us%2F|title:Contact%20Us|target:%20_blank|"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;



	//Category Call to action
//	Call to action (With images)
	$data = array();
	$data['name'] = esc_html__( 'Call to action (With images)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/call_to_action/with_images.jpg' );
	$data['sort_name'] = 'Call to action';
	$data['custom_class'] = 'general call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1531140053995{background-color: #f7fbff !important;}"][vc_column][pixxy_call_to_action style="with_images" title="it’s proudly for us to build stylish." light="true" btn_style="a-btn-4" bg_gradient="yes" bg_gradient_color_1="#0696ff" bg_gradient_color_2="#4ef9fe" bg_gradient_dir="126deg" first_image="1164" second_image="1165" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fcontact-us%2F|title:Contact%20Us|target:%20_blank|"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Category
//	Category (Products categories)
	$data = array();
	$data['name'] = esc_html__( 'Category (Products categories)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/category/products-categories.jpg' );
	$data['sort_name'] = 'Category';
	$data['custom_class'] = 'general category';
	$data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-150t" mobile_mt="margin-xs-70t"][vc_column][pixxy_product_category cats_product="computers,drones,games,sound"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;



	//Category Content block
//	Content block (Simple)
	$data = array();
	$data['name'] = esc_html__( 'Content block (Simple)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/content_block/simple.jpg' );
	$data['sort_name'] = 'Content block';
	$data['custom_class'] = 'general content-block';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-90b" mobile_mb="margin-xs-30b"][vc_column][pixxy_content_block image_enable="yes" title="research and planning" bg_text="01" text="If you are in the market for a computer, there are a number of factors to consider. Will it be used for your home, your office or perhaps even your home office combo? First off, you will need to set a budget for your new purchase before deciding whether to shop for notebook" image="1196"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Content block
//	Content block (faq style)
	$data = array();
	$data['name'] = esc_html__( 'Content block (faq style)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/content_block/faq.jpg' );
	$data['sort_name'] = 'Content block';
	$data['custom_class'] = 'general content-block';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-70b" desctop_md_mb="margin-md-60b"][vc_column][pixxy_content_block style="faq" subtitle="01." title="branding is simply a more efficient way to sell things?" text="The buying of large-screen TVs has absolutely skyrocketed lately. It seems that everyone wants one – and with good reason. The large-screen TV has come a long way from those faded-out behemoths of old that took up half your living room and never really produced a picture of decent quality. Now, however, especially in combination with HDTV, you can get not only a nice, large picture, but a crisp, clean one too."][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Counter
//	Counter (With media)
	$data = array();
	$data['name'] = esc_html__( 'Counter (With media)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/counters/with-media.jpg' );
	$data['sort_name'] = 'Counter';
	$data['custom_class'] = 'general counter';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1530032141670{background-image: url(http://dev.viewdemo.co/wp/pixxy/wp-content/uploads/2018/06/bg-counter.png?id=683) !important;background-position: 0 0 !important;background-repeat: repeat !important;}"][vc_column css=".vc_custom_1530032115918{padding-top: 0px !important;}"][pixxy_counter style_counter="with-media" linear_counter="%5B%7B%22title%22%3A%22Business%20Increase%22%2C%22description%22%3A%22Far%20far%20away%2C%20behind%20the%20word%20mountains%2C%20far%20from%20the%20countries%22%2C%22number%22%3A%2290%22%2C%22symbol%22%3A%22%2B%22%2C%22color%22%3A%22%230073e6%22%7D%2C%7B%22title%22%3A%22New%20Accounts%22%2C%22description%22%3A%22Far%20far%20away%2C%20behind%20the%20word%20mountains%2C%20far%20from%20the%20countries%22%2C%22number%22%3A%22200%22%2C%22color%22%3A%22%230073e6%22%7D%5D" media_pos="right" subtitle="The Difference" title="experience true business performance increases" media_image="49"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Counter
//	Counter (Simple)
	$data = array();
	$data['name'] = esc_html__( 'Counter (Simple)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/counters/simple.jpg' );
	$data['sort_name'] = 'Counter';
	$data['custom_class'] = 'general counter';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_mb="margin-lg-5b" desctop_md_mt="margin-md-0t" desctop_lg_pt="padding-lg-95t" desctop_lg_pb="padding-lg-110b" desctop_pt="padding-md-60t" desctop_pb="padding-md-70b" tablets_pt="padding-sm-45t" tablets_pb="padding-sm-40b" css=".vc_custom_1530633556448{background-color: #f9f9f9 !important;}"][vc_column offset="vc_col-md-6"][pixxy_headings style="simple" subtitle="Fun Facts" title="a focused team with a specialized skill set" text_align="text-left" btn_style="a-btn" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Learn%20More|target:%20_blank|"][/vc_column][vc_column offset="vc_col-md-6"][vc_row_inner tablets_mt="margin-sm-35t"][vc_column_inner][pixxy_counter style_counter="simple" linear_counter="%5B%7B%22title%22%3A%22success%20projects%22%2C%22description%22%3A%22Bring%20to%20the%20table%20win-win%20survival%20strategies%20to%20ensure%20proactive%20domination.%20%5CnAt%20the%20end%20of%20the%20day%2C%20going%20forward%22%2C%22number%22%3A%22200%22%2C%22color%22%3A%22%230073e6%22%7D%5D" text="Desription"][pixxy_counter style_counter="simple" linear_counter="%5B%7B%22title%22%3A%22features%20added%22%2C%22description%22%3A%22Bring%20to%20the%20table%20win-win%20survival%20strategies%20to%20ensure%20proactive%20domination.%20%5CnAt%20the%20end%20of%20the%20day%2C%20going%20forward%22%2C%22number%22%3A%22234%22%2C%22color%22%3A%22%230073e6%22%7D%5D"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;



	//Category Discount
//	Discount
	$data = array();
	$data['name'] = esc_html__( 'Discount', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/discount/discount.jpg' );
	$data['sort_name'] = 'Discount';
	$data['custom_class'] = 'general discount';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mt="margin-lg-120t" desctop_md_mt="margin-md-45t"][vc_column][pixxy_discount btn_style="a-btn-6" btn_icon="true" section_padding="true" xl_size="yes" xl_top="-64" xl_right="-147" xl_left="75" xl_padd_top="40" xl_padd_bot="220" xl_marg_bot="-337" lg_size="yes" lg_padd_top="40" lg_padd_bot="50" lg_marg_bot="-90" md_size="yes" md_padd_top="40" md_marg_bot="-57" sm_size="yes" sm_top="40" sm_padd_top="40" sm_padd_bot="65" sm_marg_top="-50" sm_marg_bot="-77" image="1012" mask_image="1011" subtitle="#pixxystorediscount" title="up to <b>40% off </b>
final sale items" button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fshop%2F|title:Shop%20Now|target:%20_blank|" section_color_bg="#fafafa" max_width="400"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;



	//Category Banner
//	Glitch banner (style1)
	$data = array();
	$data['name'] = esc_html__( 'Glitch banner (style1)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/glitch/glitch-1.gif' );
	$data['sort_name'] = 'Banner';
	$data['custom_class'] = 'general banner';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_glitch style="style-1" image="1155" title="Pixxy Studio"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Banner
//	Glitch banner (style2)
	$data = array();
	$data['name'] = esc_html__( 'Glitch banner (style2)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/glitch/glitch-2.gif' );
	$data['sort_name'] = 'Banner';
	$data['custom_class'] = 'general banner';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_glitch style="style-2" image="1155" title="Pixxy Studio"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	//Category Info list
//	Info list
	$data = array();
	$data['name'] = esc_html__( 'Info list', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/info_list/info_list.jpg' );
	$data['sort_name'] = 'Info list';
	$data['custom_class'] = 'general info-list';
	$data['content'] = <<<CONTENT
[vc_row gap="0" columns_placement="middle" video_bg_url="https://www.youtube.com/watch?v=lMJXxhRFO1k" parallax_speed_video="1.5" parallax_speed_bg="1.5" desctop_mt="none" desctop_mb="margin-lg-150b" desctop_md_mt="none" desctop_md_mb="none" tablets_mt="none" tablets_mb="none" mobile_mt="none" mobile_mb="none" desctop_lg_pt="none" desctop_lg_pb="none" desctop_pt="none" desctop_pb="none" tablets_pt="none" tablets_pb="none" mobile_pt="none" mobile_pb="none" vc_bg_position="bg_center-left" vc_bg_gradient_color_1="yes" vc_bg_gradient_color_2="yes" vc_bg_gradient_dir="180deg"][vc_column video_bg_url="https://www.youtube.com/watch?v=lMJXxhRFO1k" parallax_speed_video="1.5" parallax_speed_bg="1.5" width="1/1" desctop_mt="none" desctop_mb="none" desctop_md_mt="none" desctop_md_mb="none" tablets_mt="none" tablets_mb="none" mobile_mt="none" mobile_mb="none" desctop_lg_pt="padding-lg-85t" desctop_lg_pb="none" desctop_pt="padding-md-0t" desctop_pb="none" tablets_pt="none" tablets_pb="none" mobile_pt="none" mobile_pb="none" offset="vc_col-lg-5 vc_col-md-6"][pixxy_headings style="modern" title="many features in pixxy wordpress theme" text_align="text-center" btn_style="a-btn" media_style="simple_img" media_pos="left" mute="off"][vc_row_inner gap="0" desctop_mt="margin-lg-60t" desctop_mb="margin-lg-70b" desctop_md_mt="none" desctop_md_mb="none" tablets_mt="none" tablets_mb="none" mobile_mt="none" mobile_mb="none" desctop_lg_pt="none" desctop_lg_pb="none" desctop_pt="none" desctop_pb="none" tablets_pt="none" tablets_pb="none" mobile_pt="none" mobile_pb="none"][vc_column_inner][pixxy_info_list info_list="%5B%7B%22title%22%3A%22feature%20one%20%22%2C%22description%22%3A%22Seo%20Company%20%E2%80%93%20a%20WordPress%20theme%20created%20for%20SEO%20companies%2C%20Digital%20Marketing%20specialists%2C%20and%20Social%20Media%20agencies.%20Suitable%20for%20any%20business%20%22%7D%2C%7B%22title%22%3A%22feature%20two%22%2C%22description%22%3A%22Can%20you%20imagine%20what%20we%20will%20be%20downloading%20in%20another%20twenty%20years%3F%20I%20mean%20who%20would%20have%20ever%20thought%20that%20you%20could%20record%20sound%20with%20digital%20quality%20fifty%20years%20ago%3F%22%7D%5D"][/vc_column_inner][/vc_row_inner][pixxy_button text_align="text-left" buttons="%5B%7B%22video_btn%22%3A%22no%22%2C%22button%22%3A%22url%3Ahttp%253A%252F%252Fdev.viewdemo.co%252Fwp%252Fpixxy%252Ffeatures%252F%7Ctitle%3AAll%2520Features%7Ctarget%3A%2520_blank%7C%22%2C%22style%22%3A%22a-btn%22%7D%2C%7B%22video_btn%22%3A%22no%22%2C%22button%22%3A%22url%3Ahttp%253A%252F%252Fdev.viewdemo.co%252Fwp%252Fpixxy%252Fcontact-us%252F%7Ctitle%3AContact%2520us%7Ctarget%3A%2520_blank%7C%22%2C%22style%22%3A%22a-btn-6%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Posts
//	Last posts (post list)
	$data = array();
	$data['name'] = esc_html__( 'Last posts (post list)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/last_posts/simple.jpg' );
	$data['sort_name'] = 'Posts';
	$data['custom_class'] = 'general posts';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_lg_pt="padding-lg-155t" desctop_lg_pb="padding-lg-200b" desctop_pt="padding-md-130t" desctop_pb="padding-md-155b" tablets_pt="padding-sm-125t" tablets_pb="padding-sm-130b" mobile_pb="padding-xs-100b" vc_bg_gradient="yes" vc_bg_gradient_color_1="#f1f8ff" vc_bg_gradient_color_2="#f2fffd" vc_bg_gradient_dir="67deg" vc_row_angle_before="yes" vc_row_angle_after="yes"][vc_column][vc_row_inner desctop_mb="margin-lg-70b" tablets_mb="margin-sm-50b"][vc_column_inner][pixxy_headings style="simple" subtitle="Lastest News" title="thoughts and experiments" btn_style="a-btn"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][pixxy_last_posts style_post="simple" cats="bluetooth,business,creative,design,developing,drones,events,fashion,gadgets,games,headphones,news,speakers,technologies" order="ASC" count_line="three" count="3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Posts
//	Last posts (post slider)
	$data = array();
	$data['name'] = esc_html__( 'Last posts (post slider)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/last_posts/slider.jpg' );
	$data['sort_name'] = 'Posts';
	$data['custom_class'] = 'general posts';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_lg_pb="padding-lg-190b" desctop_pt="padding-md-0t" desctop_pb="padding-md-150b" tablets_pb="padding-sm-100b" vc_bg_position="bg_bottom-center" css=".vc_custom_1531820542100{background-image: url(http://dev.viewdemo.co/wp/pixxy/wp-content/uploads/2018/06/bg-2.png?id=175) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][pixxy_last_posts style_post="slider" cats="business,creative,developing,events,fashion,news,technologies" order="ASC" loop="true" style="center" count="7"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Line of icons
//	Line of icons
	$data = array();
	$data['name'] = esc_html__( 'Line of icons', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/line_of_icons/line_of_icons.jpg' );
	$data['sort_name'] = 'Line of icons';
	$data['custom_class'] = 'general line-of-icons';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_lg_pt="padding-lg-155t" desctop_lg_pb="padding-lg-130b" desctop_pt="padding-md-110t" desctop_pb="padding-md-150b" mobile_pt="padding-xs-70t" mobile_pb="padding-xs-90b" vc_row_angle_after="yes" css=".vc_custom_1529938880375{background-color: #ffffff !important;}"][vc_column width="1/2" desctop_lg_pt="padding-lg-80t" desctop_pt="padding-md-0t"][pixxy_headings style="simple" subtitle="Video" title="ui and ux matter" description="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia" text_align="text-left" btn_style="a-btn"][vc_row_inner desctop_mt="margin-lg-60t" tablets_mt="margin-sm-35t"][vc_column_inner][pixxy_line_of_icons icons="%5B%7B%22icon%22%3A%22dripicons-cloud-download%22%2C%22title%22%3A%22Playlist%22%7D%2C%7B%22icon%22%3A%22dripicons-cloud-upload%22%2C%22title%22%3A%22Slideshow%22%7D%2C%7B%22icon%22%3A%22dripicons-code%22%2C%22title%22%3A%22Replay%22%7D%2C%7B%22icon%22%3A%22dripicons-contract%22%2C%22title%22%3A%22Reload%22%7D%2C%7B%22icon%22%3A%22dripicons-contract-2%22%2C%22title%22%3A%22Phone%22%7D%2C%7B%22icon%22%3A%22dripicons-conversation%22%2C%22title%22%3A%22Laptop%22%7D%5D"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Banner
//	Physics banner (Decori)
	$data = array();
	$data['name'] = esc_html__( 'Physics banner (Decori)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/physics/physics-banner-decori.jpg' );
	$data['sort_name'] = 'Banner';
	$data['custom_class'] = 'general banner';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_physics_banner type="decori" style="a-btn-5" title_color="#ffffff" text_color="#ffffff" title="we provide the solutions
to grow your business." button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Read%20More|target:%20_blank|" text="We help startups and digital agencies launch
projects on time, with no pain."][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Banner
//	Physics banner (Decori)
	$data = array();
	$data['name'] = esc_html__( 'Physics banner (Decori)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/physics/physics-banner-decori.jpg' );
	$data['sort_name'] = 'Banner';
	$data['custom_class'] = 'general banner';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_physics_banner type="decori" style="a-btn-5" title_color="#ffffff" text_color="#ffffff" title="we provide the solutions
to grow your business." button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Read%20More|target:%20_blank|" text="We help startups and digital agencies launch
projects on time, with no pain."][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Banner
//	Physics banner (Fizio)
	$data = array();
	$data['name'] = esc_html__( 'Physics banner (Fizio)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/physics/physics-banner-fizio.jpg' );
	$data['sort_name'] = 'Banner';
	$data['custom_class'] = 'general banner';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_physics_banner type="fizio" style="a-btn-5" title_color="#ffffff" text_color="#ffffff" title="we provide the solutions
to grow your business." button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Read%20More|target:%20_blank|" text="We help startups and digital agencies launch
projects on time, with no pain."][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	//Category Banner
//	Physics banner (Linira)
	$data = array();
	$data['name'] = esc_html__( 'Physics banner (Linira)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/physics/physics-banner-linira.jpg' );
	$data['sort_name'] = 'Banner';
	$data['custom_class'] = 'general banner';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_physics_banner type="linira" animation_color="#0069ba" animation_color_2="#004796" bg_color="#000000" style="a-btn-5" title_color="#ffffff" text_color="#ffffff" title="we provide the solutions
to grow your business." button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fabout-us%2F|title:Read%20More|target:%20_blank|" text="We help startups and digital agencies launch
projects on time, with no pain."][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Portfolio
//	Portfolio list (Parallax showcase)
	$data = array();
	$data['name'] = esc_html__( 'Portfolio list (Parallax showcase)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/portfolio_list/portfolio-list-parallax-showcase.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_portfolio_list style="parallax_showcase" cats="music,photography" btn_style="a-btn-5"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Portfolio
//	Portfolio sliders (Interactive links)
	$data = array();
	$data['name'] = esc_html__( 'Portfolio sliders (Interactive links)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/portfolio_sliders/portfolio-sliders-interactive-links.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_portfolio_sliders cats="music" count="3"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Portfolio
//	Portfolio sliders (Showcase slider)
	$data = array();
	$data['name'] = esc_html__( 'Portfolio sliders (Showcase slider)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/portfolio_sliders/portfolio-sliders-showcase-slider.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_portfolio_sliders style="showcase_slider" cats="business,design,technology" order="ASC" count="8"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Portfolio
//	Portfolio sliders (Urban slider)
	$data = array();
	$data['name'] = esc_html__( 'Portfolio sliders (Urban slider)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/portfolio_sliders/portfolio-sliders-urban-slider.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_portfolio_sliders style="urban_slider" cats="design,technology" orderby="title" order="ASC" autoplay="true"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Portfolio
//	Portfolio sliders (Landing split)
	$data = array();
	$data['name'] = esc_html__( 'Portfolio sliders (Landing split)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/portfolio_sliders/portfolio-sliders-landing-split.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_portfolio_sliders style="landing_split" cats="split" btn_style="a-btn-4" additional_btn_style="a-btn-5" additional_button="url:http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fcontact-us%2F|title:Contact%20Us||"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Portfolio
//	Portfolio sliders (Split slider)
	$data = array();
	$data['name'] = esc_html__( 'Portfolio sliders (Split slider)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/portfolio_sliders/portfolio-sliders-split-slider.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_portfolio_sliders style="split_slider" cats="tech" orderby="title" btn_style="a-btn-2" blank="yes" color1="#edf6ff" color2="#f9f9f9" color3="#edf6ff" color4="#f9f9f9"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Products slider
//	Products slider (Vertical)
	$data = array();
	$data['name'] = esc_html__( 'Products slider (Vertical)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/products_slider/vertical.jpg' );
	$data['sort_name'] = 'Products slider';
	$data['custom_class'] = 'general products-slider';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-90b"][vc_column][pixxy_products_slider socials="%5B%7B%22icon%22%3A%22fa%20fa-facebook-square%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.facebook.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22social_url%22%3A%22http%3A%2F%2Ftwitter.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-instagram%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.instagram.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-dribbble%22%2C%22social_url%22%3A%22https%3A%2F%2Fdribbble.com%2F%22%7D%5D" additional_text="View full collection" additional_url="http://dev.viewdemo.co/wp/pixxy/shop/" email="sales@pixxy.io" cats_product="vertical-slider" speed="1000"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Products slider
//	Products slider (Tabs slider)
	$data = array();
	$data['name'] = esc_html__( 'Products slider (Tabs slider)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/products_slider/tabs_sliders.jpg' );
	$data['sort_name'] = 'Products slider';
	$data['custom_class'] = 'general products-slider';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pixxy_products_slider style="tabs_sliders" cats_product="seating,shelving,table" order="ASC" lg_count="5" md_count="4" sm_count="3" title="new arrivals"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Services
//	Services list
	$data = array();
	$data['name'] = esc_html__( 'Services list', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/services_list/services_list.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'general services';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][pixxy_headings style="bg_title" bg_title="strong points" title="strong points" delimiter="yes"][vc_row_inner desctop_mt="margin-lg-75t" mobile_mt="margin-xs-35t"][vc_column_inner][pixxy_services_list services_items="%5B%7B%22item_image%22%3A%22437%22%2C%22title%22%3A%22scheduled%20posting%22%2C%22description%22%3A%22Digital%20Marketing%20specialists%2C%20and%20Social%20Media%20agencies.%20%22%2C%22link%22%3A%22learn%20more%22%2C%22url%22%3A%22http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fhow-it-works%2F%22%7D%2C%7B%22item_image%22%3A%22439%22%2C%22title%22%3A%22team%20access%22%2C%22description%22%3A%22Digital%20Marketing%20specialists%2C%20and%20Social%20Media%20agencies.%20%22%2C%22link%22%3A%22learn%20more%22%2C%22url%22%3A%22http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fhow-it-works%2F%22%7D%2C%7B%22item_image%22%3A%22441%22%2C%22title%22%3A%22monthly%20reports%22%2C%22description%22%3A%22Digital%20Marketing%20specialists%2C%20and%20Social%20Media%20agencies.%20%22%2C%22link%22%3A%22learn%20more%22%2C%22url%22%3A%22http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fhow-it-works%2F%22%7D%2C%7B%22item_image%22%3A%22442%22%2C%22title%22%3A%22database%20search%22%2C%22description%22%3A%22Digital%20Marketing%20specialists%2C%20and%20Social%20Media%20agencies.%20%22%2C%22link%22%3A%22learn%20more%22%2C%22url%22%3A%22http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fhow-it-works%2F%22%7D%2C%7B%22item_image%22%3A%22449%22%2C%22title%22%3A%22live%20support%22%2C%22description%22%3A%22Digital%20Marketing%20specialists%2C%20and%20Social%20Media%20agencies.%20%22%2C%22link%22%3A%22learn%20more%22%2C%22url%22%3A%22http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fhow-it-works%2F%22%7D%2C%7B%22item_image%22%3A%22451%22%2C%22title%22%3A%22flexible%20settings%22%2C%22description%22%3A%22Digital%20Marketing%20specialists%2C%20and%20Social%20Media%20agencies.%20%22%2C%22link%22%3A%22learn%20more%22%2C%22url%22%3A%22http%3A%2F%2Fwp.themedemo.co%2Fpixxy%2Fhow-it-works%2F%22%7D%5D"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Sliders
//	Sliders (Vertical multiple)
	$data = array();
	$data['name'] = esc_html__( 'Sliders (Vertical multiple)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/slider/vertical.jpg' );
	$data['sort_name'] = 'Sliders';
	$data['custom_class'] = 'general sliders';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column desctop_mt="margin-lg-100t" desctop_md_mt="margin-md-30t" tablets_mb="margin-sm-50b" offset="vc_col-lg-5 vc_col-md-6"][vc_row_inner tablets_mb="margin-sm-25b" mobile_mb="margin-xs-15b" css=".vc_custom_1532703010144{padding-right: 25px !important;padding-left: 25px !important;}"][vc_column_inner][pixxy_headings style="simple" title="security and insured" delimiter="yes" text_align="text-left" btn_style="a-btn"][/vc_column_inner][/vc_row_inner][pixxy_slider direction="vertical" autoplay="1000" loop="true" pagination="yes" iterator="yes" lg_count="3" md_count="3" sm_count="2" xs_count="1"][pixxy_slider_items direction="vertical" title="distributed air-gapped cold storage" iterator="yes"]Pixxy has deployed an array of air-gapped machines in military-grade data centers across multiple countries[/pixxy_slider_items][pixxy_slider_items direction="horizontal" title="multi-signature vaults" icon="ion-alert" iterator="yes"]Pixxy has deployed an array of air-gapped machines in military-grade data centers across multiple countries[/pixxy_slider_items][pixxy_slider_items direction="horizontal" title="compartmentalized api’s &amp; databases" icon="ion-alert"]Pixxy has deployed an array of air-gapped machines in military-grade data centers across multiple countries[/pixxy_slider_items][/pixxy_slider][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Sliders
//	Sliders (Horizontal multiple style1)
	$data = array();
	$data['name'] = esc_html__( 'Sliders (Horizontal multiple style1)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/slider/horizontal.jpg' );
	$data['sort_name'] = 'Sliders';
	$data['custom_class'] = 'general sliders';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_lg_pb="padding-lg-20b" desctop_pb="padding-md-10b" tablets_pb="padding-sm-10b" mobile_pb="padding-xs-0b" vc_bg_gradient="yes" vc_bg_gradient_color_1="#ebfdff" vc_bg_gradient_color_2="#ffffff" css=".vc_custom_1532699677559{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column mobile_mb="margin-xs-20b"][pixxy_slider direction="horizontal" pagination_buttons="true" lg_count="3"][pixxy_slider_items direction="horizontal" title="q4 2018"]
<ul>
 	<li>Expand digital asset support</li>
 	<li>ADA, Waves, NEM, Nano, Elastos, Ontology, VeChain, Wanchain</li>
 	<li>Expand physical infrastructure to 10+ jurisdictions</li>
 	<li>Additional exchange API integration</li>
 	<li>Poloniex, Bittrex, Kraken, 0x supported exchanges</li>
 	<li>Investment management platform for institutions</li>
 	<li>Pixxy private blockchain</li>
</ul>
[/pixxy_slider_items][pixxy_slider_items direction="horizontal" title="q2 2018"]
<ul>
 	<li>Private Alpha launch</li>
 	<li>Public V1 launch</li>
 	<li>Bitcoin, Litecoin, Ethereum/ERC20, NEO/NEP5</li>
</ul>
[/pixxy_slider_items][pixxy_slider_items direction="horizontal" title="q3 2019"]
<ul>
 	<li>Expand digital asset support</li>
 	<li>ADA, Waves, NEM, Nano, Elastos, Ontology, VeChain, Wanchain</li>
 	<li>Expand physical infrastructure to 10+ jurisdictions</li>
 	<li>Additional exchange API integration</li>
 	<li>Poloniex, Bittrex, Kraken, 0x supported exchanges</li>
 	<li>Investment management platform for institutions</li>
 	<li>Pixxy private blockchain</li>
</ul>
[/pixxy_slider_items][pixxy_slider_items direction="horizontal" title="q3 2018"]
<ul>
 	<li>Expand physical infrastructure to 5 jurisdictions</li>
 	<li>Binance API integration</li>
 	<li>Enterprise partnerships</li>
 	<li>Expand digital asset support</li>
 	<li>EOS, Qtum, ZEC, ICX, XLM, XRP</li>
</ul>
[/pixxy_slider_items][pixxy_slider_items direction="horizontal" title="q1 2019"]
<ul>
 	<li>Private Alpha launch</li>
 	<li>Public V1 launch</li>
 	<li>Bitcoin, Litecoin, Ethereum/ERC20, NEO/NEP5</li>
</ul>
[/pixxy_slider_items][pixxy_slider_items direction="horizontal" title="q2 2019"]
<ul>
 	<li>Expand physical infrastructure to 5 jurisdictions</li>
 	<li>Binance API integration</li>
 	<li>Enterprise partnerships</li>
 	<li>Expand digital asset support</li>
 	<li>EOS, Qtum, ZEC, ICX, XLM, XRP</li>
</ul>
[/pixxy_slider_items][/pixxy_slider][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Sliders
//	Sliders (Horizontal multiple style2)
	$data = array();
	$data['name'] = esc_html__( 'Sliders (Horizontal multiple style2)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/slider/horizontal_2.jpg' );
	$data['sort_name'] = 'Sliders';
	$data['custom_class'] = 'general sliders';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_lg_pt="padding-lg-115t" desctop_lg_pb="padding-lg-100b" mobile_pt="padding-xs-50t" mobile_pb="padding-xs-40b" css=".vc_custom_1531140196667{background-color: #f7fbff !important;}"][vc_column][vc_row_inner desctop_mb="margin-lg-35b"][vc_column_inner][pixxy_headings style="simple" subtitle="Working Process" title="We pay attention to make the perfect details working process" btn_style="a-btn"][/vc_column_inner][/vc_row_inner][pixxy_slider direction="horizontal_2" iterator="yes" style="horizontal_2" lg_count="3"][pixxy_slider_items direction="horizontal" title="brainstorming" icon="ion-wand"]All the rumors have finally died down and many skeptics have tightened their lips, the iPod does support video format now[/pixxy_slider_items][pixxy_slider_items direction="horizontal" title="working process" icon="ion-ios-browsers"]Ah, the technical interview. Nothing like it. Not only does it cause anxiety, but it causes anxiety for several different[/pixxy_slider_items][pixxy_slider_items direction="horizontal" title="product testing" icon="ion-earth"]Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble![/pixxy_slider_items][pixxy_slider_items direction="horizontal" title="analyze" icon="ion-android-clipboard"]With its popularity and iconesque standing, the iPod has made sharing videos easier. You don’t need to be[/pixxy_slider_items][/pixxy_slider][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Banner
//	Video banner (Simple)
	$data = array();
	$data['name'] = esc_html__( 'Video banner (Simple)', 'pixxy' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/video_banner/simple.jpg' );
	$data['sort_name'] = 'Banner';
	$data['custom_class'] = 'general banners';
	$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1529486508466{margin-top: -260px !important;}"][vc_column][video_banner video_link="https://youtu.be/wN8_eb3l0mw" mute="on" preview="211"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;



	return $templates;
}

function pixxy_add_default_templates() {
	$templates = pixxy_vc_templates();
	return array_map( 'vc_add_default_templates', $templates );
}
pixxy_add_default_templates();