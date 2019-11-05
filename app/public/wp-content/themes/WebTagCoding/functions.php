<?php
//Adding the css and js files

function webtag_setup(){
  wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab');
  wp_enqueue_style('fontawsome','//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('style',get_stylesheet_uri(),NULL,microtime());
  wp_enqueue_script("main",get_theme_file_uri('/JS/main.js'),NULL,microtime(),true);
}


add_action('wp_enqueue_scripts','webtag_setup');

//Adding Theme Support

function webtag_init(){

  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('htnl5',array(
    'comment-list','comment-form','search-form'));
}

add_action('after_setup_theme','webtag_init');

//Adding Custom post_type
function webtag_custom_post_types(){
  register_post_type('project',array(
    'rewrite'=>array('slug'=>'projects'),
    'public'=>true,
    'labels'=>array(
      'name'=>'Projects',
      'singular_name'=>'Project',
      'add_new_item'=>'Add New Projects',
      'edit_item'=>'Edit Project'
    ),
    'menu_icon'=>'dashicons-products',
    'has_archive'=>true,
    'supports' => array('title', 'editor', 'thumbnail','comment')
  ));
}
add_action('init','webtag_custom_post_types');



  ?>
