<?php
register_post_type('sponsor', array(

    'labels'      => array(
        'name'          => __('Sponsor', 'freevent'),
        'singular_name' => __('Sponsor', 'freevent'),
        'add_new_item' => __('Add Sponsor', 'freevent')
    ),
    'public'      => false,
    'show_ui' => true,
    'supports' => array(
        'title', 'editor', 'thumbnail', 'page-attributes'
    ),
    'menu_icon'          => 'dashicons-welcome-view-site',
));

register_post_type('speaker', array(

    'labels'      => array(
        'name'          => __('Speaker', 'freevent'),
        'singular_name' => __('speaker', 'freevent'),
        'add_new_item' => __('Add speaker', 'freevent')
    ),
    'public'      => true,
    'supports' => array(
        'title', 'editor', 'thumbnail', 'page-attributes', 'comments'
    ),
    'menu_icon' => 'dashicons-saved',
));

register_post_type('person', array(

    'labels'      => array(
        'name'          => __('Person', 'freevent'),
        'singular_name' => __('person', 'freevent'),
        'add_new_item' => __('Add person', 'freevent')
    ),
    'public'      => true,
    'supports' => array(
        'title', 'editor', 'thumbnail', 'page-attributes'
    ),
    'menu_icon' => 'dashicons-universal-access',
));

register_post_type('schedule', array(

    'labels'      => array(
        'name'          => __('schedule', 'freevent'),
        'singular_name' => __('schedule', 'freevent'),
        'add_new_item' => __('Add schedule', 'freevent')
    ),
    'public'      => true,
    'supports' => array(
        'title', 'editor', 'thumbnail', 'page-attributes', 'comments'
    ),
    'menu_icon' => 'dashicons-schedule',
));

// Add new "sponsors" taxonomy to Posts
register_taxonomy('sponsor_cat', 'sponsor', array(
    'hierarchical' => true,
    'labels' => 'Sponsor Category',
    'query_var' => true,
    'show_admin_column' => true,
    // Control the slugs used for this taxonomy
    'rewrite' => array(
        'slug' => 'sponsor_category', // This controls the base slug that will display before each term
        'with_front' => false, // Don't display the category base before "/sponsors/"
        'hierarchical' => true // This will allow URL's like "/sponsors/boston/cambridge/"
    ),
));
