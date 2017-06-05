<?php
function action_da_register_local_church_bp_group_type() {

		$local_church_description = __( 'It is in the local church that the saving, perfecting, teaching, and commissioning takes places. The local church, the Body of Christ, is the representation of our faith and mission. ("Preamble" to "Government" in MANUAL 2013–2017)', 'districtassembler' );

	bp_groups_register_group_type( 'local_church', array(
		'labels' => array(
		'name' => __( 'Local Churches', 'districtassembler' ),
		'singular_name' => __( 'Local Church', 'districtassembler' )
	),

		// New parameters as of BP 2.7.
		'has_directory' => 'local-churches',
		'show_in_create_screen' => true,
		'show_in_list' => true,
		'description' => $local_church_description,
		'create_screen_checked' => false
	) );

} // action_da_register_local_church_bp_group_type()

function action_da_register_district_assembly_bp_group_type() {

		$district_assembly_description = __( 'The annual meeting of our interdependent local churches organized to facilitate the mission of each local church through mutual support, the sharing of resources, and collaboration. (MANUAL 2013–2017, 200)', 'districtassembler' );
	bp_groups_register_group_type( 'district_assembly', array(
		'labels' => array(
		'name' => __( 'District Assemblies', 'districtassembler' ),
		'singular_name' => __( 'District Assembly', 'districtassembler' )
	),

		// New parameters as of BP 2.7.
		'has_directory' => 'district-assemblies',
		'show_in_create_screen' => true,
		'show_in_list' => true,
		'description' => $district_assembly_description,
		'create_screen_checked' => false
	) );

} // action_da_register_district_assembly_bp_group_type()

function action_da_register_district_board_bp_group_type() {

		$district_board_description = __( 'The various district boards and standing committees', 'districtassembler' );

	bp_groups_register_group_type( 'district_board', array(
		'labels' => array(
		'name' => __( 'District Boards and Standing Committees', 'districtassembler' ),
		'singular_name' => __( 'District Board or Standing Committee', 'districtassembler' )
	),

		// New parameters as of BP 2.7.
		'has_directory' => 'district-boards',
		'show_in_create_screen' => true,
		'show_in_list' => true,
		'description' => $district_board_description,
		'create_screen_checked' => false
	) );

} // action_da_register_district_board_bp_group_type()

function action_da_register_district_assembly_committee_bp_group_type() {

		$district_assembly_committee_description = __( 'The committees responsible for preparing for the annual meeting of the district assembly', 'districtassembler' );

	bp_groups_register_group_type( 'district_assembly_committee', array(
		'labels' => array(
		'name' => __( 'Assembly Committees', 'districtassembler' ),
		'singular_name' => __( 'Assembly Committee', 'districtassembler' )
	),

		// New parameters as of BP 2.7.
		'has_directory' => 'district-assembly-committees',
		'show_in_create_screen' => true,
		'show_in_list' => true,
		'description' => $district_assembly_committee_description,
		'create_screen_checked' => false
	) );

} // action_da_register_district_assembly_committee_bp_group_type()

function action_da_register_district_auxiliary_bp_group_type() {

		$district_auxiliary_description = __( 'The auxiliary departments of district ministries, namely the NMI, NYI, and SDMI', 'districtassembler' );
	bp_groups_register_group_type( 'district_auxiliary', array(
		'labels' => array(
		'name' => __( 'District Auxiliary Organizations', 'districtassembler' ),
		'singular_name' => __( 'Auxiliary Organization', 'districtassembler' )
	),

		// New parameters as of BP 2.7.
		'has_directory' => 'district-auxiliaries',
		'show_in_create_screen' => true,
		'show_in_list' => true,
		'description' => $district_auxiliary_description,
		'create_screen_checked' => false
	) );

} // action_da_register_district_auxiliary_bp_group_type()

function action_da_register_mission_area_bp_group_type() {

		$district_mission_area_description = __( 'The zones or mission areas organized by the District Sunday School and Discipleship Ministries International Board. (MANUAL 2013–2017, 238.8, cf. 200.6)', 'districtassembler' );
	bp_groups_register_group_type( 'district_mission_area', array(
		'labels' => array(
		'name' => __( 'Mission Areas', 'districtassembler' ),
		'singular_name' => __( 'Mission Area', 'districtassembler' )
	),

		// New parameters as of BP 2.7.
		'has_directory' => 'mission-areas',
		'show_in_create_screen' => true,
		'show_in_list' => true,
		'description' => $district_mission_area_description,
		'create_screen_checked' => false
	) );

} // action_da_register_mission_area_bp_group_type()
