<!DOCTYPE html>

<nav class="navbar">
    <div class="site-name">
        <?php
        bloginfo('name')
        ?>
    </div>
    <?php
    wp_nav_menu(
        array(
            'menu-class' => 'nav-links'
        )
    )
    ?>
</nav>
