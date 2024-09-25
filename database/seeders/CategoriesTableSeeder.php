<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $primaryCategories = [
            "Electronics",
            "Clothing",
            "Home Appliances",
            "Books",
            "Toys",
            "Beauty Products",
            "Sports Equipment",
            "Automotive",
            "Jewelry",
            "Food & Beverages"
        ];

        $secondaryCategories = [
            "Smartphones",
            "Laptops",
            "Televisions",
            "Men's Clothing",
            "Women's Clothing",
            "Children's Clothing",
            "Kitchen Appliances",
            "Furniture",
            "Stationery",
            "Novel",
            "Educational Toys",
            "Board Games",
            "Cosmetics",
            "Skincare Products",
            "Fitness Equipment",
            "Bicycles",
            "Car Accessories",
            "Watches",
            "Gourmet Snacks",
            "Beverages"
        ];

        foreach ($primaryCategories as $categoryName) {

            $newCategory = new Category();
            $newCategory->name = $categoryName;
            $newCategory->color = $faker->hexColor();
            $newCategory->primary = 1;
            $newCategory->description = $faker->paragraph(3);

            $newCategory->save();
        }

        foreach ($secondaryCategories as $categoryName) {

            $newCategory = new Category();
            $newCategory->name = $categoryName;
            $newCategory->color = $faker->hexColor();
            $newCategory->primary = 0;
            $newCategory->description = $faker->paragraph(3);

            $newCategory->save();
        }

    }
}
