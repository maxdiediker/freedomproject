<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar( 'primary' ); ?>
<!-- END SIDEBAR -->

<?php //add_flexslider(); ?>

<div id = "main-single">
  <h3>this is single.php</h3>
  <!-- START CONTENT -->
    <?php if (have_posts()) : while(have_posts()) : the_post();?> 
  <div id="content" class="single">
          <h2><?php the_title(); ?></h2>

      <?php the_content('More &raquo;'); ?>
      <?php //wp_link_pages(); ?>




    <?php endwhile; endif;?>
  </div>
  <!-- END CONTENT -->


</div>
<!-- end main-single -->


<?php get_footer(); ?>