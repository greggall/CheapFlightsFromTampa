

<footer>

	<div class="container-fluid text-center">

	    <div class="row footer-nav">

	      <div class="col-md-12">
		  
			<a href="<?php echo site_url(); ?>"><img class="footer-logo" src="https://cheapflightsfromtampa.com/wp-content/uploads/2017/06/Cheap-Flights-From-Tampa-Logo-White.png" alt="Cheap Flights From Tampa"></img></a>

	   
		    <div><?php wp_nav_menu( array(

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
		

	    </div><!--/.row-->

 	</div><!--/.container-fluid-->

</footer>

<?php wp_footer(); ?>

</body>
</html>
