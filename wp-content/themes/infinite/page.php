<?php get_header();?>
<div class="banner"><img src="<?php echo get_template_directory_uri();?>/images/banner.png" ></div>

<div class="inner_container">
<div class="container">
<div class="inner_left">
<h1 class="main_head"><?php echo get_the_title();?></h1>
<?php while(have_posts()):the_post();
the_content();					
endwhile;
?>
</div>
<?php get_sidebar();?>
</div>
</div>
<?php get_footer();?>