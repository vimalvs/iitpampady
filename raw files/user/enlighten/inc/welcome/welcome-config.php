<?php
	/**
	 * Welcome Page Initiation
	*/

	get_template_part('/inc/welcome/welcome');

	/** Plugins **/
	$plugins = array(
		// *** Companion Plugins
		'companion_plugins' => array(

		),

		//Displays on Required Plugins tab
		'req_plugins' => array(

			// Free Plugins
			'free_plug' => array(

				'accesspress-social-icons' => array(
					'slug' => 'accesspress-social-icons',
					'filename' => 'accesspress-social-icons.php',
					'class' => 'APS_Class'
				),

				'accesspress-social-share' => array(
					'slug' => 'accesspress-social-share',
					'filename' => 'accesspress-social-share.php',
					'class' => 'APSS_Class'
				),

				'accesspress-instagram-feed' => array(
					'slug' => 'accesspress-instagram-feed',
					'filename' => 'accesspress-instagram-feed.php',
					'class' => 'APSS_Class'
				),

				'ap-custom-testimonial' => array(
					'slug' => 'ap-custom-testimonial',
					'filename' => 'ap-custom-testimonial.php',
					'class' => 'APCT_free'
				),

				'accesspress-twitter-feed' => array(
					'slug' => 'accesspress-twitter-feed',
					'filename' => 'accesspress-twitter-feed.php',
					'class' => 'APTF_Class'
				),
			),
			'pro_plug' => array(

			),
		),

		// *** Displays on Import Demo section
		'required_plugins' => array(
			'access-demo-importer' => array(
					'slug' 		=> 'access-demo-importer',
					'name' 		=> esc_html__('Access Demo Importer', 'enlighten'),
					'filename' 	=>'access-demo-importer.php',
					'host_type' => 'wordpress', // Use either bundled, remote, wordpress
					'class' 	=> 'Access_Demo_Importer',
					'info' 		=> esc_html__('Access Demo Importer adds the feature to Import the Demo Conent with a single click.', 'enlighten'),
			),
		

		),

		// *** Recommended Plugins
		'recommended_plugins' => array(
			// Free Plugins
			'free_plugins' => array(
				
				'accesspress-social-share' => array(
					'slug'      => 'accesspress-social-share',
					'filename' 	=> 'accesspress-social-share.php',
					'class' 	=> 'APSS_Class',
					'info' 		=> esc_html__('Social booster for your site! A FREE plugin with premium features.', 'enlighten'),
				),

				'accesspress-social-icons' => array(
					'slug'      => 'accesspress-social-icons',
					'filename' 	=> 'accesspress-social-icons.php',
					'class' 	=> 'APS_Class',
					'info' 		=> esc_html__('Connect your website visitors to your social community in an easy way! Link up your social media profiles via great looking social buttons.', 'enlighten'),
				),

				'accesspress-twitter-feed' => array(
					'slug'      => 'accesspress-twitter-feed',
					'filename' 	=> 'accesspress-twitter-feed.php',
					'class' 	=> 'APTF_Class',
					'info' 		=> esc_html__('Showcase your Tweets (Twitter Feeds) right on the site.', 'enlighten'),
				),

				'contact-form-7' => array(
				'slug'      => 'contact-form-7',
				'filename' 	=> 'contact-form-7.php',
				'class' 	=> 'WPCF7',
				'info' => esc_html__('Contact Form 7 can manage multiple contact forms, plus you can customize the form and the mail contents flexibly with simple markup.', 'enlighten'),

			),

			),

			// Pro Plugins
			'pro_plugins' => array(

				'woo-product-grid-list-design' 	=> array(
					'slug' 		=> 'woo-product-grid-list-design',
					'name' 		=> esc_html__('WOO Product Grid/List Design- Responsive Products Showcase Extension for Woocommerce', 'enlighten'),
					'version' 	=> esc_html__( '1.0.3', 'enlighten' ),
					'author' 	=> 'AccessPress Themes',
					'filename' 	=> 'woo-product-grid-list-design.php',
					'host_type' => 'remote', // Use either bundled, remote, wordpress
					'link' 		=> 'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Fwoo-product-gridlist-design-responsive-products-showcase-extension-for-woocommerce%2F23167226',
					'screenshot' => 'https://accesspressthemes.com/plugin-repo/woo-product-grid/woo-product-grid.jpg',
					'class' 	=> 'WOPGLD_Class',
					'info' 		=> esc_html__('Design your WooCommerce shop like never before! A complete package for your Woo shop designer.', 'enlighten'),
				),

				'woo-badge-designer' => array(
					'slug' 			=> 'woo-badge-designer',
					'name'         	=> esc_html__('Woo Badge Designer - WooCommerce Product Badge Designer WordPress Plugin', 'enlighten'),
					'version' 		=> esc_html__('1.0.1', 'enlighten'),
					'author' 		=> 'AccessPress Themes',
					'filename' 		=> 'woo-badge-designer.php',
					'host_type' 	=> 'remote', // Use either bundled, remote, wordpress
					'link' 			=> 'https://1.envato.market/LyK3o',
					'screenshot' 	=> 'https://accesspressthemes.com/plugin-repo/woo-badge-designer/woo-badge-designer.jpg',
					'class' 		=> 'WOPGLD_Class',
					'info' 			=> esc_html__('Add some attractive badges on your product listing and single page and increase your sales upto 55%.', 'enlighten'),
				),

				'wp-admin-white-label-login' => array(
					'slug' 			=> 'wp-admin-white-label-login',
					'name'      	=> esc_html__('WP Admin White Label Login - WordPress Plugin For Advanced Customizable Login page', 'enlighten'),
					'version' 		=> esc_html__('1.3.5', 'enlighten'),
					'author' 		=> 'AccessPress Themes',
					'filename' 		=> 'wp-admin-white-label-login.php',
					'host_type' 	=> 'remote', // Use either bundled, remote, wordpress
					'link' 		=> 'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Fwp-admin-white-label-login-wordpress-plugin-for-advanced-customizable-login-page%2F23127723',
					'screenshot' 	=> 'https://accesspressthemes.com/plugin-repo/wp-admin-white-label-login/wp-admin-white-label-login.jpg',
					'class' 		=> 'WP_Admin_White_Label_Login',
					'info' 		=> esc_html__('Make your default wp-admin screen look like a non WP one! Choose from some great ready to use template designs and many features to boost your WordPress backend.', 'enlighten'),
				),

				'easy-side-tab-pro' => array(
					'slug' 			=> 'easy-side-tab-pro',
					'name'      	=> esc_html__('Easy Side Tab Pro - Responsive Floating Tab Plugin For Wordpress', 'enlighten'),
					'version' 		=> esc_html__('1.0.6', 'enlighten'),
					'author' 		=> 'AccessPress Themes',
					'filename' 		=> 'easy-side-tab-pro.php',
					'host_type' 	=> 'remote', // Use either bundled, remote, wordpress
					'link' 			=> 'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Feasy-side-tab-pro-responsive-floating-tab-plugin-for-wordpress%2F22296723',
					'screenshot' 	=> 'https://accesspressthemes.com/plugin-repo/easy-side-tab-pro/easy-side-tab.jpg',
					'class' 		=> 'ESTP_Class',
					'info' 		=> esc_html__('Place some great designed floating tabs on your site for quick links. Increase accessibility of your site.', 'enlighten'),
				),

				'everest-timeline' => array(
					'slug' 			=> 'everest-timeline',
					'name'         	=> esc_html__('Everest Timeline - Responsive WordPress Timeline Plugin', 'enlighten'),
					'version' 		=> esc_html__('2.0.2', 'enlighten'),
					'author' 		=> 'AccessPress Themes',
					'filename' 		=> 'everest-timeline.php',
					'host_type' 	=> 'remote', // Use either bundled, remote, wordpress
					'screenshot' 	=> 'https://accesspressthemes.com/plugin-repo/everest-timeline/everest-timeline.jpg',
					'class' 		=> 'APMM_Class_Pro',
					'link'			=>'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Feverest-timeline-responsive-wordpress-timeline-plugin%2F20922265',
					'info' 		=> esc_html__('A perfect timeline maker! If you\'re planning to make one go for it!', 'enlighten'),
				),
			)
		),
	);

	$strings = array(
		// Welcome Page General Texts
		'welcome_menu_text' => esc_html__( 'Enlighten Welcome', 'enlighten' ),
		'theme_short_description' => esc_html__( 'Enlighten is a responsive FREE education WordPress theme ideal for creating college, school, university and other academic/ educational websites. It is a fully Customizer based user-friendly theme which allows you to customize most of the theme settings instantly with live real time live previews. It is a clean and elegant modern WordPress theme with plenty of flexibility and features - you can use for various types of business websites as well. Enlighten is fully mobile-responsive so that your website content is sure to look great on any device. It features homepage sliders, Multiple menu options, carousel portfolio and service section, video section, client section etc. It is a fully widgetized theme with multiple widget areas. Create a beautiful education website and enlighten the world. For Demo https://demo.accesspressthemes.com/enlighten', 'enlighten' ),

		// Plugin Action Texts
		'install_n_activate' 	=> esc_html__('Install and Activate', 'enlighten'),
		'deactivate' 			=> esc_html__('Deactivate', 'enlighten'),
		'activate' 				=> esc_html__('Activate', 'enlighten'),

		// Getting Started Section
		'doc_heading' 		=> esc_html__('Step 1 - Documentation', 'enlighten'),
		'doc_description' 	=> esc_html__('Read the Documentation and follow the instructions to manage the site , it helps you to set up the theme more easily and quickly. The Documentation is very easy with its pictorial  and well managed listed instructions. ', 'enlighten'),
		'doc_link'			=> 'https://doc.accesspressthemes.com/enlighten-documentation/',
		'doc_read_now' 		=> esc_html__( 'Read Now', 'enlighten' ),
		'cus_heading' 		=> esc_html__('Step 2 - Customizer Panel', 'enlighten'),
		'cus_read_now' 		=> esc_html__( 'Go to Customizer Panels', 'enlighten' ),

		// Recommended Plugins Section
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'enlighten' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'enlighten' ),


		// Demo Actions
		'activate_btn' 		=> esc_html__('Activate', 'enlighten'),
		'installed_btn' 	=> esc_html__('Activated', 'enlighten'),
		'demo_installing' 	=> esc_html__('Installing Demo', 'enlighten'),
		'demo_installed' 	=> esc_html__('Demo Installed', 'enlighten'),
		'demo_confirm' 		=> esc_html__('Are you sure to import demo content ?', 'enlighten'),

		// Actions Required
		'req_plugin_info' => esc_html__('All these required plugins will be installed and activated while importing demo. Or you can choose to install and activate them manually. If you\'re not importing any of the demos, you must install and activate these plugins manually.', 'enlighten' ),
		'req_plugins_installed' => esc_html__( 'All Recommended action has been successfully completed.', 'enlighten' ),
		'customize_theme_btn' 	=> esc_html__( 'Customize Theme', 'enlighten' ),
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'enlighten' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'enlighten' ),
	);

	/**
	 * Initiating Welcome Page
	*/
	$my_theme_wc_page = new Agency_Lite_Welcome( $plugins, $strings );