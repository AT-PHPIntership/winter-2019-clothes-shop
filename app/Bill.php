<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model {
	protected $fillable = ['user_id', 'address', 'total', 'etd'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function products() {
		return $this->belongsToMany('App\Product');
	}
}
