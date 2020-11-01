<?php

/* enqueue style and scripts */
function litemusAddStyleScripts()
{
    wp_enqueue_style('style', get_template_directory_uri().'/style.css');
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(),'8.0.1');
	wp_enqueue_style( 'litemus-style', get_stylesheet_directory_uri() . '/css/litemus-style.css',array(),'8.0.0');
	wp_enqueue_style( 'litemus-bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
	wp_enqueue_style('litemus-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.1/css/all.min.css');
	wp_enqueue_style( 'litemus-font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet' );
	wp_enqueue_script('litemus-js',get_stylesheet_directory_uri() . '/js/litemus-script.js',array('jquery'),'6.4');	
}
add_action('wp_enqueue_scripts','litemusAddStyleScripts');

/* Add Menu */
function litemusMenus() {
    register_nav_menus( array(
        'header-menu' => __('Header Menu','litemus'),
        'social-menu' => __('Social Menu','litemus')
    ) );
  }
add_action('init', 'litemusMenus' );

/** To add feature image in admin page */
function litemusSetupFeatureImage(){
    add_theme_support('post-thumbnails');
	add_image_size('client', 150, 100, true);
	add_image_size('blog', 495, 370, true);
}
add_action('after_setup_theme','litemusSetupFeatureImage');

/** Add Custom post in the admin section */
function litemusSpecialties() {
	$labels = array(
		'name'               => _x( 'Client', 'litemus' ),
		'singular_name'      => _x( 'Client', 'post type singular name', 'litemus' ),
		'menu_name'          => _x( 'Client', 'admin menu', 'litemus' ),
		'name_admin_bar'     => _x( 'Client', 'add new on admin bar', 'litemus' ),
		'add_new'            => _x( 'Add New', 'book', 'litemus' ),
		'add_new_item'       => __( 'Add New Client', 'litemus' ),
		'new_item'           => __( 'New Client', 'litemus' ),
		'edit_item'          => __( 'Edit Client', 'litemus' ),
		'view_item'          => __( 'View client', 'litemus' ),
		'all_items'          => __( 'All Client', 'litemus' ),
		'search_items'       => __( 'Search Client', 'litemus' ),
		'parent_item_colon'  => __( 'Parent Client:', 'litemus' ),
		'not_found'          => __( 'No Client found.', 'litemus' ),
		'not_found_in_trash' => __( 'No Client found in Trash.', 'litemus' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'litemus' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'specialties' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'client', $args );
}

add_action( 'init', 'litemusSpecialties' );