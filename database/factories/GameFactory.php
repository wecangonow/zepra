<?php

use Faker\Generator as Faker;

$factory->define(App\Game::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->sentence(),
        'description' => $faker->paragraph(),
        'logo' => $faker->imageUrl(),
        'cover_image' => $faker->imageUrl(),
        'android_download_url' => $faker->url,
        'ios_download_url' => $faker->url,
        'category_id' => $faker->numberBetween(1,10)
    ];
});
