<?php
//include
require get_template_directory()."/include/setup.php";

//hooks
add_action("wp_enqueue_script", "ts_theme_styles");
add_action("after_setup_theme", "ts_after_setup");

