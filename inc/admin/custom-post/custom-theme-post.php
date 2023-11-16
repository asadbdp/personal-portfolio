<?php
/**
 * register custom theme post
 */


 function register_custom_post(){
    $label = array(
        'name' => 'Sample Works',
        'menu_name' => 'Sample Work',
        'singular_name' => 'sample',
        'add_new' => 'Add Sample',
        'new_item' => 'New Sample',
        'add_new_item' => 'Add New Sample Work',
        'all_items' => 'All Sample',        
        'edit_item' => 'Edit Sample Work',
        'update_item' => 'Update Sample Work',
        'view_item' => 'View Sample Work',
        'view_items' => 'View Sample Works',
        'search_items' => 'Search Sample Work',
        'featured_image' => 'Sample Image',
        'set_featured_image' => 'Set Sample Image',
        'remove_featured_image' => 'Remove Sample Image',

    );

    $arg = array(
        'labels' => $label,
        'public' => true,
        'supports' => array('title'),
        'menu_icon' => 'dashicons-format-gallery',
        'taxonomies' => array( 'category'),
        'menu_position' => 2,


    );



	$ExpLabel = array(
        'name' => 'Exprience',
        'menu_name' => 'Exprience',
        'singular_name' => 'Exprience',
        'add_new' => 'Add Exprience',
        'new_item' => 'New Exprience',
        'add_new_item' => 'Add New Exprience',
        'all_items' => 'All Exprience',        
        'edit_item' => 'Edit Exprience',
        'update_item' => 'Update Exprience',
        'view_item' => 'View Exprience',
        'view_items' => 'View Exprience',
        'search_items' => 'Search Exprience',       

    );

    $Exarg = array(
        'labels' => $ExpLabel,
        'public' => true,
        'supports' => array('title'),
        'menu_icon' => 'dashicons-list-view',        
        'menu_position' => 3,


    );




	/*
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),

	$args = array(
		'label'                 => __( 'Post Type', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => false,
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);*/

    register_post_type('sample', $arg);
	register_post_type('exprience', $Exarg);
	
 }
 add_action('init', 'register_custom_post');