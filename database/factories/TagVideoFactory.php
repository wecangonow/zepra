<?php

use Faker\Generator as Faker;

$factory->define(App\TagVideo::class, function (Faker $faker) {
    return [
        //
        'video_id' => $faker->numberbetween(1,400),
        'tag_id' => $faker->numberbetween(1,6),
    ];
});
