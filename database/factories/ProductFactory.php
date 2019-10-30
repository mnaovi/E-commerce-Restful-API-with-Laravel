<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'     => $faker->word,
        'detail'   => $faker->paragraph,
        'price'    => $faker->numberBetween($min = 100, $max = 1000),
        'stock'    => $faker->randomDigit,
        'discount' => $faker->numberBetween($min = 2, $max = 300),
        'user_id'  => function(){
        	return App\User::all()->random();
        },
    ];
});
