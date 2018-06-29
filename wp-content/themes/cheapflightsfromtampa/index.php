<?php get_header(); ?>

	<div class="hero container-fluid text-center" style="background: linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url('http://localhost:8888/CheapFlightsFromTampa/wp-content/uploads/2018/06/Imagine-The-Possibilites.jpg');" alt="">
    
		<div class="row">
			
			<div class="hero-eyebrow">Read All About It</div>
			<svg class="underline-icon" viewBox="0 0 32 32">
			     <use xlink:href="#underline-icon" />
			</svg>
			<div class="welcome-text col-md-8 col-md-offset-2">Travel Guides, Tips, and Products</div><!--/.about-title-->

		</div><!--/.row-->

	</div><!--/.container-fluid-->

<div class="container-fluid blog-container">
	<div class="row">
		
			<div class=col-md-12>
				
				<form id="misha_filters" action="#">
					
					<ul class="filter">
				
						<li class="subtitle">I Want To Read About </li>
				
					<?php if( $terms = get_terms( 'category', 'orderby=name' ) ) : // to make it simple I use default categories
						echo '<li> <select name="categoryfilter"><option>Everything</option>';
						foreach ( $terms as $term ) :
							echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
						endforeach;
						echo '</select></li>';
					endif; ?>
					<!-- required hidden field for admin-ajax.php -->
					<input type="hidden" name="action" value="mishafilter" />
 
					<div><button class="blog-filter-btn">Apply Filter</button></div>
					
					</ul>
				</form>
				
				
			</div><!---/.col-md-12-->
		
			<div class="col-md-12 post-container" id="misha_posts_wrap">
				
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/post/content');

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif;
					
				?>
				
					
			</div><!--/.post-container-->
			
			<div class="text-center">
				<?php
				global $wp_query; // you can remove this line if everything works for you

				// don't display the button if there are not enough posts
				if (  $wp_query->max_num_pages > 1 ) :
					echo '<button id="misha_loadmore">Load More Posts</button>'; // you can use <a> as well
				endif;
				?>
			</div>
		
	</div><!--/.row-->
</div><!--/.container-fluid-->


<?php get_footer(); ?>
