<?php get_header(); ?>


<!-- START CONTENT -->
<div id="content" class="page">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content('<p class="serif">More &raquo;</p>'); ?>
    <?php endwhile; ?>
    <?php endif; ?>

	<!-- START SIDEBAR -->
	<?php get_sidebar( 'primary' ); ?>
	<!-- END SIDEBAR -->

</div>
<!-- END CONTENT -->


</div>
<!-- end main -->



<?php get_footer(); ?>
