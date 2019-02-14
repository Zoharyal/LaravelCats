<?php

use Faker\Generator as Faker;

$factory->define(App\Vignette::class, function (Faker $faker) {
    return [
        'legende' => $faker->text($maxNbChars = 74),
        'url' => $faker->imageUrl($width = 240, $height = 240, 'cats'),
        'description' => $faker->text()
    ];
});
