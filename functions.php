<?php

function blogger_theme_support(){
//Adds dynamic title
add_theme_support('title_tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

}

add_action('after_setup_theme','blogger_theme_support');


function blogger_menus(){

    $location = array(
        'primary' => "Desktop Primary"
    );
    register_nav_menus($location);
}

add_action('init','blogger_menus');



function blogger_register_styles(){

    $version = wp_get_theme()->get( 'version' );


    wp_enqueue_style('blogger-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css',array(),'','all');
    
    wp_enqueue_style('blogger-font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css',array(),'5.15.1','all');

    wp_enqueue_style('blogger-mdb-ui-kit','https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css',array(),'3.3.0','all');

}

add_action('wp_enqueue_scripts','blogger_register_styles');

function blogger_register_scripts(){

     wp_enqueue_script('blogger-jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',array(),'3.5.1',true); 

    wp_enqueue_script('blogger-popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js',array('jquery'),'1.16.0',true);
    
    wp_enqueue_script('blogger-bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js',array('jquery'),'5.0.0-beta3',true);

}

add_action('wp_enqueue_scripts','blogger_register_scripts');

?>