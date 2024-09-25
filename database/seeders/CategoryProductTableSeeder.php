<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all house and service IDs
        $categoriesIds = Category::pluck('id')->toArray();
        $productsIds = Product::pluck('id')->toArray();

        // For each house, attach a random number of services
        foreach ($productsIds as $productsId) {

            // Get a number of primary categories between 1 and 3
            $numberOfPrimaryCategories = rand(1, 3);

            // Get a number of secondary categories between 0 and 5
            $numberOfSecondaryCategories = rand(0, 5);

            // Initialize an empty array for random Primary Categories
            $randomPrimaryCategories = [];

            if ($numberOfPrimaryCategories > 0) {

                // Randomly select services if numberOfServices is greater than 0
                $randomPrimaryCategories = array_rand(array_flip($categoriesIds), $numberOfPrimaryCategories);

                // Ensure $randomServices is an array even if only one service is selected
                if ($numberOfPrimaryCategories == 1) {
                    $randomPrimaryCategories = [$randomPrimaryCategories];
                }
            }

            // Initialize an empty array for random Secondary Categories
            $randomSecondaryCategories = [];

            if ($numberOfSecondaryCategories > 0) {

                // Randomly select services if numberOfServices is greater than 0
                $randomSecondaryCategories = array_rand(array_flip($categoriesIds), $numberOfSecondaryCategories);

                // Ensure $randomServices is an array even if only one service is selected
                if ($numberOfSecondaryCategories == 1) {
                    $randomSecondaryCategories = [$randomSecondaryCategories];
                }
            }

            // Attach the services to the house
            $house = Product::find($productsId);

            $house->categories()->sync($randomPrimaryCategories);
            $house->categories()->sync($randomSecondaryCategories);
        }
    }
}
