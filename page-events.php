<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar('primary'); ?>
<!-- END SIDEBAR -->


        <div id="content">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content('<p class="serif">More &raquo;</p>'); ?>
    <?php endwhile; ?>
    <?php endif; ?>
            <?php get_child_pages(); ?>

</div><!-- END CONTENT -->
</div> <!--END MAIN-->

<?php get_footer(); ?>
