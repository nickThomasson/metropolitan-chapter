<?php
/*
 
 Template Name: Gallery
 
 */
 ?>

<?php get_header(); ?> 

<div id="content_area" class="clearfix">
<div id="toggle"><?php wp_nav_menu( array( 'theme_location' => 'toggle_navigation', 'container' => '', 'menu_id' => 'menu'  ) ); ?></div>
 <div id="container" class="clearfix">
 <div id="content" class="clearfix"> 
 <?php get_sidebar(); ?> 
 <div id="content_right">
 	
 	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
    <?php if ( has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="loop_thumbnail" > <!-- Falls vorhanden: Thumbnail anzeigen -->
    <?php the_post_thumbnail( 'thumbnail' ); ?></a>
    
    <?php endif; ?>
   
    <?php endwhile; ?>
    <br /><a href="<?php print $_SERVER['HTTP_REFERER'];?>" class="single_backlink clearfix">Zurück</a>
    <?php endif; ?>    
</div>
</div>
</div>
</div>
<?php get_footer(); ?>