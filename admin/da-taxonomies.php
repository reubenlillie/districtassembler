<?php
/**
 * Defines DistrictAssembler's custom taxonomies
 *
 * This file contains functions to define the following custom taxonomies:
 *
 * - 'priority'(hierarchical, like categories) for 'page'
 *
 * @link https://github.com/reubenlillie/districtassembler/
 *
 * @package DistrictAssembler
 * @subpackage DistrictAssembler\admin
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Defines a custom 'priority' taxonomy for the default 'page' post type.
 *
 * Registers a custom taxonomy for indexing pages
 * that is hierarchical (like categories).
 *
 * @since 0.1.0
 *
 * @see register_taxonomy()
 * @link https://developer.wordpress.org/reference/functions/register_taxonomy/
 * @link https://generatewp.com/taxonomy/
 */

// Register Custom Taxonomy
function action_da_register_priority_tax() {

	$labels = array(
		'name'                       => _x( 'Priorities', 'Taxonomy General Name', 'districtassembler' ),
		'singular_name'              => _x( 'Priority', 'Taxonomy Singular Name', 'districtassembler' ),
		'menu_name'                  => __( 'Priorities', 'districtassembler' ),
		'all_items'                  => __( 'All Priorities', 'districtassembler' ),
		'parent_item'                => __( '', 'districtassembler' ),
		'parent_item_colon'          => __( '', 'districtassembler' ),
		'new_item_name'              => __( 'New Priority Name', 'districtassembler' ),
		'add_new_item'               => __( 'Add New Priority', 'districtassembler' ),
		'edit_item'                  => __( 'Edit Priority', 'districtassembler' ),
		'update_item'                => __( 'Update Priority', 'districtassembler' ),
		'view_item'                  => __( 'View Priority', 'districtassembler' ),
		'separate_items_with_commas' => __( 'Separate Priorities with commas', 'districtassembler' ),
		'add_or_remove_items'        => __( 'Add or remove Priorities', 'districtassembler' ),
		'choose_from_most_used'      => __( 'Choose from Most Used Priorities', 'districtassembler' ),
		'popular_items'              => null,
		'search_items'               => __( 'Search Priorities', 'districtassembler' ),
		'not_found'                  => __( 'Not Found', 'districtassembler' ),
		'no_terms'                   => __( 'No items', 'districtassembler' ),
		'items_list'                 => __( 'Priority list', 'districtassembler' ),
		'items_list_navigation'      => __( 'Priority list navigation', 'districtassembler' ),
	); // $labels

	$rewrites = array(
		'slug'                       => 'priority',
		'with_front'                 => true,
	); // $rewrites

	$args = array(
			'labels'                     => $labels,
		'description'                => __( 'Everything we do as a district is organized around these guiding principles.', 'districtassembler' ),
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'                  => 'priority',
		'rewrite'                    => $rewrites,
		'update_count_callback'      => '_update_post_term_count',
		'show_in_rest'               => true,
	); // $args

	/**
	 * Allows plugins and themes to override the default taxonomy arguments.
	 *
	 * @since 0.1.0
	 *
	 * @see apply_filters()
	 * @link https://developer.wordpress.org/reference/functions/apply_filters/
	 * @link https://developer.wordpress.org/plugins/hooks/custom-hooks/
	 * @link https://make.wordpress.org/docs/plugin-developer-handbook/hooks/creating-custom-hooks/
	 */
	register_taxonomy(
		'priority',
		array( 'page' ),
		apply_filters( 'apply_to_action_da_register_priority_tax', $args, $labels, $rewrites )
	);

} // action_da_register_priority_tax()
