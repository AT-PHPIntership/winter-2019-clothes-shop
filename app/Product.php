<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	protected $fillable = ['name', 'category_id', 'size', 'color', 'quantity', 'price', 'promotion_price', 'description'];

	public function category() {
		return $this->belongsTo('App\Category');
	}

	public function bills() {
		return $this->belongsToMany('App\Bill');
	}

	public function comments() {
		return $this->hasMany('App\Comment');
	}

	public function images() {
		return $this->morphMany('App\Image', 'imageable');
	}
}
