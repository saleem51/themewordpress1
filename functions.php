<?php

define('VERSIONN', '1.0.0');

function newfunct()
{

    wp_enqueue_style('sksais_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 'VERSIONN', 'all');
    wp_enqueue_style('sksais', get_template_directory_uri() . '/style.css', array('sksais_bootstrap'), 'VERSIONN', 'all');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), 'VERSIONN', true);
    wp_enqueue_script('sksais_scripts', get_template_directory_uri() . '/js/app.js', array('jquery', 'bootstrap-js'), 'VERSIONN', true);
}


add_action('wp_enqueue_scripts', 'newfunct');

function salim_admin_scripts() {
    wp_enqueue_style( 'bootstrap-adm-core' , get_template_directory_uri() . '/css/bootstrap.min.css', array(), 'VERSIONN', true );

}

add_action('admin_init', 'salim_admin_scripts') ;

function lgmac_setup() {


//support des vignettes
add_theme_support( 'post-thumbnails' ); 


//enlève le générateur de version
remove_action('wp_head', 'wp_generator');

//enlève les guillemets à la française
remove_filter ('the content', 'wptexturize');

//support du titre 
add_theme_support( 'title-tag');

require_once('includes/wp_bootstrap_navwalker.php');

register_nav_menus (array ('primary' => 'principal'));


}

function theme_menu_class(array $classes): array{

    $classes[] = 'nav-item';
    return $classes;

}

function theme_menu_link_class($attrs){

    $attrs['class'] = 'nav-link active';
    return $attrs;

}

add_action('after_setup_theme', 'lgmac_setup');
add_filter('nav_menu_css_class', 'theme_menu_class');
add_filter('nav_menu_link_attributes', 'theme_menu_link_class');
