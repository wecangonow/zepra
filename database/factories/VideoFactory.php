<?php

use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'description' => $faker->paragraph(),
        'url' => $faker->url,
        'duration' => $faker->time(),
        'cover_image' => $faker->imageUrl(),
        'views' => $faker->numberbetween(5000,100000),
        'game_id' => $faker->numberbetween(1,40),
        'likes' => $faker->numberbetween(500,10000)
    ];
});
