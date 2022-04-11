<?php
function bm_theme_styles(){
    wp_enqueue_styles("bootstrap_css", get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_styles("template_css", get_template_directory_uri().'/assets/css/template.css');

    wp_enqueue_scripts("bootstrap_js", get_template_directory_uri().'/assets/js/bootstrap.min.js');
    wp_enqueue_scripts("script_js", get_template_directory_uri().'/assets/js/script.js');

}
function bm_after_seytup(){
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("custom-logo");

    register_nav_menu("primary", "Menu Primário");
    register_nav_menu("top", "Menu superior");
}
function bm_widgets(){

}
