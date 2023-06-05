<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            //GROCERY CATEGORY
            [
                'name'        => 'Vegetables',
                'description' => 'Vegetables Subcategory Under Grocery Category',
                'category_id' => 1
            ],
            [
                'name'        => 'Fish & Meet',
                'description' => 'Fish & Meet Subcategory Under Grocery Category',
                'category_id' => 1
            ],
            [
                'name'        => 'Fruit',
                'description' => 'Fruit Subcategory Under Grocery Category',
                'category_id' => 1
            ],
            [
                'name'        => 'Snacks',
                'description' => 'Snacks Subcategory Under Grocery Category',
                'category_id' => 1
            ],
            [
                'name'        => 'Drinks',
                'description' => 'Drinks Subcategory Under Grocery Category',
                'category_id' => 1
            ],

            // Books & Stationary categories
            [
                'name'        => 'Books',
                'description' => 'Books Subcategory Under Books & Stationary Category',
                'category_id' => 2
            ],
            [
                'name'        => 'Notes',
                'description' => 'Notes Subcategory Under Books & Stationary Category',
                'category_id' => 2
            ],
            [
                'name'        => 'Stationary',
                'description' => 'Stationary Subcategory Under Books & Stationary Category',
                'category_id' => 2
            ],

            // Fashion & Clothing categories
            [
                'name'        => 'Men\'s Collection',
                'description' => 'Men\'s Collection Subcategory Under Fashion & Clothing Category',
                'category_id' => 3
            ],
            [
                'name'        => 'Women\'s Outfit',
                'description' => 'Women\'s Outfit Subcategory Under Fashion & Clothing Category',
                'category_id' => 3
            ],
            [
                'name'        => 'Toddler\'s Comfort',
                'description' => 'Toddler\'s Comfort Subcategory Under Fashion & Clothing Category',
                'category_id' => 3
            ],

            // Beauty & Personal Care categories
            [
                'name'        => 'Makeup Solution',
                'description' => 'Makeup Solution Subcategory Under Beauty & Personal Care Category',
                'category_id' => 4
            ],
            [
                'name'        => 'Ornament Collection',
                'description' => 'Ornament Collection Subcategory Under Beauty & Personal Care Category',
                'category_id' => 4
            ],
            [
                'name'        => 'Men\'s Care',
                'description' => 'Men\'s Care Subcategory Under Beauty & Personal Care Category',
                'category_id' => 4
            ],

            // Home Appliance categories
            [
                'name'        => 'Television',
                'description' => 'Television Subcategory Under Home Appliance Category',
                'category_id' => 5
            ],
            [
                'name'        => 'Fridge',
                'description' => 'Fridge Subcategory Under Home Appliance Category',
                'category_id' => 5
            ],
            [
                'name'        => 'Air Conditioner',
                'description' => 'Air Conditioner Subcategory Under Home Appliance Category',
                'category_id' => 5
            ],
            [
                'name'        => 'Washing Machine',
                'description' => 'Washing Machine Subcategory Under Home Appliance Category',
                'category_id' => 5
            ],
            [
                'name'        => 'Air Conditioner',
                'description' => 'Air Conditioner Subcategory Under Home Appliance Category',
                'category_id' => 5
            ],

            // Home Decor & Furniture categories
            [
                'name'        => 'Home Decorations',
                'description' => 'Home Decorations Subcategory Under Home Decor & Furniture Category',
                'category_id' => 6
            ],
            [
                'name'        => 'Furnitures',
                'description' => 'Furnitures Subcategory Under Home Decor & Furniture Category',
                'category_id' => 6
            ],

            // Gadget categories
            [
                'name'        => 'Mobile',
                'description' => 'Mobile Subcategory Under Gadget Category',
                'category_id' => 7
            ],
            [
                'name'        => 'Tablet',
                'description' => 'Tablet Subcategory Under Gadget Category',
                'category_id' => 7
            ],
            [
                'name'        => 'Laptop',
                'description' => 'Laptop Subcategory Under Gadget Category',
                'category_id' => 7
            ],
            [
                'name'        => 'Smart Watch',
                'description' => 'Smart Watch Subcategory Under Gadget Category',
                'category_id' => 7
            ],
            [
                'name'        => 'Earphone',
                'description' => 'Earphone Subcategory Under Gadget Category',
                'category_id' => 7
            ],
            [
                'name'        => 'Charger',
                'description' => 'Charger Subcategory Under Gadget Category',
                'category_id' => 7
            ],

            // Toys & Games categories
            [
                'name'        => 'Toys',
                'description' => 'Toys Subcategory Under Toys & Games Category',
                'category_id' => 8
            ],
            [
                'name'        => 'Gaming Instruments',
                'description' => 'Gaming Instruments Subcategory Under Toys & Games Category',
                'category_id' => 8
            ],
        ];

        DB::table('subcategories')->insert($subcategories);
    }
}
