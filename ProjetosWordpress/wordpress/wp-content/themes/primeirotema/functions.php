<?php
//includes
require get_template_directory().'/include/setup.php';

//Hooks
add_action('wp_enqueue_scripts','tp_theme_styles');
add_action('after_setup_theme', 'tp_after_setup');
add_action('widgets_init', 'tp_widgets');
