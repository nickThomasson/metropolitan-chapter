<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?> 

<div id="content_area" class="clearfix">
<div id="toggle"><?php wp_nav_menu( array( 'theme_location' => 'toggle_navigation', 'container' => '', 'menu_id' => 'menu'  ) ); ?></div>
 <div id="container" class="clearfix">
 <div id="content" class="clearfix"> 
 <div id="content_full">
 	<h1><?php echo get_the_title(); ?></h1> 
<ul>
<?php wp_get_archives('type=alpha'); ?>
</ul>

</div>
</div>
</div>
</div>
<?php get_footer(); ?>