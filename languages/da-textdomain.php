<?php
/**
 * Defines DistrictAssembler's textdomain
 *
 * This file contains a function to load DistrictAssembler's textdomain
 * so it is ready for localization.
 *
 * @link https://github.com/reubenlillie/districtassembler/
 *
 * @package DistrictAssembler
 * @subpackage DistrictAssembler\languages
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Loads DistrictAssembler's textdomain.
 *
 * Loads the translated strings
 * handled by the files in DistrictAssembler's `/languages/` directory.
 *
 * @since 0.1.0
 *
 * @see load_plugin_textdomain()
 * @link https://developer.wordpress.org/reference/functions/load_plugin_textdomain/
 * @link https://developer.wordpress.org/plugins/internationalization/how-to-internationalize-your-plugin/
 */
function action_da_load_plugin_textdomain() {

	load_plugin_textdomain(
		'districtassembler',
		FALSE,
		basename( dirname( __FILE__ ) ) . '/languages/'
	);

} // action_da_load_plugin_textdomain()


