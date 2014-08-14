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

$meta_boxes[] = array(
  'id' => 'skills_metabox',
	'title' => 'Skills',
	'pages' => array('skill',), //Post type
	'context' => 'normal',
	'priority' => 'high',
	'show_names' => true,
	'fields' => array(
		array(
			'name' => 'SVG',
			'desc' => 'Enter compressed and fully optimized svg',
			'id'   => $prefix . 'svg',
			'type' => 'text',
		),
	),
);



// Projects 

$meta_boxes[] = array(
'id' => 'project_metabox',
'title' => 'Projects Meta Information',
'pages' => array( 'project', ), // Post type
'context' => 'normal',
'priority' => 'high',
'show_names' => true, // Show field names on the left
'fields' => array(
	array(
	'name' => 'URL',
	'desc' => 'Project URL',
	'id' => $prefix . 'profile_title',
	'type' => 'text_medium',
	),
	array(
		'name'     => 'Tech',
		'desc'     => 'What tech was used',
		'id'       => $prefix . 'tech_select',
		'type'     => 'taxonomy_multicheck',
		'taxonomy' => 'tech', // Taxonomy Slug
	),
	array(
	'name' => 'Screenshot_1',
	'desc' => 'Upload an image or enter the URL.',
	'id' => $prefix . 'ss1',
	'type' => 'file',
	),
	array(
	'name' => 'Screenshot_2',
	'desc' => 'Upload an image or enter the URL.',
	'id' => $prefix . 'ss2',
	'type' => 'file',
	),
	array(
	'name' => 'Screenshot_3',
	'desc' => 'Upload an image or enter the URL.',
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