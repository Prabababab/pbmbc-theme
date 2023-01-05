<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <?php wp_body_open(); ?>
        <?php get_header(); ?>
        <?php

        if ( have_posts() ) :

        while (  have_posts() ) : the_post();

        echo "<h1 class=\"post-title\">" . get_the_title() . "</h1>\n";

        the_content();

        endwhile;

        else :

        _e( 'Sorry, no  posts matched your criteria.', 'textdomain' );

        endif;

        get_footer(); // Call the theme’s footer.php file.
        ?>
    </body>
</html>
