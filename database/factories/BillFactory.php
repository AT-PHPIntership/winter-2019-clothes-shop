<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bill;
use App\User;
use Faker\Generator as Faker;

$factory->define(Bill::class, function (Faker $faker) {
	return [
		'user_id' => $faker->randomElement(User::pluck('id')),
		'address' => $faker->address,
		'total' => $faker->randomNumber,
		'etd' => $faker->dateTime,
	];
});
