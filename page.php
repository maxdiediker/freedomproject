<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar(); ?>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div id="content" class="page">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>     
		<?php the_content('<p class="serif">More &raquo;</p>'); ?>
        <?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
	</div>
   
	<?php endwhile; endif; ?>  
    <?php comments_template(); ?>
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>