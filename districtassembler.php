<?php
/**
 * The main plugin file for DistrictAssembler
 *
 * A plugin to optimize District Government in the Church of the Nazarene.
 *
 * This file gives WordPress details about DistrictAssembler for the admin area.
 * This file also defines DistrictAssembler's activation and deactivation hooks,
 * and requires the file that controls DistrictAssembler's core dependencies.
 *
 * @link https://github.com/reubenlillie/districtassembler/
 *
 * @package DistrictAssembler
 * @subpackage DistrictAssembler\main
 * @author Reuben L. Lillie <email@reubenlillie.com>
 * @copyright 2017 Reuben L. Lillie
 * @license <http://www.gnu.org/licenses/gpl-2.0.txt> GNUv2 or later
 *
 * @wordpress-plugin
 * Plugin Name: DistrictAssembler
 * Plugin URI:  https://github.com/reubenlillie/districtassembler/
 * Description: A plugin to optimize District Government in the Church of the Nazarene.
 * Author:      Reuben L. Lillie
 * Author URI:  https://reubenlillie.com/about/
 * Version:     0.1.0
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 * Text Domain: districtassembler
 *
 * DistrictAssembler is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License,
 * or any later version.
 *
 * DistrictAssembler is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General
 * Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with DistrictAssembler. If not, see https://www.gnu.org/licenses/gpl-2.0.html/.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Runs when DistrictAssembler is actived.
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/da-activate.php' );

	/**
	 * Completes DistrictAssembler activation.
	 *
	 * @since 0.1.0
	 *
	 * @see register_activation_hook()
	 * @link https://developer.wordpress.org/reference/functions/register_activation_hook/
	 */
	register_activation_hook( __FILE__, 'districtassembler_activate' );

/**
 * Runs when DistrictAssembler is deactived.
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/da-deactivate.php' );

	/**
	 * Completes DistrictAssembler deactivation.
	 *
	 * @since 0.1.0
	 *
	 * @see register_deactivation_hook()
	 * @link https://developer.wordpress.org/reference/functions/register_deactivation_hook/
	 */
	register_deactivation_hook( __FILE__, 'districtassembler_deactivate' );

/**
 * Controls DistrictAssembler's core dependencies.
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/da-core.php' );
