<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TaskCatalogType;
use Faker\Generator as Faker;

$factory->define(TaskCatalogType::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph
    ];
});
