<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Make: Community
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function make_community_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'make_community_jetpack_setup' );
