<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'is_recommend' => rand(0,1),
        'created_at' => date('Y-m-d H:i:s',time()),
        'updated_at' => date('Y-m-d H:i:s',time()),
    ];
});
