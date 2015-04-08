<?php get_header();?>
<div class="banner"><img src="<?php echo get_template_directory_uri();?>/images/banner.png" ></div>

<div class="inner_container">
<div class="container">
<div class="inner_left">
<h1 class="main_head"><?php echo get_the_title();?></h1>
<?php while(have_posts()):the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile ?> 
      
</div>

<div class="inner_rite">
<div class="testmonial_box">
<div class="testi_txt">A Proactive Risk Management approch is the solution Loss of any data can  extremely costly.Securing your data however is only a part of the puzzle</div>
<div class="testi_info">Karyan West<br>
Managing Director<br>
Apostle Asset Management</div>

</div>
<div class="collum-12 latest_news">
<h2> Latest News</h2>
<div class="col_12_txt">A Proactive Risk Management approch is the solution Loss of any data can extremely costly.Securing your data </div>
<hr class="line">
<div class="col_12_txt">A Proactive Risk Management approch is the solution Loss of any data can extremely costly.Securing your data </div>
</div>

<div class="collum-12 latest_news">
<h2> Latest News</h2>
<div class="side_frm">
<input class="inset_side_frm" type="text"  placeholder="Name" >
<input class="inset_side_frm" type="text"  placeholder="Phone" >
<input class="inset_side_frm" type="text"  placeholder="E-mail" >
<textarea class="inset_side_frm"  placeholder="Message" rows="3" ></textarea>
<a href="#" class="col_ic_btn snd">Send </a>


 </div>
</div>

<div class="collum-2 calci ">
<h2>Price Calculator</h2>
<div class="strt_2_icon"><img src="images/calculator.png" alt=""></div>
<div class="strt2_txt">Think Private Cloud is too Expensive?
</div>
<a href="#" class="col_ic_btn">Calculate Now </a>

</div>
</div>

</div>

</div>

		
<?php get_footer();?>