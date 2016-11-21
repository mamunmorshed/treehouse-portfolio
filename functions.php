<?php 

if (!function_exists('treehouse_portfolio_setup')) {
	function treehouse_portfolio_setup(){
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array( 
			'primary-menu' => __( 'Primary Menu'),
			'footer-menu' => __( 'Footer Menu')
		 ) );
	}
}
add_action( 'after_setup_theme', 'treehouse_portfolio_setup' );


function thp_mm_enqueue_css(){
	wp_enqueue_style( 'normalize_css', get_stylesheet_directory_uri().'/assets/css/normalize.css');
	wp_enqueue_style( 'foundation_css', get_stylesheet_directory_uri().'/assets/css/foundation.css');
	wp_enqueue_style( 'google_fonts_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');
	wp_enqueue_style( 'main_css', get_stylesheet_directory_uri().'/assets/css/main.css');
}
add_action( 'wp_enqueue_scripts', 'thp_mm_enqueue_css');

function thp_mm_enqueue_js(){
	wp_enqueue_script( 'modernizr_js', get_stylesheet_directory_uri().'/assets/js/modernizr.js', array( '' ), false, false );
	wp_enqueue_script( 'foundation_js', get_stylesheet_directory_uri().'/assets/js/foundation.js', array( 'jquery'), false, true );
	wp_enqueue_script( 'main_js', get_stylesheet_directory_uri().'/assets/js/main.js', array( 'jquery', 'foundation_js' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'thp_mm_enqueue_js');