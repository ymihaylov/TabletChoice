<?php
/**
 * Films model config
 */
return array(
	'title' => 'Users',
	'single' => 'User',
	'model' => 'User',
	/**
	 * The display columns
	 */
	'columns' => array(
		'email',
		'name',
		'created_at',
		'updated_at',
	),
	/**
	 * The filter set
	 */
	'filters' => array(
		'email',
		'name',
		'created_at' => array(
			'title' => 'created at',
			'type' => 'date',
		),
	),
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'email' => array(
			'type' => 'text',
		),
		'name',
		'password' => array(
			'type' => 'password',
		)
	),
);