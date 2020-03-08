<?php

/**
 * @package Private Messages For WordPress
 *
 * @author: Rilwis
 * @url: http://www.deluxeblogtips.com
 * @email: rilwis@gmail.com
 
 Template Name: Private Messages
 
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

				<?php
				if (!is_user_logged_in()) {
					redirect_to_login_url();
				}
				?>
				<div class="hfeed content">
					<h2>Nachrichten</h2>
					<a href="javascript:void(0);" onclick="pmSwitch('pm-send');">Send</a> | <a href="javascript:void(0);" onclick="pmSwitch('pm-inbox');">Inbox</a> | <a href="javascript:void(0);" onclick="pmSwitch('pm-outbox');">Outbox</a>
					<script type="text/javascript">
						// Switch between send page, inbox and outbox
						function pmSwitch(page) {
							document.getElementById('pm-send').style.display = 'none';
							document.getElementById('pm-inbox').style.display = 'none';
							document.getElementById('pm-outbox').style.display = 'none';
							document.getElementById(page).style.display = '';
							return false;
						}
					</script>
					<!-- Include scripts and style for autosuggest feature -->
					<script type="text/javascript" src="<?php echo WP_PLUGIN_URL; ?>/private-messages-for-wordpress/js/jquery.min.js"></script>
					<script type="text/javascript" src="<?php echo WP_PLUGIN_URL; ?>/private-messages-for-wordpress/js/jquery.autoSuggest.packed.js"></script>
					<script type="text/javascript" src="<?php echo WP_PLUGIN_URL; ?>/private-messages-for-wordpress/js/script.js"></script>
					<link rel="stylesheet" type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/private-messages-for-wordpress/css/style.css" />
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="post" id="post-<?php the_ID(); ?>">
								<?php
								$show = array(true, false, false);
								if (isset($_REQUEST['page']) && $_REQUEST['page'] == 'rwpm_inbox') {
									$show = array(false, true, false);
								} elseif (isset($_REQUEST['page']) && $_REQUEST['page'] == 'rwpm_outbox') {
									$show = array(false, false, true);
								}
								?>
								<div id="pm-send" <?php if (!$show[0]) echo 'style="display:none"'; ?>><?php rwpm_send(); ?></div>
								<div id="pm-inbox" <?php if (!$show[1]) echo 'style="display:none"'; ?>><?php rwpm_inbox(); ?></div>
								<div id="pm-outbox" <?php if (!$show[2]) echo 'style="display:none"'; ?>><?php rwpm_outbox(); ?></div>
							</div>
					<?php endwhile;
					endif; ?>
				</div>

			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>