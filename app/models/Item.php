<?php
//use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Item extends \Eloquent {
	//use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = ['category_id', 'name', 'img_url', 'short_description', 'description', 'price', 'quantity', 'positive_votes', 'negative_votes', 'deleted_at'];

	public function category()
    {
        return $this->belongsTo('Category');
    }

    public function comments()
    {
        return $this->hasMany('Item');
    }

    public function getPriceAttribute($price)
    {
        return number_format($price, 2);
    }
}