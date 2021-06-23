<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Staff::class, function (Faker $faker) {
    return [
        'name'  =>  $faker->name,
        'image' =>  'assets/image-resources/avatar.jpg',
        'university_id' =>  $faker->numberBetween(1, App\Models\University::count()),
    ];
});
