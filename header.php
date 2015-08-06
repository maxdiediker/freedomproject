<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1">

	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

<!-- Remy Sharp Shim -->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" />

	  <?php /*?> Always have wp_head() inside the </head> tag
	   of your theme. Many plugins use this hook to add elements
		to <head> such as styles, scripts, and meta tags.
	  <?php */?>
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrapper">
<header>
	<div id = "socialmedia"><!--open #socialmedia-->

							 <?php wp_nav_menu( array(
								 'theme_location' => 'social-menu' ,
								 'menu' => 'Social Menu' ,
								 'container'  => 'ul',


								 ) ); ?>

					</div><!--/#socialmedia-->

	<!-- Begin Logo -->
		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
		<p class="description"><?php bloginfo('description'); ?></p>
    <!-- End Logo -->

</header>

<!-- START NAVIGATION -->
	<nav id="nav-main">
      <?php wp_nav_menu( array(
			'theme_location' => 'main-menu' ,
			'menu' => 'Main Menu' ,
			'container'  => 'ul',

		) ); ?>
</nav>
<!-- END NAVIGATION -->

<!-- START MIDDLE -->
<div id="middle">
