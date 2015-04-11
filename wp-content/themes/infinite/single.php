<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
	
get_header(); ?>
<div class="inner_container">
<div class="container">
<div class="inner_left">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; // end of the loop. ?>
</div>
<?php get_sidebar();?>
</div>
</div>




<?php get_footer(); ?>