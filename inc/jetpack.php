<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package foodnowyes
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function foodnowyes_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'foodnowyes_jetpack_setup' );
