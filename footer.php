<?php
/**
* Template footer.php
*/
?>
<footer class="site__footer">
<section class="footer__widget">
    <div><?php dynamic_sidebar( 'pied-page-1' ); ?></div>
    <div><?php dynamic_sidebar( 'pied-page-2' ); ?></div> 
    <div><?php dynamic_sidebar( 'pied-page-3' ); ?></div> 
</section>

<section class="footer__lien">
    <!-- colocar nav menu -->
    <div><?php wp_nav_menu(array(
                            'menu'=>'lien-externe',
                            'container' => 'nav',
                            'container_class' => 'footer__lien__nav')); ?></div>
    <div><?php ?></div>
    <div><?php ?></div>
</section>
    <!-- colocar custom-logo -->
    <!-- <div class="container-pied-de-page">
        <img src="/wp-content/themes/31w-viviane-silva/logo-viviane-benevidesWHITE.png" width="150px" height="150px"></img>
        <div class="texte-pied-de-page">
            <h3>Étudiant en Développement Web</h3>
            <p>College Maisonneuve - Montréal (Québec)</p>
            <p>e2295412@cmaisonneuve.qc.ca</p>
            <a href="#">https://github.com/vivianebenevides</a>
        </div>
    </div>
    <p>© 2023 Viviane Benevides. Tous droits réservés.</p> -->
</footer>
<?php wp_footer(); ?>
</body>
</html>