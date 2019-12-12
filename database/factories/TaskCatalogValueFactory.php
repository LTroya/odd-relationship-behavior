<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TaskCatalog;
use App\Models\TaskCatalogValue;
use Faker\Generator as Faker;

$factory->define(TaskCatalogValue::class, function (Faker $faker) {
    return [
        'task_catalog_id' => factory(TaskCatalog::class),
        'name' => $faker->sentence,
        'value' => $faker->randomNumber()
    ];
});
