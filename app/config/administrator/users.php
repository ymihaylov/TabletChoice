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
		'username',
		'email',
		'firstname' => array(
			'title' => 'First name',
		),
		'lastname' => array(
			'title' => 'Last name',
		),
	),
	/**
	 * The filter set
	 */
	'filters' => array(
		'username',
		'email',
		'firstname' => array(
			'title' => 'First name',
		),
		'lastname' => array(
			'title' => 'Last name',
		),
	),
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'username',
		'email' => array(
			'type' => 'text',
		),
		'firstname' => array(
			'title' => 'First name',
		),
		'lastname' => array(
			'title' => 'Last name',
		),
	),
);