<?php

/**
 * Post Type Declaration
 */

$labels = array(
	'name'                  => 'Акции',
	'singular_name'         => 'Акция',
	'add_new'               => 'Новая Акция',
	'add_new_item'          => 'Создать Новую Страницу Акций',
	'edit_item'             => 'Редактировать Акцию',
	'new_item'              => 'Новый Акция',
	'view_item'             => 'Смотреть Акцию',
	'search_items'          => 'Искать Акцию',
	'not_found'             => 'Акции не найдены',
	'not_found_in_trash'    => 'Акции не найдены в корзине',
	'menu_name'             => 'Акции'
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
	'menu_icon'             => 'dashicons-index-card', // https://developer.wordpress.org/resource/dashicons/
	'capability_type'       => 'post',
	'hierarchical'          => false,
	'supports'              => array( 'title', 'editor', 'thumbnail' ),
	'taxonomies'            => array('category')
);

register_post_type('promotions', $args );