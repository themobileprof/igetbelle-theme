<?php

function customtheme_add_woocommerce_support(){
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );


function wpb_custom_new_menu() {
	register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
add_action( 'init', 'wpb_custom_new_menu' );


/**
 * Include external files
 */
// require_once('inc/pagination.inc.php');

/**
 * Include CSS files
 */
function theme_enqueue_scripts() {
	wp_enqueue_style( 'Font_Awesome', get_template_directory_uri() . '/plugins/font-awesome-4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/styles/bootstrap4/bootstrap.min.css' );
	wp_enqueue_style( 'Owl_carousel', get_template_directory_uri() . '/plugins/OwlCarousel2-2.2.1/owl.carousel.css' );
	wp_enqueue_style( 'Owl_theme', get_template_directory_uri() . '/plugins/OwlCarousel2-2.2.1/owl.theme.default.css' );
	wp_enqueue_style( 'Animate', get_template_directory_uri() . '/plugins/OwlCarousel2-2.2.1/animate.css' );
	wp_enqueue_style( 'About', get_template_directory_uri() . '/styles/about.css' );
	wp_enqueue_style( 'About_responsive', get_template_directory_uri() . '/styles/about_responsive.css' );
	
    wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '3.3.1', true );
	wp_enqueue_script( 'Popper', get_template_directory_uri() . '/styles/bootstrap4/popper.js', array(), false, true );
	wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/styles/bootstrap4/bootstrap.min.js', array(), false, true );
	wp_enqueue_script( 'Tween_Max', get_template_directory_uri() . '/plugins/greensock/TweenMax.min.js', array(), false, true );
	wp_enqueue_script( 'Timeline_Max', get_template_directory_uri() . '/plugins/greensock/TimelineMax.min.js', array(), false, true );
	wp_enqueue_script( 'Scroll_Magic', get_template_directory_uri() . '/plugins/scrollmagic/ScrollMagic.min.js', array(), false, true );
	wp_enqueue_script( 'Animation_JS', get_template_directory_uri() . '/plugins/greensock/animation.gsap.min.js', array(), false, true );
	wp_enqueue_script( 'ScrollToPlugin', get_template_directory_uri() . '/plugins/greensock/ScrollToPlugin.min.js', array(), false, true );
	wp_enqueue_script( 'Owl_carousel', get_template_directory_uri() . '/plugins/OwlCarousel2-2.2.1/owl.carousel.js', '2.2.1', false, true );
	wp_enqueue_script( 'Easing', get_template_directory_uri() . '/plugins/easing/easing.js', array(), false, true );
	wp_enqueue_script( 'Parallax', get_template_directory_uri() . '/plugins/parallax-js-master/parallax.min.js', array(), false, true );
	wp_enqueue_script( 'About', get_template_directory_uri() . '/js/about.js', array(), false, true );

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 5);
//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);


function woocommerce_template_product_description() {
  woocommerce_get_template( 'single-product/tabs/description.php' );
}
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );


//remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
?>