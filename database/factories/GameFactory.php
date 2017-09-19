<?php

use Faker\Generator as Faker;

$factory->define(App\Game::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->sentence(),
        'bundle_identifier' => $faker->domainName,
        'description' => $faker->paragraph(),
        'logo' => $faker->imageurl(),
        'cover_image' => $faker->imageurl(),
        'stars' => $faker->randomFloat(1,1,5),
        'corner_image' => $faker->imageurl(),
        'android_download_url' => $faker->url,
        'ios_download_url' => $faker->url,
        'category_id' => $faker->numberbetween(1,10)
    ];
});
