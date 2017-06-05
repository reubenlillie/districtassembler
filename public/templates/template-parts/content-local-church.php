<?php
/**
 * The template used for displaying 'local_church' content on archive pages.
 *
 * @package DistrictAssembler
 * @subpackage DistrictAssembler\includes\templates\template-parts
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Runs before article opens.
 *
 * @since 0.1.0
 */
do_action( 'do_before_da_local_church_content_article_open' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	/**
	 * Runs after article opens.
	 *
	 * @since 0.1.0
	 *
	 * @hooked action_da_local_church_header - 10
	 */
	do_action( 'do_after_da_local_church_content_article_open' );

	/**
	 * Runs after article opens.
	 *
	 * @since 0.1.0
	 *
	 * @hooked action_da_local_church_content_wrapper_open - 10
	 */
	do_action( 'do_before_da_local_church_content' );
	?>

	<div class="entry-content">

		<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'districtassembler' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'districtassembler' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>

	</div><!-- .entry-content -->

	<?php
	/**
	 * Runs before article closes.
	 *
	 * @since 0.1.0
	 *
	 * @hooked action_da_local_church_content_wrapper_close - 10
	 * @hooked action_da_local_church_footer_content - 20
	 */
	do_action( 'do_before_da_local_church_content_article_close' );
	?>

</article><!-- #post-## --><?php

/**
 * Runs after article closes.
 *
 * @since 0.1.0
 */
do_action( 'do_after_da_local_church_content_article_close' );
