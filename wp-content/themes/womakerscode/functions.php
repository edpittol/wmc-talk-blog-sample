<?php

add_theme_support( 'post-thumbnails' );

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image',
'quote', 'status', 'video', 'audio', 'chat' ) );

add_theme_support( 'title-tag' );

function womakerscode_init() {
  register_nav_menu( 'header-menu', __( 'Header Menu', 'womakerscode' ) );
}
add_action( 'init', 'womakerscode_init' );

function womakerscode_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'womakerscode' ),
		'id' => 'main_sidebar',
		'description' => __( 
			'Widgets in this area will be shown on all posts and pages.', 
			'womakerscode' 
		),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></li>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2><div class="widget-content">',
	) );
}
add_action( 'widgets_init', 'womakerscode_widgets_init' );

function womakerscode_enqueue_scripts() {
	wp_enqueue_style( 'theme-fonts', 'https://fonts.googleapis.com/css?family=Merriweather:400,700|Open+Sans:400,700' );
	wp_enqueue_style( 'reset-css', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), array( 'theme-fonts', 'reset-css' ) );
}
add_action( 'wp_enqueue_scripts', 'womakerscode_enqueue_scripts' );

function womakerscode_blog_title_colorful( $title ) {
	if( 'WoMakersCode' === $title ) {
		return 
			'<span class="wo">wo</span>' .
			'<span class="ma">ma</span>' .
			'<span class="kers">kers</span>' .
			'<span class="code">code</span>';
	}

	return $title;
}
add_filter( 'womakerscode_blog_title', 'womakerscode_blog_title_colorful', 10, 2 );