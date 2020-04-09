<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style( 'owl-styles', get_template_directory_uri() . '/css/owlcarousel/owl.carousel.min.css', array(), $css_version );
		wp_enqueue_style( 'flex-styles', get_template_directory_uri() . '/css/flexslider.css', array() );
		wp_enqueue_style( 'fancybox-styles', get_template_directory_uri() . '/css/fancybox.min.css', array() );
		wp_enqueue_style( 'owl-theme-styles', get_template_directory_uri() . '/css/owlcarousel/owl.theme.default.min.css', array(), $css_version );
		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(),'', true );
		wp_enqueue_script( 'flex-slider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(),'', true );
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(),'', true );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDWOlkn4gkriZL3ppySqGZszUPSbDFJ1UA', array(),'', true);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
