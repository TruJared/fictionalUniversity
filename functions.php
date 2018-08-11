<?php

function university_files()
{
  wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), null, '1.0', true);
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

function university_features()
{
  add_theme_support('title-tag');
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  register_nav_menu('footerLocationCenterLeft', 'Footer Location Center Left');
  register_nav_menu('footerLocationCenterRight', 'Footer Location Center Right');
}

//  load css and javascript files
add_action('wp_enqueue_scripts', 'university_files');

//  dynamic page titles
add_action('after_setup_theme', 'university_features');
