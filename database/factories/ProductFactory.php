<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Product::class, function (Faker $faker) {
   
    
        return[
            'name' => $faker->word,
            'price'=>$faker->numberBetween($min = 1000, $max = 9000),
            'description'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'stock'=>$faker->randomDigit,
            'brand_id'=>$faker->numberBetween($min = 1, $max = 8),
            'categorie_id'=>$faker->numberBetween($min = 1, $max = 8),
            'photopath_slot1'=>'https://imgplaceholder.com/600x528',
            ];

    
});
