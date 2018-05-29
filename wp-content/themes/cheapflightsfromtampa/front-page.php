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

		<div class="welcome-text col-md-8 col-md-offset-2 text-center"><?php the_field('welcome_text'); ?></div><!--/.welcome-text-->
			
		<div class="email col-md-8 col-md-offset-2 text-center">
				
			<!-- Begin MailChimp Signup Form -->
			<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
			<div id="mc_embed_signup">
			<form action="//cheapflightsfromtampa.us16.list-manage.com/subscribe/post?u=bc044b5ce916ab5cd6505c30d&amp;id=597366555e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">

				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address" required>
			    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bc044b5ce916ab5cd6505c30d_597366555e" tabindex="-1" value=""></div>
			    <div class="clear"><input type="submit" value="Send Me Cheap Flight Deals!" name="subscribe" id="mc-embedded-subscribe"></div>
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
						
				<h1 class="title how-title text-center"><?php the_field('how_it_works'); ?></h1>
						
			</div><!--/.col-md-12-->
					
			<div class="col-md-10 col-md-offset-1 text-center">
						
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

		<?php $rows = get_field('recent_deals' ); // get all the rows
					$first_row = $rows[0]; // get the first row
					$first_row_destination = $first_row['destination' ]; // get the sub field value
					$first_row_price = $first_row['price' ]; // get the sub field value
					$first_row_normal_price = $first_row['normal_price' ]; // get the sub field value
					$first_row_image = $first_row['destination_image'];
					$image = wp_get_attachment_image_src( $first_row_image, 'full' );
		?>

		<div class="recent-deal-wrapper text-center col-md-12" style="background: linear-gradient(
				rgba(0, 0, 0, 0.25),
				rgba(0, 0, 0, 0.25)
			), url('<?php echo $first_row_image ?>'); background-size: cover;">

			<p class="recent-deal">Tampa to <?php echo $first_row_destination ?>: $<?php echo $first_row_price ?></p><!--/.recent-deal-->

			<p class="normal-price">Normal Roundtrip Price: $<?php echo $first_row_normal_price ?></p><!--/.normal-price-->

		</div><!--/.recent-deal-wrapper-->
	</div><!--/.row-->
</div><!--/.container-fluid-->

<!-- Start Intro-->
<div class="container-fluid">
	
	<div class="row">
		
		<div class="wrapper text-left col-md-10 col-md-offset-1">
				
			<div class="col-md-5 col-md-offset-1">
				<h1 class="title"><?php the_field('intro_title') ?></h1><!---/.intro-title-->
				<div class="intro-subtitle"><?php the_field('intro_subtitle') ?></div><!--/.intro-subtitle-->
			
				<?php 

				$image = get_field('intro_image');

				if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>
				
			</div><!--/.col-md-5-->

			<div class="intro-body col-md-5 text-left">

				<?php the_field('intro_body') ?>
				
				
				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
				<div id="mc_embed_signup">
				<form action="//cheapflightsfromtampa.us16.list-manage.com/subscribe/post?u=bc044b5ce916ab5cd6505c30d&amp;id=597366555e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" style="padding: 0" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">

					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address" required>
				    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bc044b5ce916ab5cd6505c30d_597366555e" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Send Me Cheap Flight Deals!" name="subscribe" id="mc-embedded-subscribe"></div>
				    </div>
				</form>
				</div><!--End mc_embed_signup-->

			</div><!--/.intro-body-->

		</div><!--/.intro-wrapper-->
	</div><!--/.row-->
</div><!--/.container-fluid-->

<!-- Recent Deal -->
<div class="container-fluid">
	<div class="row">

		<?php $rows = get_field('recent_deals' ); // get all the rows
				$second_row = $rows[1]; // get the second row
				$second_row_destination = $second_row['destination' ]; // get the sub field value
				$second_row_price = $second_row['price' ]; // get the sub field value
				$second_row_normal_price = $second_row['normal_price' ]; // get the sub field value
				$second_row_image = $second_row['destination_image'];
				$image = wp_get_attachment_image_src( $second_row_image, 'full' );
		?>

		<div class="recent-deal-wrapper text-center col-md-12" style="background: linear-gradient(
					rgba(0, 0, 0, 0.25),
					rgba(0, 0, 0, 0.25)
				), url('<?php echo $second_row_image ?>'); background-size: cover;">

			
			<div class="recent-deal">Tampa to <?php echo $second_row_destination ?>: $<?php echo $second_row_price ?></div><!--/.recent-deal-->

			<div class="normal-price">Normal Roundtrip Price: $<?php echo $second_row_normal_price ?></div><!--/.normal-price-->

		</div><!--/.recent-deal-wrapper-->
	</div><!--/.row-->
</div><!--/.container-fluid-->

<!-- Perfect For -->
<div class="container-fluid">
	<div class="row perfect-for-bg">
		<div class="text-center col-md-10 col-md-offset-1">

			<h1 class="title">Perfect For</h1><!--/.recent-deal-title-->

				<?php if (have_rows('perfect_for')) {
						while (have_rows('perfect_for')) {
						the_row(); ?>

				<section class="col-md-4 cards cf">

					<article class="fancy-card" style="background: url('<?php the_sub_field('perfect_for_image') ?>'); background-size: cover;">
		        
						<div class="bg-overlay"></div>
				        <div class="v-border"></div>
				        <div class="h-border"></div>

						<div class="content">

				          <div class="primary">
				            <h3 class=""><?php the_sub_field('perfect_for_title'); ?></h2>
				          </div>
					  
				          <div class="secondary">
				            <h3><?php the_sub_field('perfect_for_content'); ?></h3>
				          </div>
					  
				        </div><!--/.content-->
				
			     	</article>
				</section>

				<?php	}} ?>

		</div><!--/.perfect-for-wrapper-->
	</div><!--/.row-->
</div><!--/.container-fluid-->


<?php get_footer(); ?>
