<?php
/**
 * Films model config
 */

return array(
	'title' => 'Items',
	'single' => 'Item',
	'model' => 'Item',
	'form_width' => 600,
	/**
	 * The display columns
	 */
	'columns' => array(
		'name',
		'category' => array(
			'title' => 'category',
			'relationship' => 'category',
			'select' => "CONCAT((:table).id, ', ', (:table).name)",
			'output' => function($value) {
				list($id, $name) = explode(', ', $value, 2);

				return HTML::link('admin/categories/'.$id, $name);
			}
		),
		'img_url' => array(

			'output' => function($value) {
				if ($value) {
					return HTML::image('upload/items/thumbs/small/'.$value);
				}
			},
		),
		'price' => array(
			'type' => 'number',
			'title' => 'Price',
			'decimals' => 2, //optional, defaults to 0
			'thousands_separator' => ',', //optional, defaults to ','
			'decimal_separator' => '.', //optional, defaults to '.'
		),
		'quantity',
		'positive_votes' => array(
			'title' => 'positive Votes',
		),
		'negative_votes' => array(
			'title' => 'natcasesort(array)egative Votes',
		),
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
		'created_at' => array(
			'title' => 'created at',
			'type' => 'date',
		),
	),
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'name',
		'img_url' => array(
			'title' => 'Image',
		    'type' => 'image',
		    'location' => public_path() . '/upload/items/originals/',
		    'naming' => 'random',
		    'length' => 20,
		    'size_limit' => 2,
		    'sizes' => array(
		        array(100, 100, 'crop', public_path() . '/upload/items/thumbs/small/', 100),
		        array(350, 350, 'fit', public_path() . '/upload/items/thumbs/medium/', 100),
		        array(500, 500, 'fit', public_path() . '/upload/items/thumbs/full/', 100)
			),
		),
		'category_id' => array(
		    'type' => 'enum',
		    'title' => 'Category',
		    'options' => array('4' => 'Pesho', 'Gosho', 'Tosho'),
		),
		'short_description' => array(
			'type' => 'textarea',
			'title' => 'Short description',
		),
		'description' => array(
			'type' => 'textarea',
			'title' => 'Description',
		),
		'price' => array(
		    'type' => 'number',
		    'title' => 'Price',
		    'decimals' => 2, //optional, defaults to 0
		    'thousands_separator' => ',', //optional, defaults to ','
		    'decimal_separator' => '.', //optional, defaults to '.'
		),
		'quantity' => array(

		),
	),
);