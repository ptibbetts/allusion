<?php

// Front Page
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_front-page',
		'title' => 'Front Page',
		'fields' => array (
			array (
				'key' => 'field_576d89bd47055',
				'label' => 'Image',
				'name' => 'image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_576d8ff83297d',
				'label' => 'Note',
				'name' => 'note',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_576d90123297e',
				'label' => 'Locality',
				'name' => 'locality',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_576d90ce3297f',
				'label' => 'Introduction',
				'name' => 'introduction',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_576d913b4ebd5',
				'label' => 'Email',
				'name' => 'email',
				'type' => 'email',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_576d93c214d39',
				'label' => 'Twitter',
				'name' => 'twitter',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => 'https://twitter.com/',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_576d93ce14d3a',
				'label' => 'birmingham.io',
				'name' => 'birmingham_io',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_576d93dd14d3b',
				'label' => 'Instagram',
				'name' => 'instagram',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_576d93e314d3c',
				'label' => 'GitHub',
				'name' => 'github',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => 'https://github.com/',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_576d93e914d3d',
				'label' => 'Medium',
				'name' => 'medium',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_576d93f114d3e',
				'label' => 'Codepen',
				'name' => 'codepen',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_576d93f814d3f',
				'label' => 'Meetup',
				'name' => 'meetup',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_576d940014d40',
				'label' => 'LinkedIn',
				'name' => 'linkedin',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => 'https://',
				'append' => '',
				'formatting' => 'html',
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
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));
}
