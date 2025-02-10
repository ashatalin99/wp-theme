<?php

/**
 * Enable more WYSIWYG editor buttons
 */
function try_add_mce_buttons( $buttons ) {
	// Remove 'toolbar toggle'
	unset( $buttons[ array_search('wp_adv', $buttons) ] );

	// Add custom buttons
	$buttons[] = 'btn';

	// Add 'toolbar toggle' back in at end of array
	$buttons[] = 'wp_adv';
	
	return $buttons;
}
add_filter('mce_buttons', 'try_add_mce_buttons', 99 );

