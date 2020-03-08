<?php get_header(); ?> 

<div id="content_area" class="clearfix">

<div id="toggle"><?php wp_nav_menu( array( 'theme_location' => 'toggle_navigation', 'container' => '', 'menu_id' => 'menu'  ) ); ?></div>  
 <div id="container" class="clearfix">
 <div id="content" class="clearfix"> 
 <div class="aktuelles">Aktuelles aus dem Chapter</div>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div id="news_post" class="clearfix">          
  <div id="news_title"><a href="<?php the_permalink() ?>"><div class="main_title"><?php the_title(); ?></div><br /><div class="sub_title"><?php the_excerpt(); ?></div></a></div>

    <?php if ( has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="loop_thumbnail" > <!-- Falls vorhanden: Thumbnail anzeigen -->
    <?php the_post_thumbnail( 'thumbnail' ); ?></a>
    <?php endif; ?>
   
  </div>

    <?php endwhile; ?>
    
    <?php endif; ?> 
   

</div>
 <a href="/news-archive" class="archive_link">Zum Archiv</a>
</div>
</div>

<div id="trennlinie" class="clearfix"></div>

<div id="intro" class="clearfix"><div id="intro_content">
<div class="aktuelles">Mehr als nur ein Motorrad-Club</div>
<?php 
$id=2; 
$post = get_page($id); 
$content = apply_filters('the_content', $post->post_content); 
echo $content;
?>

</div></div>
<?php get_footer(); ?>
