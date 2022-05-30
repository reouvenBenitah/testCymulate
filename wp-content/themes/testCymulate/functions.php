<?php

function mytheme_supports(){
    add_theme_support('title-tag');
}

// function mytheme_register_assets(){
//     wp_register_style('mystyle', get_template_directory_uri() . '/assets/css/themeStyle.css');
// }


add_action('after_setup_theme', 'mytheme_supports');
// add_action('wp_enqueue_scripts', 'mytheme_register_assets');


function mytheme_init(){
    register_taxonomy('Prioritize','post',[
    
        'labels' => [
            'name' => 'Prioritize',
            'singular_name'     => 'Prioritize',
            'plural_name'       => 'Prioritizes',
            'search_items'      => 'Search for Prioritizes',
            'all_items'         => 'All Prioritizes',
            'edit_item'         => 'Edit the Prioritize',
            'update_item'       => 'Update the Prioritize',
            'add_new_item'      => 'Add a new Prioritize',
            'new_item_name'     => 'Add a new Prioritize',
            'menu_name'         => 'Prioritize',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        // 'show_in_rest'=>true,
        // 'show_admin_column'=>true
    ]);
    register_post_type('Threats', [
        'label' => 'Threats',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-list-view',
        'supports' => ['title', 'editor', 'thumbnail'],
        'publicly_queryable'=>true,
        // 'show_in_rest' => true,
        'has_archive' => true,
    ]);
}
add_action('init', 'mytheme_init');
