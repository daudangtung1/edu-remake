<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TestQuestion;
use Faker\Generator as Faker;

$factory->define(TestQuestion::class, function (Faker $faker) {
    return [
        'question' => $faker->text('200'),
        'test_id' => $faker->numberBetween($min=1, $max=3)
    ];
});
