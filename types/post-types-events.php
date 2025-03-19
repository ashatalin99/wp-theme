<?php

/**
 * Post Type Declaration
 */

$labels = array(
	'name'                  => 'Events',
	'singular_name'         => 'Event',
	'add_new'               => 'New Event',
	'add_new_item'          => 'New Event Page',
	'edit_item'             => 'Edit Event',
	'new_item'              => 'New Event',
	'view_item'             => 'View Event',
	'search_items'          => 'Search Events',
	'not_found'             => 'No Events Found',
	'not_found_in_trash'    => 'No Events Found in Trash',
	'menu_name'             => 'Events'
);

$args = array(
	'has_archive'           => false,
	'labels'                => $labels,
	'description'           => '',
	'public'                => false,
	'exclude_from_search'   => false,
	'publicly_queryable'    => true,
	'show_ui'               => true,
	'show_in_nav_menus'     => true,
	'show_in_menu'          => true,
	'show_in_admin_bar'     => true,
	'menu_position'         => 10,
	'menu_icon'             => 'dashicons-calendar-alt', // https://developer.wordpress.org/resource/dashicons/
	'capability_type'       => 'post',
	'hierarchical'          => false,
	'supports'              => array( 'title', 'editor', 'thumbnail' ),
	'taxonomies'            => array('category')
);

//register_post_type('event', $args );
