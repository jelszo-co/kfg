<?php

// Enable features
add_theme_support("menus");
add_theme_support("custom-header");
add_theme_support( 'post-thumbnails' );


// Init styles & scripts
function kfg_styles() {
  wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Bebas+Neue|Montserrat:200,300,400,500,600,700,800,900&display=swap', false ); 
  wp_enqueue_style('main', get_stylesheet_uri(), array(), false, "all");
  wp_enqueue_style('404', get_template_directory_uri() . '/css/404.css', array(), '1.0.0', 'all');
}

function kfg_scripts() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.4.1.min.js", array(), "3.4.1", false);
  wp_enqueue_script('fontawesome', "https://kit.fontawesome.com/e553576236.js", array(), "1.0.0", false);
  wp_enqueue_script('js', get_template_directory_uri() . "/js/kfg.js", array('jquery'), '1.0.0', false);
}

add_action('wp_enqueue_scripts', 'kfg_styles');
add_action('wp_enqueue_scripts', 'kfg_scripts');


// register menus & sidebars
register_nav_menus(
  array(
    'main_menu' => __('Left menu', 'theme'),
    'footer_menu' => __('Footer Menu', 'theme')
  )
  );

function kfg_sidebars () {
  register_sidebar(
    array(
      'name' => 'Sidebar-l',
      'id' => 'sidebar-l',
      'class' => 'custom',
      'description' => 'Left sidebar'
    )
  );
  register_sidebar(
    array(
      'name' => 'Sidebar-r',
      'id' => 'sidebar-r',
      'class' => 'custom',
      'description' => 'Right sidebar'
    )
  );
};
add_action('widgets_init', 'kfg_sidebars');