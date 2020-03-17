<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bill;
use App\BillDetail;
use App\Product;
use Faker\Generator as Faker;

$factory->define(BillDetail::class, function (Faker $faker) {
	return [
		'product_id' => $faker->randomElement(Product::pluck('id')),
		'bill_id' => $faker->randomElement(Bill::pluck('id')),
		'quantity' => $faker->numberBetween($min = 1, $max = 20),
	];
});
