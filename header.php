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
  	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/media-query.css" type=text/css" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="all" />
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(window).load(function(){
		$('.flexslider').flexslider({
			animation: "fade",
			slideshow: false,
			 });
			 })
			 </script>

	  <?php /*?> Always have wp_head() inside the </head> tag
	   of your theme. Many plugins use this hook to add elements
		to <head> such as styles, scripts, and meta tags.
	  <?php */?>
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrapper">

<header>

	<div id="innerheader">
		<div id="socialmedia">
			<?php wp_nav_menu( array(
					'theme_location' => 'social-menu' ,
					'menu' => 'Social Menu' ,
					'container'  => 'ul',
					) ); ?>

		</div>
	<!-- social -->



		<h1>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="freedom logo" id="logo"/>
			<!-- for screen readers -->

		</h1>

	</div>

	<!-- innerheader -->
	<div id ="donatebtn">
		<p>Donate</p>
		<!-- <img src = "images/donate.png" alt="donate button"> -->
	</div>


</header>

<!-- START NAVIGATION -->

	<div class="jquery-nav">
				<h4 class="jquery-title"><a href="#">Menu<div class="menu-icon"><img src="<?php bloginfo('template_url'); ?>/images/icon-menu.png"></div></a></h4>
				<?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
			</div>

<!-- END NAVIGATION -->

<!-- START MIDDLE -->
<div id="middle">
