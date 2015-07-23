<aside id="primary"> <!-- open #side primary-->



 <?php if ( is_active_sidebar( 'primary' ) ) : ?>

   <?php dynamic_sidebar( 'primary' ); ?>

 <?php else : ?>



           <p>this should only be visible if there are no widgets!!!!</p>
           <h3>Categories</h3>
             <ul>
                <?php wp_list_categories('title_li='); ?>
             </ul>

           <h3>Quote of the day:</h3>
           <blockquote> Think before you leap!</blockquote>

 <?php endif; ?>

</aside><!-- /#side primary-->
