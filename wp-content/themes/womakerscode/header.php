<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<div class="wrapper">

			<header class="header clear" role="banner">
				<h1><?php bloginfo('name'); ?></h1>
			</header>

			<main role="main">
				<section>