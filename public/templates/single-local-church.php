<?php
/**
 * The template for displaying single 'local_church' pages
 *
 * @package DistrictAssembler
 * @subpackage DistrictAssembler/includes/templates
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

	/**
	 * Runs after the header.
	 *
	 * @since 0.1.0
	 *
	 * @hooked action_da_content_wrapper_open - 10
	 */
	do_action( 'do_after_da_get_header' );

		if ( have_posts() ) :

		/**
		 * Runs before starting the main content Loop.
		 *
		 * @since 0.1.0
		 *
		 * @hooked action_da_local_church_navigation - 10
		 */
		do_action( 'do_before_da_single_local_church_loop_start' );

		// Starts the Loop.
		while ( have_posts() ) : the_post();

			/**
			 * Runs after starting the main content Loop.
			 *
			 * @since 0.1.0
			 */
			do_action( 'do_after_da_single_local_church_loop_start' );

			districtassembler_get_template_part( 'content-local-church.php' );

			/**
			 * Runs before ending the main content Loop.
			 *
			 * @since 0.1.0
			 */
			do_action( 'do_before_da_single_local_church_loop_end' );

		// Ends the Loop.
		endwhile;

		/**
		 * Runs after ending the main content Loop.
		 *
		 * @since 0.1.0
		 *
		 * @hooked action_da_local_church_naviatgion - 10
		 */
		do_action( 'do_after_da_single_local_church_loop_end' );

		// If no content, include the "No posts found" template.
		else :
		get_template_part( 'template-parts/content', 'none' );
		endif;

	/**
	 * Runs before the footer.
	 *
	 * @since 0.1.0
	 *
	 * @hooked action_da_content_wrapper_close - 10
	 * @hooked action_da_sidebar - 20
	 */
	do_action( 'do_before_da_get_footer' );

get_footer();
