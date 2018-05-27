<!--

Old Premium Single Deal Post Copy

-->

<?php // get hero image custom field and display as background image

$image = get_field('destination_image');

if( !empty($image) ): ?>

<div class="hero container-fluid" style="background: linear-gradient(
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)
    ), url('<?php echo $image ?>'); background-position: center;" alt="<?php echo $image['alt']; ?>">
	<?php endif; ?>

	<div class="row">
			
			<div class="welcome-text col-md-8 col-md-offset-2 text-center">
				
				<?php if ( in_category('premium') ) { ?>
		
					<div class="corner-ribbon-single">Premium Deal</div>
				
				<?php } ?>
				
				<div class="recent-deal">Tampa -> <?php the_field('post_destination'); ?>: $<?php the_field('post_price'); ?></div><!--/.recent-deal-->

				<div class="normal-price">Normal Roundtrip Price: $<?php the_field('normal_roundtrip_price'); ?></div><!--/.normal-price-->
			</div><!--/.welcome-text-->

	</div><!--/.row-->

</div><!--/.jumbotron-->

<div class="container-fluid text-center">
	<div class="row">

		<div class="deal-wrapper col-md-10 col-md-offset-1">

				<div class="title deal-title">The Deal</div><!--/.title-->
				<svg class="deal deal-icon" viewBox="0 0 44 32">
			  	     <use xlink:href="#deal-icon" />
			  	</svg>
				<div class="deal-copy col-md-8 col-md-offset-2"><?php the_field('deal_copy') ?></div><!--/.destination-copy-->

		</div><!--/.deal-wrapper-->

		<div class="book-wrapper col-md-10 col-md-offset-1">

				<div class="title how-to-book-title">How To Book</div><!--/.title-->
				
				<svg class="how-to-book how-to-book-icon" viewBox="0 0 32 32">
			  	     <use xlink:href="#how-to-book-icon" />
			  	</svg>
				
				<div class="book-copy col-md-8 col-md-offset-2"><?php the_field('book_first_leg') ?></div><!--/.destination-copy-->
				
				<div class="screenshot-one col-md-8 col-md-offset-2">
					
					<?php 

					$image = get_field('screenshot_one');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
					
				</div>
				
				<?php if ( in_category(array('uncategorized', 'free')) ) { ?>	
					<div class=""><a href="<?php the_field('sample_first_leg'); ?>" target="_blank"><button>Sample <?php the_field('sample_first_leg_button'); ?> Flight</button></a></div>
				<?php } ?>		
				
				<div class="book-second-leg col-md-8 col-md-offset-2"><?php the_field('book_second_leg') ?></div><!--/.destination-copy-->
				
				<div class="screenshot-two col-md-8 col-md-offset-2">
					
					<?php 

					$image = get_field('screenshot_two');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
					
				</div>
				
				<div class="col-md-8 col-md-offset-2">
				<?php if ( in_category(array('uncategorized', 'free')) ) { ?>					
					
					<?php if( get_field('sample_second_leg') ): ?>
				

						<div class="sample-second-leg-button"><a href="<?php the_field('sample_second_leg'); ?>" target="_blank"><?php the_field('sample_second_leg_button'); ?></a></div>

					<?php endif; ?>
	
				<?php } ?>					
				</div>
				
				<?php if ( in_category(array('uncategorized', 'free')) ) { ?>
	
					<div class="caveat col-md-8 col-md-offset-2"><?php the_field('caveat'); ?></div><!--/.caveat-->					
			
				<?php } ?>
				
		</div><!--/.destination-wrapper-->

	</div><!--/.row-->
</div><!--/.container-fluid-->