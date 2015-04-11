<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="container marketing">
	<hr class="featurette-divider">
	<!-- Three columns of text below the carousel -->
	<div class="row">
	<div class="col-lg-12">
			<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			
			<h1><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
		
			<hr class="featurette-divider">
			<div class="clearfix"></div>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			echo("Nothing Found");
?>
<hr class="featurette-divider">
<?php 
		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->
	</div>
	</div>
	<hr class="featurette-divider">
</div>

	

<?php get_footer(); ?>
