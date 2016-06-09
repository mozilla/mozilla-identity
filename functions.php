<?php
/**
 * @package Baseline Child Theme
 */

/**
 * Load the parent and child theme styles
 */
function baseline_parent_theme_style() {

	// Parent theme styles
	wp_enqueue_style( 'baseline-style', get_template_directory_uri(). '/style.css' );

	// Child theme styles
	wp_enqueue_style( 'baseline-child-style', get_stylesheet_directory_uri(). '/style.css' );
}

/**
 * Remove versioning number after css
 */
function remove_css_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

add_action( 'wp_enqueue_scripts', 'baseline_parent_theme_style' );

add_filter( 'style_loader_src', 'remove_css_ver', 1000 );

?>
