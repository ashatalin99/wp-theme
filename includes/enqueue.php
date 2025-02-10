<?php
/**
 * Front End CSS
 */

 // Get a nicename version of the page-template name. IE products-falcon-x
function get_template_name () {
	global $post;
	$templateName = basename(get_page_template_slug(get_the_ID($post->ID)));
	$templateName = str_ireplace('template-', '', basename(get_page_template_slug(get_the_ID($post->ID)), '.php'));
	return $templateName;
}

// Add the page- prefix so that the page template name matches the style or script names in dist/
function get_page_template_name () {
	return "page-" . get_template_name();
}

// Trim the filename of any suffix
function file_ext_strip($filename){
	return preg_replace('/(.min.css)|(.min.js)/i', '', $filename);
}

function load_styles() {
	// Get all page CSS files. If the dist/styles/pages/page-template-name.min.css matches the current page_template, then enqueue the related stylesheet
	foreach( glob( get_template_directory(). '/dist/styles/pages/*.css' ) as $file ) {
		$filename = substr($file, strrpos($file, '/') + 1);
		$filePageTemplateName = file_ext_strip($filename);

		if ($filePageTemplateName === get_page_template_name()) {
			wp_enqueue_style( $filename, get_template_directory_uri().'/dist/styles/pages/'.$filename);
		}
	}
	//wp_enqueue_style('tailwindcss', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css', array(), null);
	//wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/dist/theme-styles.min.css', array(), null);
	wp_enqueue_style('theme-styles', get_bloginfo('template_url') . '/dist/theme-styles.min.css', array(), null);
	
}
add_action('wp_enqueue_scripts', 'load_styles');

/**
 * Front End JS
 */
function load_scripts() {
	// Bootstrap 4 requires jQuery 2.x.x so we must override the jQuery version packaged with WordPress ( 1.x.x )
	//wp_deregister_script('jquery');
	//wp_enqueue_script('jquery', get_bloginfo('template_url').'/dist/scripts/jquery-3.3.1.min.js', array(), null, false );

	// Theme Script
	wp_enqueue_script('theme-scripts', get_bloginfo('template_url').'/dist/theme-scripts.min.js', array(), null, true );

	// Add livereload to dev environment
	//wp_enqueue_script( 'livereload', site_url().'/livereload.js', '', NULL );
	
	// WordPress Scripts
	if( is_singular() && get_option('thread_comments') ) wp_enqueue_script('comment-reply');

	// Dynamic URLs for use in scripts
	wp_localize_script( 'theme-scripts', 'urls', array(
		'base' => get_bloginfo('url'),
		'theme' => get_bloginfo('template_url'),
		'ajax' => admin_url('admin-ajax.php')
	));

	// Initialize vars for JS
	wp_localize_script( 'theme-scripts', 'info', array( /* IDs, etc. */ ));
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Check if domain contains localhost, then inject livereload script
if (strpos(get_site_url(), "localhost") !== false) {
	function addReloadScript () {
		?>
		<script id="__bs_script__">//<![CDATA[
			document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
		//]]></script>
	<?php
	}
	add_action('wp_footer', 'addReloadScript');
}
/**
 * Admin CSS
 */
function load_admin_styles() {
	wp_enqueue_style( 'admin', get_bloginfo('template_url') . '/dist/styles/admin-styles.min.css' );
}
add_action('admin_enqueue_scripts', 'load_admin_styles');

/**
 * Admin JS
 */
function load_admin_scripts() {
	wp_enqueue_script( 'admin', get_bloginfo('template_url') . '/dist/scripts/admin-scripts.min.js' );
}
//add_action('admin_enqueue_scripts', 'load_admin_scripts');

/**
 * Appends a version number to each JS and CSS asset containing the time the file was last updated to automatically bust caching
 */
function bust_asset_cache( $target_url ) {
    $url = parse_url( $target_url );

    if ( isset( $url['query'] ) && strpos( $url['query'], 'ver=' ) !== false && substr( $url['path'], 0, 19 ) === '/wp-content/themes/' ) {
        // Wrap in a try/catch block in case for stat failure
        try {
            // Replace the "ver" variable with the modification time of the file
            $target_url = add_query_arg('ver', filemtime( ABSPATH . $url['path'] ), $target_url );
        } catch ( \Exception $e ) {
            // Remove the "ver" variable in case of failure
            $target_url = remove_query_arg('ver', $target_url );
        }
    }
    return $target_url;
}
//add_filter('style_loader_src', 'bust_asset_cache', 9999 );
//add_filter('script_loader_src', 'bust_asset_cache', 9999 );

function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );