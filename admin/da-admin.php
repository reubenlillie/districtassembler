<?php
/**
 * Controls DistrictAssembler's core admin (back-end) dependencies
 *
 * This file includes all the files related to DistrictAssembler's back end
 * and hooks the functions declared in those files into DistrictAssembler core.
 *
 * @link https://github.com/reubenlillie.com/districtassembler/
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
 * Completes the registration for DistrictAssembler's custom taxonomies.
 */
require_once( plugin_dir_path( __FILE__ ) . 'da-taxonomies.php' );

	/**
	 * Adds a custom 'priority' taxonomy.
	 *
	 * Adds the priority taxonomy on `init`,
	 * that is, after WordPress finishes loading
	 * but before any headers are sent.
	 *
	 * Custom hooks available:
	 *
	 * - apply_to_action_da_register_priority_tax_args
	 *
	 * @since 0.1.0
	 * @see init
	 * @link https://developer.wordpress.org/reference/hooks/init/
	 */
	add_action( 'init', 'action_da_register_priority_tax', 0 );

/**
 * Completes the registration for custom BuddyPress member types.
 */
require_once( plugin_dir_path( __FILE__ ) . 'da-bp-member-types.php' );

	/**
	 * Completes registration for custom BuddyPress Member Types.
	 *
	 * @since 0.1.0
	 */
	add_action( 'bp_register_member_types', 'action_da_register_laity_bp_member_type' );
	add_action( 'bp_register_member_types', 'action_da_register_local_bp_member_type' );
	add_action( 'bp_register_member_types', 'action_da_register_licensed_bp_member_type' );
	add_action( 'bp_register_member_types', 'action_da_register_ordained_bp_member_type' );

/**
 * Completes the registration for custom BuddyPress member types.
 */
require_once( plugin_dir_path( __FILE__ ) . 'da-bp-group-types.php' );

	/**
	 * Completes registration for custom Buddy Press Group Types.
	 *
	 * @since 0.1.0
	 */
	add_action( 'bp_groups_register_group_types', 'action_da_register_local_church_bp_group_type' );
	add_action( 'bp_groups_register_group_types', 'action_da_register_district_assembly_bp_group_type' );
	add_action( 'bp_groups_register_group_types', 'action_da_register_district_board_bp_group_type' );
	add_action( 'bp_groups_register_group_types', 'action_da_register_district_assembly_committee_bp_group_type' );
	add_action( 'bp_groups_register_group_types', 'action_da_register_district_auxiliary_bp_group_type' );
	add_action( 'bp_groups_register_group_types', 'action_da_register_mission_area_bp_group_type' );


	function action_da_bbp_enable_visual_editor( $args = array() ) {
	$args['tinymce'] = true;
	$args['teeny'] = false;
	return $args;
	}
	add_filter( 'bbp_after_get_the_content_parse_args', 'action_da_bbp_enable_visual_editor' );

	function action_da_bbp_tinymce_paste_plain_text( $plugins = array() ) {
			$plugins[] = 'paste';
			return $plugins;
	}
	add_filter( 'bbp_get_tiny_mce_plugins', 'action_da_bbp_tinymce_paste_plain_text' );