<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<header class="header clear" role="banner">
			<h1><?php echo apply_filters( 'womakerscode_blog_title', get_bloginfo( 'name' ) ); ?></h1>
			
			<?php 
				if( has_nav_menu( 'header-menu' ) ) : 
					wp_nav_menu( array(
						'menu' => 'header-menu'
					) );
				endif;
			?>
		</header>

		<div class="wrapper">