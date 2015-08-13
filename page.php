<?php get_header(); ?>


<!-- START CONTENT -->
<div id="content" class="page">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>
		<?php the_content('<p class="serif">More &raquo;</p>'); ?>

	</div>

	<?php endwhile; endif; ?>
	<!-- START SIDEBAR -->
	<?php get_sidebar( 'primary' ); ?>
	<!-- END SIDEBAR -->

</div>
<!-- END CONTENT -->


</div>
<!-- end main -->



<?php get_footer(); ?>
