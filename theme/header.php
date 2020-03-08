<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="de">

<head profile="https://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	</meta>
	<?php wp_head(); ?>
</head>

<body>
	<?php include_once("analyticstracking.php") ?>
	<div id="top">

		<div id="top_content">

			<div id="top_navigation"><?php wp_nav_menu(array('theme_location' => 'top_navigation')); ?></div>
			<div class="clearfix"></div>

			<div id="navigation"><?php wp_nav_menu(array('theme_location' => 'main_navigation')); ?></div>

		</div>

	</div>

	<div id="slider_container">

		<div id="slider" class="clearfix">

			<a href="<?php bloginfo('url'); ?>" class="hog_logo"></a>

			<div id="hog_pin"></div>

			<div id="stage"><?php if (function_exists('meteor_slideshow')) {
								meteor_slideshow();
							} ?></div>
			<div id="outer_blog_name">
				<span class="blog_name"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></span>
			</div>
			<div id="social_media">
				<a href="https://www.harley-davidson.com/de/de/owners/hog.html" class="harleyhamburgnord sm_link" target="_blank" title="Harley Owners Groups - Germany"></a>
				<a href="https://www.harley-hh.de" class="harleyhamburgnord sm_link" target="_blank" title="Harley Hamburg Nord"></a>
				<!--
        <a href="https://www.youtube.com/channel/UCQM50lqpNnxQnCueA7ux4mg" class="youtube sm_link" target="_blank"></a> -->
				<a href="https://www.facebook.com/metropolitanchapter" class="facebook sm_link" target="_blank"></a>
			</div>
		</div>

	</div>
	<div class="clearfix"></div>