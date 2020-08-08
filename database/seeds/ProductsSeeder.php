<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
//        if (env('DB_CONNECTION') == 'mysql') {
//            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
//        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
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
                'thumbnail'=>'dolce-amp-gabbana-dg2133k-02-39-dg2133k-02-39-1-0_yqi2fb',
                'status'=>'active',
                'created_by'=>1,
                'category_id'=>1,
                'brand_id'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
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
                    'thumbnail'=>'dolce-amp-gabbana-gold-collection-dg2133k-488-58-dg2133k-488-58-1_ln3kda',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
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
                    'thumbnail'=>'dolce-amp-gabbana-dg2133-04-73-dg2133-0473_tes7tc',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
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
                    'thumbnail'=>'dolce-amp-gabbana-dg2144-02-f9-dg2144-02-f9-1_frrb8z',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
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

                    'thumbnail'=>'dolce-amp-gabbana-dg2144-12968g-dg2144-12968g-0_odxjeb',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
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

                    'thumbnail'=>'dolce-amp-gabbana-dg2144-13076g-dg2144-13076g-0_ltvsfk',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
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

                    'thumbnail'=>'dolce-amp-gabbana-dg2144-02-n0-dg2144-02n0-0_dguptq',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ]
            ]
        );

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//        if (env('DB_CONNECTION') == 'mysql') {
//            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//        }
    }
}
