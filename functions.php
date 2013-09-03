<?php

/**
 * Enqueues scripts and styles for front end.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function lowermedia_landingpage_scripts_styles() {

	// Loads our main stylesheet.
	wp_enqueue_style( 'lowermedia_landingpage-style', get_stylesheet_uri(), array(), '2013-07-18' );
}
add_action( 'wp_enqueue_scripts', 'lowermedia_landingpage_scripts_styles' );