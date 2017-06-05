<?php
/**
 * Controls DistrictAssembler's core dependencies
 *
 * This file includes the files that, in turn, control
 * DistrictAssembler's primary components, namely:
 *
 * - admin (back-end) dependencies
 * - internationalization (i18n)/localization (l10n) dependencies
 * - public (front-end) dependencies
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
* Controls DistrictAssembler's core admin (back-end) dependencies.
*/
require_once( plugin_dir_path( __FILE__ ) . '../admin/da-admin.php' );

/**
* Controls DistrictAssembler's core internationalization dependencies.
*/
require_once( plugin_dir_path( __FILE__ ) . '../languages/da-i18n.php' );

/**
* Controls DistrictAssembler's core public (front-end) dependencies.
*/
require_once( plugin_dir_path( __FILE__ ) . '../public/da-public.php' );
