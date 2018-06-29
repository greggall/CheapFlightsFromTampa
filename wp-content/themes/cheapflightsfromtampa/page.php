<?php get_header(); ?>

<!-- Get About page -->
<?php if ( is_page('about')) { ?>

	<?php // get hero image custom field and display as background image

	$image = get_field('about_hero_image');

	if( !empty($image) ): ?>

	<div class="hero container-fluid text-center" style="background: linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url('<?php echo $image['url'] ?>');" alt="<?php echo $image['alt']; ?>">

<?php endif; ?>
    
		<div class="row">
			
			<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
			<svg class="underline-icon" viewBox="0 0 32 32">
			     <use xlink:href="#underline-icon" />
			</svg>
			<div class="welcome-text col-md-8 col-md-offset-2"><?php the_field('about_welcome_text') ?></div><!--/.about-title-->

		</div><!--/.row-->

	</div><!--/.container-fluid-->

	<div class="container-fluid">
   
	   	<div class="row">

	        <div class="wrapper col-md-10 col-md-offset-1">
	           
			    <h2 class="title"><?php the_field('about_title') ?></h2><!--/.about-title-->
			    <h3 class="subtitle"><?php the_field('about_subtitle') ?></h3><!--/.about-title-->				
				<div class="about-image col-md-6">
					
					<?php 

					$image = get_field('about_image');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
					
				</div><!--/.about-image-->
	            <div class="about-intro col-md-6"><?php the_field('about_intro') ?></div><!--/.about-intro-->

	        </div><!--/.wrapper-->
			
	        <div class="wrapper col-md-10 col-md-offset-1">
	           
			    <h2 class="title"><?php the_field('overview_title') ?></h2><!--/.about-title-->
			    <h3 class="subtitle"><?php the_field('overview_subtitle') ?></h3><!--/.about-title-->				
				<div class="about-image col-md-6">
					
					<?php 

					$image = get_field('overview_image');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
					
				</div><!--/.about-image-->
	            <div class="about-intro col-md-6"><?php the_field('overview_intro') ?></div><!--/.about-intro-->

	        </div><!--/.wrapper-->
			
			
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
			
			<div class="wrapper col-md-10 col-md-offset-1">
				
			    <h2 class="title"><?php the_field('meet_team_title') ?></h2><!--/.about-title-->
			    <h3 class="subtitle"><?php the_field('meet_team_subtitle') ?></h3><!--/.about-title-->
				
				<?php if( have_rows('team_member') ): ?>

					<?php while( have_rows('team_member') ): the_row(); 

						// vars
						$image = get_sub_field('image');
						$name = get_sub_field('name');
						$job_title = get_sub_field('job_title');
						$description = get_sub_field('description');						

						?>
					
						<div class="col-md-6 team-member">

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							
							<?php if( $name ): ?>
								<h3 class="team-member-name"><?php echo $name; ?></h3><!--/.team-member-name-->
							<?php endif; ?>

							<?php if( $job_title ): ?>
								<div class="team-member-job"><?php echo $job_title; ?></div><!--/.team-member-job-->
							<?php endif; ?>				

						    <div class="team-member-description"><?php echo $description; ?></div>
					
						</div><!--/.col-md-6-->	

					<?php endwhile; ?>

				<?php endif; ?>
				
			</div><!--/.wrapper-->	

	        <div class="wrapper col-md-10 col-md-offset-1">
				
			    <h2 class="title"><?php the_field('curious_title') ?></h2><!--/.about-title-->
			    <h3 class="subtitle"><?php the_field('curious_copy') ?></h3><!--/.about-title-->

	        </div><!--./curious-wrapper-->

		</div><!--/.row-->
	
	</div><!--/.container-fluid-->


<!-- Get contact page -->
<?php } elseif ( is_page('contact')) { ?>

	<?php // get hero image custom field and display as background image

	$image = get_field('contact_hero_image');

	if( !empty($image) ): ?>

	<div class="hero container-fluid text-center" style="background: linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url('<?php echo $image['url']; ?>');" alt="<?php echo $image['alt']; ?>">
<?php endif; ?>

		<div class="row">
			
			<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
			<svg class="underline-icon" viewBox="0 0 32 32">
			     <use xlink:href="#underline-icon" />
			</svg>
			<div class="welcome-text col-md-10 col-md-offset-1"><?php the_field('contact_welcome_text') ?></div><!--/.about-title-->

		</div><!--/.row-->

	</div><!--/.container-fluid-->

  	<div class="container-fluid">
    
		<div class="row">

			<div class="wrapper col-md-8 col-md-offset-2">

		        <h2 class="title"><?php the_field('contact_title') ?></h2><!--/.contact-title-->
		        <div class="contact-copy"><?php the_field('contact_copy') ?></div><!--/.contact-copy-->

			</div><!--/.contact-wrapper-->

		</div><!--/.row-->
		
	</div><!--/.container-fluid-->

<!-- Get FAQ page -->
<?php } elseif ( is_page('faq')) { ?>

  <?php // get hero image custom field and display as background image

  $image = get_field('faq_hero_image');

  if( !empty($image) ): ?>

	<div class="hero container-fluid text-center" style="background: linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url('<?php echo $image['url']; ?>');" alt="<?php echo $image['alt']; ?>">
<?php endif; ?>
    
		<div class="row">
			
			<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
			<svg class="underline-icon" viewBox="0 0 32 32">
			     <use xlink:href="#underline-icon" />
			</svg>
			<div class="welcome-text col-md-8 col-md-offset-2"><?php the_field('faq_welcome_text') ?></div><!--/.about-title-->

			<p class="jump col-md-12">jump to</p>

			<div class="faq-menu-wrapper col-md-12">

				<ul class="faq-menu">

				<li class="faq-menu-item">
				  <a href="#general">General</a>
				</li><!--/.faq-menu-item-->

				<li class="faq-menu-item">
				  <a href="#emails">The Deals</a>
				</li><!--/.faq-menu-item-->

				<li class="faq-menu-item">
				  <a href="#flights">The Alerts</a>
				</li><!--/.faq-menu-item-->

				<li class="faq-menu-item">
				  <a href="#otas">Online Travel Agencies (OTAs)</a>
				</li><!--/.faq-menu-item-->

				<li class="faq-menu-item">
				  <a href="#contact">Contact</a>
				</li><!--/.faq-menu-item-->

				</ul><!--/.faq-menu-->
			
			</div><!--/.faq-wrapper-->
		</div><!--/.row-->
	</div><!--/.container-fluid-->

	<div class="container-fluid text-center">

		<a id="general"></a>
		<div class="row">

		  <!-- General FAQ section -->
		  <div class="wrapper col-md-10 col-md-offset-1">

		    <h2 class="title">General</h2>

		    <?php if( have_rows('general') ): ?>

		      	<?php while( have_rows('general') ): the_row();

		      		// vars
		      		$question = get_sub_field('question');
		      		$answer = get_sub_field('answer');

		      		?>

		      		<div class="faq-body col-md-8 col-md-offset-2">

		      			<?php if( $question ): ?>


						<svg class="icon triangle-icon" viewBox="0 0 32 32">
					      <use xlink:href="#triangle-icon" />
						</svg>
						  <p class="question">

							  <?php the_sub_field('question') ?></p>


		      			<?php endif; ?>

		      			<?php if( $answer ): ?>
		      				<p class="answer"><?php the_sub_field('answer') ?></p>
		      			<?php endif; ?>

		      		</div><!--/.faq-body-->

		      	<?php endwhile; ?>

		      <?php endif; ?>

		  </div><!--/.faq-wrapper-->
		</div><!--/.row-->


		<a id="emails"></a>
		<div class="row">
		  <!-- Deals/Emails FAQ section -->
		  <div class="wrapper col-md-10 col-md-offset-1">

		    <h2 class="title">The Deals</h2>

		    <?php if( have_rows('deals_emails') ): ?>

		      	<?php while( have_rows('deals_emails') ): the_row();

		      		// vars
		      		$question = get_sub_field('question');
		      		$answer = get_sub_field('answer');

		      		?>

		      		<div class="faq-body col-md-8 col-md-offset-2">

		      			<?php if( $question ): ?>

						  <svg class="icon triangle-icon" viewBox="0 0 32 32">
				  	        <use xlink:href="#triangle-icon" />
						  </svg>
						  <p class="question">

							  <?php the_sub_field('question') ?></p>

		      			<?php endif; ?>

		      			<?php if( $answer ): ?>
		      				<p class="answer"><?php the_sub_field('answer') ?></p>
		      			<?php endif; ?>

		      		</div><!--/.faq-body-->

		      	<?php endwhile; ?>

		      <?php endif; ?>

		  </div><!--/.faq-wrapper-->
		</div><!--/.row-->

		<a id="flights"></a>
		<div class="row">
		  <!-- Flights FAQ section -->
		  <div class="wrapper col-md-10 col-md-offset-1">

		    <h2 class="title">The Alerts</h2>

		    <?php if( have_rows('flights') ): ?>

		      	<?php while( have_rows('flights') ): the_row();

		      		// vars
		      		$question = get_sub_field('question');
		      		$answer = get_sub_field('answer');

		      		?>

		      		<div class="faq-body col-md-8 col-md-offset-2">

		      			<?php if( $question ): ?>


					  <svg class="icon triangle-icon" viewBox="0 0 32 32">
			  	        <use xlink:href="#triangle-icon" />
					  </svg>
					  <p class="question">

						  <?php the_sub_field('question') ?></p>

		      			<?php endif; ?>

		      			<?php if( $answer ): ?>
		      				<p class="answer"><?php the_sub_field('answer') ?></p>
		      			<?php endif; ?>

		      		</div><!--/.faq-body-->

		      	<?php endwhile; ?>

		      <?php endif; ?>

		  </div><!--/.faq-wrapper-->
		</div><!--/.row-->

		<a id="otas"></a>
		<div class="row">
		  <!-- OTA FAQ section -->
		  <div class="wrapper col-md-10 col-md-offset-1">

		    <h2 class="title">OTAs</h2>

		    <?php if( have_rows('otas') ): ?>

		      	<?php while( have_rows('otas') ): the_row();

		      		// vars
		      		$question = get_sub_field('question');
		      		$answer = get_sub_field('answer');

		      		?>

		      		<div class="faq-body col-md-8 col-md-offset-2">

		      			<?php if( $question ): ?>

					 <svg class="icon triangle-icon" viewBox="0 0 32 32">
			  	        <use xlink:href="#triangle-icon" />
					  </svg>
					  <p class="question">
						  <?php the_sub_field('question') ?></p>

		      			<?php endif; ?>

		      			<?php if( $answer ): ?>
		      				<p class="answer"><?php the_sub_field('answer') ?></p>
		      			<?php endif; ?>

		      		</div><!--/.faq-body-->

		      	<?php endwhile; ?>

		      <?php endif; ?>

		  </div><!--/.faq-wrapper-->

		</div><!--/.row-->


		<a id="contact"></a>
		<div class="row">
		  <!-- Contact FAQ section -->
		  <div class="wrapper col-md-10 col-md-offset-1">

		    <h2 class="title">Contact</h2>

		    <?php if( have_rows('contact') ): ?>

		      	<?php while( have_rows('contact') ): the_row();

		      		// vars
		      		$question = get_sub_field('question');
		      		$answer = get_sub_field('answer');

		      		?>

		      		<div class="faq-body col-md-8 col-md-offset-2">

		      			<?php if( $question ): ?>

					 <svg class="icon triangle-icon" viewBox="0 0 32 32">
			  	        <use xlink:href="#triangle-icon" />
					  </svg>
					  <p class="question">
						  <?php the_sub_field('question') ?></p>

		      			<?php endif; ?>

		      			<?php if( $answer ): ?>
		      				<p class="answer"><?php the_sub_field('answer') ?></p>
		      			<?php endif; ?>

		      		</div><!--/.faq-body-->

		      	<?php endwhile; ?>

		      <?php endif; ?>

		  </div><!--/.faq-wrapper-->

		</div><!--/.row-->

	</div><!--/.container-fluid-->

<!-- Premium Page -->
<?php } elseif ( is_page('premium')) { ?>

    <?php // get hero image custom field and display as background image

    $image = get_field('prices_hero_image');

    if( !empty($image) ): ?>

    <div class="hero container-fluid text-center" style="background: linear-gradient( rgba(50, 75, 90, 0.55), rgba(50, 75, 90, 0.55) ), url('<?php echo $image['url']; ?>'); padding-bottom: 150px" alt="<?php echo $image['alt']; ?>">
<?php endif; ?>
      
	  <div class="row">
		  
		<div class="hero-eyebrow"><?php the_field('hero_eyebrow'); ?></div>
		<svg class="underline-icon" viewBox="0 0 32 32">
		     <use xlink:href="#underline-icon" />
		</svg>  
        <div class="welcome-text col-md-8 col-md-offset-2"><?php the_field('prices_welcome_text'); ?></div><!--/.about-title-->
		
		<div class="welcome-subtitle col-md-8 col-md-offset-2"><?php the_field('welcome_subtitle'); ?></div><!--welcome-subtitle-->
		
		<div class="premium-page"><a href="#signup"><button>Go Premium Today!</button></a></div>

      </div><!--/.row-->

    </div><!--/.container-fluid-->

	<div class="container-fluid">

	    <div class="row">
			
			<div class="wrapper waiting col-md-10 col-md-offset-1">
				
				<h2 class="title"><?php the_field('recent_premium_title'); ?></h2>
				<h3 class="subtitle"><?php the_field('prices_subtitle') ?></h3><!--/.about-intro-->
					
				
				<?php // retrieve three premium posts
					$the_query = new WP_Query( array(
												'posts_per_page' => '3',
												'tax_query' => array(
														array(
															'taxonomy' => 'deal_category',
															'field'    => 'slug',
															'terms'    => 'premium-page',
														),
													),
												'post_type' => 'recent_deal',
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

			</div><!--/.wrapper-->
			
			
			<div class="wrapper col-md-10 col-md-offset-1">
				
				<div class="single-deal-post-funnel col-md-12">

					<h2 class="title"><?php the_field('problem_title'); ?></h2>
					<div class="col-md-8 col-md-offset-2 premium-copy"><?php the_field('problem_copy'); ?></div>
				</div><!--/.single-post-deal-funnel-->
				
				<div class="single-deal-post-funnel col-md-12">
					
					<h2 class="title"><?php the_field('dont_understand'); ?></h2>
					<div class="col-md-8 col-md-offset-2 premium-copy"><?php the_field('dont_understand_copy'); ?></div>
					
					<?php // retrieve three premium posts
						$the_query = new WP_Query( array(
													'posts_per_page' => '3',
													'offset' => '3',
													'tax_query' => array(
															array(
																'taxonomy' => 'deal_category',
																'field'    => 'slug',
																'terms'    => 'premium-page',
															),
														),
													'post_type' => 'recent_deal',
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

				</div><!--/.single-post-deal-funnel-->
			
			</div><!--/.wrapper-->
			
			<div class="wrapper col-md-10 col-md-offset-1">
				
				<div class="single-deal-post-funnel col-md-12">

					<h2 class="title"><?php the_field('different_title'); ?></h2>
					<div class="col-md-8 col-md-offset-2 premium-copy"><?php the_field('different_copy'); ?></div>

				</div><!--/.single-post-deal-funnel-->
				
			</div><!--/.wrapper-->
			
			<div class="wrapper col-md-10 col-md-offset-1">
				
				<div class="single-deal-post-funnel col-md-12">

					<h2 class="title"><?php the_field('guides_title'); ?></h2>
					<div class="col-md-8 col-md-offset-2 premium-copy"><?php the_field('guides_copy'); ?></div>

				</div><!--/.single-post-deal-funnel-->
				
				<div class="single-deal-post-funnel col-md-12">

					<h2 class="title"><?php the_field('trust_funds_title'); ?></h2>
					<div class="col-md-8 col-md-offset-2 premium-copy"><?php the_field('trust_funds_copy'); ?></div>

				</div><!--/.single-post-deal-funnel-->
				
			</div><!--/.wrapper-->
			
			<div class="wrapper col-md-10 col-md-offset-1">
				
				<div class="single-deal-post-funnel col-md-12">

					<h2 class="title"><?php the_field('flight_truth_title'); ?></h2>
					<div class="col-md-8 col-md-offset-2 premium-copy"><?php the_field('flight_truth_copy'); ?></div>

				</div><!--/.single-post-deal-funnel-->
				
			</div><!--/.wrapper-->
			
			<div class="wrapper premium-cta col-md-10 col-md-offset-1">
			<a id="signup"></a>
				<div class="col-md-6">
					<div class="premium-cta-title"><?php the_field('premium_cta_title'); ?></div>
					<div class="premium-cta-subtitle"><?php the_field('premium_cta_subtitle'); ?></div>
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

					<div class="three-dollars-reg"><?php the_field('three_dollar_register'); ?></div>

				</div>

			</div><!--/.wrapper-->

	        <div class="wrapper col-md-10 col-md-offset-1">

	            <div class="title free-title col-md-12 text-center"><?php the_field('free_title') ?></div><!--/.col-md-6-->
				
				<div class="free-subtitle"><?php the_field('free_sign_up_subtitle', 'option') ?></div>
				
				<div class="email col-md-8 col-md-offset-2 text-center">

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

	        </div><!--./free-wrapper-->
			
			<!--<div id="ddexitpop1" class="ddexitpop">
				
				<div class="closeexitpop">X</div>
		
		    	<h1><?php //the_field('popup_title', 'option'); ?></h1>
				<div class="popup-content"><?php //the_field('popup_content', 'option')?></div>
		    	
		    	<div class="popup three-dollars-reg"><?php //the_field('three_dollar_register'); ?></div>
				
			</div>-->

	    </div><!--/.row-->
	  </div><!--/.container-fluid-->


<?php } elseif ( is_page('confirmation-premium')) { ?>

	<!-- Event snippet for Premium conversion page -->
	<script>
	  gtag('event', 'conversion', {
	      'send_to': 'AW-969448437/Hn-TCI6L6n4Q9beizgM',
	      'transaction_id': ''
	  });
	</script>


    <?php // get hero image custom field and display as background image

    $image = get_field('thank_you_hero_image');

    if( !empty($image) ): ?>

    <div class="hero container-fluid text-center" style="background: linear-gradient(
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)
        ), url('<?php echo $image['url']; ?>');" alt="<?php echo $image['alt']; ?>">
    	<?php endif; ?>

	  <div class="row">
		<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
		<svg class="underline-icon" viewBox="0 0 32 32">
		     <use xlink:href="#underline-icon" />
		</svg>
        <div class="welcome-text col-md-8 col-md-offset-2"><?php the_field('thank_you_title'); ?></div><!--/.about-title-->
 		<div class="thank-you-subtitle col-md-12"><?php the_field('thank_you_subtitle')?></div>
      </div><!--/.row-->

    </div><!--/.container-fluid-->

	<div class="container-fluid text-left">
	    <div class="row">

	        <div class="wrapper col-md-8 col-md-offset-2">
				
				<h2 class="title"><?php the_field('what_next_title')?></h2><!--/.about-title-->
				<h3 class="subtitle"><?php the_field('expect_title')?></h3><!--/.expect-title-->
				<div class="expect-content"><?php the_field('expect_content')?></div><!--/.expect-content-->
				
	        </div><!--/.aobut-intro-wrapper-->

	    </div><!--/.row-->
	  </div><!--/.container-fluid-->


<?php } elseif ( is_page('signup-confirmation')) { ?>


    <?php // get hero image custom field and display as background image

    $image = get_field('thank_you_hero_image');

    if( !empty($image) ): ?>

    <div class="hero container-fluid text-center" style="background: linear-gradient(
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)
        ), url('<?php echo $image['url']; ?>');" alt="<?php echo $image['alt']; ?>">
    	<?php endif; ?>

	  <div class="row">
		<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
		<svg class="underline-icon" viewBox="0 0 32 32">
		     <use xlink:href="#underline-icon" />
		</svg>
        <div class="welcome-text col-md-8 col-md-offset-2"><?php the_field('thank_you_title'); ?></div><!--/.about-title-->
 		<div class="thank-you-subtitle col-md-12"><?php the_field('thank_you_subtitle')?></div>
      </div><!--/.row-->

    </div><!--/.container-fluid-->

	<div class="container-fluid text-left">
	    <div class="row">

	        <div class="wrapper col-md-8 col-md-offset-2">
	            <h2 class="title"><?php the_field('what_next_title')?></h2><!--/.about-title-->

				<h3 class="subtitle"><?php the_field('expect_title')?></h3><!--/.expect-title-->
				<div class="expect-content"><?php the_field('expect_content')?></div><!--/.expect-content-->

	        </div><!--/.aobut-intro-wrapper-->

	    </div><!--/.row-->
	  </div><!--/.container-fluid-->


<?php } elseif ( is_page('signup-thank-you')) { ?>


    <?php // get hero image custom field and display as background image

    $image = get_field('signup_thank_you_hero_image');

    if( !empty($image) ): ?>

    <div class="hero container-fluid text-center" style="background: linear-gradient(
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)
        ), url('<?php echo $image['url']; ?>');" alt="<?php echo $image['alt']; ?>">
    <?php endif; ?>

	  <div class="row">
		<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
		<svg class="underline-icon" viewBox="0 0 32 32">
		     <use xlink:href="#underline-icon" />
		</svg>
        <div class="welcome-text col-md-8 col-md-offset-2"><?php the_field('signup_thanks_title'); ?></div><!--/.about-title-->
 		<div class="thank-you-subtitle col-md-12"><?php the_field('signup_thanks_subtitle')?></div>
      </div><!--/.row-->

    </div><!--/.container-fluid-->

	<div class="container-fluid text-left">
	    <div class="row">

	        <div class="wrapper col-md-8 col-md-offset-2">

	            <div class="title"><?php the_field('check_email')?></div><!--/.about-title-->
				<div class="check-title"><?php the_field('check_title')?></div><!--/.expect-title-->
				<div class="check-content"><?php the_field('check_content')?></div><!--/.expect-content-->

	        </div><!--/.aobut-intro-wrapper-->

	    </div><!--/.row-->
	 </div><!--/.container-fluid-->

<!-- Premium Account Page -->
<?php } elseif ( is_page('premium-account')) { ?>


    <?php // get hero image custom field and display as background image

    $image = get_field('premium_account_hero_image');

    if( !empty($image) ): ?>

    <div class="hero container-fluid text-center" style="background: linear-gradient(
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)
        ), url('<?php echo $image['url']; ?>');" alt="<?php echo $image['alt']; ?>">
    <?php endif; ?>

	  <div class="row">
		<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
		<svg class="underline-icon" viewBox="0 0 32 32">
		     <use xlink:href="#underline-icon" />
		</svg>
        <div class="welcome-text col-md-8 col-md-offset-2"><?php the_field('account_title'); ?></div><!--/.about-title-->
 		<div class="thank-you-subtitle col-md-8 col-md-offset-2"><?php the_field('account_subtitle')?></div>
      </div><!--/.row-->

    </div><!--/.container-fluid-->

	<div class="container-fluid text-left">
	    <div class="row">

	        <div class="wrapper col-md-10 col-md-offset-1">
	            <div class="title col-md-12 text-center"><?php the_field('account_options')?></div><!--/.about-title-->
				<div class="col-md-10 col-md-offset-1">

					<div class="check-title"><?php the_content()?></div><!--/.expect-title-->

				</div>

	        </div><!--/.aobut-intro-wrapper-->

	    </div><!--/.row-->
	 </div><!--/.container-fluid-->


<!-- Login Page -->
<?php } elseif ( is_page('login')) { ?>


    <?php // get hero image custom field and display as background image

    $image = get_field('login_hero_image');

    if( !empty($image) ): ?>

    <div class="hero container-fluid text-center" style="background: linear-gradient(
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)
        ), url('<?php echo $image['url']; ?>');" alt="<?php echo $image['alt']; ?>">
    <?php endif; ?>

	  <div class="row">
		<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
		<svg class="underline-icon" viewBox="0 0 32 32">
		     <use xlink:href="#underline-icon" />
		</svg>
        <div class="welcome-text col-md-8 col-md-offset-2"><?php the_field('login_title'); ?></div><!--/.about-title-->
 		<div class="thank-you-subtitle col-md-8 col-md-offset-2"><?php the_field('login_subtitle')?></div>
      </div><!--/.row-->

    </div><!--/.container-fluid-->

	<div class="container-fluid text-left">
	    <div class="row">

	        <div class="wrapper col-md-10 col-md-offset-1">

				<!-- Display Memberpress login -->
				<div class="col-md-10 col-md-offset-1"><?php the_content()?></div>

	        </div><!--/.aobut-intro-wrapper-->

	    </div><!--/.row-->
	 </div><!--/.container-fluid-->


<?php } elseif ( is_page('refund-policy')) { ?>


    <?php // get hero image custom field and display as background image

    $image = get_field('refund_hero', 'options');

    if( !empty($image) ): ?>

    <div class="hero container-fluid text-center" style="background: linear-gradient(
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)
        ), url('<?php echo $image ?>');" alt="<?php echo $image['alt']; ?>">
    <?php endif; ?>

	  <div class="row">
		<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
		<svg class="underline-icon" viewBox="0 0 32 32">
		     <use xlink:href="#underline-icon" />
		</svg>
        <div class="welcome-text col-md-8 col-md-offset-2"><?php the_title(); ?></div><!--/.about-title-->
      </div><!--/.row-->

    </div><!--/.container-fluid-->

	<div class="container-fluid text-left">
	    <div class="row">

	        <div class="wrapper col-md-10 col-md-offset-1">

				<div class="col-md-10 col-md-offset-1"><?php the_content()?></div>

	        </div><!--/.aobut-intro-wrapper-->

	    </div><!--/.row-->
	 </div><!--/.container-fluid-->


<?php } elseif ( is_page('terms-of-service')) { ?>


    <?php // get hero image custom field and display as background image

    $image = get_field('terms_of_service_hero', 'options');

    if( !empty($image) ): ?>

    <div class="hero container-fluid text-center" style="background: linear-gradient(
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)
        ), url('<?php echo $image ?>');" alt="<?php echo $image['alt']; ?>">
    <?php endif; ?>

	  <div class="row">
		<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
		<svg class="underline-icon" viewBox="0 0 32 32">
		     <use xlink:href="#underline-icon" />
		</svg>
        <div class="welcome-text col-md-8 col-md-offset-2"><?php the_title(); ?></div><!--/.about-title-->
      </div><!--/.row-->

    </div><!--/.container-fluid-->

	<div class="container-fluid text-left">
	    <div class="row">

	        <div class="wrapper col-md-10 col-md-offset-1">

				<div class="col-md-10 col-md-offset-1"><?php the_content()?></div>

	        </div><!--/.aobut-intro-wrapper-->

	    </div><!--/.row-->
	 </div><!--/.container-fluid-->


<?php } elseif ( is_page('privacy-policy')) { ?>


    <?php // get hero image custom field and display as background image

    $image = get_field('privacy_policy_hero', 'options');

    if( !empty($image) ): ?>

    <div class="hero container-fluid text-center" style="background: linear-gradient(
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)
        ), url('<?php echo $image ?>');" alt="<?php echo $image['alt']; ?>">
    <?php endif; ?>

	  <div class="row">
		<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
		<svg class="underline-icon" viewBox="0 0 32 32">
		     <use xlink:href="#underline-icon" />
		</svg>
        <div class="welcome-text col-md-8 col-md-offset-2"><?php the_title(); ?></div><!--/.about-title-->
      </div><!--/.row-->

    </div><!--/.container-fluid-->

	<div class="container-fluid text-left">
	    <div class="row">

	        <div class="wrapper col-md-10 col-md-offset-1">

				<div class="col-md-10 col-md-offset-1"><?php the_content()?></div>

	        </div><!--/.aobut-intro-wrapper-->

	    </div><!--/.row-->
	 </div><!--/.container-fluid-->
	 
<!-- Recent Deals -->

<?php } elseif ( is_page('recent-deals')) { ?>


   <?php // get hero image custom field and display as background image

   $image = get_field('hero_image');

   if( !empty($image) ): ?>

   	<div class="hero container-fluid text-center" style="background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url('<?php echo $image['url']; ?>');" alt="<?php echo $image['alt']; ?>">
   <?php endif; ?>

   		<div class="row">
			
   			<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
   			<svg class="underline-icon" viewBox="0 0 32 32">
   			     <use xlink:href="#underline-icon" />
   			</svg>
   			<div class="welcome-text col-md-8 col-md-offset-2"><?php the_field('welcome_text'); ?></div><!--/.welcome-text-->
   			<div class="welcome-subtitle col-md-8 col-md-offset-2"></div><!--/.welcome-subtitle-->

   		</div><!--/.row-->
   	</div><!--/.container-fluid-->


   <div class="container-fluid past-deals-bg">
   	<div class="row">
		
   		<div class="col-md-12 past-deals-group-1">

   		<?php // retrieve nest six posts after the first
   				$the_query = new WP_Query( array(
											'posts_per_page' => '6',
											'post_type' => 'recent_deal'

   				) ); ?>

   				<?php if ( $the_query->have_posts() ) : ?>

   					<!-- the loop -->
   					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							
   						<div class="col-md-4">
							
   							<div class="post-wrapper" style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover;">
								
   								<?php if ( has_term('premium', 'deal_category') ) { ?>
			
   									<div class="premium-badge"><img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/premium_badge.svg"></div>
				
   								<?php } ?>
							
   								<div class="recent-deal-overlay"></div><!--/.recent-deal-overlay-->

   								<div class="recent-deal">Tampa to <?php the_field('post_destination'); ?>: $<?php the_field('post_price'); ?></div><!--/.recent-deal-->

   								<div class="normal-price">Normal Price: $<?php the_field('normal_roundtrip_price'); ?></div><!--/.normal-price-->
							
   								<p><a href="<?php the_permalink();?>"><button>View Deal</button></a></p>
   							</div><!--/.post-wrapper-->
   						</div><!--/.col-md-4-->

   					<?php endwhile; ?>
   					<!-- end of the loop -->

   					<?php wp_reset_postdata(); ?>

   					<?php else : ?>
   						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
   					<?php endif; ?>

   				</div><!--/.col-md-10-->

   				<div class="deals-signup col-md-12 text-center">

   					<div class="deals-signup-wrapper col-md-8 col-md-offset-2">

   							<div class="title deals-signup-title"><?php the_field('deals_signup_title') ?></div><!--/.deals-signup-title-->

   							<!-- Begin MailChimp Signup Form -->
   							<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
   							<div id="mc_embed_signup">
   							<form action="//cheapflightsfromtampa.us16.list-manage.com/subscribe/post?u=bc044b5ce916ab5cd6505c30d&amp;id=597366555e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
   							    <div id="mc_embed_signup_scroll">
	
   								<input type="email" value="Enter your email address" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
   							    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
   							    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bc044b5ce916ab5cd6505c30d_597366555e" tabindex="-1" value=""></div>
   							    <div class="clear"><input type="submit" value="Send Me Cheap Flights!" name="subscribe" id="mc-embedded-subscribe"</div>
   							    </div>
   							</form>
   							</div><!--End mc_embed_signup-->

   					</div><!--./deals-signup-wrapper-->

   				</div><!--/.col-md-12-->
   				</div>

   				<div class="col-md-12 deals-second-group">

   				<?php // retrieve from post 8 on
   						$the_query = new WP_Query( array('offset' => '6',
   												 'posts_per_page' => '6',
												 'post_type' => 'recent_deal'
   						) ); ?>

   						<?php if ( $the_query->have_posts() ) : ?>

   							<!-- the loop -->
   							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

   								<div class="col-md-4">
									
   									<div class="post-wrapper" style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover;">
										
   										<?php if ( in_category('premium') ) { ?>
					
   											<div class="premium-badge"><img src="<?php echo site_url(); ?>/wp-content/themes/cheapflightsfromtampa/images/premium_badge.svg"></div>
							
   										<?php } ?>
									
   										<div class="recent-deal-overlay"></div><!--/.recent-deal-overlay-->

   										<div class="recent-deal">Tampa to <?php the_field('post_destination'); ?>: $<?php the_field('post_price'); ?></div><!--/.recent-deal-->

   										<div class="normal-price">Normal Price: $<?php the_field('normal_roundtrip_price'); ?></div><!--/.normal-price-->
									
   										<p><a href="<?php the_permalink();?>"><button>View Deal</button></a></p>

   									</div><!--/.post-wrapper-->
   								</div><!--/.col-md-4-->

   							<?php endwhile; ?>
   							<!-- end of the loop -->

   							<?php wp_reset_postdata(); ?>

   							<?php else : ?>
   								<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
   							<?php endif; ?>

   				</div><!--/.col-md-10-->

   	</div><!--/.row-->
   </div><!--/.container-fluid-->


<!-- Get Register Pages -->
<?php } else { ?>

    <div class="hero container-fluid text-center" style="background: linear-gradient(
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)
        ), url('https://cheapflightsfromtampa.com/wp-content/uploads/2017/06/UT.jpg');" alt="Sign Up to Become A Cheap Flights From Tampa Member!">

	  <div class="row">
		<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
		<svg class="underline-icon" viewBox="0 0 32 32">
		     <use xlink:href="#underline-icon" />
		</svg>
        <div class="welcome-text col-md-8 col-md-offset-2"><?php the_title(); ?></div><!--/.about-title-->
      </div><!--/.row-->

    </div><!--/.container-fluid-->

	<div class="container-fluid text-left">
	    <div class="row">

	        <div class="wrapper col-md-10 col-md-offset-1">
	            <div class="title col-md-4 col-md-offset-1">Let's Create An Account</div><!--/.about-title-->
	            <div class="col-md-5"><?php the_content(); ?></div><!--/.about-title-->
	        </div><!--/.aobut-intro-wrapper-->

	    </div><!--/.row-->
	  </div><!--/.container-fluid-->

<?php } ?>

<?php get_footer(); ?>
