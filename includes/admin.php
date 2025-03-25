<?php

/**
 * Remove default link option for images
 */
function image_link_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ( $image_set !== 'none' ) {
		update_option( 'image_default_link_type', 'none' );
	}
}
add_action('admin_init', 'image_link_setup', 10 );

/**
 * Add ability to upload SVGs
 */
function upload_types( $existing_mimes = array() ) {
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}
add_filter('upload_mimes', 'upload_types');
