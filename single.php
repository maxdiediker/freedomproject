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
      <p class="postmetadata">
      	<span class="date">Posted on <?php the_time('F jS, Y') ?></span> in
  		<span class="cat"><?php the_category(', ') ?></span>
  		<span class="author">by <?php the_author_posts_link(); ?></span>
      </p>
      <?php the_content('More &raquo;'); ?>
      <?php wp_link_pages(); ?>

  		<nav class="post-nav">
  			<div class="alignleft"><?php previous_post_link('&laquo; %link', '%title', true) ?></div>
  			<div class="alignright"><?php next_post_link('%link &raquo;', '%title', true) ?></div>
  		</nav>

      <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
  	<?php comments_template(); ?>
      <?php endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
  </div>
  <!-- END CONTENT -->


</div>
<!-- end main -->



<?php get_footer(); ?>
