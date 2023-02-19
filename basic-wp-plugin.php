<?php
/*
Plugin Name: Basic Wp Plugin
Plugin URI: https://example.com/
Description: Basic Wp Plugin - Plugin that create team post type.
Version: 1.0
Author: Ramiz Theba
Author URI: https://hashnode.com/@ramiztheba
License: GPL2
*/

// Register Custom Post Type Team
function Team() {

	$labels = array(
		'name'                  => _x( 'Teams', 'Post Type General Name', 'custom_elementor_addon' ),
		'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'custom_elementor_addon' ),
		'menu_name'             => __( 'Team', 'custom_elementor_addon' ),
		'name_admin_bar'        => __( 'Team', 'custom_elementor_addon' ),
		'archives'              => __( 'Item Archives', 'custom_elementor_addon' ),
		'attributes'            => __( 'Item Attributes', 'custom_elementor_addon' ),
		'parent_item_colon'     => __( 'Parent Item:', 'custom_elementor_addon' ),
		'all_items'             => __( 'All Items', 'custom_elementor_addon' ),
		'add_new_item'          => __( 'Add New Item', 'custom_elementor_addon' ),
		'add_new'               => __( 'Add New', 'custom_elementor_addon' ),
		'new_item'              => __( 'New Item', 'custom_elementor_addon' ),
		'edit_item'             => __( 'Edit Item', 'custom_elementor_addon' ),
		'update_item'           => __( 'Update Item', 'custom_elementor_addon' ),
		'view_item'             => __( 'View Item', 'custom_elementor_addon' ),
		'view_items'            => __( 'View Items', 'custom_elementor_addon' ),
		'search_items'          => __( 'Search Item', 'custom_elementor_addon' ),
		'not_found'             => __( 'Not found', 'custom_elementor_addon' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'custom_elementor_addon' ),
		'featured_image'        => __( 'Featured Image', 'custom_elementor_addon' ),
		'set_featured_image'    => __( 'Set featured image', 'custom_elementor_addon' ),
		'remove_featured_image' => __( 'Remove featured image', 'custom_elementor_addon' ),
		'use_featured_image'    => __( 'Use as featured image', 'custom_elementor_addon' ),
		'insert_into_item'      => __( 'Insert into item', 'custom_elementor_addon' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'custom_elementor_addon' ),
		'items_list'            => __( 'Items list', 'custom_elementor_addon' ),
		'items_list_navigation' => __( 'Items list navigation', 'custom_elementor_addon' ),
		'filter_items_list'     => __( 'Filter items list', 'custom_elementor_addon' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'custom_elementor_addon' ),
		'description'           => __( 'Team Post Type', 'custom_elementor_addon' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'League' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'Team', 0 );