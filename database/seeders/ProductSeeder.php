<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name_product' => 'bò nướng cay',
                'price' => 180000,
                'sale' => 10,
                'image' => '',
                'category_id' => 3,
                'product_id' => 1,
                'status' => 0,
            ],
            [
                'name_product' => 'bò bít tết',
                'price' => 200000,
                'sale' => 15,
                'image' => '',
                'category_id' => 3,
                'product_id' => 1,
                'status' => 0,
            ],
            [
                'name_product' => 'bò hầm tiêu xanh',
                'price' => 17000,
                'sale' => 5,
                'image' => '',
                'category_id' => 3,
                'product_id' => 1,
                'status' => 0,
            ],
            [
                'name_product' => 'bò lúc lắc',
                'price' => 150000,
                'sale' => 7,
                'image' => '',
                'category_id' => 3,
                'product_id' => 1,
                'status' => 0,
            ],
            [
                'name_product' => 'bò tái chanh',
                'price' => 185000,
                'sale' => 5,
                'image' => '',
                'category_id' => 3,
                'product_id' => 1,
                'status' => 0,
            ],
            [
                'name_product' => 'vịt chiên cay',
                'price' => 120000,
                'sale' => 10,
                'image' => '',
                'category_id' => 3,
                'product_id' => 1,
                'status' => 0,
            ],
            [
                'name_product' => 'vịt hấp',
                'price' => 90000,
                'sale' => 0,
                'image' => '',
                'category_id' => 2,
                'product_id' => 1,
                'status' => 0,
            ],
            [
                'name_product' => 'vịt nướng chao',
                'price' => 100000,
                'sale' => 10,
                'image' => '',
                'category_id' => 2,
                'product_id' => 1,
                'status' => 0,
            ],
            [
                'name_product' => 'vịt nướng truyển thống',
                'price' => 85000,
                'sale' => 5,
                'image' => '',
                'category_id' => 2,
                'product_id' => 1,
                'status' => 0,
            ],
            [
                'name_product' => 'vịt tẩm mật ong rừng',
                'price' => 120000,
                'sale' => 8,
                'image' => '',
                'category_id' => 2,
                'product_id' => 1,
                'status' => 0,
            ],
            
        ]);
    }
}
