<!DOCTYPE html>

<span class="navbar">
    <div class="site-name">
        <h1><?php bloginfo('name') ?></h1>
    </div>
    <?php
    wp_nav_menu(
        array(
            'menu-class' => 'nav-links',
        )
    )
    ?>
</span>
