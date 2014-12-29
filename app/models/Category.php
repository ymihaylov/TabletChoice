<?php

class Category extends \Eloquent {
	protected $fillable = ['title', 'description'];

	public function items()
    {
        return $this->hasMany('Item');
    }
}