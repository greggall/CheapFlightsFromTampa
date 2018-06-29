<!--

Template page for displaying single deal posts, both Premium and Free. 

-->

<?php get_header(); ?>


<div class="container-fluid ">
	
	<div class="row">
		<div class="col-md-12 single-deal">
			
			<div class="col-md-8 main">
			
				<div class="wrapper">
					
					<div class="breadcrumbs"><?php the_breadcrumb(); ?></div>
			
					<h1 class="title"><?php the_title(); ?></h1>
			
					<div class="deal-meta col-md-12">
				
						<div class="dates col-md-5">
						
							<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_calendar.svg">Posted On: <?php the_date(); ?>
					
						</div><!--/.normal-price-->
				
						<div class="carry-on col-md-4">
								<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_carry_on_cost.svg">Category: <?php get_the_category(); ?>
						</div>
						
					</div><!--/.deal-meta-->
					
					<div class="featured-image"><?php the_post_thumbnail(); ?></div><!--/.featured-image-->
					
					<div class="blog-copy"><?php the_content() ?></div><!--/.destination-copy-->
				
				</div><!--/.deal-->
			
				<div class="wrapper col-md-12">
			
					<h2 class="title">You May Also Be Interested In</h2>
						
						<div class="related-container">
							<!--Start Related Posts-->
							<?php
					
							$catidlist = '';
							foreach( $categories as $category) {
							    $catidlist .= $category->cat_ID . ",";
							}
					
							// Build our basic custom query arguments
							$custom_query_args = array( 
								'posts_per_page' => 3, // Number of related posts to display
								'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
								'orderby' => 'rand', // Randomize the results
								'cat' => $catidlist,
							);
							// Initiate the custom query
							$custom_query = new WP_Query( $custom_query_args );

							// Run the loop and output data for the results
							if ( $custom_query->have_posts() ) : ?>
								<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
							
									<div class="col-md-4">
										<div class="related-post-wrapper">
									
											<a href="<?php the_permalink();?>">

												<div class="blog-post-image"><?php the_post_thumbnail('blog-post'); ?></div><!--/.post-image-->
	
												<h3 class="related-post-title"><?php the_title(); ?></h3>
									
											</a>
									
										</div><!--/.wrapper-->
									</div>
							
								<?php endwhile; ?>
							<?php else : ?>
									<p>Sorry, no related articles to display.</p>
							<?php endif;
							// Reset postdata
							wp_reset_postdata();
							?>
							<!--End Related Posts-->
						</div>
					
				</div><!--/.premium-caveat-->		
		
				<div class="wrapper col-md-12">
			
					<div class="title">Speak Your Mind</div><!--/.title-->
			
					<?php if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif; ?>
					
				</div><!--/.premium-tease-->
				 
			
			</div><!--/.col-md-8-->
		
			<div class="col-md-4 sidebar">
			
				<div><?php dynamic_sidebar( 'single_blog_post_sidebar' ); ?></div>
			
				<div class="widget col-md-12">
				
					<h3 class="deal-sidebar-title"><span>Recent Premium Deals</span></h3>
					<?php // retrieve nest six posts after the first
							$the_query = new WP_Query( array(
								'posts_per_page' => '3',
								'category_name' => 'premium',
								'post_type' => 'recent_deal'

							) ); ?>

							<?php if ( $the_query->have_posts() ) : ?>

								<!-- the loop -->
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

									<div class="col-md-12 sidebar-deal">
										<div class="post-wrapper" style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover;">
											
											<?php if ( in_category('premium') ) { ?>
			
												<div class="sidebar-premium-badge"><img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/premium_badge.svg"></div>
				
											<?php } ?>
											
											<div class="recent-deal-overlay"></div><!--/.recent-deal-overlay-->

											<div class="recent-deal">Tampa to <?php the_field('post_destination'); ?>: $<?php the_field('post_price'); ?></div><!--/.recent-deal-->

											<div class="normal-price">Normal Price: $<?php the_field('normal_roundtrip_price'); ?></div><!--/.normal-price-->
						
											<p><a href="<?php the_permalink();?>"><button>View Deal</button></a></p>
										</div><!--/.post-wrapper-->
									</div><!--/.col-md-12-->

								<?php endwhile; ?>
								<!-- end of the loop -->

								<?php wp_reset_postdata(); ?>

							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
				
				</div><!--/.widget-->
			</div><!--/.sidebar-->
			
		</div><!--/.col-md-12-->
		
		<!--<div id="ddexitpop1" class="ddexitpop">
			
			<div class="closeexitpop"></div>
	
	    	<h1><?php //the_field('popup_title', 'option'); ?></h1>
			<div class="popup-content"><?php //the_field('popup_content', 'option')?></div>
	    	
	    	<div class="popup three-dollars-reg"><?php //the_field('sign_up', 'option'); ?></div>
			
		</div>-->
		
	</div><!--/.row-->
	
</div><!--/.container-fluid-->

<?php get_footer(); ?>