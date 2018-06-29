<?php get_header(); ?>


<?php // get hero image custom field and display as background image

$image = get_field('home_hero_image');

if( !empty($image) ): ?>

<div class="hero container-fluid" style="background: linear-gradient(
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)

    ), url('<?php echo $image['url']; ?>');" alt="<?php echo $image['alt']; ?>">
	<?php endif; ?>

	<div class="row">
		
		<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
		<svg class="underline-icon" viewBox="0 0 32 32">
		     <use xlink:href="#underline-icon" />
		</svg>
		<div class="welcome-text col-md-8 col-md-offset-2 text-center"><?php the_field('welcome_text'); ?></div><!--/.welcome-text-->
			
		<div class="email col-md-8 col-md-offset-2 text-center">
				
			<!-- Begin MailChimp Signup Form -->
			<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
			<div id="mc_embed_signup">
			<form action="//cheapflightsfromtampa.us16.list-manage.com/subscribe/post?u=bc044b5ce916ab5cd6505c30d&amp;id=597366555e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">

				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email to save!" required>
			    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bc044b5ce916ab5cd6505c30d_597366555e" tabindex="-1" value=""></div>
			    <div class="clear"><input type="submit" value="Send Me Cheap Flights" name="subscribe" id="mc-embedded-subscribe"></div>
			    </div>
			</form>
			</div><!--End mc_embed_signup-->

		</div><!--/.email-->
	</div><!--/.row-->
</div><!--/.hero-->

<!-- How It Works -->
<div class="container-fluid">

	<div class="row">

		<div class="wrapper col-md-10 col-md-offset-1">
					
			<div class="col-md-12">	
						
				<h2 class="title text-center"><?php the_field('how_it_works'); ?></h2>
				<h3 class="subtitle"><?php the_field('how_it_works_subtitle')?></h3>
						
			</div><!--/.col-md-12-->
					
			<div class="col-md-12 text-center">
						
				<div class="col-md-4">
							
					<div class="carousel-icon">
								
						<svg class="icon search-icon text-center" viewBox="0 0 40 32">
					  	     <use xlink:href="#search-icon" />
					  	</svg>
								
					</div><!--/.carousel-icon-->
							
			    	<div class="carousel-caption">
					
						<h3 class="how-section-title"><?php the_field('how_section_one_title'); ?></h3><!--/.how-section-one-title-->
						<p class="how-section-content"><?php the_field('how_section_one_content'); ?></p><!--/.how-section-one-content-->
						
			        </div>
							
				</div><!--/.col-md-4-->
						
				<div class="col-md-4">

					<div class="carousel-icon">
								
						<svg class="icon booking-icon text-center" viewBox="0 0 32 32">
					  	     <use xlink:href="#booking-icon" />
					  	</svg>										
						
					</div><!--/.carousel-icon-->

			        <div class="carousel-caption">

						<h3 class="how-section-title"><?php the_field('how_section_two_title'); ?></h3><!--/.how-section-one-title-->
						<p class="how-section-content"><?php the_field('how_section_two_content'); ?></p><!--/.how-section-one-content-->

			        </div>

				</div><!--/.col-md-4-->
						
		  		<div class="col-md-4">
							
					<div class="carousel-icon">
						
						<svg class="icon beach-icon text-center" viewBox="0 0 39 32">
					  	     <use xlink:href="#beach-icon" />
					  	</svg>
						
					</div><!--/.carousel-icon-->
							
			        <div class="carousel-caption">
				
						<h3 class="how-section-title"><?php the_field('how_section_three_title'); ?></h3><!--/.how-section-one-title-->
						<p class="how-section-content"><?php the_field('how_section_three_content'); ?></p><!--/.how-section-one-content-->
						
			        </div>
						
				</div><!--/.col-md-4-->
				   
			</div><!--/.col-md-10-->
		</div><!--/.how-wrapper-->
	</div><!--/.row-->
</div><!--/.container-fluid-->

<!-- Recent Deal -->
<div class="container-fluid">
	<div class="row">
			
			<h2 class="title" style="margin-top: 75px">Recent Deals</h2>
			<h3 class="subtitle"><?php the_field('prices_subtitle') ?></h3><!--/.about-intro-->
				
			
			<?php // retrieve three premium posts
				$the_query = new WP_Query( array(
											'posts_per_page' => '3',
											'post_type' => 'recent_deal',
											'tax_query' => array(
													array(
														'taxonomy' => 'deal_category',
														'field'    => 'slug',
														'terms'    => 'home-page',
													),
												),

				) ); ?>

				<?php if ( $the_query->have_posts() ) : ?>

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
						<div class="col-md-4">
							<div class="premium-post-wrapper" style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover;">
								
								<?php if ( has_term('premium', 'deal_category') ) { ?>
		
									<div class="premium-badge"><img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/premium_badge.svg"></div>
			
								<?php } ?>
								
								<div class="recent-deal-overlay"></div><!--/.recent-deal-overlay-->

								<div class="premium-recent-deal">Tampa to <?php the_field('post_destination'); ?>: $<?php the_field('post_price'); ?></div><!--/.recent-deal-->

								<div class="premium-normal-price">Normal Price: $<?php the_field('normal_roundtrip_price'); ?></div><!--/.normal-price-->
					
								<p><a href="<?php the_permalink();?>"><button>View Deal</button></a></p>
							</div><!--/.post-wrapper-->
						</div><!--/.col-md-4-->

					<?php endwhile; ?>
					<!-- end of the loop -->

					<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>		
		
	</div><!--/.row-->
</div><!--/.container-fluid-->

<!-- Start Intro-->
<div class="container-fluid">
	
	<div class="row">
		
		<div class="wrapper text-left col-md-10 col-md-offset-1">
			
			<h2 class="title"><?php the_field('intro_title') ?></h2><!---/.intro-title-->
			<h3 class="subtitle"><?php the_field('intro_subtitle') ?></h3><!--/.intro-subtitle-->
				
			<div class="col-md-6">
				
				<div class="home-intro-img">
					<?php 

					$image = get_field('intro_image');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
				</div><!--home-intro-img-->
				
			</div><!--/.col-md-5-->

			<div class="intro-body col-md-6 text-left">

				<?php the_field('intro_body') ?>
				
			</div><!--/.intro-body-->

		</div><!--/.intro-wrapper-->
		
	</div><!--/.row-->
</div><!--/.container-fluid-->

<!-- Why Sign Up -->
<div class="container-fluid">
	<div class="row">
		
		<div class="wrapper col-md-10 col-md-offset-1">
			
			<div class="single-deal-post-funnel col-md-12">

				<h2 class="title"><?php the_field('why_signup_title'); ?></h2>
				<h3 class="subtitle"><?php the_field('why_signup_subtitle'); ?></h3>

				<div class="reasons-wrapper col-md-12">
					
					  <h3 class="subtitle" style="font-weight: 900"><?php the_field('reasons_subtitle'); ?></h3>
					  
  					  <?php $subscribe_reasons = get_field('subscribe_reasons', 'options');

  					  if ( $subscribe_reasons ): ?>

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
					  
					  <?php endif; ?>

				</div><!--/.reasons-wrapper-->
			</div><!--/.single-post-deal-funnel-->
			
		</div><!--/.wrapper-->
		
	</div><!--/.row-->
</div><!--/.contaienr-fluid-->


<!-- Comparison -->
<div class="container-fluid">
	<div class="row">
		
		<div class="wrapper col-md-10 col-md-offset-1">
			
			<h2 class="title">We Offer Free and Premium Deal Alerts</h2>
			<h3 class="subtitle">Which One Is Right For You?</h2>
			
			<section class="center">
			  <div class="table__wrapper">
			    <table class="table" summary="This is a summary of your rad table contents.">
			      <thead>
			        <tr>
			          <th scope="row"></th>
			          <th scope="col">Premium</th>
			          <th scope="col">Free</th>				     
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <th scope="row">Emails Per Week</th>
			          <td data-header="Premium"><p>3</p></td>
			          <td data-header="Free"><p>3</p></td>
			        </tr>
			        <tr>
			          <th scope="row">International & Domestic Deals?</th>
			          <td data-header="Premium"><p><img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_check_circle.svg"></p></td>
			          <td data-header="Free"><p><img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_check_circle.svg"></p></td>
			        </tr>
			        <tr>
			          <th scope="row">Deals Per Email</th>
			          <td data-header="Premium"><p>6 - 8</p></td>
			          <td data-header="Free"><p>3 - 4</p></td>
			        </tr>
			        <tr>
			          <th scope="row">Average Savings Per Roundtrip Ticket</th>
			          <td data-header="Premium"><p>$300 - $600</p></td>
			          <td data-header="Free"><p>$200 - $400</p></td>
			        </tr>
			        <tr>
			          <th scope="row">Ads?</th>
			          <td data-header="Premium"><p><img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_cancel.svg"></p></td>
			          <td data-header="Free"><p><img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/ic_check_circle.svg"></p></td>
			        </tr>
			        <tr>
			          <th scope="row">Cost?</th>
			          <td data-header="Premium"><p>$4.99/Month</p></td>
			          <td data-header="Free"><p>Free</p></td>
			        </tr>
			      </tbody>
			    </table>
			  </div>
			</section>
			
		</div><!--/.wrapper-->
		
	</div><!--/.row-->
</div><!--/.container-fluid-->

<!-- Premium Signup -->
<div class="container-fluid">
	<div class="row">
		
		<div class="wrapper premium-cta col-md-10 col-md-offset-1">
		<a id="signup"></a>
			<h2 class="title"><?php the_field('premium_title'); ?></h2>
			<h3 class="subtitle"><?php the_field('premium_subtitle'); ?></h3>
		    
			<p class="text-center home-premium-button"><a href="<?php echo site_url(); ?>/premium"><button>Learn More About Premium</button></a></p>   

		</div><!--/.wrapper-->
		
	</div><!--/.row-->
</div><!--/.container-fluid-->

<!-- Free Signup -->
<div class="container-fluid">
	<div class="row">
		
		<div class="wrapper col-md-10 col-md-offset-1">

            <h2 class="title"><?php the_field('free_title') ?></h2><!--/.col-md-6-->
		
			<h3 class="subtitle"><?php the_field('free_subtitle') ?></h3>
		
			<div class="email col-md-12 text-center">

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
		</div><!--/.wrapper-->
		
	</div><!--/.row-->
</div><!--/.container-fluid-->

<!-- Recent Deal -->
<div class="container-fluid">
	<div class="row">
			
			<h2 class="title" style="margin-top: 75px">Even More Recent Deals</h2>
			<h3 class="subtitle"><?php the_field('prices_subtitle') ?></h3><!--/.about-intro-->
				
			
			<?php // retrieve three premium posts
				$the_query = new WP_Query( array(
											'posts_per_page' => '6',
											'offset' => '3',
											'post_type' => 'recent_deal',
											'tax_query' => array(
													array(
														'taxonomy' => 'deal_category',
														'field'    => 'slug',
														'terms'    => 'home-page',
													),
												),

				) ); ?>

				<?php if ( $the_query->have_posts() ) : ?>

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
						<div class="col-md-4">
							<div class="premium-post-wrapper" style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover;">
								
								<?php if ( in_category('premium') ) { ?>
		
									<div class="premium-badge"><img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/premium_badge.svg"></div>
			
								<?php } ?>
								
								<div class="recent-deal-overlay"></div><!--/.recent-deal-overlay-->

								<div class="premium-recent-deal">Tampa to <?php the_field('post_destination'); ?>: $<?php the_field('post_price'); ?></div><!--/.recent-deal-->

								<div class="premium-normal-price">Normal Price: $<?php the_field('normal_roundtrip_price'); ?></div><!--/.normal-price-->
					
								<p><a href="<?php the_permalink();?>"><button>View Deal</button></a></p>
							</div><!--/.post-wrapper-->
						</div><!--/.col-md-4-->

					<?php endwhile; ?>
					<!-- end of the loop -->

					<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>		
		
	</div><!--/.row-->
</div><!--/.container-fluid-->


<!-- Perfect For -->
<!--<div class="container-fluid">-->
	<!--<div class="row perfect-for-bg">-->
		<!--<div class="text-center col-md-10 col-md-offset-1">-->

			<!--<h1 class="title" style="margin-bottom: 50px">Perfect For</h1>--><!--/.recent-deal-title-->

				<?php //if (have_rows('perfect_for')) {
						//while (have_rows('perfect_for')) {
						//the_row(); ?>

				<!--<section class="col-md-4 cards cf">

					<article class="fancy-card" style="background: url('<?php //the_sub_field('perfect_for_image') ?>'); background-size: cover;">
		        
						<div class="bg-overlay"></div>
				        <div class="v-border"></div>
				        <div class="h-border"></div>

						<div class="content">

				          <div class="primary">
				            <h3 class=""><?php //the_sub_field('perfect_for_title'); ?></h2>
				          </div>
					  
				          <div class="secondary">
				            <h3><?php //the_sub_field('perfect_for_content'); ?></h3>
				          </div>
					  
				        </div><!--/.content-->
				
			    	</article>
				</section>

				<?php //	}} ?>

		</div><!--/.perfect-for-wrapper-->
	</div><!--/.row-->
</div><!--/.container-fluid-->


<?php get_footer(); ?>
