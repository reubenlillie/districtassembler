<?php
/**
 * Defines functions that are hooked into the admin area (back end) for 'users'.
 *
 * All actions and filter hooks are called via `includes/da-public.php`.
 * This way actual callback "events" (i.e, `add_action` and `add_filter`)
 * and function "definitons" (in this file) can be managed separately.
 *
 * When using one of the hooks (i.e., `do_action` or `apply_filters`),
 * be sure to note the addition and priority from `includes/da-public.php`
 * in that hooks' comment block with the `@hooked` tag.
 * This makes it easier to keep track of when hooks are used,
 * and it helps developers decide how best to use additional hooks.
 *
 * @link https://github.com/reubenlillie.com/districtassembler/
 *
 * @package DistrictAssembler
 * @subpackage DistrictAssembler\admin
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function action_da_admin_change_zone_object() {
    global $wp_taxonomies;
    $labels = &$wp_taxonomies['zone']->labels;
    $labels->name = 'Mission Areas';
    $labels->singular_name = 'Mission Area';
    $labels->add_new = 'Add Mission Area';
    $labels->add_new_item = 'Add Mission Area';
    $labels->edit_item = 'Edit Mission Area';
    $labels->new_item = 'New Mission Area';
    $labels->view_item = 'View Mission Area';
    $labels->search_items = 'Search Mission Areas';
    $labels->not_found = 'No Mission Areas found';
    $labels->not_found_in_trash = 'No Mission Areas found in Trash';
    $labels->all_items = 'All Mission Areas';
    $labels->menu_name = 'Mission Areas';
    $labels->name_admin_bar = 'Mission Area';

}
