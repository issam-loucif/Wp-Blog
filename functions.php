<?php

function blog_theme_support(){
//Adds dynamic title
add_theme_support('title_tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

}

add_action('after_setup_theme','blog_theme_support');


function blog_menus(){

    $location = array(
        'primary' => "Desktop Primary"
    );
    register_nav_menus($location);
}

add_action('init','blog_menus');



function blog_register_styles(){

    $version = wp_get_theme()->get( 'version' );

    wp_enqueue_style('blog-style', get_template_directory_uri() ."/style.css",array('blog-bootstrap'),$version,'all');

    wp_enqueue_style('blog-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css',array(),'5.0.0-beta3','all');
    
    wp_enqueue_style('blog-font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css',array(),'5.15.1','all');

    wp_enqueue_style('blog-mdb-ui-kit','https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css',array(),'3.3.0','all');

}

add_action('wp_enqueue_scripts','blog_register_styles');

function blog_register_scripts(){

    wp_enqueue_scripts('blog-jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',array(),'3.5.1',true);

    wp_enqueue_scripts('blog-popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js',array(),'1.16.0',true);
    
    wp_enqueue_scripts('blog-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js',array(),'5.0.0-beta3',true);

}

add_action('wp_enqueue_scripts','blog_register_scripts');

?>