<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
	protected $fillable = ['user_id', 'product_id', 'rating', 'content', 'is_confirmed'];

	public function product() {
		return $this->belongsTo('App\Product');
	}

	public function user() {
		return $this->belongsTo('App\User');

}
