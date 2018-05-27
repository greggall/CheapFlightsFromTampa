<!--

Template page for displaying single deal posts, both Premium and Free. 

-->

<?php get_header(); ?>


<div class="container-fluid">
	
	<div class="row">
		
		<div class="col-md-7 col-md-offset-1 deal-wrapper">
			
			<div class="deal">
		
				<?php if ( in_category('premium') ): ?> 
				<div class="premium-eyebrow">
				
					<?php 

					$rows = get_field('premium_eyebrow', 'options' ); // get all the rows
					$rand_row = $rows[ array_rand( $rows ) ]; // get a random row
					$rand_row_comment = $rand_row['comment' ]; // get the sub field value 

					?>
					<div><?php echo $rand_row_comment; ?></div>
				
				</div><!--/.premium-eyebrow-->
			
				<?php else: ?>
			
				<div class="free-eyebrow">
				
					<?php 

					$rows = get_field('free_eyebrow', 'options' ); // get all the rows
					$rand_row = $rows[ array_rand( $rows ) ]; // get a random row
					$rand_row_comment = $rand_row['comment' ]; // get the sub field value 

					?>
					<div><?php echo $rand_row_comment; ?></div>
				
				</div><!--/.free-eyebrow-->
			
				<?php endif ?>	
			
				<div class="recent-deal" style="color: #000">Tampa to <?php the_field('post_destination'); ?>: $<?php the_field('post_price'); ?></div><!--/.recent-deal-->
			
				<div class="deal-meta">
					<div class="normal-price col-md-4" style="color: #000">
						<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_flight.svg">Normal Roundtrip Price: $<?php the_field('normal_roundtrip_price'); ?></div><!--/.normal-price-->
				
					<div class="dates col-md-4" style="color: #000">
					
						<?php if ( in_category('premium') ): ?> 
						
							<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_calendar.svg">Dates: For Premium Subscribers Only
						
						<?php else: ?>
						
							<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_calendar.svg">Dates: <?php the_field('dates'); ?>
						
						<?php endif ?>
					
					</div><!--/.normal-price-->
				
					<div class="carry-on col-md-4">
					
						<?php if( get_field('carry_on_cost') ): ?>
							<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_carry_on_cost.svg">Carry-On Cost: $<?php the_field('carry_on_cost'); ?>
						<?php endif; ?>
					
					</div>
				</div><!--/.deal-meta-->
			
				<div class="deal-copy"><?php the_field('deal_copy') ?></div><!--/.destination-copy-->
			
				<div class="featured-image"><?php the_post_thumbnail(); ?></div><!--/.featured-image-->
			
				<div class="title how-to-book-title">How To Book</div><!--/.title-->
			
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
			
	
				<div class=""><a href="<?php the_field('sample_first_leg'); ?>" target="_blank"><button>Sample Tampa To <?php the_field('sample_first_leg_button'); ?> Flight</button></a></div>
			
				<div class="book-second-leg"><?php the_field('book_second_leg') ?></div><!--/.book-second-leg-->
			
				<div class="screenshot-two">
				
					<?php 

					$image = get_field('screenshot_two');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
				
				</div><!--/.screenshot-two-->
					
				<div class="sample-second-leg-button"><a href="<?php the_field('sample_second_leg'); ?>" target="_blank">Sample <?php the_field('sample_second_leg_button'); ?> Flight</a></div>
			
				<div class="encourage-text">
				
					<?php 

					$rows = get_field('encourage_text', 'options' ); // get all the rows
					$rand_row = $rows[ array_rand( $rows ) ]; // get a random row
					$rand_row_comment = $rand_row['comment' ]; // get the sub field value 

					?>
					<div><?php echo $rand_row_comment; ?></div>
				
				</div><!--/.encourage-text-->
				
			</div><!--/.deal-->
			
			<div class="premium-caveat">
			
				<div class="premium-alert-img col-md-3">
	
					<img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_alert.svg">
				
				</div>
			
				<div class="col-md-9"><?php the_field('premium_alert')?></div>
				
			</div><!--/.caveat-->		
		
			<div class="premium-tease">
			
				<div class="tease-title"><?php the_field('tease_title'); ?></div><!--/.tease-title-->
			
				<div class="tease-suntitle"><?php the_field('tease_subtitle'); ?></div><!--/.tease-subtitle-->	
			
				<div class="single-deal-post-funnel">
				
					<?php $subscribe_reasons = get_field('subscribe_reasons', 'options');
				
					if ( $subscribe_reasons ): ?>
			
					<div class="">

						<div class="reasons-title"><?php echo $subscribe_reasons['title']; ?></div>
						<div class="reasons-subtitle"><?php echo $subscribe_reasons['subtitle']; ?></div>

					<?php endif; ?>
					</div><!--/.col-md-12-->

					<div class="col-md-12 reasons-wrapper">

						  <div class="col-md-6 reason">
						  	<?php echo $subscribe_reasons['reason_one']; ?>
						  </div><!--/.col-md-4-->

						  <div class="col-md-6 reason">
						  	<?php echo $subscribe_reasons['reason_two']; ?>
						  </div><!--/.col-md-4-->

						  <div class="col-md-6 reason">
						  	<?php echo $subscribe_reasons['reason_three']; ?>
						  </div><!--/.col-md-4-->

						  <div class="col-md-6 reason">
						  	<?php echo $subscribe_reasons['reason_four']; ?>
						  </div><!--/.col-md-4-->

						  <div class="col-md-6 reason">
						  	<?php echo $subscribe_reasons['reason_five']; ?>
						  </div><!--/.col-md-4-->

						  <div class="col-md-6 reason">
						  	<?php echo $subscribe_reasons['reason_six']; ?>
						  </div><!--/.col-md-4-->

					</div><!--/.reasons-wrapper-->
					
					<div class="col-md-6">
						<div class="features-cta-title"><?php the_field('title', 'option'); ?></div>
						<div class="features-cta-subtitle"><?php the_field('subtitle', 'option'); ?></div>
				        <div class="features-premium-cta"><?php if( have_rows('features', 'option') ): ?>

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
				
				</div><!--/.single-deal-post-funnel-->
			
			</div><!--/.premium-tease-->
			
	        <div class="free-wrapper">

	            <div class="title free-title col-md-12 text-center">
				
					<?php the_field('free_sign_up_title', 'option') ?>
					
					<?php the_field('free_sign_up_subtitle', 'option') ?>					
				
				</div><!--/.col-md-6-->
				<div class="email col-md-8 col-md-offset-2 text-center">

					<!-- Begin MailChimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
					<div id="mc_embed_signup">
					<form action="//cheapflightsfromtampa.us16.list-manage.com/subscribe/post?u=bc044b5ce916ab5cd6505c30d&amp;id=597366555e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">

						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address" required>
					    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bc044b5ce916ab5cd6505c30d_597366555e" tabindex="-1" value=""></div>
					    <div class="clear"><div class="last-resort"><input type="submit" value="Send Me Cheap Flight Deals!" name="subscribe" id="mc-embedded-subscribe" class="button"></div></div>
					    </div>
					</form>
					</div>

					<!--End mc_embed_signup-->

				</div><!--/.email-->

	        </div><!--./free-wrapper-->
			
		</div><!--/.col-md-7-->
		
		<div class="col-md-4 premium-sidebar">
			
			<div><?php dynamic_sidebar( 'single_deal_post_sidebar' ); ?></div>
			
			<div>
				
				<h3>Recent Deals</h3>
				<?php // retrieve nest six posts after the first
						$the_query = new WP_Query( array(
							'posts_per_page' => '3',
							'category_name' => 'premium',

						) ); ?>

						<?php if ( $the_query->have_posts() ) : ?>

							<!-- the loop -->
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

								<?php $destination_image = get_field('destination_image'); ?>

								<div class="post-wrapper-group-1 text-left" style="background: url('<?php echo $destination_image; ?>'); background-size: cover;">

									<div class="recent-deal-overlay">

									</div>

									<div class="recent-deal-title">Recent deal

									</div><!--/.recent-deal-title-->

									<div class="recent-deal">Tampa -> <?php the_field('post_destination'); ?>: $<?php the_field('post_price'); ?></div><!--/.recent-deal-->

									<div class="normal-price">Normal Roundtrip Price: $<?php the_field('normal_roundtrip_price'); ?></div><!--/.normal-price-->

								</div><!--/.post-wrapper-->

							<?php endwhile; ?>
							<!-- end of the loop -->

							<?php wp_reset_postdata(); ?>

						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
				
			</div>
			
		</div>
		
	</div><!--/.row-->
	
</div><!--/.container-fluid-->

<?php get_footer(); ?>