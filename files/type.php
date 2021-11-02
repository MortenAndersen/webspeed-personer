<?php
// Custom Taxonomy = 'personer-type'

    function custom_taxonomy_personer() {

    $labels = array(
        'name'                       => _x( 'Typer', 'Taxonomy General Name', 'webspeed-person' ),
        'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'webspeed-person' ),
        'menu_name'                  => __( 'Type', 'webspeed-person' ),
        'all_items'                  => __( 'All Items', 'webspeed-person' ),
        'parent_item'                => __( 'Parent type', 'webspeed-person' ),
        'parent_item_colon'          => __( 'Parent type:', 'webspeed-person' ),
        'new_item_name'              => __( 'New Item Name', 'webspeed-person' ),
        'add_new_item'               => __( 'Add New type', 'webspeed-person' ),
        'edit_item'                  => __( 'Edit Item', 'webspeed-person' ),
        'update_item'                => __( 'Update Item', 'webspeed-person' ),
        'view_item'                  => __( 'View Item', 'webspeed-person' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'webspeed-person' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'webspeed-person' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'webspeed-person' ),
        'popular_items'              => __( 'Popular Items', 'webspeed-person' ),
        'search_items'               => __( 'Search Items', 'webspeed-person' ),
        'not_found'                  => __( 'Not Found', 'webspeed-person' ),
        'no_terms'                   => __( 'No items', 'webspeed-person' ),
        'items_list'                 => __( 'Items list', 'webspeed-person' ),
        'items_list_navigation'      => __( 'Items list navigation', 'webspeed-person' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'                          => true,

    );
    register_taxonomy( 'person-type', array( 'person' ), $args );
}

add_action( 'init', 'custom_taxonomy_personer', 2 );