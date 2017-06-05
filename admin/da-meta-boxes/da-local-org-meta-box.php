<?php
/**
 * Adds custom meta box functionality
 * for 'local_church' organization data.
 *
 * @link https://github.com/reubenlillie.com/districtassembler/
 * @link http://2013.manual.nazarene.org/section/local-church-organization-name-incorporation-property-restrictions-mergers-disorganization/
 *
 * @package DistrictAssembler
 * @subpackage DistrictAssembler\admin\da-meta-boxes
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Adds the meta box container.
 */
function action_da_add_local_org_meta_box( $post_type ) {

	add_meta_box(
		'local_org',
		__( 'Organization', 'districtassembler' ),
		'action_da_local_org_meta_box_callback',
		'local_church',
		'advanced',
		'high'
	);

} // action_da_add_local_org_meta_box

/**
 * Render Meta Box content.
 *
 * @param WP_Post $post The post object.
 */
function action_da_local_org_meta_box_callback( $post ) {

	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'da_local_org_meta_box', 'da_local_org_meta_box_nonce' );

	// Use get_post_meta to retrieve an existing value from the database.
	// Global Ministry Center ID.
	$da_gmc_id = get_post_meta( $post->ID, 'da_gmc_id', true );
	$da_gmc_id_title = __( 'The last four (4) digits only', 'districtassembler' );
	$da_gmc_id_placeholder = '####';

	// Church Status.
	$da_local_status = get_post_meta( $post->ID, 'da_local_status', true );
	$da_da_local_status_title = __( 'The last four (4) digits only', 'districtassembler' );

	// Organization Year.
	$da_org_year = get_post_meta( $post->ID, 'da_org_year', true );
	$da_org_year_title = __( 'The year the GMC ID was assigned', 'districtassembler' );
	$da_org_year_min = 1904;
	$da_org_year_max = 2017;
	// Display the form, using the current value.
	?>
<fieldset>
	<legend class="">
	<?php
		_e( 'Global Ministry Center Record', 'districtassembler' );
	?>
	</legend>

	<p>
	<label for="da_gmc_id">
		<?php echo sprintf( '<abbr title="%s">%s</abbr>',
			__( 'Global Ministry Center Identification Number', 'districtassembler' ),
			__( 'GMC ID', 'districtassembler' )
		); ?>
	</label>
	</p>
	<p>
	<input type="text" title="<?php echo esc_attr( $da_gmc_id_title ); ?>" pattern="[0-9]{4}" id="da_gmc_id" name="da_gmc_id" value="<?php echo esc_attr( $da_gmc_id ); ?>" size="4" placeholder="<?php echo esc_attr( $da_gmc_id_placeholder ); ?>" />
	</p>
	<p>
	<label for="da_local_status">
		<?php
			_e( 'Church Status', 'districtassembler' );
		?>
	</label>
	</p>
	<p>
    <select name="da_local_status" id="da_local_status">
        <option value="da_local_status_1" <?php if ( isset ( $prfx_stored_meta['meta-select'] ) ) selected( $prfx_stored_meta['meta-select'][0], 'select-one' ); ?>><?php _e( 'One', 'prfx-textdomain' )?></option>';
        <option value="select-two" <?php if ( isset ( $prfx_stored_meta['meta-select'] ) ) selected( $prfx_stored_meta['meta-select'][0], 'select-two' ); ?>><?php _e( 'Two', 'prfx-textdomain' )?></option>';
    </select>
	</p>
	<p>
	<label for="da_org_year">
		<?php
			/* translators: the year */
			_e( 'Recognized since', 'districtassembler' );
		?>
	</label>
	</p>
	<p>
	<input title="<?php echo esc_attr( $da_org_year_title ); ?>" type="number" id="da_gmc_id" min="<?php echo esc_attr( $da_org_year_min ); ?>" max="<?php echo esc_attr( $da_org_year_max ); ?>" name="da_gmc_id" value="<?php echo esc_attr( $da_org_year ); ?>" size="4" />
	</p>
</fieldset>
	<?php

} // action_da_local_org_meta_box_callback

/**
 * Save the meta when the post is saved.
 *
 * @param int $post_id The ID of the post being saved.
 */
function action_da_save_meta_box_data( $post_id ) {

	/*
	 * We need to verify this came from the our screen and with proper authorization,
	 * because save_post can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['da_local_org_meta_box_nonce'] ) ) {
		return $post_id;
	}

	$nonce = $_POST['da_local_org_meta_box_nonce'];

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $nonce, 'da_local_org_meta_box' ) ) {
		return $post_id;
	}

	/*
	 * If this is an autosave, our form has not been submitted,
	 * so we don't want to do anything.
	 */
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}

	// Check the user's permissions.
	if ( 'local_church' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		}
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}

	/* OK, it's safe for us to save the data now. */

	// Sanitize the user input.
	$da_gmc_id = sanitize_text_field( $_POST['da_gmc_id'] );
	$da_org_year = sanitize_text_field( $_POST['da_org_year'] );

	// Update the meta field.
	update_post_meta( $post_id, 'da_gmc_id', $da_gmc_id );
	update_post_meta( $post_id, 'da_org_year', $da_org_year );
} // action_da_save_meta_box_data
