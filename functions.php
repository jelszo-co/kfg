<?php

function kfg_styles() {

  wp_enqueue_style('style', get_template_directory_uri() . '/css/kfg.css', array(), '1.0.0', 'all');
  wp_enqueue_style('main', get_stylesheet_uri(), array(), false, "all");
}

function kfg_scripts() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.4.1.min.js", array(), "3.4.1", false);
  wp_enqueue_script('js', get_template_directory_uri() . "/js/kfg.js", array('jquery'), '1.0.0', false);
}

add_action('wp_enqueue_scripts', 'kfg_styles');
add_action('wp_enqueue_scripts', 'kfg_scripts');

add_theme_support("menus");

register_nav_menus(
  array(
    'top_menu' => __('Top Menu', 'theme'),
    'footer_menu' => __('Footer Menu', 'theme')
  )
  );