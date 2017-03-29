<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */

// ACF Lite mode must be defined before ACF is called
define( 'ACF_LITE', true );

$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php',// Theme customizer,
  'lib/walker.php' ,   // Custom walker with class added to li
  'lib/advanced-custom-fields/acf.php' // Advanced Custom Fields
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_front-page',
		'title' => 'Front Page',
		'fields' => array (
			array (
				'key' => 'field_576e5be6a32f2',
				'label' => 'Image',
				'name' => 'image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_576e5bf0a32f3',
				'label' => 'Note',
				'name' => 'note',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_576e5c04a32f4',
				'label' => 'Locality',
				'name' => 'locality',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
      array (
				'key' => 'field_576e5c04a32fe',
				'label' => 'Country Name',
				'name' => 'country_name',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_576e5c0da32f5',
				'label' => 'Introduction',
				'name' => 'introduction',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_576e5c17a32f6',
				'label' => 'Email',
				'name' => 'email',
				'type' => 'email',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_576e5c1fa32f7',
				'label' => 'Twitter',
				'name' => 'twitter',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => 'https://twitter.com/',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_576e5c2ea32f8',
				'label' => 'Birmingham.io',
				'name' => 'birmingham.io',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_576e5c3ba32f9',
				'label' => 'Instagram',
				'name' => 'instagram',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_576e5c45a32fa',
				'label' => 'GitHub',
				'name' => 'github',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => 'https://github.com/',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_576e5c53a32fb',
				'label' => 'Medium',
				'name' => 'medium',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_576e5c5ca32fc',
				'label' => 'Codepen',
				'name' => 'codepen',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_576e5c65a32fd',
				'label' => 'LinkedIn',
				'name' => 'linkedin',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => 'https://',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'front_page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));
}


/**
 * Shortcode for page last updated snippet
 * Usage:
 * [last-updated]
 * Credit: Marc Jenkins marc@marcjenkins.com
 */

function origin_sc_page_last_updated( $atts, $content = null ) {
	global $post;
	$lastUpdated = get_the_modified_time( 'F jS, Y', $post->ID );
	return '<p><strong>Last updated:</strong> ' . $lastUpdated . '.</p>';
}

add_shortcode( 'last-updated', 'origin_sc_page_last_updated' );
