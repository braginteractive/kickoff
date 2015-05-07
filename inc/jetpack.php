<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Poor
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function poor_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'poor_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function poor_jetpack_setup
add_action( 'after_setup_theme', 'poor_jetpack_setup' );

function poor_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function poor_infinite_scroll_render