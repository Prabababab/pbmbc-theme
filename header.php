<!DOCTYPE html>

<span class="navbar">
    <div class="site-name">
        <h1><?php bloginfo('name') ?></h1>
    </div>
    <?php
    wp_nav_menu(
        array(
            'container' => 'ul',
        )
    );
    ?>
</span>


<img src="<?php bloginfo('template_url'); ?>/assets/images/banner.png", width=100%>
