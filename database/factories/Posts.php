<?php


use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function(Faker $faker) {
	return [
		'id' => $faker->randomDigit,
		'title' => $faker->name,
		'content' => $faker->text(),
		'is_admin' => $faker->boolean(),
		'deleted_at' => $faker->time('Y-m-d H:i:s'),
	];
});
