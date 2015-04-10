<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Infinite-IT</title>

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
<div class="search_bar"><input type="text" ></div>

</div></div>
<div class="main_nav_bx">
<div class="container">
<div class="logo"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"  alt=""/></a></div>
<div class="right-nav">
<div class="nav_frm"><div class="nav_frm_title">Client Login</div>
<div class="frm_nv"><label>User Name</label><input type="text"></div>
<div class="frm_nv"><label>Password</label><input type="password"></div>
<input type="button" id ="btn1" class="tp_btn" value="Login">
</div>
<div class="nav">
<ul>
<!--<li> <a href="#" class="icon hm">Home</a></li>
<li> <a href="#" class="icon abt">About Us</a></li>
<li> <a href="#" class="icon ser">Services</a></li>
<li> <a href="#" class="icon pro">Projects</a></li>
<li> <a href="#" class="icon new">News</a></li>
<li> <a href="#" class="icon con">Contact Us</a></li>-->

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
