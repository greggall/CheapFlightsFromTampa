<?php get_header(); ?>

<!-- Get about page -->
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

	<div class="container-fluid text-left">
   
	   	<div class="row">

	        <div class="wrapper col-md-10 col-md-offset-1">
	           
			    <div class="title col-md-5 col-md-offset-1"><?php the_field('about_title') ?></div><!--/.about-title-->
	            <div class="about-intro col-md-5"><?php the_field('about_intro') ?></div><!--/.about-intro-->

	        </div><!--/.about-intro-wrapper-->

	        <div class="wrapper col-md-10 col-md-offset-1">

	            <div class="title col-md-5 col-md-offset-1"><?php the_field('curious_title') ?></div><!--/.curious-title-->
	            <div class="curious-copy col-md-5"><?php the_field('curious_copy') ?></div><!--/.curious-copy-->

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

			<div class="wrapper col-md-10 col-md-offset-1">

		        <div class="title text-left col-md-5 col-md-offset-1"><?php the_field('contact_title') ?></div><!--/.contact-title-->
		        <div class="contact-copy col-md-5 text-left"><?php the_field('contact_copy') ?></div><!--/.contact-copy-->

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

		    <div class="title">General</div>

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

		    <div class="title">The Deals</div>

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

		    <div class="title">The Alerts</div>

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

		    <div class="title">OTAs</div>

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

		    <div class="title">Contact</div>

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
		  
		<div class="hero-eyebrow"><?php the_field('hero_eyebrow')?></div>
		<svg class="underline-icon" viewBox="0 0 32 32">
		     <use xlink:href="#underline-icon" />
		</svg>  
        <div class="welcome-text col-md-8 col-md-offset-2"><?php the_field('prices_welcome_text') ?></div><!--/.about-title-->

      </div><!--/.row-->

    </div><!--/.container-fluid-->

	<div class="container-fluid text-center premium-page">

	    <div class="row">

	        <div class="premium-wrapper col-md-10 col-md-offset-1">

				<div class="prices-subtitle"><?php the_field('prices_subtitle') ?></div><!--/.about-intro-->

			</div><!--/.wrapper-->

				<?php if( have_rows('excuse_1') ):

				while( have_rows('excuse_1') ): the_row();

				// vars
				$title = get_sub_field('title');
				$background_image = get_sub_field('background_image');
				$copy_background_color = get_sub_field('copy_background_color');
				$copy = get_sub_field('copy');

				?>

			<div class="premium-wrapper block-1 col-md-10 col-md-offset-1" style="background-image: url('<?php echo $background_image['url']; ?>');">

				<div class="col-md-6" >

					<h1 class="excuse-title"><?php the_sub_field('title'); ?></h1>

				</div><!--/.col-md-6-->

				<div class="col-md-6" style="background-color: <?php the_sub_field('copy_background_color'); ?>; min-height: 700px">

					<div class="excuse-copy"><?php the_sub_field('copy'); ?></div>

				</div><!--/.col-md-6-->

			</div><!--/.wrapper-->
			<?php endwhile; ?>
			<?php endif; ?>
			
			<div class="premium-wrapper-deals col-md-10 col-md-offset-1">
					
				<div class="recent-premium-title"><?php the_field('recent_premium_title'); ?></div>
				
				<?php // retrieve three premium posts
					$the_query = new WP_Query( array(
												'posts_per_page' => '3',
												'category_name' => 'premium',

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
						
						<div class="col-md-12">
							<div class="premium-jump-text"><?php the_field('premium_jump_text_1')?></div>
							<div class="premium-jump"><a href="#signup"><button>Sign Up Today!</button></a></div>
						</div>

			</div><!--/.wrapper-->
			
			<?php if( have_rows('excuse_2') ):

			while( have_rows('excuse_2') ): the_row();

			// vars
			$title = get_sub_field('title');
			$background_image = get_sub_field('background_image');
			$copy_background_color = get_sub_field('copy_background_color');
			$copy = get_sub_field('copy');

			?>
			
			<div class="premium-wrapper block-2 col-md-10 col-md-offset-1 " style="background-image: url('<?php echo $background_image['url']; ?>');">
				
				<div class="col-md-6">

					<h1 class="excuse-title"><?php the_sub_field('title'); ?></h1>

				</div><!--/.col-md-6-->

				<div class="col-md-6" style="background-color: <?php the_sub_field('copy_background_color'); ?>; min-height: 900px">

					<div class="excuse-copy"><?php the_sub_field('copy'); ?></div>

				</div><!--/.col-md-6-->

			</div><!--/.wrapper-->
			<?php endwhile; ?>
			<?php endif; ?>
			
			<div class="premium-wrapper-deals col-md-10 col-md-offset-1">
					
				<div class="recent-premium-title"><?php the_field('recent_premium_title'); ?></div>
				
				<?php // retrieve three premium posts
					$the_query = new WP_Query( array(
												'offset' => '3',
												'posts_per_page' => '3',
												'category_name' => 'premium',

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
						
						<div class="col-md-12">
							<div class="premium-jump-text"><?php the_field('premium_jump_text_2')?></div>
							<div class="premium-jump"><a href="#signup"><button>Sign Up Today!</button></a></div>
						</div>

			</div><!--/.wrapper-->

			

			<div class="premium-wrapper col-md-10 col-md-offset-1">

				<?php if( have_rows('why_subscribe') ):

					while( have_rows('why_subscribe') ): the_row();

						// vars
						$title = get_sub_field('title');
						$subtitle = get_sub_field('subtitle');
						$background_image_reason = get_sub_field('background_image');
						$background_color = get_sub_field('background_color');
						$reason_one = get_sub_field('reason_one');
						$reason_two = get_sub_field('reason_two');
						$reason_three = get_sub_field('reason_three');
						$reason_four = get_sub_field('reason_four');
						$reason_five = get_sub_field('reason_five');
						$reason_six = get_sub_field('reason_six');
						?>

				<div class="col-md-12">

					<div class="reasons-title"><?php the_sub_field('title')?></div>
					<div class="reasons-subtitle"><?php the_sub_field('subtitle')?></div>

				</div><!--/.col-md-12-->

				<div class="col-md-12" style="background: linear-gradient( <?php the_sub_field('background_color')?>, <?php the_sub_field('background_color')?> ), url('<?php echo $background_image_reason['url']; ?>'); background-size: cover;" alt="<?php echo $image['alt']; ?>">

					  <div class="col-md-6 reason">
					  	<?php the_sub_field('reason_one'); ?>
					  </div><!--/.col-md-4-->

					  <div class="col-md-6 reason">
					  	<?php the_sub_field('reason_two'); ?>
					  </div><!--/.col-md-4-->

					  <div class="col-md-6 reason">
					  	<?php the_sub_field('reason_three'); ?>
					  </div><!--/.col-md-4-->

					  <div class="col-md-6 reason">
					  	<?php the_sub_field('reason_four'); ?>
					  </div><!--/.col-md-4-->

					  <div class="col-md-6 reason">
					  	<?php the_sub_field('reason_five'); ?>
					  </div><!--/.col-md-4-->

					  <div class="col-md-6 reason">
					  	<?php the_sub_field('reason_six'); ?>
					  </div><!--/.col-md-4-->

				</div><!--/.col-md-12-->
			
			</div><!--/.wrapper-->
			
			<?php endwhile; ?>
			<?php endif; ?>
			
			
			<div class="wrapper premium-cta col-md-10 col-md-offset-1">
			<a id="signup"></a>
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

	        <div class="wrapper col-md-10 col-md-offset-1">
	            <div class="title col-md-5 col-md-offset-1"><?php the_field('what_next_title')?></div><!--/.about-title-->
				<div class="col-md-5">

					<div class="expect-title"><?php the_field('expect_title')?></div><!--/.expect-title-->
					<div class="expect-content"><?php the_field('expect_content')?></div><!--/.expect-content-->

				</div>

				<div class="col-md-12 text-center final-thanks"><?php the_field('final_thanks')?></div><!--/.final-thanks-->
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

	        <div class="wrapper col-md-10 col-md-offset-1">
	            <div class="title col-md-3 col-md-offset-1"><?php the_field('what_next_title')?></div><!--/.about-title-->
				<div class="col-md-6 col-md-offset-1">

					<div class="expect-title"><?php the_field('expect_title')?></div><!--/.expect-title-->
					<div class="expect-content"><?php the_field('expect_content')?></div><!--/.expect-content-->

				</div>

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

	        <div class="wrapper col-md-10 col-md-offset-1">
	            <div class="title col-md-5 col-md-offset-1"><?php the_field('check_email')?></div><!--/.about-title-->
				<div class="col-md-5">

					<div class="check-title"><?php the_field('check_title')?></div><!--/.expect-title-->
					<div class="check-content"><?php the_field('check_content')?></div><!--/.expect-content-->

				</div>

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
				<div class="col-md-6 col-md-offset-3">

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

<?php } elseif ( is_page('blog')) { ?>


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
