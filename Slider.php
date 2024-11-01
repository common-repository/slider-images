<?php
    /*
		Plugin name: Slider Images
		Plugin URI: https://rich-web.org/wp-image-slider/
		Description: Slider image plugin is fully responsive. Your photos with our slider effects will be perfectly.
		Version: 1.5.2
		Author: richteam
		Author URI: https://rich-web.org
		License: http://www.gnu.org/licenses/gpl-2.0.html
	*/
	define("RW_SLIDER_IMAGE_VERSION","1.5.2");
	global $wpdb;
	define( "RW_SLIDER_IMAGE_MANAGER_TABLE", esc_sql( $wpdb->prefix . "rich_web_photo_slider_manager") );
	define( "RW_SLIDER_IMAGE_INSTALL_TABLE", esc_sql( $wpdb->prefix . "rich_web_photo_slider_instal") );
	define( "RW_SLIDER_VIDEO_INSTALL_TABLE", esc_sql( $wpdb->prefix . "rich_web_photo_slider_instal_video") );
	define( "RW_SLIDER_IMAGE_EFFECTS_TABLE", esc_sql( $wpdb->prefix . "rich_web_slider_effects_data") );
	define( "RW_SLIDER_IMAGE_FONTS_TABLE",	 esc_sql( $wpdb->prefix . "rich_web_slider_font_family") );
	define( "RW_SLIDER_IMAGE_IDS_TABLE",	 esc_sql( $wpdb->prefix . "rich_web_slider_id") );
	define( "RW_SLIDER_IMAGE_NAVIGATION",	 esc_sql( $wpdb->prefix . "rich_web_slider_effect1") );
	define( "RW_SLIDER_IMAGE_CONTENT",		 esc_sql( $wpdb->prefix . "rich_web_slider_effect2") );
	define( "RW_SLIDER_IMAGE_FASHION",		 esc_sql( $wpdb->prefix . "rich_web_slider_effect3") );
	define( "RW_SLIDER_IMAGE_CIRCLE",		 esc_sql( $wpdb->prefix . "rich_web_slider_effect4") );
	define( "RW_SLIDER_IMAGE_CAROUSEL",		 esc_sql( $wpdb->prefix . "rich_web_slider_effect5") );
	define( "RW_SLIDER_IMAGE_FLEXIBLE",		 esc_sql( $wpdb->prefix . "rich_web_slider_effect6") );
	define( "RW_SLIDER_IMAGE_DYNAMIC",		 esc_sql( $wpdb->prefix . "rich_web_slider_effect7") );
	define( "RW_SLIDER_IMAGE_LIGHTBOX",		 esc_sql( $wpdb->prefix . "rich_web_slider_effect8") );
	define( "RW_SLIDER_IMAGE_ACCORDION",	 esc_sql( $wpdb->prefix . "rich_web_slider_effect9") );
	define( "RW_SLIDER_IMAGE_ANIMATION",	 esc_sql( $wpdb->prefix . "rich_web_slider_effect10") );
	require_once(dirname(__FILE__) . '/rw-slider-image-install.php');
	require_once(dirname(__FILE__) . "/rw-slider-image-widget.php");
	require_once(dirname(__FILE__) . "/rw-slider-image-ajax.php");
	require_once(dirname(__FILE__) . "/rw-slider-image-shortcode.php");
	add_action("widgets_init", "rw_slider_image_widget");
	add_action("wp_enqueue_scripts","rw_slider_image_style");
	add_action("admin_menu", "rw_slider_image_admin_menu" );
	add_action("admin_init", "rw_slider_image_admin_style");
	register_deactivation_hook( __FILE__, 'rw_slider_image_wp_deactivate' );
	function rw_slider_image_widget() {
		register_widget('rich_web_slider_image'); 
	}
	function rw_slider_image_style() {
		wp_register_style('rw-slider-image-script', esc_url(plugins_url('/style/rw-slider-image-widget.css',__FILE__)));
		wp_enqueue_style('rw-slider-image-script');
		wp_register_script('rw-slider-image-script',esc_url(plugins_url('/scripts/rw-slider-image-widget.js',__FILE__)),array('jquery','jquery-ui-core'));
		wp_register_script('rw-slider-image-script-easing',esc_url(plugins_url('/scripts/jquery.easing.1.2.js',__FILE__)));
		wp_register_script('rw-slider-image-script-anythingslider',esc_url(plugins_url('/scripts/jquery.anythingslider.min.js',__FILE__)));
		wp_register_script('rw-slider-image-script-colorbox',esc_url(plugins_url('/scripts/jquery.colorbox-min.js',__FILE__)));
		wp_enqueue_script('rw-slider-image-script');
		wp_enqueue_script('rw-slider-image-script-easing');
		wp_enqueue_script('rw-slider-image-script-anythingslider');
		wp_enqueue_script('rw-slider-image-script-colorbox');
		wp_enqueue_script("jquery");
		wp_register_style( 'rw-slider-image-style-fontawesome', esc_url(plugins_url('/style/richwebicons.css', __FILE__))); 
		wp_enqueue_style( 'rw-slider-image-style-fontawesome' );

	}
	function rw_slider_image_admin_menu() {
		$rw_slider_image_menu = add_menu_page(	  'Rich-Web Slider Admin','Slider Images','manage_options','Rich-Web Slider Admin','rw_slider_image_manage_admin',esc_url(plugins_url('/images/admin.png',__FILE__)));
		$rw_slider_image_manager_menu = add_submenu_page( 'Rich-Web Slider Admin', 'Rich-Web Slider Admin', 'Slider Manager', 'manage_options', 'Rich-Web Slider Admin', 'rw_slider_image_manage_admin');
		$rw_slider_image_themes_menu = add_submenu_page( 'Rich-Web Slider Admin', 'Rich-Web Slider General', 'Slider Options', 'manage_options', 'Rich-Web Slider General', 'rw_slider_image_manage_general');
		$rw_slider_image_products_menu = add_submenu_page( 'Rich-Web Slider Admin', 'Rich-Web Slider Products', 'Our Products', 'manage_options', 'Rich-Web Slider Products', 'rw_slider_image_manage_products');
        add_action( 'load-' . $rw_slider_image_menu, 'rw_load_admin_manager' );
        add_action( 'load-' . $rw_slider_image_manager_menu, 'rw_load_admin_manager' );
        add_action( 'load-' . $rw_slider_image_themes_menu, 'rw_load_admin_themes' );
        add_action( 'load-' . $rw_slider_image_products_menu, 'rw_load_admin_products' );
	}
	function rw_load_admin_manager(){
        add_action( 'admin_enqueue_scripts', 'rw_manager_load' );
	}
	function rw_manager_load(){
		wp_register_script('rw_slider_image_tinymce',esc_url(plugins_url('/scripts/tinymce.min.js',__FILE__)),array("jquery"));
		wp_register_script('rw_slider_image_tinymce_jquery',esc_url(plugins_url('/scripts/jquery.tinymce.min.js',__FILE__)),array("jquery"));
		wp_register_script('rw-slider-image-script', esc_url(plugins_url('scripts/rw-slider-image-admin.js',__FILE__)),array('jquery','jquery-ui-core',"rw_slider_image_tinymce","rw_slider_image_tinymce_jquery"));
		wp_localize_script('rw-slider-image-script', 'rw_slider_image_object', array('ajaxurl' => admin_url('admin-ajax.php'),'rw_slider_image_nonce' => wp_create_nonce( 'rw_slider_image_nonce_field' )));
		wp_enqueue_script('rw-slider-image-script');
		wp_register_style( 'rw-slider-image-admin-css', esc_url(plugins_url('/style/rw-slider-image-admin.css', __FILE__))); 
		wp_enqueue_style( 'rw-slider-image-admin-css' );
    }
	function rw_load_admin_themes(){
        add_action( 'admin_enqueue_scripts', 'rw_themes_load' );
	}
	function rw_themes_load(){
		wp_register_script('rw-slider-image-theme-script', esc_url(plugins_url('scripts/rw-slider-image-theme.js',__FILE__)),array('jquery','jquery-ui-core'));
		wp_localize_script(
			'rw-slider-image-theme-script',
			'rw_slider_image_object', 
			array(
				'ajaxurl' => admin_url('admin-ajax.php'),
				'rw_slider_image_nonce' => wp_create_nonce( 'rw_slider_image_nonce_field' ),
				"rw_slider_image_demo_links" => [
					"slider_navigation" => esc_url("https://rich-web.org/wp-image-slider-navigation"),
				 	"fashion_slider" => esc_url("https://rich-web.org/wp-image-slider-fashion"),
				 	"slider_carousel" => esc_url("https://rich-web.org/wp-image-slider-carousel/"),
				 	"flexible_slider" => esc_url("https://rich-web.org/wp-image-slider-flexible/"),
				 	"dynamic_slider" => esc_url("https://rich-web.org/wp-image-slider-dynamic"),
				 	"accordion_slider" => esc_url("https://rich-web.org/wp-image-slider-accordion"),
				 	"animation_slider" => esc_url("https://rich-web.org/wp-image-slider-animation/"),
				 	"circle_thumbnails" => esc_url("https://rich-web.org/wp-image-slider-circle-thumbnails/"),
				 	"thumbnails_slider" => esc_url("https://rich-web.org/wp-image-slider-thumbnail-lightbox/"),
				 	"content_slider" => esc_url("https://rich-web.org/wp-image-slider-content")
				]
			)
		);
		wp_enqueue_script('rw-slider-image-theme-script');
		wp_register_style('rw-slider-image-theme-css', esc_url(plugins_url('/style/rw-slider-image-theme.css', __FILE__))); 
		wp_enqueue_style( 'rw-slider-image-theme-css' );
		wp_enqueue_script('rw-slider-image-alpha-color-picker',esc_url(plugins_url('/scripts/alpha-color-picker.js', __FILE__)),array( 'jquery', 'wp-color-picker' ),null,true);
		wp_enqueue_style('rw-slider-image-alpha-color-picker',esc_url(plugins_url('/style/alpha-color-picker.css', __FILE__)),array( 'wp-color-picker' ));
	}
	function rw_load_admin_products(){
        add_action( 'admin_enqueue_scripts', 'rw_products_load' );
	}
	function rw_products_load(){
		wp_register_style('rw-slider-image-products-css', esc_url(plugins_url('/style/rw-slider-image-products.css', __FILE__))); 
		wp_enqueue_style( 'rw-slider-image-products-css' );
    }
	function rw_slider_image_manage_admin() {
		require_once('rw-slider-image-admin.php');
	}
	function rw_slider_image_manage_general() {
		require_once('rw-slider-image-theme.php');
	}
	function rw_slider_image_manage_products() {
		require_once(dirname(__FILE__) . '/rw-slider-image-products.php');
	}
	function rw_slider_image_admin_style() {
		wp_register_style( 'rw-slider-image-style-fontawesome', esc_url(plugins_url('/style/richwebicons.css', __FILE__))); 
		wp_enqueue_style( 'rw-slider-image-style-fontawesome' );
		wp_register_style( 'rw-slider-image-header-css', esc_url(plugins_url('/style/rw-slider-image-header.css', __FILE__))); 
		wp_enqueue_style( 'rw-slider-image-header-css' );
	}
	function rw_slider_image_wp_deactivate() {
		delete_option("rw_slider_image_check_db");
		delete_option("rw_slider_image_check_version");
	}
?>
