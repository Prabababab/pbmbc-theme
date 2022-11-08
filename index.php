<?php
/**
 * Experimenting trying to become more familiar with working w/ wordpress
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
        <?php wp_head(); ?>
    </head>
    <body>
        <?php get_header() ?>
    </body>
</html>
