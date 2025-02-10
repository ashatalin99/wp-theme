<?php

/**
 * Post Type Declaration
 */

$labels = array(
	'name'                  => 'Всплывающие Окна',
	'singular_name'         => 'Всплывающее Окно',
	'add_new'               => 'Новое Окно',
	'add_new_item'          => 'Создать Новое Окно',
	'edit_item'             => 'Редактировать Окно',
	'new_item'              => 'Новое Окно',
	'view_item'             => 'Смотреть Окно',
	'search_items'          => 'Искать Окно',
	'not_found'             => 'Окна не найдены',
	'not_found_in_trash'    => 'Окна не найдены в корзине',
	'menu_name'             => 'Всплывающие Окна'
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
	'menu_icon'             => 'dashicons-grid-view', // https://developer.wordpress.org/resource/dashicons/
	'capability_type'       => 'post',
	'hierarchical'          => false,
	'supports'              => array( 'title', 'editor', 'thumbnail' ),
	'taxonomies'            => array('category')
);

register_post_type('modals', $args );