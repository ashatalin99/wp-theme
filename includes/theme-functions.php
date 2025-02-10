<?php

/**
 * Generate pagination links
 */
function pagination() {
	global $wp_query;

	$big = 999999999; // need an unlikely integer

	return paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'mid_size' => 1,
		'prev_text' => 'Previous',
		'next_text' => 'Next',
	) );
}

// Remove comment support
function remove_comment_support() {
	remove_post_type_support( 'page', 'comments' );
	remove_post_type_support( 'post', 'comments' );

}

add_action('init', 'remove_comment_support', 100);

// Remove editor form homepage template
// function hide_editor() {
//     $template_file = basename( get_page_template() );
//     if($template_file == 'page-template-homepage.php'){
//         remove_post_type_support('page', 'editor');
//     }
// }

// add_action( 'admin_head', 'hide_editor' );

// Remove editor from pages
function remove_content_editor() { 
    remove_post_type_support('page', 'editor');        
}

add_action('admin_head', 'remove_content_editor');

function is_user_agent($check_string, $show_user_agent = false) {
	$user_agent = ( isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '' );
	if ( true === $show_user_agent ) {
		exit($user_agent);
	}
	if ( is_array($check_string) ) {
		foreach($check_string as $single_string) {
			if ( false !== strpos($user_agent, $single_string) ) {
				return true;
			}
		}
	} else {
		return ( false !== strpos($user_agent, $check_string) );
	}
}

// Adding language specific class to accommodate language specific css styles
add_filter( 'body_class', function( $classes ) {
	$site_lang = get_bloginfo('language');
	$formated_tag = 'lang-' . substr($site_lang, 0, 2);
    return array_merge( $classes, array( $formated_tag ) );
} );