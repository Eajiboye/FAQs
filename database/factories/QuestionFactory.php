<?php
use Faker\Generator as Faker;
$factory->define(App\Question::class, function (Faker $faker)
{
    return [
        'body'=>$faker->paragraph($nbSentences = 3, $variablelengthSentences = true),
    ];
});