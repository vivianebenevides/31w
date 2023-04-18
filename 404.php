<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<!-- <main class="site__main"> -->
<main>
    <!-- <code>404.php</code> -->
    <section class="page-404">
        <h1>Erreur 404</h1>
        <h2>Page introuvable, vous pouvez tenter une recherche</h2>

        <div class="recherche-404">
            <?= get_search_form(); ?>
        </div>
        
        <h3>Nous choix de cours</h3>
        <?php wp_nav_menu( array( 'menu' => 'menu404', 'menu_class' => 'menu404' ) ); ?>

        <h3>Les notes de cours</h3>
        <?php wp_nav_menu( array( 'menu' => 'menu404-notes', 'menu_class' => 'menu404' ) ); ?>

    </section>
</main> 
<?php get_footer(); ?>  

