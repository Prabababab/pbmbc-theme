<?php

function pbmbc_theme_scripts() {
    wp_enqueue_style('header_styles', get_template_directory_uri() . '/assets/css/header_styles.css', false, '1.1', 'all');
}

function wp_get_current_url() {
    return home_url( $_SERVER['REQUEST_URI'] );
}

function custom_login(){
 global $pagenow;
 if( 'wp-login.php' == $pagenow ) {
  wp_redirect('http://test-site.test/login');
 }
}

add_action('init','custom_login');

function ret_first_webcomic_link( string $link = '&laquo;', $post = null, $args = [] ) {
	if ( 3 < func_num_args() || false !== strpos( $link, '%link' ) || is_string( $post ) || ! is_array( $args ) || isset( $args[0] ) ) {
		webcomic_error( __( 'The classic behavior of first_webcomic_link() is deprecated; please refer to the first_webcomic_link() documentation for updated usage information.', 'webcomic' ) );

		$args = func_get_args() + [ '%link', '&laquo;', false, false, 'storyline', '', true ];

		array_splice( $args, 2, 0, 'first' );

		if ( false === $args[7] ) {
			$args[2] = 'first-nocache';
		}

		echo webcomic_compat( 'relative_webcomic_link_', $args, '' ); // WPCS: xss ok.

		return;
	}

	$args['relation'] = 'first';

	return get_webcomic_link( $link, $post, $args ); // WPCS: xss ok.
}

function ret_previous_webcomic_link( string $link = '&lsaquo;', $post = null, $args = [] ) {
	if ( 3 < func_num_args() || false !== strpos( $link, '%link' ) || is_string( $post ) || ! is_array( $args ) || isset( $args[0] ) ) {
		webcomic_error( __( 'The classic behavior of previous_webcomic_link() is deprecated; please refer to the previous_webcomic_link() documentation for updated usage information.', 'webcomic' ) );

		$args = func_get_args() + [ '%link', '&lsaquo;', false, false, 'storyline' ];

		array_splice( $args, 2, 0, 'previous' );

		echo webcomic_compat( 'relative_webcomic_link_', $args, '' ); // WPCS: xss ok.

		return;
	}

	$args['relation'] = 'previous';

	return get_webcomic_link( $link, $post, $args ); // WPCS: xss ok.
}

function ret_random_webcomic_link( string $link = '&infin;', $post = null, $args = [] ) {
	if ( 3 < func_num_args() || false !== strpos( $link, '%link' ) || is_string( $post ) || ! is_array( $args ) || isset( $args[0] ) ) {
		webcomic_error( __( 'The classic behavior of random_webcomic_link() is deprecated; please refer to the random_webcomic_link() documentation for updated usage information.', 'webcomic' ) );

		$args = func_get_args() + [ '%link', '&infin;', false, false, 'storyline', '', true ];

		array_splice( $args, 2, 0, 'random' );

		if ( false === $args[7] ) {
			$args[2] = 'random-nocache';
		}

		echo webcomic_compat( 'relative_webcomic_link_', $args, '' ); // WPCS: xss ok.

		return;
	}

	$args['relation'] = 'random';

	return get_webcomic_link( $link, $post, $args ); // WPCS: xss ok.
}

function ret_next_webcomic_link( string $link = '&rsaquo;', $post = null, $args = [] ) {
	if ( 3 < func_num_args() || false !== strpos( $link, '%link' ) || is_string( $post ) || ! is_array( $args ) || isset( $args[0] ) ) {
		webcomic_error( __( 'The classic behavior of next_webcomic_link() is deprecated; please refer to the next_webcomic_link() documentation for updated usage information.', 'webcomic' ) );

		$args = func_get_args() + [ '%link', '&rsaquo;', false, false, 'storyline' ];

		array_splice( $args, 2, 0, 'next' );

		echo webcomic_compat( 'relative_webcomic_link_', $args, '' ); // WPCS: xss ok.

		return;
	}

	$args['relation'] = 'next';

	return get_webcomic_link( $link, $post, $args ); // WPCS: xss ok.
}

function ret_last_webcomic_link( string $link = '&raquo;', $post = null, $args = [] ) {
	if ( 3 < func_num_args() || false !== strpos( $link, '%link' ) || is_string( $post ) || ! is_array( $args ) || isset( $args[0] ) ) {
		webcomic_error( __( 'The classic behavior of last_webcomic_link() is deprecated; please refer to the last_webcomic_link() documentation for updated usage information.', 'webcomic' ) );

		$args = func_get_args() + [ '%link', '&raquo;', false, false, 'storyline', '', true ];

		array_splice( $args, 2, 0, 'last' );

		if ( false === $args[7] ) {
			$args[2] = 'last-nocache';
		}

		echo webcomic_compat( 'relative_webcomic_link_', $args, '' ); // WPCS: xss ok.

		return;
	}

	$args['relation'] = 'last';

	return get_webcomic_link( $link, $post, $args ); // WPCS: xss ok.
}

function extract_link_from_webcomic (string $link) {
    $a = strpos($link, "'") + 1;
    $b = strpos($link, "'", $a) - 1;
    return substr($link, $a, $b - $a + 1);
}

add_action('wp_enqueue_scripts', 'pbmbc_theme_scripts');
do_action( 'webcomic_integrate_navigation' )

?>
