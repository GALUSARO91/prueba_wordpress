<?php
function init_template(){

    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag');

    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'
        )
    );

}


function assets(){
   
    wp_enqueue_style('estilos', get_stylesheet_uri(),'1.0', 'all');

}

add_action('after_setup_theme','init_template');

add_action('wp_enqueue_scripts','assets');