<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width; initial-scale=1.0">
<!--Flexslider scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="scripts/jquery.flexslider.js"></script>
<link rel="stylesheet" href="flexslider.css" type="text/css">
<!--End Flexslider scripts-->

<!-- Begin Flex Slider -->
<script type="text/javascript" charset="utf-8">
$(window).load(function() {
$('.flexslider').flexslider();
});
</script>
<!-- End Flex Slider -->

	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

<!-- Remy Sharp Shim -->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<style type="text/css" media="screen">
@import url( <?php bloginfo('stylesheet_url'); ?> );
@import url(<?php bloginfo('stylesheet_directory'); ?>/media-query.css);
</style>



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

	<div id="innerheader">
		<div id="socialmedia">
			<?php wp_nav_menu( array(
					'theme_location' => 'social-menu' ,
					'menu' => 'Social Menu' ,
					'container'  => 'ul',
					) ); ?>

		</div>
	<!-- social -->



		<div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="freedom logo" id="logo"/></a>
			<!-- for screen readers -->

		</div>

	</div>

	<!-- innerheader -->
        <div id ="donatebtn">
		<a href="https://secure.lglforms.com/form_engine/s/3ZhDsGvDyJsI1F2W50Dv3g" target="_blank"><p>Donate</p></a>
		<!-- <img src = "images/donate.png" alt="donate button"> -->

	</div>


</header>
<!-- mobile donate and nav -->
<div id = "social-m">
	   <div class = "twitter-m">
			 <a href="https://twitter.com/FreedomProject3" target="#">
				 <img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" alt=""/>
			 </a>
		</div>
		<div class = "facebook-m">
			<a href="https://www.facebook.com/FreedomProjectSeattle" target="#">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" alt=""/>
			</a>

	</div>
</div>
<div id = "donate-m">
		<a href="https://secure.lglforms.com/form_engine/s/3ZhDsGvDyJsI1F2W50Dv3g" target="_blank"><p>Donate</p></a>
</div>
<!-- END mobile donate and nav -->
<!-- START NAVIGATION -->

	<div class="jquery-nav">
				<h4 class="jquery-title"><a href="#">Drop-Down Menu<div class="menu-icon"><img src="<?php bloginfo('template_url'); ?>/images/icon-menu.png"></div></a></h4>
				<?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
			</div>

<!-- END NAVIGATION -->

<!-- START MIDDLE -->
<div id="middle">
