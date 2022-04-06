<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu primeiro tema</title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>        
            <h1>Meu Primeiro Tema v2</h1>
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