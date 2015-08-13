</div><!-- END MIDDLE -->



<footer>
    <p>
    <ul> 
        <li><?php print ("&copy; " . date ('Y') . " "); ?> . Freedom Project . Design by SCC Group 2</li>
    </ul> 
        <?php wp_loginout(); ?>
    </p>
</footer>

</div><!-- END WRAPPER -->
<script>


	window.onload = function() {


		jQuery(".jquery-title").click(function() {
			jQuery(".menu-main-menu-container").slideToggle();
			return false;
		});


		jQuery(window).resize(function(){

			if (jQuery(window).width() > 800) {
				jQuery(".menu-main-menu-container").css('display', 'block');
			}

			if (jQuery(window).width() < 800) {
				jQuery(".menu-main-menu-container").css('display', 'none');
			}
		});

	};


	</script>

<?php /* wp_footer function must be last item before closing body tag: many plugins use this hook to reference JavaScript files */ ?>
<?php wp_footer(); ?>


</body>
</html>
