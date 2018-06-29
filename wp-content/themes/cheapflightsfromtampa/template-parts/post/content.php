<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
	
	<a href="<?php the_permalink();?>">
		<div class="blog-post-wrapper">

			<div class="blog-post-image"><?php the_post_thumbnail('blog-post'); ?></div><!--/.post-image-->
	
			<h1 class="blog-post-title"><?php the_title(); ?></h1>

		</div><!--/.wrapper-->
	</a>
	
</article><!-- #post-## -->
