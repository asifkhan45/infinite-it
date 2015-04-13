<section class="social">
<div class="container">
<div class="left_annoucement">SUPPORT AND ENQUIRES, CALL 00 0000 0000 OR EMAIL SUPPORT@INFINITY-IT.COM.AU</div>

<div class="rite_social"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/fb.png" width="30" height="30"></a>
<a href="#"><img src="<?php echo get_template_directory_uri();?>/images/g+.png" width="30" height="30"></a>

<a href="#"><img src="<?php echo get_template_directory_uri();?>/images/youtube.png" width="30" height="30"></a>

<a href="#"><img src="<?php echo get_template_directory_uri();?>/images/twitter.png" width="30" height="30"></a>

<a href="#"><img src="<?php echo get_template_directory_uri();?>/images/linkedin.png" width="30" height="30"></a>

<a href="#"><img src="<?php echo get_template_directory_uri();?>/images/canicon.png" width="30" height="30"></a>
</div>
</div>
</section>
<footer class="footer_start">
<div class="container">



<?php $items = wp_get_nav_menu_items('header_menu' );
      foreach ($items as $val){
       echo '<div class="collum-5"><ul class="foot_menu"><h3 id="menu-' . $val->post_excerpt . '"><a href="'.$val->url.'">'.$val->title.'</a></h3><li></li></ul></div>';
      }
?>


</div>
</footer>
<?php wp_footer();?>
</body>
</html>