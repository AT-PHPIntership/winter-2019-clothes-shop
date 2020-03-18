<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use App\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {

	$imageable_type = $faker->randomElement([Product::class, User::class]);

	return [
		'name' => $faker->name,
		'path' => $faker->text,
		'imageable_id' => $faker->randomElement($imageable_type::pluck('id')),
		'imageable_type' => $imageable_type,

	];
});
