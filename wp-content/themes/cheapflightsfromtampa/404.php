<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

    <?php // get hero image custom field and display as background image

    $image = get_field('404_image', 'options');

    if( !empty($image) ): ?>

    <div class="hero container-fluid text-center" style="background: linear-gradient(
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)
        ), url('<?php echo $image ?>');" alt="<?php echo $image['alt']; ?>">
    <?php endif; ?>
      
	  <div class="row">
        <div class="welcome-text col-md-8 col-md-offset-2"><?php the_field('404_title', 'options'); ?></div><!--/.about-title-->
 		<div class="thank-you-subtitle col-md-8 col-md-offset-2"><?php the_field('404_subtitle', 'options')?></div>
      </div><!--/.row-->

    </div><!--/.container-fluid-->
	
	<div class="container-fluid text-left">
	    <div class="row">

	        <div class="about-intro-wrapper col-md-10 col-md-offset-1">
	            
		            <div class="title col-md-5 col-md-offset-1"><?php the_field('404_back_title', 'options') ?></div><!--/.about-title-->
					<div class="col-md-5">
					
						<div class="check-title"><?php the_field('404_next', 'options') ?></div><!--/.expect-title-->
				
		        </div><!--/.aobut-intro-wrapper-->
				
	        </div><!--/.aobut-intro-wrapper-->

	    </div><!--/.row-->
	 </div><!--/.container-fluid-->

<?php get_footer(); ?>
