<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TaskCatalog;
use App\Models\TaskCatalogType;
use Faker\Generator as Faker;

$factory->define(TaskCatalog::class, function (Faker $faker) {
    return [
        'task_catalog_type_id' => factory(TaskCatalogType::class),
        'description' => $faker->paragraph,
        'title' => $faker->sentence
    ];
});
