

<footer>

  <div class="container-fluid text-center">
    
	<div class="footer-signup row">
		
		<?php if ( in_category('premium') ) { ?>
		<!-- Start Premium CTA -->
        <div class="footer-cta title"><?php the_field('footer_premium_cta', 'options') ?></div><!--/.footer-cta-->
        <div class="footer-subtitle"><?php the_field('footer_premium_subtitle', 'options') ?></div><!--/.footer-subtitle-->
		
        <div class="email col-md-8 col-md-offset-2 text-center">

			<a href="https://cheapflightsfromtampa.com/premium/"><button class="button-secondary" style="background-color: #4CAF50; width: 300px; height: 50px; color: #fff">Sign Up For Premium</button>	</a>

		</div><!--/.email-->
		<?php } elseif ( in_category(array('uncategorized', 'free'))) { ?> 
				
		<!-- Start Free CTA -->
        <div class="footer-cta title"><?php the_field('footer_cta', 'options') ?></div><!--/.footer-cta-->
        <div class="footer-subtitle"><?php the_field('footer_subtitle', 'options') ?></div><!--/.footer-subtitle-->

        <div class="email col-md-8 col-md-offset-2 text-center">

					<!-- Begin MailChimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
					<div id="mc_embed_signup">
					<form action="//cheapflightsfromtampa.us16.list-manage.com/subscribe/post?u=bc044b5ce916ab5cd6505c30d&amp;id=597366555e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
	
						<input type="email" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address" required>
					    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bc044b5ce916ab5cd6505c30d_597366555e" tabindex="-1" value=""></div>
					    <div class="clear"><div class="last-resort"><input type="submit" value="Send Me Cheap Flight Deals!" name="subscribe" id="mc-embedded-subscribe" class="button"></div></div>
					    </div>
					</form>
					</div>

					<!--End mc_embed_signup-->

				</div><!--/.email-->
			<?php } else { ?>	
				
			<!-- Start Free CTA -->
	        <div class="footer-cta title"><?php the_field('footer_cta', 'options') ?></div><!--/.footer-cta-->
	        <div class="footer-subtitle"><?php the_field('footer_subtitle', 'options') ?></div><!--/.footer-subtitle-->

	        <div class="email col-md-8 col-md-offset-2 text-center">

						<!-- Begin MailChimp Signup Form -->
						<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
						<div id="mc_embed_signup">
						<form action="//cheapflightsfromtampa.us16.list-manage.com/subscribe/post?u=bc044b5ce916ab5cd6505c30d&amp;id=597366555e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
	
							<input type="email" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address" required>
						    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bc044b5ce916ab5cd6505c30d_597366555e" tabindex="-1" value=""></div>
						    <div class="clear"><div class="last-resort"><input type="submit" value="Send Me Cheap Flight Deals!" name="subscribe" id="mc-embedded-subscribe" class="button"></div></div>
						    </div>
						</form>
						</div>

						<!--End mc_embed_signup-->

					</div><!--/.email-->
				<?php } ?>	
			
    </div><!--/.row-->

    <div class="row footer-nav">

      <div class="col-md-12">
		  
		<a href="<?php echo site_url(); ?>"><img class="footer-logo" src="https://cheapflightsfromtampa.com/wp-content/uploads/2017/06/Cheap-Flights-From-Tampa-Logo-White.png" alt="Cheap Flights From Tampa"></img></a>

	   
	    <div>
			
			<?php wp_nav_menu( array(

         	 'menu' => 'Footer Menu'

        ) );?>
		
		</div>
		
		<div class="legal-menu">
			
	        <?php wp_nav_menu( array(

	          'theme_location' => 'legal-menu'

	        ) );?>
			
		</div><!--/.legal-menu-->
		
        <div class="social-media-menu">
        	
			<li>
				<a href="https://twitter.com/cheapflightstpa" target="_blank">
					<img src="https://cheapflightsfromtampa.com/wp-content/uploads/2017/12/Twitter-Icon.png" alt="Cheap Flights From Tampa Twitter">
				</a>
			</li>
			
			<li>
				<a href="https://www.facebook.com/CheapFlightsFromTampa/" target="_blank">
					<img src="https://cheapflightsfromtampa.com/wp-content/uploads/2017/12/Facebook-Icon.png" alt="Cheap Flights From Tampa Facebook">
				</a>
			</li>
			
			<li>
				<a href="https://www.instagram.com/cheapflightsfromtampa/" target="_blank">
					<img src="https://cheapflightsfromtampa.com/wp-content/uploads/2017/12/Instagram-Icon.png" alt="Cheap Flights From Tampa Instagram">
				</a>
			</li>
			
			
        </div><!--/.social-media-menu-->

      </div><!--/.footer-nav-->

        <p class="col-md-12 copyright">&copy; Cheap Flights From Tampa <?php echo date('Y') ?>. Website by <a href="http://www.GregGall.com" alt="Greg Gall Web Design" target="_blank">Greg Gall</a>. Made in Tampa.</p>
		
		
		 <?php dynamic_sidebar( 'sidebar-1' ); ?> 


    </div><!--/.row-->

  </div><!--/.container-fluid-->

</footer>

	<?php wp_footer(); ?>

  </body>
</html>
