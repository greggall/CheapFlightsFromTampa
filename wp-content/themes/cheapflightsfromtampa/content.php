<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>


  		 
		 <?php if (is_page('portfolio') ) {?>
		 
		 <?php
			$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 100 );
			$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					get_template_part( 'content-portfolio', get_post_format() );
				endwhile;
		
				wp_reset_query();
		 ?>
		 
		 <?php } ?>

	

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->

