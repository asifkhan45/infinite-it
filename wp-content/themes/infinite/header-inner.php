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

  <!-- Zozo Tabs css -->
    <link href="<?php echo get_template_directory_uri();?>/css/zozo.tabs.min.css" rel="stylesheet" />

    <!-- Zozo Tabs js -->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/zozo.tabs.min.js"></script>
     <script>
        jQuery(document).ready(function ($) {
            /* jQuery activation and setting options for first tabs, enabling multiline*/
            $("#tabbed-nav").zozoTabs({
                position: "top-compact",
                multiline: true,
                theme: "white",
                style: "clean",
                shadows: true,
                bordered: true,
                orientation: "horizontal",
                size: "medium",
                animation: {
                    easing: "easeInOutExpo",
                    duration: 500,
                    effects: "slideH"
                }
            });
  });
    </script>
    <script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>


</head>

<body>

<header>
<div class="top_nav"><div class="container">
<div class="search_bar"><?php get_search_form(); ?></div>

</div></div>
<div class="main_nav_bx">
<div class="container">
<div class="logo"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"  alt=""/></div>
<div class="right-nav">
<div class="nav_frm"><div class="nav_frm_title">Client Login</div>
<div class="frm_nv"><label>User Name</label><input type="text"></div>
<div class="frm_nv"><label>Password</label><input type="password"></div>
<input type="button" class="tp_btn" value="Login">
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