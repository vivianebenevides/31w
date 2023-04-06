<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>31w Viviane Silva</title>
    <?php wp_head(); ?>
</head>
<body class="custom-background site <?= (is_front_page() ? "no-aside" : ""); ?> ">
    <header class="site__entete" id="top">
        <section class="logomenu">
            <?php the_custom_logo(); ?>
            <div class="menusearch">
                <div class="menusearch-search">
                    <?= get_search_form(); ?>
                    <label for="chkBurger" class="burger">
                    <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu&color=000" width="32" height="32">
                    </label>
                </div>
                <div class="menusearch-menu">
                    <input type="checkbox" id="chkBurger">
                    <?php wp_nav_menu(array(
                        'menu' => 'entete',
                        'container' => 'nav'
                    )); ?>
                </div>
            </div>
        </section>
        <?php 
        $classe = "";
        if (is_front_page() == false){$classe="invisible";}
        ?>
        <!-- <h1 class="site__titre <?= $classe ?>"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <h2 class="site__soustitre <?= $classe ?>"><?php bloginfo('description'); ?></h2>  -->
    </header>
    <?php
    if(is_front_page() == false)
    {
     get_template_part("template-parts/aside");
    }
     ?>
