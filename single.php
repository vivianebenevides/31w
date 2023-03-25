<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    <!-- retirar esse trace no tp2 (h3) -->
    <h3>single.php</h3> 
<?php 
if (have_posts()):
    while (have_posts()) : the_post();
        // usar funcao in_category (ver asside em template-parts)
        the_title('<h1>','</h1>');
        the_content();
    endwhile;
endif;
?>   
</main> 
<?php get_footer(); ?>

