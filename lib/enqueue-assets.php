<?php
/* *
 * Block enqueue scripts
 */
namespace Readability;

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets');

function enqueue_assets() {

	wp_enqueue_style(
		'readability-style',
		get_stylesheet_uri(),
		time(), //change to filemtime for production
		true
	);

	wp_enqueue_script(
		'readability-navigation',
		get_template_directory_uri() . '/js/navigation.js',
		time(), //change to filemtime for production
		true
	);

	wp_enqueue_script(
		'readability-skip-link-focus-fix',
		get_template_directory_uri() . '/js/skip-link-focus-fix.js',
		time(), //change to filemtime for production
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'enqueue_block_assets', __NAMESPACE__ . '\enqueue_block_assets' );

function enqueue_block_assets() {

	wp_enqueue_style(
		'blocks-css',
		get_stylesheet_directory_uri() . '/css/blocks.css',
		time(), //change to filemtime for production
		true
	);

	wp_enqueue_script(
		'blocks-js',
		get_stylesheet_directory_uri() . '/js/blocks.js',
		[ 'wp-i18n', 'wp-element', 'wp-blocks', 'wp-components' ],
		time(), //change to filemtime for production
		true
	);

}

/* *
 * Enable Align Wide and Align Full 
 */
add_theme_support( 'align-wide' );

add_theme_support( 'align-full' );
