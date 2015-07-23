<form method="get" id="searchform" action="<?php echo esc_url( home_url() ); ?>/">
<p><input type="text" value="<?php the_search_query(); ?>" name="s" id="search" />&nbsp;&nbsp;<small><input type="submit" name="submit" class="submit" value="search" /></small></p>
</form>
