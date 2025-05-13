<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Product1',
                'product_description' => 'Product1 description',
                'product_price' => 12.99,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Product2',
                'product_description' => 'Product2 description',
                'product_price' => 53.99,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Product1',
                'product_description' => 'Product1 description',
                'product_price' => 109.49,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
