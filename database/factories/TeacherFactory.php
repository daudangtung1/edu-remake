<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'image'=>$faker->image('storage/app/public/images', 400, 300, null, false)
    ];
});
