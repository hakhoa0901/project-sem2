<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }
//        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([[
                'id' => '1',
                'name'=>"DOLCE & GABBANA GOLD COLLECTION DG2133K-02/39",
                'price'=>16650000,
                'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Vàng / Mirror
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',
                'images'=>'https://eyewearstore.vn/uploads/plugin/products/1022/dolce-amp-gabbana-dg2133k-02-39-dg2133k-02-39-1-0.jpg',
                'status'=>'active',
                'created_by'=>1,
                'category_id'=>1,
                'brand_id'=>1
            ],
                [
                    'id' => '2',
                    'name'=>"DOLCE & GABBANA GOLD COLLECTION DG2133K-488/58",
                    'price'=>16650000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Vàng / Mirror
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',
                    'images'=>'https://eyewearstore.vn/uploads/plugin/products/1023/dolce-amp-gabbana-gold-collection-dg2133k-488-58-dg2133k-488-58-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1
                ],[
                    'id' => '3',
                    'name'=>"DOLCE & GABBANA DG2133-04/73",
                    'price'=>16650000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Vàng / Mirror
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',
                    'images'=>'https://eyewearstore.vn/uploads/plugin/products/3823/dolce-amp-gabbana-dg2133-04-73-dg2133-0473.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1
                ],[
                    'id' => '4',
                    'name'=>"DOLCE & GABBANA DG2144-02/F9",
                    'price'=>6480000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Vàng / Mirror
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',
                    'images'=>'https://eyewearstore.vn/uploads/plugin/products/1030/dolce-amp-gabbana-dg2144-02-f9-dg2144-02-f9-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1
                ],[
                    'id' => '5',
                    'name'=>"DOLCE & GABBANA DG2144-12968G",
                    'price'=>680000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Vàng / Mirror
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',

                    'images'=>'https://eyewearstore.vn/uploads/plugin/products/1032/dolce-amp-gabbana-dg2144-12968g-dg2144-12968g-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1
                ],[
                    'id' => '6',
                    'name'=>"DOLCE & GABBANA DG2144-13076G",
                    'price'=>480000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Vàng / Mirror
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',

                    'images'=>'https://eyewearstore.vn/uploads/plugin/products/2161/dolce-amp-gabbana-dg2144-13076g-dg2144-13076g-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1
                ],[
                    'id' => '7',
                    'name'=>"DOLCE & GABBANA DG2144-02/N0",
                    'price'=>6480000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Vàng / Mirror
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',

                    'images'=>'https://eyewearstore.vn/uploads/plugin/products/2557/dolce-amp-gabbana-dg2144-02-n0-dg2144-02n0-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1
                ]
            ]
        );

//        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
