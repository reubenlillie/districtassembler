<?php
/**
 * Includes templates for custom 'local_church' archive and single pages
 *
 * This file contains a function (`action_da_load_template()`)
 * for including DistrictAssembler's custom templates at the appropriate time,
 * and a function (`districtassembler_get_template_part()`)
 * for including template parts within DistrictAssembler's template files.
 *
 * @link https://github.com/reubenlillie/districtassembler/
 *
 * @package DistrictAssembler
 * @subpackage DistrictAssembler\public
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Loads DistrictAssembler's custom templates.
 *
 * Checks the query for anything related to DistrictAssembler,
 * then designates which template files to load for which pages,
 * otherwise falls back to the default template hierarchy.
 *
 * @since 0.1.0
 *
 * @see get_query_var()
 * @link https://developer.wordpress.org/reference/functions/get_query_var/
 *
 * @see is_tax()
 * @link https://developer.wordpress.org/reference/functions/is_tax/
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/#yoda-conditions/
 *
 * @param string $template_file The path to the template file to be loaded.
 * @return string Fallback to the filtered default template, if applicable.
 */
function action_da_load_template( $template_file ) {

	// Checks the current query for anything related to DistrictAssembler.
    if (
    	( get_query_var( 'post_type' ) != 'local_church'
 	&& true != is_tax( array( 'section', 'index_locator' ) ) )
	|| ( get_query_var( 'post_type' ) != 'user' 
	&& true != is_tax( array( 'position', 'role_code' ) ) )
    ) {

        return $template_file;

    } // if

    // Loads a custom archive template on archive, taxonomy, and search pages.
    if (
    	is_archive() ||
    	is_tax( array( 'section', 'index_locator' ) ) ||
    	is_search()
    ) {

        if ( file_exists( get_stylesheet_directory() .
            '/archive-local-church.php' ) ) {

                return get_stylesheet_directory() .
                    '/archive-local-church.php';

        } else {

            return plugin_dir_path( __FILE__ ) .
                'templates/archive-local-church.php';

		} // else

    } // if archive || 'section' || 'index_locator' || search

    if (
    	is_tax('position' )
    ) {

        if ( file_exists( get_stylesheet_directory() .
            '/taxonomy-position.php' ) ) {

                return get_stylesheet_directory() .
                    '/taxonomy-position.php';

        } else {

            return plugin_dir_path( __FILE__ ) .
                'templates/taxonomy-position.php';

		} // else

    } // if 'position'

    if (
    	is_tax('role_code' )
    ) {

        if ( file_exists( get_stylesheet_directory() .
            '/taxonomy-role-code.php' ) ) {

                return get_stylesheet_directory() .
                    '/taxonomy-role-code.php';

        } else {

            return plugin_dir_path( __FILE__ ) .
                'templates/taxonomy-role-code.php';

		} // else

    } // if 'position'

    // Loads a custom single 'local_church' template.
    elseif ( is_single() ) {

        if ( file_exists( get_stylesheet_directory() .
            '/single-local-church.php' ) ) {

                return get_stylesheet_directory() .
                    '/single-local-church.php';

        } else {

            return plugin_dir_path( __FILE__ ) .
                'templates/single-local-church.php';

		} // else

    } // elseif single

    // Returns a fallback to default template hierarchy.
    else {

        return apply_filters( 'apply_to_action_da_load_template', $template_file );

    } // else

} // action_da_load_templates()

/**
 * Loads a template part into the template file.
 *
 * This custom template tag allows a theme to override DistrictAssembler's template parts.
 *
 * WordPress Codex recommends this 'if' statement
 * for loading a template in a plugin,
 * while allowing themes to override that template.
 *
 * If you do override DistrictAssembler's default template in a theme,
 * use `get_template_part()` instead
 * within your theme's template file.
 *
 * @since 0.1.0
 *
 * @see load_template()
 * @link https://developer.wordpress.org/reference/functions/load_template/
 *
 * @see locate_template()
 * @link https://developer.wordpress.org/reference/functions/locate_template/
 *
 * @param string $template_file The path to the template file to be loaded.
 */
function districtassembler_get_template_part( $template_file ) {

	if ( $overridden_template = locate_template(
		'districtassembler/template-parts/' . $template_file ) ) {

		/*
		 * If either the child theme or the parent theme
		 * has a file to override DistrictAssembler's template,
		 * then that theme's file path is loaded.
		 */
		load_template( $overridden_template );

	} else {

		/*
		 * Otherwise, DistrictAssembler's template file
		 * is loaded by default.
		 */
		include( plugin_dir_path( __FILE__ ) .
			'templates/template-parts/' . $template_file );

	}

} // districtassembler_get_template_part()

