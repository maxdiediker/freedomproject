<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar('primary'); ?>
<!-- END SIDEBAR -->
<h2>from custom page template</h2>

        <div id="content" class=".excerpt-peach">
            <?php get_child_pages(); ?>

</div><!-- END CONTENT -->
</div> <!--END MAIN-->

<?php get_footer(); ?>
