<?php

class Comment extends \Eloquent {
	protected $fillable = ['item_id', 'content'];

	public function item()
    {
        return $this->belongsTo('Item');
    }
}