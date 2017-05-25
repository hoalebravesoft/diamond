<?php
define("THEME_URL", get_stylesheet_directory_uri());
define("CORE", THEME_URL.'/core');
define("THEME_PATH", get_stylesheet_directory());
define("CORE_PATH", THEME_PATH.DIRECTORY_SEPARATOR.'core');

require_once(CORE_PATH.DIRECTORY_SEPARATOR.'init.php');

if(!function_exists('vietanh_theme_setup')){
  function vietanh_theme_setup(){
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array(
      'image', 'video', 'gallery', 'quote', 'link'
    ));
    add_theme_support('title-tag');
    $deafaul_background= array('deafault_color' => '#333');
    add_theme_support('custom-background', $deafaul_background);

    register_nav_menu('primary-menu', 'Primary menu');

    $sidebar = array(
      'name' => 'Name Sidebar',
      'id' => 'my-sidebar',
      'description' => 'This is my sidebar',
      'class' => 'sidebar'
    );
    register_sidebar($sidebar);
  }
  add_action('init', 'vietanh_theme_setup');
}
?>