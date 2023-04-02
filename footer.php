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
        <div><?php wp_nav_menu(array(
                                'menu'=>'lien-externe-1',
                                'container' => 'nav',
                                'container_class' => 'footer__lien__nav')); ?></div>
        <div><?php wp_nav_menu(array(
                                'menu'=>'lien-externe-2',
                                'container' => 'nav',
                                'container_class' => 'footer__lien__nav')); ?></div>
        <div><?php wp_nav_menu(array(
                                'menu'=>'lien-externe-3',
                                'container' => 'nav',
                                'container_class' => 'footer__lien__nav')); ?></div>
    </section>

    <section>
        <div class="container-pied-de-page">
            <?php the_custom_logo(); ?>
            <div class="texte-pied-de-page">
                <h3>Étudiant en Développement Web</h3>
                <p>College Maisonneuve - Montréal (Québec)</p>
                <p>e2295412@cmaisonneuve.qc.ca</p>
            </div>
            <div class="liens-pied-de-page">
                <a href="https://www.linkedin.com/in/viviane-benevides">
                    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=590000" width="32" height="32">
                </a>
                <a href="https://github.com/vivianebenevides">
                    <img src="https://s2.svgbox.net/social.svg?ic=github&color=590000" width="32" height="32">
                </a>
                <a href="#top">
                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=arrow-circle-up&color=590000" width="40" height="40">
                </a>
            </div>
        </div>
        <p>© 2023 Viviane Benevides. Tous droits réservés.</p>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>