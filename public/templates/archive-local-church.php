<?php
/**
 * The template for displaying the 'local_church' archive pages
 *
 * @link https://github.com/reubenlillie/districtassembler/
 *
 * @package DistrictAssembler
 * @subpackage DistrictAssembler\includes\templates
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

	/**
	 * Runs before main content.
	 *
	 * @since 0.1.0
	 *
	 * @hooked action_da_content_wrapper_open - 10
	 */
	do_action( 'do_after_da_get_header' );

		if ( have_posts() ) :

			/**
			 * Runs before starting the Loop.
			 *
			 * @since 0.1.0
			 *
			 * @hooked action_da_paragraphs_navigation -10
			 * @hooked action_da_archive_header_content - 20
			 */
			do_action( 'do_before_da_archive_local_church_loop_start' );

			// Starts the Loop.
			while ( have_posts() ) : the_post();

				/**
				 * Runs after starting the main content Loop.
				 *
				 * @since 0.1.0
				 */
				do_action( 'do_after_da_archive_local_church_loop_start' );

				districtassembler_get_template_part( 'content-local-church.php' );

				/**
				 * Runs before ending the main content Loop.
				 *
				 * @since 0.1.0
				 *
				 * @hooked action_da_paragraphs_navigation - 10
				 */
				do_action( 'do_before_da_archive_local_church_loop_end' );

			// Ends the Loop.
			endwhile;

			/**
			 * Runs after ending the main content Loop.
			 *
			 * @since 0.1.0
			 */
			do_action( 'do_after_da_archive_local_church_loop_end' );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;

	/**
	 * Runs after main content is close and before the footer is loaded.
	 *
	 * @since 0.1.0
	 *
	 * @hooked action_da_content_wrapper_close - 10
	 */
	do_action( 'do_before_da_get_footer' );

get_footer();
