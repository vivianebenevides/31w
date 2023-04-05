<?php
/**
 * template-part qui permettra d'afficher 
 * un article provenant d'un conteneur  de class blocflex
 * pour un article de catégorie note-wp
 */
$titre = get_the_title();
//if (substr($titre,0,1) == "0"){}
?>
<article class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <p><?php the_field('temps_lecture'); ?> </p>
    <p>Niveu de difficulté : <?php the_field('niveau_difficulte'); ?> </p>
</article>

