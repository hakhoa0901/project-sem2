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
                ],
                [
                    'id' => '8',
                    'name'=>"DOLCE & GABBANA DG4170PF-502/T5",
                    'price'=>24300000,
                    'description'=>'Giới tính: Nữ
                            Chất liệu mắt: Plastic
                            Chất liệu gọng: Plastic
                                Màu mắt: Nâu Chống Chói / Gradient
                                Màu Gọng: Đồi mồi
                                Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1037/dolce-amp-gabbana-dg4170pf-502-t5-dg4170pf-502t5.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '9',
                    'name'=>"DOLCE & GABBANA DG4203F-2764T3",
                    'price'=>5220000,
                    'description'=>'Giới tính: Unisex
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Plastic
                                    Màu mắt: Xám Chống Chói / Gradient
                                    Màu Gọng: Đen / Đỏ
                                    Lọc UV400: Có',
                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1043/dolce-amp-gabbana-dg4249f-501-8g-dg4249f-501-8g-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '10',
                    'name'=>"DOLCE & GABBANA DG4257F-2969F",
                    'price'=>504000,
                    'description'=>'Giới tính: Nữ
                                        Chất liệu mắt: Thủy tinh
                                        Chất liệu gọng: Metal/Plastic
                                        Màu mắt: Vàng / Mirror
                                        Màu Gọng: Đồi mồi
                                        Lọc UV400: Có
                                        ',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1047/dolce-amp-gabbana-dg4257f-2969f9-dg4257f-2969f9-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '11',
                    'name'=>"BURBERRY BE3083-1008/5W(59IT)",
                    'price'=>540000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Nâu
                                    Màu Gọng: Đen
                                    Lọc UV400: Có
                                    Trọng Lượng: 34g',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/696/burberry-be3083-1008-5w-59it-be3083-10085w-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '12',
                    'name'=>"BURBERRY BE3083-1007/T8(59IT)",
                    'price'=>540000,
                    'description'=>'Giới tính: Nam
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Metal
                                        Màu mắt: Xám Chống Chói
                                        Màu Gọng: Đen',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/697/burberry-be3083-1007-t8-59it-be3083-1007t8-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '13',
                    'name'=>"BURBERRY BE3083-1001/5U(59IT)",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nam
                                            Chất liệu mắt: Plastic
                                            Chất liệu gọng: Metal
                                            Màu mắt: Xanh Green
                                            Màu Gọng: Đen
                                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/698/burberry-be3083-1001-5u-59it-be3083-10015u-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '14',
                    'name'=>"BURBERRY BE3084-1003/8G(57IT)",
                    'price'=>504000,
                    'description'=>'BURBERRY BE3084-1003/8G(57IT)',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/699/burberry-be3084-1003-8g-57it-be3084-10038g-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '15',
                    'name'=>"BURBERRY BE3084-1005/6V(57IT)",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                            Chất liệu mắt: Plastic
                                            Chất liệu gọng: Metal
                                            Màu mắt: Bạc / Gradient / Mirror
                                            Màu Gọng: Bạc
                                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/700/burberry-be3084-1005-6v-57it-be3084-10056v-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '16 ',
                    'name'=>"BURBERRY BE3084-1007/87(57IT)",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Xám
                                    Màu Gọng: Xám tối
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/701/burberry-be3084-1007-87-57it-be3084-100787-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '17',
                    'name'=>"BURBERRY BE3084-1166/87(57IT)",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Xám
                                    Màu Gọng: Bạc
                                    Lọc UV400: Có
                                    Trọng Lượng: 34g',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/702/burberry-be3084-1166-87-57it-be3084-116687-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '18',
                    'name'=>"BURBERRY BE3084-1166/T3(57IT)",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Xám Chống Chói / Gradient
                                    Màu Gọng: Bạc
                                    Lọc UV400: Có
                                    Trọng Lượng: 34g',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/703/burberry-be3084-1166-t3-57it-be3084-1166t3-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '19',
                    'name'=>"BURBERRY BE3084-1212/T5(57IT)",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                Chất liệu mắt: Plastic
                                Chất liệu gọng: Metal
                                Màu mắt: Nâu Chống Chói / Gradient
                                Màu Gọng: Nâu
                                Lọc UV400: Có
                                Trọng Lượng: 34g',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/704/burberry-be3084-1212-t5-57it-be3084-1212t5-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '20',
                    'name'=>"BURBERRY BE3086-1001/K4(59IT)",
                    'price'=>540000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Đen / Gradient / Chống Chói
                                    Màu Gọng: Đen
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/705/burberry-be3086-1001-k4-59it-untitled.png',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '21',
                    'name'=>"PRADA PR01OSA-1AB3M1(55IT)",
                    'price'=>540000,
                    'description'=>'Giới tính: Nữ
                                Chất liệu mắt: Plastic
                                Chất liệu gọng: Plastic
                                Màu mắt: Xám / Gradient
                                Màu Gọng: Đen
                                Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2312/prada-pr01osa-1ab3m1-55it-pr01osa-1ab3m1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '22',
                    'name'=>"PRADA PR01OSA-UE00A6(55IT)",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                Chất liệu mắt: Plastic
                                Chất liệu gọng: Plastic
                                Màu mắt: Nâu / Gradient
                                Màu Gọng: Hồng
                                Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2313/prada-pr01osa-ue00a6-55it-pr01osa-ue00a6.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '23',
                    'name'=>"PRADA PR01OSA-TKR0A7(55IT)",
                    'price'=>540000,
                    'description'=>'Giới tính: Nữ
                                            Chất liệu mắt: Plastic
                                            Chất liệu gọng: Plastic
                                            Màu mắt: Nâu / Gradient
                                            Màu Gọng: Đồi mồi / Đỏ
                                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2314/prada-pr01osa-tkr0a7-55it-pr01osa-tkr0a7.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '24',
                    'name'=>"PRADA PR01OSA-FAL0A8(55IT)",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Plastic
                                        Màu mắt: Nâu / Gradient
                                        Màu Gọng: Vàng / Đồi Mồi
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2315/prada-pr01osa-fal0a8-55it-pr01osa-fal0a8.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '25',
                    'name'=>"PRADA PR07PSA-1AB0A7(56IT)",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                        Chất liệu mắt: Plastic
                        Chất liệu gọng: Plastic
                        Màu mắt: Xám / Gradient
                        Màu Gọng: Đen
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2316/prada-pr07psa-1ab0a7-56it-pr07psa-1ab0a7.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '26',
                    'name'=>"PRADA PR07PSA-2AU6S1(56IT)",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                Chất liệu mắt: Plastic
                                Chất liệu gọng: Plastic
                                Màu mắt: Nâu / Gradient
                                Màu Gọng: Đồi mồi
                                Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2317/prada-pr07psa-2au6s1-56it-pr07psa-2au6s1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '27',
                    'name'=>"PRADA PR09SSF-1AB0A7(56IT)",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Plastic
                                        Màu mắt: Xám / Gradient
                                        Màu Gọng: Đen
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2318/prada-pr09ssf-1ab0a7-56it-pr09ssf-1ab0a7-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '28',
                    'name'=>"PRADA PR09SSF-1AB9K1(56IT)",
                    'price'=>5,
                    'description'=>'Giới tính: Nữ
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Plastic
                                        Màu mắt: Xám
                                        Màu Gọng: Đen
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2319/prada-pr09ssf-1ab9k1-56it-pr09ssf-1ab9k1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '29',
                    'name'=>"PRADA PR09SSF-2AU3D0(56IT)
",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Plastic
                                    Màu mắt: Nâu / Gradient
                                    Màu Gọng: Đồi mồi
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2320/prada-pr09ssf-2au3d0-56it-pr09ssf-2au3d0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '30',
                    'name'=>"PRADA PR09SSF-UE04K0(56IT)",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Plastic
                                        Màu mắt: Nâu / Gradient
                                        Màu Gọng: Hồng
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2321/prada-pr09ssf-ue04k0-56it-pr09ssf-ue04k0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '31',
                    'name'=>"VERSACE VE2165-100013",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Nâu / Gradient
                                    Màu Gọng: Bạc
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1097/versace-ve2165-100013-ve2165-100013-3.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '32',
                    'name'=>"VERSACE VE2165-13718G",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                Chất liệu mắt: Plastic
                                Chất liệu gọng: Metal
                                Màu mắt: Xám / Gradient
                                Màu Gọng: Đen / Vàng
                                Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1098/versace-ve2165-13718g-ve2165-13718g-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '33',
                    'name'=>"VERSACE VE2165-136671",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Xanh Green
                                    Màu Gọng: Đen / Vàng
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1099/versace-ve2165-136671-ve2165-136671-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '34',
                    'name'=>"VERSACE VE2168-133913",
                    'price'=>540000,
                    'description'=>'Giới tính: Nữ
                                                Chất liệu mắt: Thủy tinh
                                            Chất liệu gọng: Metal
                                            Màu mắt: Nâu / Gradient
                                            Màu Gọng: Vàng
                                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1099/versace-ve2165-136671-ve2165-136671-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '35',
                    'name'=>"VERSACE VE2168-137513
",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Nâu / Gradient
                                    Màu Gọng: Vàng Hồng
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1101/versace-ve2168-137513-ve2168-137513-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '36',
                    'name'=>"VERSACE VE2168-137787",
                    'price'=>504000,
                    'description'=>'Giới tính: Nữ
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Metal
                                        Màu mắt: Xám
                                        Màu Gọng: Đen
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1102/versace-ve2168-137787-ve2168-137787.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '37',
                    'name'=>"VERSACE VE2168-137968",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal/Plastic
                                    Màu mắt: Nâu / Gradient
                                    Màu Gọng: Tím
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1103/versace-ve2168-137968-ve2168-137968.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '38',
                    'name'=>"VERSACE VE4271BA-507473
",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Plastic
                                    Màu mắt: Nâu
                                    Màu Gọng: Đồi mồi
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1104/versace-ve4271ba-507473-ve4271ba-507473-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '39',
                    'name'=>"VERSACE VE4271BA-GB1/8G",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Plastic
                                        Màu mắt: Xám / Gradient
                                        Màu Gọng: Đen
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1105/versace-ve4271ba-gb1-8g-ve4271-gb1-8g-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '40',
                    'name'=>"VERSACE VE4277A-108/13",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                            Chất liệu mắt: Plastic
                                            Chất liệu gọng: Plastic
                                            Màu mắt: Nâu / Gradient
                                            Màu Gọng: Đồi mồi
                                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1105/versace-ve4271ba-gb1-8g-ve4271-gb1-8g-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '41',
                    'name'=>"PORSCHE DESIGN P8508-B",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nam
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Metal
                                        Màu mắt: Nâu / Mirror
                                        Màu Gọng: Xám tối
                                        Lọc UV400: Có
                                        ',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2297/porsche-design-p8508-b-p8508-b.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '42',
                    'name'=>"PORSCHE DESIGN P8508-D",
                    'price'=>540000,
                    'description'=>'Giới tính: Unisex
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Metal
                                        Màu mắt: Xám
                                        Màu Gọng: Đen
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2298/porsche-design-p8508-d-p8508-d.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '43',
                    'name'=>"PORSCHE DESIGN P8541-C",
                    'price'=>5040000,
                        'description'=>'Giới tính: Nam
                            Chất liệu mắt: Plastic
                        Chất liệu gọng: Titanium
                        Màu mắt: Xanh Green /Mirror
                        Màu Gọng: Vàng
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2299/porsche-design-p8541-c-p8541-c.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '44',
                    'name'=>"PORSCHE DESIGN P8541-D
",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Titanium
                                    Màu mắt: Xám
                                    Màu Gọng: Xám tối
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2300/porsche-design-p8541-d-p8541-d.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '45',
                    'name'=>"PORSCHE DESIGN P8542-B",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Titanium
                                    Màu mắt: Nâu
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2301/porsche-design-p8542-b-p8542-b.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '46',
                    'name'=>"PORSCHE DESIGN P8542-D",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Titanium
                                    Màu mắt: Bạc / Mirror
                                    Màu Gọng: Bạc
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2302/porsche-design-p8542-d-p8542-d.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '47',
                    'name'=>"PORSCHE DESIGN P8542-C",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Titanium
                                    Màu mắt: Xanh Green /Mirror
                                    Màu Gọng: Xám tối
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2303/porsche-design-p8542-c-p8542-c.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '48',
                    'name'=>"PORSCHE DESIGN P8545-A",
                    'price'=>5040000,
                    'description'=>'Giới tính: Unisex
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Metal
                                        Màu mắt: Nâu / Mirror
                                        Màu Gọng: Vàng
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2304/porsche-design-p8545-a-p8545-a.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '49',
                    'name'=>"PORSCHE DESIGN P8562-D",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nam
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Metal
                                        Màu mắt: Nâu
                                        Màu Gọng: Nâu
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2305/porsche-design-p8562-d-p8562-d.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '50',
                    'name'=>"MIU MIU MU04QS-1AB0A7",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                                    Chất liệu mắt: Plastic
                                                    Chất liệu gọng: Metal/Plastic
                                                    Màu mắt: Xám / Gradient
                                                    Màu Gọng: Đen / Vàng
                                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/941/miu-miu-mu04qs-55-1ab0a7-mu04qs-1ab0a7-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '51',
                    'name'=>"MIU MIU MU50QS-TIF4W1",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Tím Gradient
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/942/miu-miu-mu50qs-52-tif4w1-mu50qs-tif4w1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '52',
                    'name'=>"MIU MIU MU50QS-ROY3C2",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Xám
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/943/miu-miu-mu50qs-52-roy3c2-mu50qs-roy3c2-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '53',
                    'name'=>"MIU MIU MU50QS-TWN1E0",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                Chất liệu mắt: Plastic
                                Chất liệu gọng: Metal
                                Màu mắt: Xám / Gradient
                                Màu Gọng: Vàng
                                Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/944/miu-miu-mu50qs-52-twn1e0-mu50qs-twn1e0-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '54',
                    'name'=>"MIU MIU MU52QS-53-7S00A6",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Metal
                                        Màu mắt: Nâu
                                        Màu Gọng: Vàng
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/945/miu-miu-mu52qs-53-7s00a6-mu52qs-7s00a6.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '55',
                    'name'=>"MIU MIU MU52QS-53-TWJ3E2",
                    'price'=>5040000,
                    'description'=>'Giới tính: Nữ
Chất liệu mắt: Plastic
Chất liệu gọng: Metal
Màu mắt: Xám / Gradient
Màu Gọng: Vàng / Tím
Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/947/miu-miu-mu52qs-53-twj3e2-mu52qs-twj3e2-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],

            ]
        );

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//        if (env('DB_CONNECTION') == 'mysql') {
//            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//        }
    }
}
