<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');
        for ($i=0; $i < 50; $i++){
            Product::create([
                'id' => $faker->numberBetween($min = 1, $max = 800),
                'name' => $faker->word,
                ]);
    }
}
}
