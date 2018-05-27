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


		 <div class="row">
		
		 		<div class="col-md-4">
		 			<?php 

		 			$image = get_field('logo');

		 			if( !empty($image) ): ?>

		 				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		 			<?php endif; ?>
		 		</div><!--end. col-md-4-->

		 		<div class="col-md-8 text-left">
		 			<p><h3><?php the_title(); ?></h3></p>
			
		 			<p><h4>Pitch:</h4><?php the_field('pitch'); ?></p>
			
		 			<p><h4>Skills:</h4><?php the_field('skills'); ?></p>	

		 			<button type="button" class="btn btn-success btn-md"><a href="<?php the_field('article'); ?>" target="_blank">
		 			  View Article in a New Page</a>
		 			</button>
			
		 		</div><!--.end col-md-8-->
			
		 </div><!--.end .row-->

	

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->

