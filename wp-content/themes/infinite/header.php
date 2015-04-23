<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php 
		global $page, $paged; 
		wp_title( '|', true, 'right' ); 
		bloginfo( 'name' ); 
		$site_description=get_bloginfo( 'description', 'display' ); 
		if ( $site_description && ( is_home() || is_front_page() ) ) 
			echo " | $site_description"; 
		if ( $paged>= 2 || $page >= 2 ) 
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ); 
		?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css">

<!--  carasoule Important Owl stylesheet -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/owl-carousel/owl.carousel.css">
 
<!-- Default Theme -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/owl-carousel/owl.theme.css">
 
<!--  jQuery 1.7+  -->
<script src="<?php echo get_template_directory_uri();?>/js/jquery-1.9.1.min.js"></script>
 
<!-- Include js plugin -->
<script src="<?php echo get_template_directory_uri();?>/owl-carousel/owl.carousel.js"></script>
<script>


$(document).ready(function() {
 
  $("#owl-example").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 6,
      itemsDesktop : [1199,5],
      itemsDesktopSmall : [979,4],
	  itemsDesktopSmall : [809,3]
 
  });
  
   $("#owl-testi").owlCarousel({
autoPlay : 3000,
singleItem : true,

});
 
});</script>

<script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
<?php wp_head();?>
</head>

<body>

<header>
<div class="top_nav"><div class="container">
<div class="search_bar"><a href="#" id ="btn2" class="b2">Quick Remote Support </a><?php// get_search_form(); ?></div>

</div></div>
<div class="main_nav_bx">
<div class="container">
<div class="logo"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"  alt=""/></a></div>
<div class="right-nav">
<div class="nav_frm"><div class="nav_frm_title"><strong>Client Login</strong></div>
<div class="frm_nv"><label>User Name</label><input type="text"></div>
<div class="frm_nv"><label>Password</label><input type="password"></div>
<div id="login_arrow" style=""><a href="#">| &gt;</a></div>
<!--<input type="button" id ="btn1" class=" b1 tp_btn col_ic_btn" value="Login">-->
</div>
<div class="nav">
<ul>

<?php $items = wp_get_nav_menu_items('header_menu' );
      foreach ($items as $val){
       echo '<li class="homeMainMenu" id="menu-' . $val->post_excerpt . '"><a href="'.$val->url.'">'.$val->title.'</a></li>';
      }
?>
</ul>
</div>
</div>
</div>
</div>
</header>
