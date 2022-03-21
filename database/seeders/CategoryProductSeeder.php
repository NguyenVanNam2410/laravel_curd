<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_products')->insert([
            [
                'name_category' => 'Thực đơn món gà'
            ],
            [
                'name_category' => 'Thực đơn món vịt'
            ],
            [
                'name_category' => 'Thực đơn các món bò'
            ],
            [
                'name_category' => 'Thực đơn các món dê'
            ],
            [
                'name_category' => 'Thực đơn các món lẩu'
            ],
            [
                'name_category' => 'Thực đơn các món khai vị'
            ],
            [
                'name_category' => 'Thực đơn đồ uống'
            ],
            [
                'name_category' => 'Thực đơn các món hải sản'
            ],
        ]);
    }
}
