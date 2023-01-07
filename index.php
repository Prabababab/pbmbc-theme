<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php echo wp_title( '|', true, 'right' ) . " PBMBC"; ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <?php wp_body_open(); ?>
        <?php get_header(); ?>
        <?php

        if ( have_posts() ) {

            while (  have_posts() ) {
                the_post();
                echo "<h1 class=\"post-title\">" . get_the_title() . "</h1>\n";

                if ( is_a_webcomic() ) {


                    webcomic_media();

                    last_webcomic_link();

                    $first_com_link = extract_link_from_webcomic(ret_first_webcomic_link());
                    $previous_com_link = extract_link_from_webcomic(ret_previous_webcomic_link());
                    $random_com_link = extract_link_from_webcomic(ret_random_webcomic_link());
                    $next_com_link = extract_link_from_webcomic(ret_next_webcomic_link());
                    $last_com_link = extract_link_from_webcomic(ret_last_webcomic_link());
        ?>
                    <span class="nav-container">
                        <ul class="comic-nav-menu">
                            <li class="com-nav-item"><a href=<?php echo $first_com_link?>><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/first.png", width=80px></a></li>
                            <li class="com-nav-item"><a href=<?php echo $previous_com_link?>><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/previous.png", width=80px></a></li>
                            <li class="com-nav-item"><a href=<?php echo $random_com_link?>><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/random.png", width=80px></a></li>
                            <li class="com-nav-item"><a href=<?php echo $next_com_link?>><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/next.png", width=80px></a></li>
                            <li class="com-nav-item"><a href=<?php echo $last_com_link?>><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/last.png", width=80px></a></li>
                            <li class="com-nav-item"><?php echo " "?></li>
                        </ul>
                    </span>
        <?php
                } else {
                    the_content();
                }
            }
        } else {
            _e( 'Sorry, no  posts matched your criteria.', 'textdomain' );
        }
        echo "<p>\n</p>";
        get_footer(); // Call the theme’s footer.php file.
        ?>
    </body>
</html>
