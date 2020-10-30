<?php
/**
 * Custom Post Types.
 */


/* Hook to make columns sortable by "Order" */
add_action( 'pre_get_posts', 'manage_wp_posts_be_qe_pre_get_posts', 1 );
function manage_wp_posts_be_qe_pre_get_posts( $query ) {
   if ( $query->is_main_query() && ( $orderby = $query->get( 'orderby' ) ) ) {
      switch( $orderby ) {
         case 'Order':
            $query->set( 'orderby', 'menu_order' );
          break;
      }
   }
}


/**
 * Post Type: projects
 */

function cptui_register_my_cpts_projects() {

    $labels = array(
        "name" => __( 'Projects', 'codigo' ),
        "singular_name" => __( 'Project', 'codigo' ),
		'add_new' => _x('Add New', 'codigo'),
		'add_new_item' => __('Add new project'),
		'edit_item' => __('Edit project'),
		'new_item' => __('New project'),
		'view_item' => __('View project'),
		'search_items' => __('Search projects'),
		'not_found' =>  __('No projects found'),
		'not_found_in_trash' => __('No projects found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Projects'
    );

    $args = array(
        "label" => __( 'Projects', 'codigo' ),
        "labels" => $labels,
        "description" => "Enter Projects Case Studies",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "project", "with_front" => true ),
        "query_var" => true,
        "menu_position" => 5,
        "menu_icon" => "dashicons-analytics",
        "supports" => array( "title", "editor", "thumbnail" ),
    );

    register_post_type( "project", $args );

	//Add new column to projects table
	add_filter( 'manage_edit-project_columns', 'project_add_field_column' );
	function project_add_field_column( $columns ) {

		//Create new key  in position 2
		$new_columns = array_slice($columns, 0, 2, true) +
		array("thumbnail" => __( 'Featured Image')) +
		array_slice($columns, 2, count($columns)-2, true);

		return $new_columns;
	}


	//Select the values to show in this new column
	add_action( 'manage_project_posts_custom_column', 'cptui_manage_project_columns', 10, 2 );
	function cptui_manage_project_columns( $column, $post_id ) {
		global $post;

		switch( $column ) {

			case 'thumbnail' :
				echo get_the_post_thumbnail( $post_id, 'thumbnail' );
				break;

			default :
				break;
		}
    }
    
    /*
    // Taxonomy: Location
    $labelLocation = array(
        'name' => __( 'Locations'),
        'singular_name' => __( 'Location' ),
        'search_items' =>  __( 'Search Locations' ),
        'all_items' => __( 'All Locations' ),
        'parent_item' => __( 'Parent Location' ),
        'parent_item_colon' => __( 'Parent Location:'),
        'edit_item' => __( 'Edit Location'),
        'update_item' => __( 'Update Location'),
        'add_new_item' => __( 'Add New Location' ),
        'new_item_name' => __( 'New Location Name' ),
        'choose_from_most_used' => __( 'Choose from the most used Locations')
    );

    // Custom taxonomy for Locations
    register_taxonomy('location',array('project'), array(
		'hierarchical' => true,
		'labels' => $labelLocation,
		'show_ui' => true,
		'query_var' => true,
		'show_admin_column' => true
    ));
    */

}

add_action( 'init', 'cptui_register_my_cpts_projects' );
