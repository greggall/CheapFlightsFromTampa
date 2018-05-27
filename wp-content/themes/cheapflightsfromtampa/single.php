<!--

Template page for displaying single posts, both Premium and Free. 

-->

<?php get_header(); ?>


<div class="container-fluid">
	
	<div class="row">
		
		<div class="col-md-7 col-md-offset-1 deal">
			
			<div class="recent-deal" style="color: #000">Tampa -> <?php the_field('post_destination'); ?>: $<?php the_field('post_price'); ?></div><!--/.recent-deal-->
			<div class="normal-price" style="color: #000">Normal Roundtrip Price: $<?php the_field('normal_roundtrip_price'); ?></div><!--/.normal-price-->
			
			<div class="deal-copy"><?php the_field('deal_copy') ?></div><!--/.destination-copy-->
			
			<div class="featured-image"><?php the_post_thumbnail(); ?></div><!--/.featured-image-->
			
			<div class="title how-to-book-title">How To Book</div><!--/.title-->
			
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
			
		</div><!--/.deal-->
		
	</div><!--/.row-->
	
</div><!--/.container-fluid-->

<div class="container-fluid">
	
	<div class="row">
		
		<div class="col-md-7 col-md-offset-1 premium-caveat">
			
			<div class="premium-alert-img col-md-3"></div>
			
			<div class="col-md-9"><?php the_field('premium_alert')?></div>
				
		<div><!--/.caveat-->		
		
	</div><!--/.row-->
	
</div><!--/.container-fluid-->

<div class="container-fluid">
	
	<div class="row">
		
		<div class="col-md-7 col-md-offset-1 premium-tease">
			
			<div class="tease-title"><?php the_field('tease_title'); ?></div><!--/.tease-title-->
			<div class="tease-suntitle"><?php the_field('tease_subtitle'); ?></div><!--/.tease-subtitle-->	
			
			
			
		</div><!--/.premium-tease-->
		
	</div><!--/.row-->
	
</div><!--/.contaienr-fluid-->

<?php get_footer(); ?>