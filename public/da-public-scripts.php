<?php
/**
 * Registers DistrictAssembler's core public scripts and styles
 *
 * This file defines the source files
 * for DistrictAssembler's front end JavaScript and CSS.
 *
 * @link https://github.com/reubenlillie.com/districtassembler/
 *
 * @package DistrictAssembler
 * @subpackage DistrictAssembler\public
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function action_da_public_scripts() {

	// Checks the current query for anything related to DistrictAssembler.
    if (
    	'paragraph' == get_post_type()
        || is_tax( array( 'section', 'index_locator' ) )
    ) {

		wp_enqueue_style(
			'da-public-screen',
			plugins_url( 'css/da-public.css', __FILE__ ),
			null,
			'0.1.0',
			'screen'
		);

	} // if

} // action_da_public_scripts()
