<?php get_header(); ?>


<!--START FLEXSLIDER-->
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
<!--END FLEXSLIDER-->
<!-- START CONTENT -->
<div id="content" class="home-content page">
    
    <div class="excerpt-peach">
        <div class="excerpt-image-left">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/houses.png" alt="picture of houses" id="logo"/>
        </div>
        <div class="excerpt-text-right">
    <?php echo get_the_excerpt(); ?>

    <?php 
        query_posts("page_id=52");
        while ( have_posts() ) : the_post()
    ?>
        <h1><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
        <?php the_excerpt(); ?>

    <?php
        endwhile; 
        wp_reset_query();
    ?>  
        </div><!--end excerpt text right-->
    </div><!--end excerpt peach-->   
    <div class="excerpt-green"> 
        <div class="excerpt-image-right">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hifive.png" alt="picture of high five" id="logo"/>
        </div>
        <div class="excerpt-text-left">
            <?php echo get_the_excerpt(); ?>

            <?php 
                query_posts("page_id=40");
                while ( have_posts() ) : the_post()
            ?>
                <h1><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
                <?php the_excerpt(); ?>

            <?php
                endwhile; 
                wp_reset_query();
            ?>           
        </div><!--end excerpt text right-->

    </div><!--end excerpt green-->   
    <div class="excerpt-peach">
        <div class="excerpt-image-left">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/handshake.png" alt="picture of handshake" id="logo"/>
        </div>
        <div class="excerpt-text-right">
            <?php echo get_the_excerpt(); ?>

            <?php 
                query_posts("page_id=10");
                while ( have_posts() ) : the_post()
            ?>
                <h1><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
                <?php the_excerpt(); ?>

            <?php
                endwhile; 
                wp_reset_query();
            ?>   
        </div><!--end excerpt text right-->
    </div><!--end excerpt peach-->    
</div>
<!-- END CONTENT -->


</div>
<!-- end main -->



<?php get_footer(); ?>
