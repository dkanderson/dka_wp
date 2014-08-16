<?php

// Custom metaboxes

add_filter( 'cmb_meta_boxes', 'dka_metaboxes' );

/**
* Define the metabox and field configurations.
*
* @param array $meta_boxes
* @return array
*/

function dka_metaboxes( array $meta_boxes ) {

// Start with an underscore to hide fields from custom fields list
$prefix = '_dka_';

// Skills

$meta_boxes['skills_metabox'] = array(
  'id' => 'skills_metabox',
	'title' => __('Skills', 'cmb'),
	'pages' => array('skill',), //Post type
	'context' => 'normal',
	'priority' => 'high',
	'show_names' => true,
	'fields' => array(
		array(
			'name' => __('SVG', 'cmb'),
			'desc' => __('Enter compressed and fully optimized svg', 'cmb'),
			'id'   => $prefix . 'svg',
			'type' => 'file',
		),
	),
);



// Projects 

$meta_boxes['project_metabox'] = array(
'id' => 'project_metabox',
'title' => 'Projects Meta Information',
'pages' => array( 'project', ), // Post type
'context' => 'normal',
'priority' => 'high',
'show_names' => true, // Show field names on the left
'fields' => array(
	array(
	'name' => __('URL', 'cmb'),
	'desc' => __('Project URL', 'cmb'),
	'id' => $prefix . 'profile_title',
	'type' => 'text_medium',
	),
	array(
		'name'     => __('Tech', 'cmb'),
		'desc'     => __('What tech was used', 'cmb'),
		'id'       => $prefix . 'tech_select',
		'type'     => 'taxonomy_multicheck',
		'taxonomy' => 'tech', // Taxonomy Slug
	),
	array(
	'name' => __('Screenshot_1', 'cmb'),
	'desc' => __('Upload an image or enter the URL.', 'cmb'),
	'id' => $prefix . 'ss1',
	'type' => 'file',
	),
	array(
	'name' => __('Screenshot_2', 'cmb'),
	'desc' => __('Upload an image or enter the URL.', 'cmb'),
	'id' => $prefix . 'ss2',
	'type' => 'file',
	),
	array(
	'name' => __('Screenshot_3', 'cmb'),
	'desc' => __('Upload an image or enter the URL.', 'cmb'),
	'id' => $prefix . 'ss3',
	'type' => 'file',
	),
),
);



// Add other metaboxes as needed

return $meta_boxes;
}

add_action( 'init', 'dka_initialize_cmb_meta_boxes', 9999 );
/**
* Initialize the metabox class.
*/
function dka_initialize_cmb_meta_boxes() {

if ( ! class_exists( 'cmb_Meta_Box' ) )
require_once ('metaboxes/init.php');

}