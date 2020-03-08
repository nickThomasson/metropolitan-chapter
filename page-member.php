<?php
/*
Template Name: Member
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

<?php

					// check if the repeater field has rows of data
					if( have_rows('member') ):

						// loop through the rows of data
						while ( have_rows('member') ) : the_row();
							$image = get_sub_field('member_photo');
							$size = 'member'; // (thumbnail, medium, large, full or custom size) 
							$url = $image['url']; 
							$imagesrc = wp_get_attachment_image_src( $image, $size );
							?>
							<div class="member-item">
									<?php if( $image ) { ?>
										<a href="<?php echo $imagesrc[0]; ?>" title="<?php the_sub_field('member_name'); ?>">
										<?php echo wp_get_attachment_image( $image, $size ); ?>
										</a>
									<?php }  ?>
								
										<div class="member-name"><h3><?php the_sub_field('member_name'); ?><br><?php // the_sub_field('member_lastname'); ?></h3></div>
									
										
							</div>	
						<?php endwhile;
					else :
					endif;
					?>


			<?php the_content(); ?>
    <?php if ( has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="loop_thumbnail" > <!-- Falls vorhanden: Thumbnail anzeigen -->
    <?php the_post_thumbnail( 'thumbnail' ); ?></a>
    
    <?php endif; ?>
   


    <?php endwhile; ?>
    <?php posts_nav_link('<span="seperator"></span>','<span class="prev_label">Vorherige Seite</span>','<span class="next_label">N&auml;chste Seite</span>'); ?> <!-- Beitrag Navitgation -->
    <?php endif; ?> 
</div>
</div>
</div>
</div>
<?php get_footer(); ?>