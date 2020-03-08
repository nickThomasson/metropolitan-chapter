<?php get_header(); ?>
<div id="content_container" class="clearfix">
    <!-- Autoren Seite -->

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>

    <?php echo $curauth->display_name; ?>
    <?php echo $curauth->user_email; ?>
    <?php echo get_avatar(get_the_author_meta('ID'), $size = '250'); ?>
    <?php echo $curauth->description; ?>