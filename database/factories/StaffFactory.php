<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Staff::class, function (Faker $faker) {
    return [
        'name'  =>  $faker->name,
        'image' =>  '1624298575.jfif',
        'university_id' =>  $faker->numberBetween(1, App\Models\University::count()),
    ];
});
