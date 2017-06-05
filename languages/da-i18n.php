<?php
/**
 * Defines DistrictAssembler's internationalization (i18n) dependencies
 *
 * This file includes all the files
 * related to DistrictAssembler's translation (internationalization/localization)
 * and hooks the functions declared in those files
 * into core.
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
 * Defines DistrictAssembler's textdomain.
 */
require_once( plugin_dir_path( __FILE__ ) . 'da-textdomain.php' );

	/**
	 * Loads DistrictAssembler's textdomain.
	 *
	 * Loads the textdomain on `init`,
	 * that is, after WordPress finishes loading
	 * but before any headers are sent.
	 *
	 * @since 0.1.0
	 *
	 * @see init
	 * @link https://developer.wordpress.org/reference/hooks/init/
	 * @link https://developer.wordpress.org/reference/functions/load_plugin_textdomain/#comment-1568
	 */
	add_action( 'init', 'action_da_load_plugin_textdomain' );

