<?php
/**
 * Films model config
 */
return array(
	'title' => 'Categories',
	'single' => 'Category',
	'model' => 'Category',
	'form_width' => 600,
	/**
	 * The display columns
	 */
	'columns' => array(
		'name',
		'description',
		'created_at' => array(
			'title' => 'created at',
		),
		'updated_at' => array(
			'title' => 'updated at',
		),
	),
	/**
	 * The filter set
	 */
	'filters' => array(
		'name',
		'description',
		'created_at' => array(
		    'type' => 'date',
		    'title' => 'created at',
		),
	),
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'name',
		'description' => array(
			'type' => 'wysiwyg',
		),
	),
);