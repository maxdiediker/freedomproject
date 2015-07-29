<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar( 'primary' ); ?>
<!-- END SIDEBAR -->

<div id = "main-single">
  <h3>this is single.php</h3>
  <!-- START CONTENT -->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div id="content" class="single">
      <strong class="breadcrumb"><?php if (function_exists('bcn_display')) { bcn_display(); } ?></strong>
          <h2><?php the_title(); ?></h2>


  	

      </p>
      <?php the_content('More &raquo;'); ?>
      <?php wp_link_pages(); ?>




      <?php endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
  </div>
  <!-- END CONTENT -->


</div>
<!-- end main-single -->



<?php get_footer(); ?>
