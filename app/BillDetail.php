<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model {
	protected $fillable = ['product_id', 'bill_id', 'quantity'];

}
