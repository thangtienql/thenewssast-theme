<?php


function custom_post_type_thenewssast(){

    // Product
    register_post_type( 'news', /* (https://codex.wordpress.org/Function_Reference/register_post_type) */
           // let's now add all the options for this post type
          array('labels' => array(
              'name' => __('News', 'thenewssast'), /* This is the Title of the Group */
              'singular_name' => __('News', 'thenewssast'), /* This is the individual type */
              'all_items' => __('All', 'thenewssast'), /* the all items menu item */
              'add_new' => __('Add New', 'thenewssast'), /* The add new menu item */
              'add_new_item' => __('Add New', 'thenewssast'), /* Add New Display Title */
              'edit' => __( 'Edit', 'thenewssast' ), /* Edit Dialog */
              'edit_item' => __('Edit', 'thenewssast'), /* Edit Display Title */
              'new_item' => __('New', 'thenewssast'), /* New Display Title */
              'view_item' => __('View', 'thenewssast'), /* View Display Title */
              'search_items' => __('Search', 'thenewssast'), /* Search Custom Type Title */
              'not_found' =>  __('Nothing found in the Database.', 'thenewssast'), /* This displays if there are no entries yet */
              'not_found_in_trash' => __('Nothing found in Trash', 'thenewssast'), /* This displays if there is nothing in the trash */
              'parent_item_colon' => ''
              ), /* end of arrays */
              'public' => true,
              'publicly_queryable' => true,
              'exclude_from_search' => false,
              'show_ui' => true,
              'query_var' => true,
              'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
              'menu_icon' => 'dashicons-format-aside', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
              // 'rewrite'	=> array( 'slug' => 'b', 'with_front' => false ), /* you can specify its url slug */
              'has_archive' => true, /* you can rename the slug here */
              'capability_type' => 'post',
              'hierarchical' => false,
              /* the next one is important, it tells what's enabled in the post editor */
              'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions','comments')
           ) /* end of options */
      ); /* end of register post type */
    register_taxonomy( 'new_cat',
        array('news'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
        array(
          'hierarchical' => true,
          'labels' => array(
            'name' => __( 'Category', 'thenewssast' ), /* name of the custom taxonomy */
            'singular_name' => __( 'Category', 'thenewssast' ), /* single taxonomy name */
            'search_items' =>  __( 'Search Category', 'thenewssast' ), /* search title for taxomony */
            'all_items' => __( 'All Category', 'thenewssast' ), /* all title for taxonomies */
            'parent_item' => __( 'Parent Category', 'thenewssast' ), /* parent title for taxonomy */
            'parent_item_colon' => __( 'Parent Category:', 'thenewssast' ), /* parent taxonomy title */
            'edit_item' => __( 'Edit Category', 'thenewssast' ), /* edit custom taxonomy title */
            'update_item' => __( 'Update Category', 'thenewssast' ), /* update title for taxonomy */
            'add_new_item' => __( 'Add New Category', 'thenewssast' ), /* add new title for taxonomy */
            'new_item_name' => __( 'New Category Name', 'thenewssast' ) /* name title for taxonomy */
          ),
          'show_admin_column' => true,
          'show_ui' => true,
          'query_var' => true,
          'rewrite' => array( 'slug' => 'new_cat','with_front' => false, 'hierarchical' => true ),
        )
    );
    register_taxonomy( 'new_sub',
        array('news'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
        array(
          'hierarchical' => true,
          'labels' => array(
            'name' => __( 'Subs', 'thenewssast' ), /* name of the custom taxonomy */
            'singular_name' => __( 'Sub', 'thenewssast' ), /* single taxonomy name */
            'search_items' =>  __( 'Search Sub', 'thenewssast' ), /* search title for taxomony */
            'all_items' => __( 'All Sub', 'thenewssast' ), /* all title for taxonomies */
            'parent_item' => __( 'Parent Sub', 'thenewssast' ), /* parent title for taxonomy */
            'parent_item_colon' => __( 'Parent Sub:', 'thenewssast' ), /* parent taxonomy title */
            'edit_item' => __( 'Edit Sub', 'thenewssast' ), /* edit custom taxonomy title */
            'update_item' => __( 'Update Sub', 'thenewssast' ), /* update title for taxonomy */
            'add_new_item' => __( 'Add New Sub', 'thenewssast' ), /* add new title for taxonomy */
            'new_item_name' => __( 'New Sub Name', 'thenewssast' ) /* name title for taxonomy */
          ),
          'show_admin_column' => true,
          'show_ui' => true,
          'query_var' => true,
          'rewrite' => array( 'slug' => 'sub_cat','with_front' => false, 'hierarchical' => true ),
        )
    );

    register_taxonomy( 'post_sub',
        array('post'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
        array(
          'hierarchical' => true,
          'labels' => array(
            'name' => __( 'Subs', 'thenewssast' ), /* name of the custom taxonomy */
            'singular_name' => __( 'Sub', 'thenewssast' ), /* single taxonomy name */
            'search_items' =>  __( 'Search Sub', 'thenewssast' ), /* search title for taxomony */
            'all_items' => __( 'All Sub', 'thenewssast' ), /* all title for taxonomies */
            'parent_item' => __( 'Parent Sub', 'thenewssast' ), /* parent title for taxonomy */
            'parent_item_colon' => __( 'Parent Sub:', 'thenewssast' ), /* parent taxonomy title */
            'edit_item' => __( 'Edit Sub', 'thenewssast' ), /* edit custom taxonomy title */
            'update_item' => __( 'Update Sub', 'thenewssast' ), /* update title for taxonomy */
            'add_new_item' => __( 'Add New Sub', 'thenewssast' ), /* add new title for taxonomy */
            'new_item_name' => __( 'New Sub Name', 'thenewssast' ) /* name title for taxonomy */
          ),
          'show_admin_column' => true,
          'show_ui' => true,
          'query_var' => true,
          'rewrite' => array( 'slug' => 'sub_cat_post','with_front' => false, 'hierarchical' => true ),
        )
    );
  
  }
  add_action( 'init', 'custom_post_type_thenewssast');

?>