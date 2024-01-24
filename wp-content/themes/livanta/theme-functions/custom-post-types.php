<?php

$labels = [
	'name'			=> __( 'People', 'livanta' ),
	'singular_name'	=> __( 'Person', 'livanta' ),
	'add_new'		=> __( 'Add Person', 'livanta' ),
	'add_new_item'	=> __( 'Add New Person', 'livanta' ),
	'edit_item'		=> __( 'Edit Person', 'livanta' ),
	'new_item'		=> __( 'New Person', 'livanta' ),
	'all_item'		=> __( 'All People', 'livanta' ),
	'view_item'		=> __( 'See Person', 'livanta' ),
	'search_item'	=> __( 'Search Person', 'livanta' ),
	'menu_item'		=> __( 'People', 'livanta' )
];
$args = [
	'labels'				=> $labels,
	'public'				=> false,
	'publicly_queryable'	=> false,
	'show_ui'				=> true,
	'hierarchical'			=> false,
	'menu_icon'				=> 'dashicons-id',
	'menu_position'			=> 6,
	'has_archive'			=> false,
	'show_in_rest'			=> true,
	'supports'				=> ['title', 'thumbnail'],
	'rewrite'				=> ['slug' => 'person']
];
register_post_type( 'person', $args );

