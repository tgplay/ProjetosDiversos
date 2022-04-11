<?php
function bs_theme_styles(){
    wp_enqueue_style("bootstrap", get_template_directory_uri()."/vendor/bootstrap/css/bootstrap.min.css");
    wp_enqueue_style("fontawesome", get_template_directory_uri()."/vendor/font-awesome/css/font-awesome.min.css");
    wp_enqueue_style("googlelora", "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic");
    wp_enqueue_style("googleopensans", "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800");
    wp_enqueue_style("cleanblog", get_template_directory_uri()."/css/clean-blog.min.css");

    wp_enqueue_script("jquery", get_template_directory_uri()."/vendor/jquery/jquery.min.js");
    wp_enqueue_script("bootstrap_js", get_template_directory_uri()."/vendor/bootstrap/js/bootstrap.bundle.min.js");
    wp_enqueue_script("cleanblog_js", get_template_directory_uri()."/vendor/bootstrap/js/bootstrap.clean-blog.min.js");

}
function bs_after_setup(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    register_nav_menu("primary", __('Primary Menu', 'segundotema'));
}