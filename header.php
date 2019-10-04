<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<meta charset="utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title> 
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
	<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->              		
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<!--[if IE]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/mobile.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
	<?php $shortname = "creative"; ?>
	<style type="text/css">
	body {
	<?php if(get_option($shortname.'_background_image_url','') != "") { ?>
		background: url('<?php echo get_option($shortname.'_background_image_url',''); ?>') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;
	<?php } ?>		
	<?php if(get_option($shortname.'_custom_background_color','') != "") { ?>
		background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>;
	<?php } ?>	
	}
	</style>
</head>
<body>
<header id="header">
	<div class="container">
	
		<div class="menu_container">
		<!--
			<ul>
				<li><a href="#">HOME</a></li>
				<li><a href="#">CATEGORY</a>
					<ul>
						<li><a href="#">ARCHITECTURE</a></li>
						<li><a href="#">DESIGN</a></li>
						<li><a href="#">ARCHITECTURE</a></li>
						<li><a href="#">DESIGN</a></li>						
					</ul>
				</li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">CONTACT</a></li>
			</ul>-->
			<?php wp_nav_menu('theme_location=header-menu&container=false&menu_id='); ?>
		</div><!--//menu_container-->
		
		<div class="header_right">
			<?php if(get_option($shortname.'_twitter_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" alt="twitter" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_facebook_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" alt="fb" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_google_plus_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_google_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-icon.png" alt="gplus" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_instagram_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_instagram_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram-icon.png" alt="instagram" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_pinterest_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" alt="pinterest" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_linkedin_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_linkedin_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin-icon.png" alt="linkedin" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_tumblr_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_tumblr_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/tumblr-icon.png" alt="tumblr" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_youtube_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_youtube_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube-icon.png" alt="youtube" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_flickr_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_flickr_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flickr-icon.png" alt="flickr" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_vimeo_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_vimeo_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vimeo-icon.png" alt="vimeo" /></a>
			<?php } ?>
			
		</div><!--//header_right-->
		
		<div class="clear"></div>
	</div><!--//container-->
</header><!--//header-->
<div id="main_cont">
	<div class="container">
		<div class="logo_cont">
			<?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option($shortname.'_custom_logo_url',''); ?>" alt="logo" /></a>
			<?php } else { ?>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo" /></a>
			<?php } ?>
		</div><!--//logo_cont-->