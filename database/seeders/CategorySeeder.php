<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'        => 'Grocery',
                'description' => 'Day to day life needed grocery items.'
            ],
            [
                'name'        => 'Books & Stationary',
                'description' => 'Explore a vast collection of books across various genres.'
            ],
            [
                'name'        => 'Fashion & Clothing',
                'description' => 'Find the latest fashion trends and stylish clothing items.'
            ],
            [
                'name'        => 'Beauty & Personal Care',
                'description' => 'Find beauty products and grooming essentials.'
            ],
            [
                'name'        => 'Home Appliance',
                'description' => 'Browse through a wide range of electronic devices.'
            ],
            [
                'name'        => 'Home Decor & Furniture',
                'description' => 'Discover decorative items to enhance your living spaces.'
            ],
            [
                'name'        => 'Gadget',
                'description' => 'Discover gadgets for daily use.'
            ],
            [
                'name'        => 'Toys & Games',
                'description' => 'Explore a wide selection of toys and games for all ages.'
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
