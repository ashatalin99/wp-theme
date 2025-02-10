<?php

/**
 * Post Type Declaration
 */

$labels = array(
	'name'                  => 'Формы',
	'singular_name'         => 'Форма',
	'add_new'               => 'Новая Форма',
	'add_new_item'          => 'Создать Новую Форму',
	'edit_item'             => 'Редактировать Форму',
	'new_item'              => 'Новая Форма',
	'view_item'             => 'Смотреть Форму',
	'search_items'          => 'Искать Форму',
	'not_found'             => 'Формы не найдены',
	'not_found_in_trash'    => 'Формы не найдены в корзине',
	'menu_name'             => 'Формы'
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
	'menu_icon'             => 'dashicons-forms', // https://developer.wordpress.org/resource/dashicons/
	'capability_type'       => 'post',
	'hierarchical'          => false,
	'supports'              => array( 'title', 'editor', 'thumbnail' ),
	'taxonomies'            => array('category')
);

register_post_type('forms', $args );