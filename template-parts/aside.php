 <aside class="site__aside">
        <h3>Menu Secondaire</h3>
        <?php 
        $lemenu = 'note-wp';
        if (in_category('cours'))
        {$lemenu = 'cours';}
        if (in_category('galerie'))
        {$lemenu = 'galerie';}
        wp_nav_menu(array(
            "menu" => $lemenu,
            "container" => "nav"
        )); 

        ?>

    </aside>