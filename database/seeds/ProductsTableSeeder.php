<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
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
                'name' => $faker->word,
                'price'=>$faker->numberBetween($min = 1000, $max = 9000),
                'description'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'stock'=>$faker->randomDigit,
                'brand_id'=>$faker->numberBetween($min = 1, $max = 8),
                'categorie_id'=>$faker->numberBetween($min = 1, $max = 8),
                'photopath_slot1'=>'https://imgplaceholder.com/600x528',
                ]);

        }
       
        
    }
}
