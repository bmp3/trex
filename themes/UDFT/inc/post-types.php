<?php

add_action('init', 'register_post_types');
function register_post_types(){

    $labels = array(
        'name'              => _x( 'Events', 'taxonomy general name', 'textdoman' ),
        'singular_name'     => _x( 'Event', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Events', 'textdomain' ),
        'all_items'         => __( 'All Events', 'textdomain' ),
        'parent_item'       => __( 'Parent Event', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Event:', 'textdomain' ),
        'edit_item'         => __( 'Edit Event', 'textdomain' ),
        'update_item'       => __( 'Update Event', 'textdomain' ),
        'add_new_item'      => __( 'Add New Event category', 'textdomain' ),
        'new_item_name'     => __( 'New Event Name', 'textdomain' ),
        'menu_name'         => __( 'Event categories', 'textdomain' ),
    );

    $args = array(
        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'events', 'hierarchical' => true ),
    );

    //register_taxonomy( 'events', array( 'event' ), $args );

    register_post_type('event', array(
        'label'  => 'events',
        'labels' => array(
            'name'               => 'Event',
            'singular_name'      => 'Event',
            'add_new'            => 'Add Event',
            'add_new_item'       => 'Adding Event',
            'edit_item'          => 'Edit Event',
            'new_item'           => 'New event',
            'view_item'          => 'View Event',
            'search_items'       => 'Search Event',
            'not_found'          => 'Not found Events',
            'not_found_in_trash' => 'Not found Events in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Events',
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'show_in_rest'        => true,
        'rest_base'           => null,
        'menu_position'       => 40,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'excerpt', 'thumbnail' ),
        //'taxonomies'          => array( 'events' ),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ) );



    $labels = array(
        'name'              => _x( 'Projects', 'taxonomy general name', 'textdoman' ),
        'singular_name'     => _x( 'Project', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Projects', 'textdomain' ),
        'all_items'         => __( 'All Projectss', 'textdomain' ),
        'parent_item'       => __( 'Parent Project', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Project:', 'textdomain' ),
        'edit_item'         => __( 'Edit Project', 'textdomain' ),
        'update_item'       => __( 'Update Project', 'textdomain' ),
        'add_new_item'      => __( 'Add New Project category', 'textdomain' ),
        'new_item_name'     => __( 'New Project Name', 'textdomain' ),
        'menu_name'         => __( 'Project categories', 'textdomain' ),
    );

    $args = array(
        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'projects', 'hierarchical' => true ),
    );

    //register_taxonomy( 'projects', array( 'project' ), $args );

    register_post_type('project', array(
        'label'  => 'projects',
        'labels' => array(
            'name'               => 'Project',
            'singular_name'      => 'Project',
            'add_new'            => 'Add Project',
            'add_new_item'       => 'Adding Project',
            'edit_item'          => 'Edit Project',
            'new_item'           => 'New project',
            'view_item'          => 'View Project',
            'search_items'       => 'Search Project',
            'not_found'          => 'Not found Projects',
            'not_found_in_trash' => 'Not found Projects in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Projects',
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'show_in_rest'        => true,
        'rest_base'           => null,
        'menu_position'       => 40,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'excerpt', 'thumbnail' ),
        //'taxonomies'          => array( 'projects' ),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ) );



    register_post_type('testimonial', array(
        'label'  => 'testimonials',
        'labels' => array(
            'name'               => 'Testimonial',
            'singular_name'      => 'Testimonial',
            'add_new'            => 'Add Testimonial',
            'add_new_item'       => 'Adding Testimonial',
            'edit_item'          => 'Edit Testimonial',
            'new_item'           => 'New testimonial',
            'view_item'          => 'View Testimonial',
            'search_items'       => 'Search Testimonial',
            'not_found'          => 'Not found Testimonials',
            'not_found_in_trash' => 'Not found Testimonials in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Testimonials',
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'show_in_rest'        => true,
        'rest_base'           => null,
        'menu_position'       => 40,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'excerpt', 'thumbnail' ),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ) );



    register_post_type('team', array(
        'label'  => 'teams',
        'labels' => array(
            'name'               => 'Team',
            'singular_name'      => 'Team',
            'add_new'            => 'Add Team',
            'add_new_item'       => 'Adding Team',
            'edit_item'          => 'Edit Team',
            'new_item'           => 'New team',
            'view_item'          => 'View Team',
            'search_items'       => 'Search Team',
            'not_found'          => 'Not found Teams',
            'not_found_in_trash' => 'Not found Teams in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Teams',
        ),
        'description'         => '',
        'public'              => false,
        'publicly_queryable'  => true,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'show_in_rest'        => true,
        'rest_base'           => null,
        'menu_position'       => 40,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'excerpt', 'thumbnail' ),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );

    //add_rewrite_rule( '^events/?$', 'index.php?post_type=event', 'top' );

    flush_rewrite_rules();

}


?>