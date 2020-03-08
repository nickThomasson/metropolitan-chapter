<?php

function metropolitanAssets()
{
  wp_register_script('main-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js',  array('jquery'), false, true);
  wp_register_style('main-styles', get_template_directory_uri() . '/assets/css/styles.css');

  wp_enqueue_script('main-scripts');
  wp_enqueue_style('main-styles');
}
add_action('wp_enqueue_scripts', 'metropolitanAssets');

/* Registrierung der Menues */
function register_my_menus()
{
  register_nav_menus(
    array(
      'main_navigation' => __('Hauptmenü'),
      'toggle_navigation' => __('Toggle'),
      'top_navigation' => __('Top-Menü')
    )
  );
}
add_action('init', 'register_my_menus');



/* Featured Image Support */
add_theme_support('post-thumbnails');


/* Image Sizes */
add_image_size('foto_column', 230, 600);
add_image_size('member', 300, 400, true);

/* Shortcode */
function links_shortcode($atts, $content = null)
{
  return '<div class="links clearfix">' . $content . '</div>';
}

add_shortcode('links', 'links_shortcode');


function rechts_shortcode($atts, $content = null)
{
  return '<div class="rechts clearfix">' . $content . '</div><div class="clearfix"></div>';
}

add_shortcode('rechts', 'rechts_shortcode');



function is_child($pageID)
{
  global $post;
  if (is_page() && ($post->post_parent == $pageID)) {
    return true;
  } else {
    return false;
  }
}

@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');


// Delete Original Size Image

function replace_uploaded_image($image_data)
{
  // if there is no large image : return
  if (!isset($image_data['sizes']['large'])) return $image_data;

  // paths to the uploaded image and the large image
  $upload_dir = wp_upload_dir();
  $uploaded_image_location = $upload_dir['basedir'] . '/' . $image_data['file'];
  $large_image_filename = $image_data['sizes']['large']['file'];

  // Do what wordpress does in image_downsize() ... just replace the filenames ;)
  $image_basename = wp_basename($uploaded_image_location);
  $large_image_location = str_replace($image_basename, $large_image_filename, $uploaded_image_location);

  // delete the uploaded image
  unlink($uploaded_image_location);

  // rename the large image
  rename($large_image_location, $uploaded_image_location);

  // update image metadata and return them
  $image_data['width'] = $image_data['sizes']['large']['width'];
  $image_data['height'] = $image_data['sizes']['large']['height'];
  unset($image_data['sizes']['large']);

  // Check if other size-configurations link to the large-file
  foreach ($image_data['sizes'] as $size => $sizeData) {
    if ($sizeData['file'] === $large_image_filename)
      unset($image_data['sizes'][$size]);
  }

  return $image_data;
}
add_filter('wp_generate_attachment_metadata', 'replace_uploaded_image');

/* Clean Header */

remove_action('wp_head', 'feed_links_extra');
// Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'feed_links');
// Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'rsd_link');
// Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'wlwmanifest_link');
// index link
remove_action('wp_head', 'index_rel_link');
// prev link
remove_action('wp_head', 'parent_post_rel_link', 10);
// start link 
remove_action('wp_head', 'start_post_rel_link', 10);
// Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
// Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'wp_generator');
