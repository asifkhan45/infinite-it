<?php get_header();?>
<div class="banner"><img src="<?php echo get_template_directory_uri();?>/images/banner.png" ></div>
<?php while(have_posts()):the_post();
the_content();					
endwhile;
?>
<?php get_footer();?>