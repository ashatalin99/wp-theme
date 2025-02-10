<?php

/**
 * Post Type Declaration
 */

$labels = array(
	'name'                  => 'Услуги',
	'singular_name'         => 'Услуга',
	'add_new'               => 'Новая Услуга',
	'add_new_item'          => 'Создать Новую Услугу',
	'edit_item'             => 'Редактировать Услугу',
	'new_item'              => 'Новая Услуга',
	'view_item'             => 'Смотреть Услугу',
	'search_items'          => 'Искать Услуги',
	'not_found'             => 'Услуги не найдены',
	'not_found_in_trash'    => 'Услуги не найдены в корзине',
	'menu_name'             => 'Услуги'
);

$args = array(
	'has_archive'           => false,
	'labels'                => $labels,
	'description'           => '',
	'public'                => true,
	'exclude_from_search'   => false,
	'publicly_queryable'    => true,
	'show_ui'               => true,
	'show_in_nav_menus'     => true,
	'show_in_menu'          => true,
	'show_in_admin_bar'     => true,
	'menu_position'         => 10,
	'menu_icon'             => 'dashicons-products', // https://developer.wordpress.org/resource/dashicons/
	'capability_type'       => 'post',
	'hierarchical'          => false,
	'supports'              => array( 'title', 'editor', 'thumbnail' ),
	'taxonomies'            => array('category')
);

register_post_type('services', $args );