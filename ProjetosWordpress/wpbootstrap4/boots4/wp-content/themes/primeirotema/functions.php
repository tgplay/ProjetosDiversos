<?php
//include
require get_template_directory().'/include/setup.php';

//Hooks
add_action('wp_enqueue_scripts', 'bp_theme_styles');
add_action('after_setup_theme', 'bp_after_setup');
add_action('widgets_init', 'bp_widgets');
