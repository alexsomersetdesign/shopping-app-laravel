<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Example data for products
        $products = [
            [
                'name' => 'Eggs',
                'price' => 1.99,
            ],
            [
                'name' => 'Bread',
                'price' => 2.99,
            ],
            [
                'name' => 'Cheese',
                'price' => 4.99,
            ],
            [
                'name' => 'Chicken',
                'price' => 5.79,
            ],
            [
                'name' => 'Steak',
                'price' => 7.99,
            ],
            [
                'name' => 'Salad Bag',
                'price' => 2.99,
            ],
            [
                'name' => 'Olives',
                'price' => 5.99,
            ],
            // Add more products as needed
        ];

        DB::table('products')->insert($products);
    }
}