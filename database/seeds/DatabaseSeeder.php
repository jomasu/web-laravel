<?php

use App\Product;
use App\Categorie;
use App\Brand;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            factory(Product::class, 50)->create();

            Categorie::create([
                'name' => 'Televisores',
            ]);

            Categorie::create([
                'name' => 'Smartphone',
            ]); 
            Categorie::create([
                'name' => 'Pcs',
            ]); 
            Categorie::create([
                'name' => 'NoteBooks',
            ]);
            Categorie::create([
                'name' => 'Tablets',
            ]);
            Categorie::create([
                'name' => 'Pantallas',
            ]);
            Categorie::create([
                'name' => 'Auriculares',
            ]);
            Categorie::create([
                'name' => 'Parlantes',
            ]);         

            Brand::create([
                'name' => 'Samsung',
            ]); 
            Brand::create([
                'name' => 'LG',
            ]); 
            Brand::create([
                'name' => 'BHG',
            ]);
            Brand::create([
                'name' => 'HP',
            ]); 
            Brand::create([
                'name' => 'Pionner',
            ]);



    }
}
