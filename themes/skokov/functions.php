<?php

/**
 *Downloadable style and scripts
 **/
function load_style_script(){
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . 'css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

/**
 *Load style and scripts
 **/
add_action ('wp_enqueue_scripts', 'load_style_script');

/**
 *Support theme
 **/
add_theme_support('post-thumbnails');

/**
 *Menu
 **/
register_nav_menu('nav', 'nav');

/**
 *Sidebar
 **/
register_sidebar(array(
    'name' => 'Sidebar widgets',
    'id' => 'sidebar',
    'description' => 'This is place of sidebar widgets',
    'before_widget' => '<div class="vidget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
));

/**
 *Footer
 **/
register_sidebar(array(
    'name' => 'Footer widgets',
    'id' => 'footer',
    'description' => 'This is place of footer widgets',
));


?>
<?php //wp_head() ?>