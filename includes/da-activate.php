<?php
/**
 * Runs when DistrictAssembler is activated
 *
 * This file contains a function
 * that calls the functions for DistrictAssembler's custom post types and taxonomies,
 * then flushes rewrite rules for permalinks.
 *
 * @link https://github.com/reubenlillie/districtassembler/
 *
 * @package DistrictAssembler
 * @subpackage DistrictAssembler\includes
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Runs when DistrictAssembler is activated.
 *
 * Call registration functions for the following post types and taxonomies:
 *
 * - 'priority' custom taxonomy (page)
 *
 * then flushes the rewrite rules for permalinks to avoid 404 errors.
 *
 * @author Reuben L. Lillie <email@reubenlillie.com>
 * @since 0.1.0
 * @see flush_rewrite_rules()
 * @link https://developer.wordpress.org/reference/functions/flush_rewrite_rules/
 * @link https://developer.wordpress.org/plugins/the-basics/activation-deactivation-hooks/#activation
 * @link http://solislab.com/blog/plugin-activation-checklist/
 */
function districtassembler_activate() {

	/**
	 * Calls the function to register the custom 'priority' taxonomy.
	 *
	 * This action is documented in admin/da-taxonomies.php
	 */
	action_da_register_priority_tax();

	/**
	 * Flushes rewrite rules.
	 *
	 * Removes rewrite rules for permalinks then recreates them
	 * after the custom post types and taxonomies have been registered.
	 *
	 * NB: Because this is an expensive operation, only run this function
	 * after custom post types and taxonomies have been properly registered.
	 *
	 * @link https://developer.wordpress.org/reference/functions/flush_rewrite_rules/
	 * @link http://solislab.com/blog/plugin-activation-checklist/#flush-rewrite-rules
	 */
	flush_rewrite_rules();

} // districtassembler_activate()