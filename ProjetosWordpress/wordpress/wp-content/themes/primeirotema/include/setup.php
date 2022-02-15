<?php

function tp_theme_styles(){
    wp_enqueue_style('theme_css',get_template_directory_uri().'/assets/css/theme.css');

    wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'),'0.0', true);
}
function tp_after_setup(){
    add_theme_support('menus');

    register_nav_menu('primary', __('Primary Menu', 'primeirotema'));
    register_nav_menu('footer', 'Menu Rodapé');
}
function tp_widgets(){
    register_sidebar(array(
        'name' => __('Meu Primeiro Sidebar', 'primeirotema'),
        'id' => 'tp_sidebar',
        'description' => __('Sidebar para o tema', 'primeirotema'),

        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',

        'before_widget' => '<div id="%1$s>',
        'after_widget' => '</div>'
    ));
}