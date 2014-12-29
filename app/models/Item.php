<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Item extends \Eloquent {
	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = ['category_id', 'name', 'img_url', 'short_description', 'description', 'price', 'quantity', 'deleted_at'];

	public function category()
    {
        return $this->belongsTo('Category');
    }
}