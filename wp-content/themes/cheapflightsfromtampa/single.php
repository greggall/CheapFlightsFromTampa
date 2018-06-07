<!--

Template page for displaying single deal posts, both Premium and Free. 

-->

<?php get_header(); ?>


<div class="container-fluid ">
	
	<div class="row">
		<div class="col-md-12 single-deal">
			
			<div class="col-md-8 main">
			
				<div class="deal-wrapper">
		
					<?php if ( in_category('premium') ): ?> 
				
						<?php 

						$rows = get_field('premium_eyebrow', 'options' ); // get all the rows
						$rand_row = $rows[ array_rand( $rows ) ]; // get a random row
						$rand_row_comment = $rand_row['comment' ]; // get the sub field value 

						?>
						
						<div class="premium-badge"><img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/premium_badge.svg"></div>
						
						<div class="premium-eyebrow"><?php echo $rand_row_comment; ?></div>
			
						<?php else: ?>
				
						<?php 

						$rows = get_field('free_eyebrow', 'options' ); // get all the rows
						$rand_row = $rows[ array_rand( $rows ) ]; // get a random row
						$rand_row_comment = $rand_row['comment' ]; // get the sub field value 

						?>
						<div class="free-eyebrow"><?php echo $rand_row_comment; ?></div>		
			
					<?php endif ?>	
			
					<div class="single-deal-title">Tampa to <?php the_field('post_destination'); ?>: $<?php the_field('post_price'); ?></div><!--/.recent-deal-->
			
					<div class="deal-meta col-md-12">
						<div class="single-normal-price col-md-3">
							<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_flight.svg">Normal Price: $<?php the_field('normal_roundtrip_price'); ?></div><!--/.normal-price-->
				
						<div class="dates col-md-5">
					
							<?php if ( in_category('premium') ): ?> 
						
								<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_calendar.svg">Dates: Premium Subscribers Only
						
							<?php else: ?>
						
								<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_calendar.svg">Dates: <?php the_field('dates'); ?>
						
							<?php endif ?>
					
						</div><!--/.normal-price-->
				
						<?php if( get_field('carry_on_cost') ): ?>
						<div class="carry-on col-md-4">
								<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_carry_on_cost.svg">Carry-On Cost: $<?php the_field('carry_on_cost'); ?>
						</div>
						<?php endif; ?>
						
					</div><!--/.deal-meta-->
			
					<div class="deal-copy"><?php the_field('deal_copy') ?></div><!--/.destination-copy-->
			
					<div class="featured-image"><?php the_post_thumbnail(); ?></div><!--/.featured-image-->
			
					<div class="how-to-book-title">How To Book</div><!--/.title-->
			
						<?php if ( in_category('premium') ): ?>
					
							<div class="book-subhead"><?php the_field('book_subhead', 'options'); ?></div>
					
						<?php endif ?>	
			
					<div class="book-copy"><?php the_field('book_first_leg') ?></div><!--/.destination-copy-->
			
					<div class="screenshot-one">
				
						<?php 

						$image = get_field('screenshot_one');

						if( !empty($image) ): ?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>
				
					</div><!--/.screenshot-one-->
					
					<?php if ( in_category('free') ): ?> 
						<div class="sample-flight"><button><a href="<?php the_field('sample_first_leg'); ?>" target="_blank">Sample Tampa To <?php the_field('sample_first_leg_button'); ?> Flight</a></button></div><!--/.sample-flight-->
					<?php endif; ?>	
			
					
					<?php if( get_field('book_second_leg') ): ?>
						<div class="book-second-leg"><?php the_field('book_second_leg') ?></div><!--/.book-second-leg-->
					<?php endif; ?>
			
					<?php 

					$image = get_field('screenshot_two');

					if( !empty($image) ): ?>
						<div class="screenshot-two">

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div><!--/.screenshot-two-->
					
					<?php endif; ?>
				
					
					<?php if ( in_category('free') ): ?> 
						<?php if( get_field('sample_second_leg_button') ): ?>
							<div class="sample-flight"><button><a href="<?php the_field('sample_second_leg'); ?>" target="_blank">Sample <?php the_field('sample_second_leg_button'); ?> Flight</a></button></div><!--/.sample-flight-->
						<?php endif; ?>
					
					<?php else: ?>
							
							<div class="single-learn-premium"><button><a href="https://cheapflightsfomtampa.com/premium">Learn More About Premium</a></button></div>
						
					<?php endif; ?>	
					
					<div class="encourage-text">
				
						<?php 

						$rows = get_field('encourage_text', 'options' ); // get all the rows
						$rand_row = $rows[ array_rand( $rows ) ]; // get a random row
						$rand_row_comment = $rand_row['comment' ]; // get the sub field value 

						?>
						<div><?php echo $rand_row_comment; ?></div>
				
					</div><!--/.encourage-text-->
				
				</div><!--/.deal-->
			
				<div class="deal-wrapper premium-caveat col-md-12">
			
					<div class="premium-alert-img col-md-3">

						<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_alert.svg">
			
					</div>
		
					<div class="col-md-9"><?php the_field('premium_caveat', 'option')?></div>
					
				</div><!--/.premium-caveat-->		
		
				<div class="deal-wrapper premium-tease col-md-12">
			
					<div class="tease-title"><?php the_field('tease_title'); ?></div><!--/.tease-title-->
			
					<div class="tease-suntitle"><?php the_field('tease_subtitle'); ?></div><!--/.tease-subtitle-->	
			
					<div class="single-deal-post-funnel">
				
						<?php $subscribe_reasons = get_field('subscribe_reasons', 'options');
				
						if ( $subscribe_reasons ): ?>

							<div class="single-reasons-title"><?php echo $subscribe_reasons['title']; ?></div>
							<div class="single-reasons-subtitle"><?php echo $subscribe_reasons['subtitle']; ?></div>

						<?php endif; ?>

						<div class="reasons-wrapper">

							  <div class="col-md-6 single-reason">
								<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_check_circle.svg">  
							  	<?php echo $subscribe_reasons['reason_one']; ?>
							  </div><!--/.col-md-4-->

							  <div class="col-md-6 single-reason">
								<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_check_circle.svg">  
							  	<?php echo $subscribe_reasons['reason_two']; ?>
							  </div><!--/.col-md-4-->

							  <div class="col-md-6 single-reason">
							  	<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_check_circle.svg">
								<?php echo $subscribe_reasons['reason_three']; ?>
							  </div><!--/.col-md-4-->

							  <div class="col-md-6 single-reason">
							  	<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_check_circle.svg">
								<?php echo $subscribe_reasons['reason_four']; ?>
							  </div><!--/.col-md-4-->

							  <div class="col-md-6 single-reason">
							  	<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_check_circle.svg">
								<?php echo $subscribe_reasons['reason_five']; ?>
							  </div><!--/.col-md-4-->

							  <div class="col-md-6 single-reason">
							  	<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_check_circle.svg">
								<?php echo $subscribe_reasons['reason_six']; ?>
							  </div><!--/.col-md-4-->

						</div><!--/.reasons-wrapper-->
					</div><!--/.single-post-deal-funnel-->
				</div><!--/.premium-tease-->
					
				<div class="deal-wrapper premium-cta col-md-12">
					
					<div class="col-md-6">
						<div class="premium-cta-title"><?php the_field('title', 'option'); ?></div>
						<div class="premium-cta-subtitle"><?php the_field('subtitle', 'option'); ?></div>
				        <div class="benefits-premium-cta"><?php if( have_rows('features', 'option') ): ?>

				          	<?php while( have_rows('features', 'option') ): the_row();

				          		// vars
				          		$feature = get_sub_field('feature');

				          		?>

				          			<?php if( $feature ): ?>

								  <p class="feature"><?php the_sub_field('feature') ?> </p>

				          			<?php endif; ?>

				          	<?php endwhile; ?>

				          <?php endif; ?>
						</div><!--/.benefit-->
					</div><!--/.col-md-6-->

					<div class="col-md-6">

						<div class="three-dollars-reg"><?php the_field('sign_up', 'option'); ?></div>

					</div>
			
				</div><!--/.premium-cta-->
			
		        <div class="deal-wrapper free-cta col-md-12">

		            <div class="single-free-title text-left">
				
						<?php the_field('free_sign_up_title', 'option') ?>
						
					</div>
					
					<div>
						
						<?php the_field('free_sign_up_subtitle', 'option') ?>
						
					</div>
				
					<div class="email text-center">

						<!-- Begin MailChimp Signup Form -->
						<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
						<div id="mc_embed_signup">
						<form action="//cheapflightsfromtampa.us16.list-manage.com/subscribe/post?u=bc044b5ce916ab5cd6505c30d&amp;id=597366555e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">

							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address" required>
						    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bc044b5ce916ab5cd6505c30d_597366555e" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Send Me Cheap Flights!" name="subscribe" id="mc-embedded-subscribe"></div>
						    </div>
						</form>
						</div><!--End mc_embed_signup-->

					</div><!--/.email-->

		        </div><!--./free-cta-->
			
			</div><!--/.col-md-8-->
		
			<div class="col-md-4 sidebar">
			
				<div><?php dynamic_sidebar( 'single_deal_post_sidebar' ); ?></div>
			
				<div class="widget col-md-12">
				
					<h3 class="deal-sidebar-title"><span>Recent Premium Deals</span></h3>
					<?php // retrieve nest six posts after the first
							$the_query = new WP_Query( array(
								'posts_per_page' => '3',
								'category_name' => 'premium',

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
	</div><!--/.row-->
	
	<div id="ddexitpop1" class="ddexitpop">
	    	<h1>Hold On For Just One Second!</h1>
	    	<p>Before you leave, download our FREE e-book that shows you how to create a blog, step by step, in under 20 minutes!</p>
	    	<p>You'll learn:</p>
	    	<ul>
	    	<li>Pick a Web Host</li>
	    	<li>How to select the best CMS</li>
	    	<li>Install and Choose a Theme</li>
	    	<li>Promote and Set Up Social Profiles for your Blog</li>
	    	</ul>
	    	<a class="calltoaction" href="#" onClick="ddexitpop.hidepopup()">Download Free E-Book</a>
    
	    </div>
	
</div><!--/.container-fluid-->

<?php get_footer(); ?>