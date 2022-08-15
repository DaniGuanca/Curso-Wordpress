<?php

function custom_theme_setup()
{
  add_theme_support('post-thumbnails');

  $locations = array(
    'main_nav' => 'Navegacion Principal',
    'social_nav' => 'Navegacion Social Media'
  );

  register_nav_menus($locations);
}

add_action('after_setup_theme', 'custom_theme_setup');

function read_more()
{
  $url_post = get_permalink();

  return "&nbsp;<a href='$url_post'><small>leer mas...</small></a>";
}

add_filter('excerpt_more', 'read_more');

function widgets_activation()
{
  $args = array(
    'name' => __('widget %d'),
    'before_widget' => '<div class="item  widgets">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  );


  register_sidebars(3, $args);

  register_sidebar(array(
    'name' => 'widget personalizado',
    'before_widget' => '<article class="item  widgets  other-widget">',
    'after_widget' => '</article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}

add_action('widgets_init', 'widgets_activation');

function main_image_url($size)
{
  global $post;

  $image_id = get_post_thumbnail_id($post->ID);

  $main_image = wp_get_attachment_image_src($image_id, $size);

  return $main_image[0];
}
