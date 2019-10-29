<?php

add_action( 'cmb2_admin_init', 'cmb2_dorithvinken_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_dorithvinken_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_dorithvinken_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'about_metabox',
		'title'         => __( 'Column Content', 'dorithvinken' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'       => array( 'key' => 'page-template', 'value' => 'templates/about.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Textarea for left column
	$cmb->add_field( array(
		'name'       => __( 'Left Column', 'dorithvinken' ),
		'desc'       => __( 'Content for left column', 'dorithvinken' ),
		'id'         => $prefix . 'left',
		'type'       => 'textarea',
	) );

	// Textarea for right column
	$cmb->add_field( array(
		'name'       => __( 'Right Column', 'dorithvinken' ),
		'desc'       => __( 'Content for right column', 'dorithvinken' ),
		'id'         => $prefix . 'right',
		'type'       => 'textarea',
	) );
	

		/**
	 * metabox for project
	 */
	$cmb_project = new_cmb2_box( array(
		'id'            => 'project_metabox',
		'title'         => __( 'Images', 'dorithvinken' ),
		'object_types'  => array( 'project', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Images for project
	$cmb_project->add_field( array(
		'name'       => __( 'Images', 'dorithvinken' ),
		'desc'       => __( 'Upload images', 'dorithvinken' ),
		'id'         => $prefix . 'images',
		'type'       => 'file_list',
	) );

		/**
	 * metabox for homepage
	 */
	$cmb_homepage = new_cmb2_box( array(
		'id'            => 'homepage_metabox',
		'title'         => __( 'Images', 'dorithvinken' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'       => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Images for homepage
	$cmb_homepage->add_field( array(
		'name'       => __( 'Images', 'dorithvinken' ),
		'desc'       => __( 'Upload images', 'dorithvinken' ),
		'id'         => $prefix . 'images',
		'type'       => 'file_list',
	) );

	/**
	 * metabox for banners
	 */
	$cmb_banner = new_cmb2_box( array(
		'id'            => 'banner',
		'title'         => __( 'Banner', 'dorithvinken' ),
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
}
