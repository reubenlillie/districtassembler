<?php
/**
 * Adds BuddyPress Member Types.
 *
 * @since 01.10
 */
function action_da_register_laity_bp_member_type() {

   bp_register_member_type( 'laity', array(
        'labels' => array(
            'name'          => 'Laity',
            'singular_name' => 'Layperson',
        ),
        'has_directory' => 'laity'
    ) );

} // action_da_register_laity_bp_member_type()

/**
 * Adds BuddyPress Member Types.
 *
 * @since 01.10
 */
function action_da_register_local_bp_member_type() {

   bp_register_member_type( 'local', array(
        'labels' => array(
            'name'          => 'Locally Licensed',
            'singular_name' => 'Locally Licensed',
        ),
        'has_directory' => 'local'
    ) );

} // action_da_register_local_bp_member_type()

/**
 * Adds BuddyPress Member Types.
 *
 * @since 01.10
 */
function action_da_register_licensed_bp_member_type() {

   bp_register_member_type( 'licensed', array(
        'labels' => array(
            'name'          => 'District Licensed',
            'singular_name' => 'District Licensed',
        ),
        'has_directory' => 'licensed'
    ) );

} // action_da_register_licensed_bp_member_type()

/**
 * Adds BuddyPress Member Types.
 *
 * @since 01.10
 */
function action_da_register_ordained_bp_member_type() {

   bp_register_member_type( 'ordained', array(
        'labels' => array(
            'name'          => 'Ordained',
            'singular_name' => 'Ordained',
        ),
        'has_directory' => 'ordained'
    ) );

} // action_da_register_ordained_bp_member_type()