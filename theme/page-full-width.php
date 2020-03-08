<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>

<div id="content_area" class="clearfix">
    <div id="toggle"><?php wp_nav_menu(array('theme_location' => 'toggle_navigation', 'container' => '', 'menu_id' => 'menu')); ?></div>
    <div id="container" class="clearfix">
        <div id="content" class="clearfix">
            <div id="content_full">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="loop_thumbnail">
                                <!-- Falls vorhanden: Thumbnail anzeigen -->
                                <?php the_post_thumbnail('thumbnail'); ?></a>

                        <?php endif; ?>



                    <?php endwhile; ?>
                    <?php posts_nav_link('<span="seperator"></span>', '<span class="prev_label">Vorherige Seite</span>', '<span class="next_label">N&auml;chste Seite</span>'); ?>
                    <!-- Beitrag Navitgation -->
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>