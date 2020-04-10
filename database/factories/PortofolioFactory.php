<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\portofolio;

$factory->define(Portofolio::class, function (Faker $faker) {
    $cate = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    return [

        'titre'=> $faker->name(),
        // 'description'=> $faker->sentence(25),
        'img_porto'=> $faker->imageUrl(450, 300, $faker->randomElement($cate)),
        'description2'=> $faker->sentence(),
    ];
});
