<?php 

function albanianevents_script_enqueue() {;
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/albanianevents.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'albanianevents_script_enqueue');

function albanianevents_theme_setup() {
    // var_dump(get_template_directory_uri());
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'albanianevents_theme_setup');

function albanianevents_custom_post_type () {

    $labels = array (
        'name' => 'Events',
        'singular_name' => 'Event',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Event',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('events',$args);
}

add_action('init', 'albanianevents_custom_post_type');

//

// function create_event_post_type() {
//     register_post_type('event', array(
//       'labels' => array(
//         'name' => 'Events',
//         'singular_name' => 'Event',
//       ),
//       'public' => true,
//       'has_archive' => true,
//     ));
//   }
//   add_action('init', 'create_event_post_type');