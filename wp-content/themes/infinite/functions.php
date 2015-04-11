<?php register_nav_menu('menu', 'primary menu'); 
 if(function_exists('register_sidebar')) 
{ register_sidebar(array('name'=>'sidebar1'));}
?>
<?php 
if ( ! function_exists( 'twentytwelve_entry_meta' ) ) :function twentytwelve_entry_meta() {	
	$categories_list = get_the_category_list( __( ', ', 'twentytwelve' ) );	
	$tag_list = get_the_tag_list( '', __( ', ', 'twentytwelve' ) );	
	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',esc_url( get_permalink() ),esc_attr( get_the_time() ),esc_attr( get_the_date( 'c' ) ),esc_html( get_the_date() )	);
	
	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),esc_attr( sprintf( __( 'View all posts by %s', 'twentytwelve' ), get_the_author() ) ), get_the_author());
	
	if ( $tag_list ) {
		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );	
	} 
	elseif ( $categories_list ) {		
		$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );	
	}
	else {		
		$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );
	}	
	printf($utility_text, $categories_list, $tag_list, $date, $author	);
}

endif;

if ( ! function_exists( 'twentytwelve_content_nav' ) ) :/** * Displays navigation to next/previous pages when applicable. * * @since Twenty Twelve 1.0 */function twentytwelve_content_nav( $html_id ) {
	global $wp_query;
	$html_id = esc_attr( $html_id );	
	if ( $wp_query->max_num_pages > 1 ) : ?>
	<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
		<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentytwelve' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?></div>		
	</nav><!-- #<?php echo $html_id; ?> .navigation -->	
	<?php endif;
}

endif;if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );        
	set_post_thumbnail_size( 200, 200 );  
}
if ( function_exists( 'add_image_size' ) ) {
	add_theme_support('post-thumbnails');update_option('thumbnail_size_w', 200);update_option('thumbnail_size_h', 200);
	update_option('large_size_w', 293);
}
?>