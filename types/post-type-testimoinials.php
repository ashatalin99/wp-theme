<?php

/**
 * Post Type Declaration
 */

$labels = array(
	'name'                  => 'Отзывы',
	'singular_name'         => 'Отзыв',
	'add_new'               => 'Новый Отзыв',
	'add_new_item'          => 'Создать Новую Страницу Отзывов',
	'edit_item'             => 'Редактировать Отзыв',
	'new_item'              => 'Новый Отзыв',
	'view_item'             => 'Смотреть Отзыв',
	'search_items'          => 'Искать Отзывы',
	'not_found'             => 'Отзывы не найдены',
	'not_found_in_trash'    => 'Отзывы не найдены в корзине',
	'menu_name'             => 'Отзывы'
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
	'menu_icon'             => 'dashicons-testimonial', // https://developer.wordpress.org/resource/dashicons/
	'capability_type'       => 'post',
	'hierarchical'          => false,
	'supports'              => array( 'title', 'editor', 'thumbnail' ),
	'taxonomies'            => array('category')
);

register_post_type('testimonials', $args );
