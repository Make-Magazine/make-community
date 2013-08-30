<?php
	/**
	 * Make: Community functions and definitions
	 *
	 * @package  Make: Community
	 * @author   Cole Geissinger <cgeissinger@makermedia.com>
	 * @since    0.1
	 */

	/**
	 * Contains all of our theme specific settings
	 * @since  0.1
	 */
	require get_template_directory() . '/includes/theme-settings.php';


	/**
	 * Custom template tags
	 * @since  0.1
	 */
	require get_template_directory() . '/includes/theme-functions.php';


	/**
	 * Custom functions that act independently of the theme templates.
	 */
	require get_template_directory() . '/includes/wp/extras.php';

	/**
	 * Customizer additions.
	 */
	require get_template_directory() . '/includes/wp/customizer.php';

	/**
	 * Load Jetpack compatibility file.
	 */
	require get_template_directory() . '/includes/wp/jetpack.php';
