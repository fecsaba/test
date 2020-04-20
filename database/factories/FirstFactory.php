<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\First;
use Faker\Generator as Faker;

$factory->define(First::class, function (Faker $faker) {
    return [
        'product_name' => $faker->word,
        'piece' => $faker->numberBetween(1, 1000),
        'color' => $faker->colorName
    ];
});
