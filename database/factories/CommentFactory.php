<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'article_id' => App\Article::pluck('id')->random(),
        'body' => $faker->paragraphs(3,true),
    ];
});
