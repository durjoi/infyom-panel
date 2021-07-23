<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\activityLog;
use Faker\Generator as Faker;

$factory->define(activityLog::class, function (Faker $faker) {

    return [
        'log_name' => $faker->word,
        'description' => $faker->text,
        'subject_id' => $faker->word,
        'subject_type' => $faker->word,
        'causer_id' => $faker->word,
        'causer_type' => $faker->word,
        'properties' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
