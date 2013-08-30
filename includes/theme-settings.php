<?php

	/**
	 * This file contains any theme specific settings
	 *
	 * @package  Make: Community
	 * @author   Cole Geissinger <cgeissinger@makermedia.com>
	 * @since    0.1
	 */
	
	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	/**
	 * Define some variables and constants that is needed
	 */
	define( 'MAKE_COMMUNITY_VERSION', '0.1' );


	if ( ! function_exists( 'make_community_setup' ) ) :
		/**
		 * Sets up theme defaults and registers support for various WordPress features.
		 *
		 * Note that this function is hooked into the after_setup_theme hook, which runs
		 * before the init hook. The init hook is too late for some features, such as indicating
		 * support post thumbnails.
		 */
		function make_community_setup() {

			/**
			 * Make theme available for translation
			 * Translations can be filed in the /languages/ directory
			 * If you're building a theme based on Make: Community, use a find and replace
			 * to change 'make-community' to the name of your theme in all the template files
			 */
			// load_theme_textdomain( 'make-community', get_template_directory() . '/languages' );

			/**
			 * Add default posts and comments RSS feed links to head
			 */
			add_theme_support( 'automatic-feed-links' );

			/**
			 * Enable support for Post Thumbnails on posts and pages
			 *
			 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
			 */
			add_theme_support( 'post-thumbnails' );

			/**
			 * This theme uses wp_nav_menu() in one location.
			 */
			register_nav_menus( array(
				'make-primary' => __( 'Make Primary Nav', 'make-community' ),
				'make-secondary' => __( 'Make Secondary Nav', 'make-community' ),
			) );

			/**
			 * Enable support for Post Formats
			 */
			add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

			/**
			 * Setup the WordPress core custom background feature.
			 */
			add_theme_support( 'custom-background', apply_filters( 'make_community_custom_background_args', array(
				'default-color' => 'ffffff',
				'default-image' => '',
			) ) );
		}
	endif; // make_community_setup
	add_action( 'after_setup_theme', 'make_community_setup' );


	/**
	 * Register widgetized area and update sidebar with default widgets
	 */
	function make_community_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Sidebar', 'make-community' ),
			'id'            => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		) );
	}
	add_action( 'widgets_init', 'make_community_widgets_init' );


	/**
	 * Enqueue scripts and styles
	 */
	function make_community_scripts() {
		wp_enqueue_style( 'make-community-style', get_template_directory_uri() . '/css/styles.css', array(), MAKE_COMMUNITY_VERSION );

		wp_enqueue_script( 'make-community-navigation', get_template_directory_uri() . '/js/wp/navigation.js', array(), MAKE_COMMUNITY_VERSION, true );

		wp_enqueue_script( 'make-community-skip-link-focus-fix', get_template_directory_uri() . '/js/wp/skip-link-focus-fix.js', array(), MAKE_COMMUNITY_VERSION, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		if ( is_singular() && wp_attachment_is_image() ) {
			wp_enqueue_script( 'make-community-keyboard-image-navigation', get_template_directory_uri() . '/js/wp/keyboard-image-navigation.js', array( 'jquery' ), MAKE_COMMUNITY_VERSION );
		}
	}
	add_action( 'wp_enqueue_scripts', 'make_community_scripts' );
	