</div><!-- END MIDDLE -->



<footer>
		<p><?php print ("&copy; " . date ('Y') . " "); ?><a href="#">Web210 SCCC</a> &bull; Powered by <a href="http://www.wordpress.org/" target="_blank">WordPress</a> &bull; <?php wp_loginout(); ?>.</p>
</footer>

</div><!-- END WRAPPER -->

<?php /* wp_footer function must be last item before closing body tag: many plugins use this hook to reference JavaScript files */ ?>
<?php wp_footer(); ?>
</body>
</html>