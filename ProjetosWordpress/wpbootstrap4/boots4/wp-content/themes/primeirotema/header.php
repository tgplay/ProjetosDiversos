<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <?php if(has_custom_logo()){
                the_custom_logo();
            } 
            ?>        
            <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
            <div style="clear: both;"></div>
            <?php 
            if(has_nav_menu('primary')){
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => 'nav',
                    'container_class' => 'main_menu',
                    'fallback_cb' => false
                ));
            }
            ?>
        </header>