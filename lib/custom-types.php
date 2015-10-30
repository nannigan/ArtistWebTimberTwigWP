<?php

/*
 *
 * Custom Post Types
 *
 */

// Note that you only need the arguments and register_post_type function here. They are hooked into WordPress in functions.php.


    $labels = array(
        "name" => "art_works",
        "singular_name" => "Art",
        "all_items" => "Art works",
        );

    $args = array(
        "labels" => $labels,
        "description" => "photo of full artwork with caption that includes title media dimensions and photo credit",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => array( "slug" => "art_work", "with_front" => true ),
        "query_var" => true,

        "supports" => array( "title", "editor", "custom-fields", "thumbnail", "author", "page-attributes", "post-formats" ),
        "taxonomies" => array( "category" )
    );
    register_post_type( "art_work", $args );

// End of cptui_register_my_cpts()


    $labels = array(
        "name" => "art_works",
        "singular_name" => "Art",
        "all_items" => "Art works",
        );

    $args = array(
        "labels" => $labels,
        "description" => "photo of full artwork with caption that includes title media dimensions and photo credit",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => array( "slug" => "art_work", "with_front" => true ),
        "query_var" => true,

        "supports" => array( "title", "editor", "custom-fields", "thumbnail", "author", "page-attributes", "post-formats" ),
        "taxonomies" => array( "category" )
    );


    register_post_type( "art_work", $args );

    $labels = array(
        "name" => "photo-home",
        "singular_name" => "photo-home",
        "menu_name" => "home photo",
        "add_new_item" => "Add New Home Photo",
        "new_item" => "new home photo",
        );

    $args = array(
        "labels" => $labels,
        "description" => "home page art photo",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "photo-home", "with_front" => true ),
        "query_var" => true,

        "supports" => array( "title" ),
    );
    register_post_type( "photo-home", $args );

// End of photohome
add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
    $labels = array(
        "name" => "art_works",
        "singular_name" => "Art",
        "all_items" => "Art works",
        );

    $args = array(
        "labels" => $labels,
        "description" => "photo of full artwork with caption that includes title media dimensions and photo credit",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => array( "slug" => "art_work", "with_front" => true ),
        "query_var" => true,

        "supports" => array( "title", "editor", "custom-fields", "thumbnail", "author", "page-attributes", "post-formats" ),
        "taxonomies" => array( "category" )
    );
    register_post_type( "art_work", $args );

    $labels = array(
        "name" => "photo-home",
        "singular_name" => "photo-home",
        "menu_name" => "home photo",
        "add_new_item" => "Add New Home Photo",
        "new_item" => "new home photo",
        );

    $args = array(
        "labels" => $labels,
        "description" => "home page art photo",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "photo-home", "with_front" => true ),
        "query_var" => true,

        "supports" => array( "title" ),
    );
    register_post_type( "photo-home", $args );


    $labels = array(
        "name" => "homecopy",
        "singular_name" => "homecopy",
        "add_new_item" => "add new home copy",
        "edit_item" => "edit new home copy",
        "new_item" => "new home copy",
        "view" => "homecopy",
        );

    $args = array(
        "labels" => $labels,
        "description" => "promo or poetic or your hearts desired copy for home page  with main image",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "homecopy", "with_front" => true ),
        "query_var" => true,

    );
    register_post_type( "homecopy", $args );

// End of homecopy
}



