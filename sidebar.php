<aside id="primary"> 	<?php /*?> the aside's id is used for CSS styling <?php */?>
	<?php if ( is_active_sidebar( 'primary' ) ) : ?>

		<?php dynamic_sidebar( 'primary' ); ?>

	<?php else : ?>

<?php /*?>
Replace the code below with whatever default code you want to display in the sidebar when no widgets are active.
Here are some examples:
<?php */?>

    <div class="widget">
      <h3>Primary Sidebar</h3>
        <p>This should not display</p>
    </div>

    <div class="widget">
 		<h3>Search</h3>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
    </div>

        <!-- Begin Categories -->
    <div class="widget">
		<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('title_li='); ?>
		</ul>
    </div>
    	<!-- End Categories -->

        <!-- Begin Meta -->
    <div class="widget">
        <h3>Meta</h3>
        <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
        </ul>
    </div>
    	<!-- End Meta -->

<?php /*?> end default code to display in the sidebar when no widgets are active. <?php */?>

	<?php endif; ?>
</aside><!-- /secondary -->
