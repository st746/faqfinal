<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Answer::class, function (Faker $faker) {
    return [
        //
        'body' => $faker->paragraph($nbsSentences = 3, $variableNbSentences = true),
    ];
});
