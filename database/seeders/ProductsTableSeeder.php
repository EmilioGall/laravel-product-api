<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {

            $newProduct = new Product();
            $newProduct->name = $faker->words(3, true);
            $newProduct->price = $faker->randomFloat(2, 3, 55);
            $newProduct->image = 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg';
            $newProduct->description = $faker->paragraph(6);
            $newProduct->highlighted = $faker->numberBetween(0, 1);

            $newProduct->save();
        };
    }
}
