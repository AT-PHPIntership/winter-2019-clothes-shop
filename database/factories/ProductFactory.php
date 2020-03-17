<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'category_id' => $faker->randomElement(Category::pluck('id')),
		'size' => $faker->text,
		'color' => $faker->text,
		'quantity' => $faker->numberBetween($min = 20, $max = 200),
		'price' => $faker->randomNumber,
		'promotion_price' => $faker->randomNumber,
		'description' => $faker->text,
		'is_active' => $faker->randomElement(['0', '1']),
	];
});
