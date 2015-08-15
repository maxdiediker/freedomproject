<?php get_header(); ?>



<!-- START CONTENT -->
<div id="content" class="home-content page">
    
    <div class="excerpt-peach">
        <div class="excerpt-image-left">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/houses.png" alt="picture of houses"/>
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
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hifive.png" alt="picture of high five"/>
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
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/handshake.png" alt="picture of handshake"/>
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
    <div class="cta1">
        <?php $whatwedo_page = get_post(10); ?>
        <a href="<?php echo get_permalink($whatwedo_page->ID); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cta1.png" alt="learn about our programs"/>
        </a>
    </div>
    <div class="cta2">
        <?php $comemeetus_page = get_post(14); ?>
        <a href="<?php echo get_permalink($comemeetus_page->ID); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cta2.png" alt="come meet us"/>        
        </a>
    </div>
    <div class="cta3">
        <?php $comemeetus_page = get_post(12); ?>
        <a href="<?php echo get_permalink($comemeetus_page->ID); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cta3.png" alt="see the impact we're making"/>        
        </a>
    </div>
</div>
<!-- END CONTENT -->


</div>
<!-- end main -->



<?php get_footer(); ?>
<?php get_header(); ?>


<!--START FLEXSLIDER-->

<div class="flexslider">
<ul class="slides">
<li><img src="slide1.jpg" /></li>
<li><img src="slide2.jpg" /></li>
<li><img src="slide3.jpg" /></li>
</ul>
</div>
<!--END FLEXSLIDER-->
<!-- START CONTENT -->
<div id="content" class="home-content page">
    
    <div class="excerpt-peach">
        <div class="excerpt-image-left">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/houses.png" alt="picture of houses"/>
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
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hifive.png" alt="picture of high five"/>
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
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/handshake.png" alt="picture of handshake"/>
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
    <div class="cta1">
        <?php $whatwedo_page = get_post(10); ?>
        <a href="<?php echo get_permalink($whatwedo_page->ID); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cta1.png" alt="learn about our programs"/>
        </a>
    </div>
    <div class="cta2">
        <?php $comemeetus_page = get_post(14); ?>
        <a href="<?php echo get_permalink($comemeetus_page->ID); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cta2.png" alt="come meet us"/>        
        </a>
    </div>
    <div class="cta3">
        <?php $comemeetus_page = get_post(12); ?>
        <a href="<?php echo get_permalink($comemeetus_page->ID); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cta3.png" alt="see the impact we're making"/>        
        </a>
    </div>
</div>
<!-- END CONTENT -->


</div>
<!-- end main -->



<?php get_footer(); ?>
