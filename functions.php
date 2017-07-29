<?php
/*
Theme Name: web170-su17 Demo
Author: Ronald Hamasaki
Author URI: http://scc-web-development.com/
Description: Demo for web170-su17
Version:1.0
*/

// Get the Title Tag
function get_my_title_tag(){
  global $post;
  if (is_front_page()){
    bloginfo('description');
  } elseif (is_page()){
    the_title();
    if ($post->post_parent){
      echo ' | ';
      echo get_the_title($post->post_parent);
    }
  } elseif (is_category()){
    echo get_the_category()[0]->cat_name;
  } elseif (is_single()){
    the_title();
    echo ' | ';
    echo get_the_category()[0]->cat_name;
  } else {
    bloginfo('description');
  }
  echo ' | ';
  bloginfo('name');
  echo ' | ';
  echo 'Seattle, WA';
}

// Register menu
register_nav_menus(array('main-menu' => 'Main Menu'));
//
?>