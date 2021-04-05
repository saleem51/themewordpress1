<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="test" />


    <?php wp_head(); ?>
</head>
<body id="bodd">

<header>
    <nav class="navbar navbar-dark bg-info mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SeaWild</a>
           

            <?php
            wp_nav_menu( array(
                                'menu'            => 'top-menu',
                                'theme_location'  => 'primary',
                                'depth'           => 2,
                                'container'       => false,
                                'menu_class'      => 'nav nav-tabs',
                                //'container_id'    => 'navbar',
                                'menu_class'      =>'nav nav-tabs',
                                'fallback_cb'     =>'wp_bootstrap_navwalker::fallback',
                                'walker'          => new wp_bootstrap_navwalker()
                                ));
            ?>
                <!--<ul  class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Activités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Mentions légales</a>
                    </li>
                </ul>-->
        </div>
    </nav>
</header>


