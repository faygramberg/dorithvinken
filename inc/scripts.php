<?php
/**
 * Enqueue scripts and styles.
 */
function dorithvinken_scripts() {
	wp_enqueue_style( 'strappress-style', get_stylesheet_directory_uri() . '/style.min.css', array(), '4.2.1' );

	wp_enqueue_script( 'strappress-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	wp_enqueue_script( 'strappress-fa', '//use.fontawesome.com/releases/v5.6.3/js/all.js', array(), '5.6.3' );

	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/js/dist/isotope.pkgd.min.js', array(), '3.0.6', true );

	wp_enqueue_script( 'imagesloaded-js', get_template_directory_uri() . '/js/dist/imagesloaded.pkgd.min.js', array(), '4.1.4', true );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/src/site.js', array(), '3.4.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dorithvinken_scripts' );


/**
 * Filter the HTML script tag of `leadgenwp-fa` script to add `defer` attribute.
 *
*/
function dorithvinken_defer_scripts( $tag, $handle, $src ) {
	// The handles of the enqueued scripts we want to defer
	$defer_scripts = array( 
		'strappress-fa'
	);
    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer></script>';
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'dorithvinken_defer_scripts', 10, 3 );