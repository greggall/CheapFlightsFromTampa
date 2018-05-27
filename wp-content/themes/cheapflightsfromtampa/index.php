<?php get_header(); ?>

<?php // get hero image custom field and display as background image

$image = get_field('blog_hero_image', get_option('page_for_posts'));

if( !empty($image) ): ?>

<div class="hero container-fluid text-center" style="background: linear-gradient(to bottom right,
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)
    ), url('<?php echo $image['url']; ?>');" alt="<?php echo $image['alt']; ?>">
	<?php endif; ?>

	<div class="row">

				<div class="welcome-text col-md-8 col-md-offset-2"><?php the_field('blog_welcome_text', get_option('page_for_posts')); ?></div><!--/.welcome-text-->
				<div class="welcome-subtitle col-md-8 col-md-offset-2"><?php the_field('home_welcome_subtitle', get_option('page_for_posts')) ?></div><!--/.welcome-subtitle-->
				<div class="email col-md-8 col-md-offset-2">

					<?php //echo do_shortcode('[mc4wp_form id="108"]'); ?>

				</div><!--/.email-->

  </div><!--/.row-->
</div><!--/.container-fluid-->




<div class="container-fluid past-deals-bg">
	<div class="row">

		<div class="col-md-10 col-md-offset-1 past-deals-group-1">

		<h1 class="title text-center past-deal-title">Recent Deals</h1>

		<?php // retrieve nest six posts after the first
				$the_query = new WP_Query( array('posts_per_page' => '6',

				) ); ?>

				<?php if ( $the_query->have_posts() ) : ?>

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<?php $destination_image = get_field('destination_image'); ?>
						
						
						
						<div class="post-wrapper-group-1 col-md-4" style="background: url('<?php echo $destination_image; ?>'); background-size: cover;">
							
							<?php if ( in_category('premium') ) { ?>
					
								<div class="corner-ribbon-blog">Premium Deal</div>
							
							<?php } ?>
							
							<div class="recent-deal-overlay">
								
								
								
							</div>

							<div class="recent-deal-title">Recent deal
							
								
								
							</div><!--/.recent-deal-title-->

							<div class="recent-deal">Tampa -> <?php the_field('post_destination'); ?>: $<?php the_field('post_price'); ?></div><!--/.recent-deal-->

							<div class="normal-price">Normal Roundtrip Price: $<?php the_field('normal_roundtrip_price'); ?></div><!--/.normal-price-->

							<p class="button-input-secondary"><a href="<?php the_permalink();?>"><button class="button-secondary">See The Deal</button></a></p>							

						</div><!--/.post-wrapper-->

					<?php endwhile; ?>
					<!-- end of the loop -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

				</div><!--/.col-md-10-->

				<div class="deals-signup col-md-12 text-center">

					<div class="deals-signup-wrapper col-md-8 col-md-offset-2">

							<div class="title deals-signup-title"><?php the_field('deals_signup_title', get_option('page_for_posts')) ?></div><!--/.deals-signup-title-->

							<!-- Begin MailChimp Signup Form -->
							<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
							<div id="mc_embed_signup">
							<form action="//cheapflightsfromtampa.us16.list-manage.com/subscribe/post?u=bc044b5ce916ab5cd6505c30d&amp;id=597366555e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							    <div id="mc_embed_signup_scroll">
	
								<input type="email" value="Enter your email address..." name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
							    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bc044b5ce916ab5cd6505c30d_597366555e" tabindex="-1" value=""></div>
							    <div class="clear"><div class="last-resort"><input type="submit" value="Send Me Cheap Flight Deals!" name="subscribe" id="mc-embedded-subscribe" class="button"></div></div>
							    </div>
							</form>
							</div>

							<!--End mc_embed_signup-->

					</div><!--.,deals-signup-wrapper-->

				</div><!--/.col-md-12-->

				<div class="col-md-10 col-md-offset-1 deals-second-group">

				<?php // retrieve from post 8 on
						$the_query = new WP_Query( array('offset' => '7',
												 'posts_per_page' => '6',
						) ); ?>

						<?php if ( $the_query->have_posts() ) : ?>

							<!-- the loop -->
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

								<?php $destination_image = get_field('destination_image'); ?>

								<div class="post-wrapper col-md-4" style="background: url('<?php echo $destination_image; ?>'); background-size: cover;">
									
									<?php if ( in_category('premium') ) { ?>
					
										<div class="corner-ribbon-blog">Premium Deal</div>
							
									<?php } ?>
									
									<div class="recent-deal-overlay"></div>
									
									<div class="recent-deal-title">Recent deal</div><!--/.recent-deal-title-->

									<div class="recent-deal">TPA --> <?php the_field('post_destination'); ?>: $<?php the_field('post_price'); ?></div><!--/.recent-deal-->

									<div class="normal-price">Normal Roundtrip Price: $<?php the_field('normal_roundtrip_price'); ?></div><!--/.normal-price-->
									
									<p class="button-input-secondary"><a href="<?php the_permalink();?>"><button class="button-secondary">See The Deal</button></a></p>

								</div><!--/.post-wrapper-->

							<?php endwhile; ?>
							<!-- end of the loop -->

							<?php wp_reset_postdata(); ?>

						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>

				</div><!--/.col-md-10-->

	</div><!--/.row-->
</div><!--/.container-fluid-->
</div>

<?php get_footer(); ?>
