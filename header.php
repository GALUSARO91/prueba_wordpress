<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Math&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> 
    <!-- <link rel="stylesheet" type= "text/css" href="/style.css"> -->
    <?php wp_head() ?>
</head>
<body>
    <header>
        <h2><?php 
        
        echo get_bloginfo()
        ?></h2>
        <nav>
        <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'top_menu',
                        'menu_class' => 'menu_principal',
                        'container_class' => 'container-menu'
                      )
                    );
                   ?>
        </nav>
    </header>
    