<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\about;

$factory->define(About::class, function (Faker $faker) {
    $cate = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    return [
        'img_about'=> $faker->imageUrl(450, 300, $faker->randomElement($cate)),
        'titre2' => $faker->name(),
        'description2' => $faker->text(),
    ];
});
