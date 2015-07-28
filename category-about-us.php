<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar( 'primary' ); ?>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<H2>THIS IS THE ABOUT US PAGE!!<H2>
<div id="content" class="index">
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    	<div class="post-box">
    	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <p class="postmetadata">

            <span class="cat"><?php the_category(', ') ?></span>
          
		<?php the_content('More &raquo;'); ?>

        </div>
    <?php endwhile; ?>



<?php endif; ?>
</div><!-- END CONTENT -->
<?php get_footer(); ?>
