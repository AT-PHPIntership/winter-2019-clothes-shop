<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
	return [
		'user_id' => $faker->randomElement(User::pluck('id')),
		'product_id' => $faker->randomElement(Product::pluck('id')),
		'rating' => $faker->randomDigit,
		'content' => $faker->text,
		'is_confirmed' => $faker->randomElement(['0', '1']),
	];
});
