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
                'price'=>1665000,
                'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Vàng / Mirror
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',
                'thumbnail'=>'dolce-amp-gabbana-dg2133k-02-39-dg2133k-02-39-1-0_yqi2fb',
                'status'=>'active',
                'created_by'=>1,
                'category_id'=>2,
                'brand_id'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
                [
                    'id' => '2',
                    'name'=>"DOLCE & GABBANA GOLD COLLECTION DG2133K-488/58",
                    'price'=>7650000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Vàng / Mirror
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',
                    'thumbnail'=>'dolce-amp-gabbana-gold-collection-dg2133k-488-58-dg2133k-488-58-1_ln3kda',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '3',
                    'name'=>"DOLCE & GABBANA DG2133-04/73",
                    'price'=>5650000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Vàng / Mirror
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',

                    'thumbnail'=>'dolce-amp-gabbana-dg2133-04-73-dg2133-0473_tes7tc',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
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
                    'category_id'=>2,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '5',
                    'name'=>"DOLCE & GABBANA DG2144-12968G",
                    'price'=>6800000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Vàng / Mirror
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',
                    'thumbnail'=>'dolce-amp-gabbana-dg2144-12968g-dg2144-12968g-0_odxjeb',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '6',
                    'name'=>"DOLCE & GABBANA DG2144-13076G",
                    'price'=>4800000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Vàng / Mirror
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',

                    'thumbnail'=>'dolce-amp-gabbana-dg2144-13076g-dg2144-13076g-0_ltvsfk',

                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
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
                    'category_id'=>2,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '8',
                    'name'=>"DOLCE & GABBANA DG4170PF-502/T5",
                    'price'=>2430000,
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
                    'category_id'=>4,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '10',
                    'name'=>"DOLCE & GABBANA DG4257F-2969F",
                    'price'=>5040000,
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
                    'price'=>5640000,
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
                    'category_id'=>2,
                    'brand_id'=>2,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '12',
                    'name'=>"BURBERRY BE3083-1007/T8(59IT)",
                    'price'=>6440000,
                    'description'=>'Giới tính: Nam
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Metal
                                        Màu mắt: Xám Chống Chói
                                        Màu Gọng: Đen',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/697/burberry-be3083-1007-t8-59it-be3083-1007t8-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>2,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '13',
                    'name'=>"BURBERRY BE3083-1001/5U(59IT)",
                    'price'=>5740000,
                    'description'=>'Giới tính: Nam
                                            Chất liệu mắt: Plastic
                                            Chất liệu gọng: Metal
                                            Màu mắt: Xanh Green
                                            Màu Gọng: Đen
                                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/698/burberry-be3083-1001-5u-59it-be3083-10015u-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>2,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '14',
                    'name'=>"BURBERRY BE3084-1003/8G(57IT)",
                    'price'=>5704000,
                    'description'=>'Giới tính: Nam
                                            Chất liệu mắt: Plastic
                                            Chất liệu gọng: Metal
                                            Màu mắt: Xanh Green
                                            Màu Gọng: Đen
                                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/699/burberry-be3084-1003-8g-57it-be3084-10038g-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>2,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '15',
                    'name'=>"BURBERRY BE3084-1005/6V(57IT)",
                    'price'=>5064000,
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
                    'brand_id'=>2,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '16 ',
                    'name'=>"BURBERRY BE3084-1007/87(57IT)",
                    'price'=>5540000,
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
                    'brand_id'=>2,
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
                    'brand_id'=>2,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '18',
                    'name'=>"BURBERRY BE3084-1166/T3(57IT)",
                    'price'=>7040000,
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
                    'brand_id'=>2,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '19',
                    'name'=>"BURBERRY BE3084-1212/T5(57IT)",
                    'price'=>7040000,
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
                    'brand_id'=>2,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '20',
                    'name'=>"BURBERRY BE3086-1001/K4(59IT)",
                    'price'=>5540000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Đen / Gradient / Chống Chói
                                    Màu Gọng: Đen
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/705/burberry-be3086-1001-k4-59it-untitled.png',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>2,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '21',
                    'name'=>"PRADA PR01OSA-1AB3M1(55IT)",
                    'price'=>5460000,
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
                    'brand_id'=>3,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '22',
                    'name'=>"PRADA PR01OSA-UE00A6(55IT)",
                    'price'=>5090000,
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
                    'brand_id'=>3,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '23',
                    'name'=>"PRADA PR01OSA-TKR0A7(55IT)",
                    'price'=>5540000,
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
                    'brand_id'=>3,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '24',
                    'name'=>"PRADA PR01OSA-FAL0A8(55IT)",
                    'price'=>5050000,
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
                    'brand_id'=>3,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '25',
                    'name'=>"PRADA PR07PSA-1AB0A7(56IT)",
                    'price'=>3040000,
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
                    'brand_id'=>3,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '26',
                    'name'=>"PRADA PR07PSA-2AU6S1(56IT)",
                    'price'=>3040000,
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
                    'brand_id'=>3,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '27',
                    'name'=>"PRADA PR09SSF-1AB0A7(56IT)",
                    'price'=>6040000,
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
                    'brand_id'=>3,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '28',
                    'name'=>"PRADA PR09SSF-1AB9K1(56IT)",
                    'price'=>5000000,
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
                    'brand_id'=>3,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '29',
                    'name'=>"PRADA PR09SSF-2AU3D0(56IT)
",
                    'price'=>5540000,
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
                    'brand_id'=>3,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '30',
                    'name'=>"PRADA PR09SSF-UE04K0(56IT)",
                    'price'=>50040000,
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
                    'brand_id'=>3,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '31',
                    'name'=>"VERSACE VE2165-100013",
                    'price'=>8040000,
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
                    'brand_id'=>4,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '32',
                    'name'=>"VERSACE VE2165-13718G",
                    'price'=>8040000,
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
                    'brand_id'=>4,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '33',
                    'name'=>"VERSACE VE2165-136671",
                    'price'=>8040000,
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
                    'brand_id'=>4,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '34',
                    'name'=>"VERSACE VE2168-133913",
                    'price'=>8060000,
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
                    'brand_id'=>4,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '35',
                    'name'=>"VERSACE VE2168-137513
",
                    'price'=>3040000,
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
                    'brand_id'=>4,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '36',
                    'name'=>"VERSACE VE2168-137787",
                    'price'=>3004000,
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
                    'brand_id'=>4,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '37',
                    'name'=>"VERSACE VE2168-137968",
                    'price'=>2040000,
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
                    'brand_id'=>4,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '38',
                    'name'=>"VERSACE VE4271BA-507473
",
                    'price'=>2040000,
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
                    'brand_id'=>4,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '39',
                    'name'=>"VERSACE VE4271BA-GB1/8G",
                    'price'=>15040000,
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
                    'brand_id'=>4,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '40',
                    'name'=>"VERSACE VE4277A-108/13",
                    'price'=>15040000,
                    'description'=>'Giới tính: Nữ
                                            Chất liệu mắt: Plastic
                                            Chất liệu gọng: Plastic
                                            Màu mắt: Nâu / Gradient
                                            Màu Gọng: Đồi mồi
                                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1105/versace-ve4271ba-gb1-8g-ve4271-gb1-8g-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>4,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '41',
                    'name'=>"PORSCHE DESIGN P8508-B",
                    'price'=>15040000,
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
                    'category_id'=>2,
                    'brand_id'=>5,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '42',
                    'name'=>"PORSCHE DESIGN P8508-D",
                    'price'=>11540000,
                    'description'=>'Giới tính: Unisex
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Metal
                                        Màu mắt: Xám
                                        Màu Gọng: Đen
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2298/porsche-design-p8508-d-p8508-d.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>4,
                    'brand_id'=>5,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '43',
                    'name'=>"PORSCHE DESIGN P8541-C",
                    'price'=>15040000,
                        'description'=>'Giới tính: Nam
                            Chất liệu mắt: Plastic
                        Chất liệu gọng: Titanium
                        Màu mắt: Xanh Green /Mirror
                        Màu Gọng: Vàng
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2299/porsche-design-p8541-c-p8541-c.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>5,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '44',
                    'name'=>"PORSCHE DESIGN P8541-D
",
                    'price'=>12040000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Titanium
                                    Màu mắt: Xám
                                    Màu Gọng: Xám tối
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2300/porsche-design-p8541-d-p8541-d.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>5,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '45',
                    'name'=>"PORSCHE DESIGN P8542-B",
                    'price'=>12040000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Titanium
                                    Màu mắt: Nâu
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2301/porsche-design-p8542-b-p8542-b.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>5,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '46',
                    'name'=>"PORSCHE DESIGN P8542-D",
                    'price'=>12040000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Titanium
                                    Màu mắt: Bạc / Mirror
                                    Màu Gọng: Bạc
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2302/porsche-design-p8542-d-p8542-d.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>5,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '47',
                    'name'=>"PORSCHE DESIGN P8542-C",
                    'price'=>12040000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Titanium
                                    Màu mắt: Xanh Green /Mirror
                                    Màu Gọng: Xám tối
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2303/porsche-design-p8542-c-p8542-c.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>5,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '48',
                    'name'=>"PORSCHE DESIGN P8545-A",
                    'price'=>12040000,
                    'description'=>'Giới tính: Unisex
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Metal
                                        Màu mắt: Nâu / Mirror
                                        Màu Gọng: Vàng
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2304/porsche-design-p8545-a-p8545-a.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>4,
                    'brand_id'=>5,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '49',
                    'name'=>"PORSCHE DESIGN P8562-D",
                    'price'=>15040000,
                    'description'=>'Giới tính: Nam
                                        Chất liệu mắt: Plastic
                                        Chất liệu gọng: Metal
                                        Màu mắt: Nâu
                                        Màu Gọng: Nâu
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/2305/porsche-design-p8562-d-p8562-d.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>5,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '50',
                    'name'=>"MIU MIU MU04QS-1AB0A7",
                    'price'=>15040000,
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
                    'brand_id'=>6,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '51',
                    'name'=>"MIU MIU MU50QS-TIF4W1",
                    'price'=>25040000,
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
                    'brand_id'=>6,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '52',
                    'name'=>"MIU MIU MU50QS-ROY3C2",
                    'price'=>25040000,
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
                    'brand_id'=>6,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '53',
                    'name'=>"MIU MIU MU50QS-TWN1E0",
                    'price'=>25040000,
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
                    'brand_id'=>6,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '54',
                    'name'=>"MIU MIU MU52QS-53-7S00A6",
                    'price'=>17040000,
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
                    'brand_id'=>6,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '55',
                    'name'=>"MIU MIU MU52QS-53-TWJ3E2",
                    'price'=>17040000,
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
                    'brand_id'=>6,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '56',
                    'name'=>"MIU MIU MU04QS-MAR3D0",
                    'price'=>17480000 ,
                    'description'=>'    Giới tính: Nữ
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal/Plastic
                                    Màu mắt: Xám / Gradient
                                    Màu Gọng: Nâu / Vàng
                                    Lọc UV400: Có ',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/948/miu-miu-mu04qs-55-mar3d0-mu04qs-mar3d0-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>6,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '57',
                    'name'=>"MIU MIU MU05QS-1AB3H0",
                    'price'=>26040000,
                    'description'=>'Giới tính: Nữ
                            Chất liệu gọng: Metal
                            Màu mắt: Xám / Gradient
                            Màu Gọng: Đen / Vàng
                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/949/miu-miu-mu05qs-54-1ab3h0-mu05qs-1ab3h0-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>6,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '58',
                    'name'=>"MIU MIU MU05QS-DHE3H2",
                    'price'=>16040000,
                    'description'=>'Giới tính: Nữ
                    Chất liệu mắt: Plastic
                    Chất liệu gọng: Metal
                    Màu mắt: Be / Gradient
                    Màu Gọng: Vàng
                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/950/miu-miu-mu05qs-54-dhe3h2-mu05qs-dhe3h2-2-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>6,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '59',
                    'name'=>"MIU MIU MU51QS-7S03F2",
                    'price'=>13040000,
                    'description'=>'Giới tính: Nữ
                            Chất liệu mắt: Plastic
                            Chất liệu gọng: Metal
                            Màu mắt: Tím / Gradient
                            Màu Gọng: Vàng / Đồi Mồi
                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1139/miu-miu-mu51qs-59-7s03f2-mu51qs-7s03f2.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>6,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '60',
                    'name'=>"MIU MIU MU01QS-UAC0A7",
                    'price'=>13040000,
                    'description'=>'Giới tính: Nữ
                                Chất liệu mắt: Plastic
                                Chất liệu gọng: Plastic
                                Màu mắt: Xám / Gradient
                                Màu Gọng: Đen
                                Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1141/miu-miu-mu01qs-50-uac0a7-mu01qs-uac0a7.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>6,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '61',
                    'name'=>"BVLGARI BV5026K 390/81",
                    'price'=>14040000,
                    'description'=>'Giới tính: Nam
                            Chất liệu mắt: Plastic
                            Chất liệu gọng: Mạ Vàng
                            Màu mắt: Xám Chống Chói
                            Màu Gọng: Đen / Vàng
                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/953/bvlgari-bv5026k-390-81-bv5026k-390-81-2-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>7,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '62',
                    'name'=>"BVLGARI BV5026K 391/83",
                    'price'=>14000000,
                    'description'=>'Giới tính: Nam
                            Chất liệu mắt: Plastic
                            Chất liệu gọng: Mạ Vàng
                            Màu mắt: Nâu Chống Chói
                            Màu Gọng: Nâu / Vàng
                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/954/bvlgari-bv5026k-391-83-bv5026k-391-83-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>7,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '63',
                    'name'=>"BVLGARI BV5029K-390/81",
                    'price'=>14040000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Mạ Vàng
                                    Màu mắt: Xám Chống Chói
                                    Màu Gọng: Đen / Vàng
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/955/bvlgari-bv5029k-390-81-bv5029k-390-81-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>7,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '64',
                    'name'=>"BVLGARI BV6068K-393/3B",
                    'price'=>18080000,
                    'description'=>'Giới tính: Nam
                            Chất liệu mắt: Plastic
                            Chất liệu gọng: Metal/Plastic
                            Màu mắt: Nâu / Gradient
                            Màu Gọng: Đen / Vàng
                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/956/bvlgari-bv6068k-393-3b-bv6068k-393-3b-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>7,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '65',
                    'name'=>"BVLGARI BV6068K-395/3C",
                    'price'=>25040000,
                    'description'=>'Giới tính: Nam
                            Chất liệu mắt: Plastic
                            Chất liệu gọng: Metal/Plastic
                            Màu mắt: Xám / Gradient
                            Màu Gọng: Đen / Vàng
                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/957/bvlgari-bv6068k-395-3c-bv6068k-395-3c-2-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>7,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '66',
                    'name'=>"BVLGARI BV6077B-102/8G",
                    'price'=>25040000,
                    'description'=>'Giới tính: Unisex
                                            Chất liệu mắt: Plastic
                                            Chất liệu gọng: Metal
                                            Màu mắt: Xám / Gradient
                                            Màu Gọng: Bạc
                                            Lọc UV400: Có',

                    'thumbnail'=>'Giới tính: Unisex
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Xám / Gradient
                                    Màu Gọng: Bạc
                                    Lọc UV400: Có',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>4,
                    'brand_id'=>7,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '67',
                    'name'=>"BVLGARI BV6077B-278/13",
                    'price'=>35040000,
                    'description'=>'Giới tính: Unisex
                    Chất liệu mắt: Plastic
                    Chất liệu gọng: Metal/Plastic
                    Màu mắt: Nâu / Gradient
                    Màu Gọng: Đen / Vàng
                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/959/bvlgari-bv6077b-278-13-bv6077b-278-13-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>4,
                    'brand_id'=>7,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '68',
                    'name'=>"BVLGARI BV6077B-376/8G",
                    'price'=>15040000,
                    'description'=>'Giới tính: Unisex
                                Chất liệu mắt: Plastic
                                Chất liệu gọng: Metal
                                Màu mắt: Xám / Gradient
                                Màu Gọng: Đen / Vàng
                                Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/960/bvlgari-bv6077k-376-8g-bv6077b-376-8g-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>4,
                    'brand_id'=>7,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '69',
                    'name'=>"BVLGARI BV6082-278/13",
                    'price'=>15040000,
                    'description'=>'Giới tính: Nữ
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal/Plastic
                                    Màu mắt: Nâu / Gradient
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/963/bvlgari-bv6082-278-13-bv6082-278-13-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>7,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '70',
                    'name'=>"BVLGARI BV6083-239/6G",
                    'price'=>15040000,
                    'description'=>'Giới tính: Nữ
                        Chất liệu mắt: Plastic
                        Chất liệu gọng: Metal
                        Màu mắt: Bạc / Mirror
                        Màu Gọng: Đen
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/969/bvlgari-bv6083-239-6g-bv6083-239-6g-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>7,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '71',
                    'name'=>"MICHAEL KORS POLA MK5007-1043/T5(59CN)",
                    'price'=>25040000,
                    'description'=>'Giới tính: Nữ
                            Chất liệu mắt: Plastic
                            Chất liệu gọng: Metal
                            Màu mắt: Nâu Chống Chói / Gradient
                            Màu Gọng: Vàng
                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/716/michael-kors-pola-mk5007-1043-t5-59cn-mk5007-1043t5-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>8,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '72',
                    'name'=>"MICHAEL KORS MK1001-1019/14(59CN)",
                    'price'=>14040000,
                    'description'=>'Giới tính: Nữ
                    Chất liệu mắt: Plastic
                    Chất liệu gọng: Metal
                    Màu mắt: Nâu / Gradient
                    Màu Gọng: Vàng
                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/717/michael-kors-mk1001-1019-14-59cn-mk1001-101914-1-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>8,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '73',
                    'name'=>"MICHAEL KORS MK1001-1021/R1(59CN)",
                    'price'=>17040000,
                    'description'=>'Giới tính: Nữ
                            Chất liệu mắt: Plastic
                            Chất liệu gọng: Metal
                            Màu mắt: Vàng Hồng / Flash
                            Màu Gọng: Vàng Hồng
                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/718/michael-kors-mk1001-1021-r1-59cn-mk1001-1021r1-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>8,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '74',
                    'name'=>"MICHAEL KORS MK1003-1004/6E(58CN)",
                    'price'=>18040000,
                    'description'=>'Giới tính: Nữ
                        Chất liệu mắt: Plastic
                        Chất liệu gọng: Metal
                        Màu mắt: Vàng / Mirror
                        Màu Gọng: Vàng
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/719/michael-kors-mk1003-1004-6e-58cn-mk1003-10046e-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>8,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '75',
                    'name'=>"MICHAEL KORS MK1005-1057/13(59CN)",
                    'price'=>16040000,
                    'description'=>'Giới tính: Nữ
                    Chất liệu mắt: Plastic
                    Chất liệu gọng: Metal/Plastic
                    Màu mắt: Nâu / Gradient
                    Màu Gọng: Đen
                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/720/michael-kors-mk1005-1057-13-59cn-mk1005-105713-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>8,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '76',
                    'name'=>"MICHAEL KORS MK1005-1057/R5(59CN) ",
                    'price'=>17040000,
                    'description'=>'Giới tính: Nữ
                            Chất liệu mắt: Plastic
                            Chất liệu gọng: Metal/Plastic
                            Màu mắt: Vàng / Mirror
                            Màu Gọng: Đen
                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/721/michael-kors-mk1005-1057-r5-59cn-mk1005-1057r5-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>8,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '77',
                    'name'=>"MICHAEL KORS MK1005-1058/6G(59CN)",
                    'price'=>5540000,
                    'description'=>'Giới tính: Nữ
                    Chất liệu mắt: Plastic
                    Chất liệu gọng: Metal/Plastic
                    Màu mắt: Bạc / Mirror
                    Màu Gọng: Đen
                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/722/michael-kors-mk1005-1058-6g-59cn-mk1005-10586g-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '78',
                    'name'=>"MICHAEL KORS MK1005-1059/11(59CN)",
                    'price'=>6540000,
                    'description'=>'Giới tính: Nữ
                Chất liệu mắt: Plastic
                Chất liệu gọng: Metal/Plastic
                Màu mắt: Xám / Gradient
                Màu Gọng: Đen
                Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/723/michael-kors-mk1005-1059-11-59cn-mk1005-105911-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>8,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '79',
                    'name'=>"MICHAEL KORS MK2022F-3169/13(54CN)",
                    'price'=>6500000,
                                                'description'=>'Giới tính: Nữ
                            Chất liệu mắt: Plastic
                            Chất liệu gọng: Plastic
                            Màu mắt: Nâu
                            Màu Gọng: Đồi mồi
                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/726/michael-kors-mk2022f-3169-13-54cn-mk2022f-316913-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>8,
                    'brand_id'=>1,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '80',
                    'name'=>"MICHAEL KORS MK2025F-3167/13(54CN)",
                    'price'=>5840000,
                    'description'=>'Giới tính: Nữ
                        Chất liệu mắt: Plastic
                        Chất liệu gọng: Plastic
                        Màu mắt: Nâu / Gradient
                        Màu Gọng: Nâu
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/727/michael-kors-mk2025f-3167-13-54cn-mk2025f-316713-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>8,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '81',
                    'name'=>"OAKLEY TAILPIN OO4086-4086/12(61CN)",
                    'price'=>5940000,
                    'description'=>'Giới tính: Nam
                        Chất liệu mắt: Plastic
                        Chất liệu gọng: Metal
                        Màu mắt: Xám
                        Màu Gọng: Chì
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1653/oakley-tailpin-oo4086-4086-12-61cn-oo4086-12.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>9,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '82',
                    'name'=>"OAKLEY ELMONT OO4119-4119/02(60CN)",
                    'price'=>6500000,
                    'description'=>'Giới tính: Nam
                        Chất liệu mắt: Plastic
                        Chất liệu gọng: Metal
                        Màu mắt: Xám Chống Chói / Gradient
                        Màu Gọng: Bạc
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1658/oakley-elmont-oo4119-4119-02-60cn-oo4119-02.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>9,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],[
                    'id' => '83',
                    'name'=>"OAKLEY ELMONT OO4119-4119/03(60CN)",
                    'price'=>6500000,
                    'description'=>'Giới tính: Nam
                        Chất liệu mắt: Plastic
                        Chất liệu gọng: Metal
                        Màu mắt: Xanh Green /Mirror
                        Màu Gọng: Vàng
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1659/oakley-elmont-oo4119-4119-03-60cn-oo4119-03.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>9,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '84',
                    'name'=>"OAKLEY ELMONT OO4119-4119/04(60CN)",
                    'price'=>9500000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Cam / Mirror
                                    Màu Gọng: Đen
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1660/oakley-elmont-oo4119-4119-04-60cn-oo4119-04.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>9,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '85',
                    'name'=>"OAKLEY ELMONT OO4119-4119/07(60CN)",
                    'price'=>10500000,
                    'description'=>'Giới tính: Nam
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu mắt: Xanh Blue Chống Chói / Mirror
                                    Màu Gọng: Bạc
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1661/oakley-elmont-oo4119-4119-07-60cn-oo4119-07.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>9,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '86',
                    'name'=>"OAKLEY CATALYST OO9272-9272/06(56US)",
                    'price'=>15040000,
                    'description'=>'Giới tính: Nam
                        Chất liệu mắt: Plastic
                        Chất liệu gọng: Plastic
                        Màu mắt: Tím / Mirror
                        Màu Gọng: Đen
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1684/oakley-catalyst-oo9272-9272-06-56us-oo9272-06.png',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>9,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '87',
                    'name'=>"OAKLEY CATALYST OO9272-9272/17(56US)",
                    'price'=>1500000,
                    'description'=>'https://eyewearstore.vn/uploads/plugin/products/1685/oakley-catalyst-oo9272-9272-17-56us-oo9272-17.jpg',

                    'thumbnail'=>'Giới tính: Nam
                                Chất liệu mắt: Plastic
                                Chất liệu gọng: Plastic
                                Màu mắt: Xám
                                Màu Gọng: Đen
                                Lọc UV400: Có',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>9,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '89',
                    'name'=>"OAKLEY CONDUCTOR 6 OO4106-4106/01(58CN)",
                    'price'=>14040000,
                    'description'=>'Giới tính: Nam
                        Chất liệu mắt: Plastic
                        Chất liệu gọng: Metal
                        Màu mắt: Đen Xám / Mirror
                        Màu Gọng: Đen
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1654/oakley-conductor-oo4106-4106-01-58cn-oo4106-01.png',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>9,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '90',
                    'name'=>"OAKLEY CONDUCTOR 6 OO4106-4106/09(58CN)",
                    'price'=>13000000,
                    'description'=>'Giới tính: Nam
        Chất liệu mắt: Plastic
        Chất liệu gọng: Metal
        Màu mắt: Xanh Blue / Mirror
        Màu Gọng: Chì
        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1656/oakley-conductor-6-oo4106-4106-09-58cn-oo4106-09.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>9,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '91',
                    'name'=>"CARTIER ESW00093",
                    'price'=>12000000,
                    'description'=>'Giới tính: Nam
                        Màu mắt: Xám / Gradient
                        Màu Gọng: Đen / Vàng
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1131/cartier-esw00093-cartier-esw00093.png',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>10,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '92',
                    'name'=>"CARTIER ESW00094",
                    'price'=>3400000,
                    'description'=>'Giới tính: Nam
                                Màu mắt: Vàng / Mirror
                                Màu Gọng: Đen / Vàng
                                Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1132/cartier-esw00094-cartier-esw00094.png',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>10,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ], [
                    'id' => '93',
                    'name'=>"CARTIER T8200695",
                    'price'=>2040000,
                    'description'=>'Giới tính: Nữ
                                        Màu mắt: Nâu
                                        Màu Gọng: Trắng Bạc
                                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1133/cartier-t8200695-cartier-t8200695.png',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>10,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '94',
                    'name'=>"CARTIER T8200812",
                    'price'=>7500000,
                    'description'=>'Giới tính: Nữ
                        Màu mắt: Đỏ
                        Màu Gọng: Trắng Bạc
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1134/cartier-t8200812-cartier-t8200812.png',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>10,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '95',
                    'name'=>"CARTIER T8200889",
                    'price'=>1200000,
                    'description'=>'Giới tính: Nam
                        Màu mắt: Nâu Chống Chói
                        Màu Gọng: Nâu / Vàng
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1135/cartier-t8200889-cartier-t8200889.png',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>10,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '96',
                    'name'=>"CARTIER T8200892",
                    'price'=>13000000,
                    'description'=>'Giới tính: Nam
                        Màu mắt: Xám Chống Chói
                        Màu Gọng: Xám tối
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1136/cartier-t8200892-cartier-t8200892-1.png',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>10,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '97',
                    'name'=>"CARTIER T8200614",
                    'price'=>14000000,
                    'description'=>'Giới tính: Nữ
                            Màu mắt: Xanh Blue Tối
                            Màu Gọng: Trắng Bạc
                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1137/cartier-t8200614-cartier-t8200614.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>10,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '98',
                    'name'=>"CARTIER EYE00074",
                    'price'=>14000000,
                    'description'=>'Màu Gọng: Vàng',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1149/cartier-t8100745-cartier-t8100745.png',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>5,
                    'brand_id'=>10,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '99',
                    'name'=>"CARTIER T8100906",
                    'price'=>24000000,
                    'description'=>'Màu Gọng: Nâu',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/1152/cartier-t8100906-cartier-t8100906.png',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>5,
                    'brand_id'=>10,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '100',
                    'name'=>"CARTIER T8101031",
                    'price'=>4000000,
                    'description'=>'Màu Gọng: Vàng',

                    'thumbnail'=>'CARTIER T8101031',
                    'status'=>'active',
                    'created_by'=>5,
                    'category_id'=>2,
                    'brand_id'=>10,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '101',
                    'name'=>"FRED FORCE 10 C1 8414-002",
                    'price'=>5500000,
                    'description'=>'Giới tính: Nữ
                                Chất liệu gọng: Bạch Kim
                                Màu Gọng: Bạc',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/3333/fred-force-10-c1-8414-002-fred-force-10-c1-8414-002.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>11,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '102',
                    'name'=>"FRED FORCE 10 C3 8424-105",
                    'price'=>5000000,
                    'description'=>'Giới tính: Nữ',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/3760/fred-force-10-c3-8424-105-fred-force-10-c3-8424-105.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>11,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '103',
                    'name'=>"FRED FORCE 10 C4 8425-102",
                    'price'=>5800000,
                    'description'=>'Giới tính: Nữ',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/3761/fred-force-10-c4-8425-102-fred-force-10-c4-8425-102.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>11,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '104',
                    'name'=>"FRED FORCE 10 C4 8425-105",
                    'price'=>5500000,
                    'description'=>'Giới tính: Nữ',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/3762/fred-force-10-c4-8425-105-fred-force-10-c4-8425-105.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>11,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '105',
                    'name'=>"FRED FORCE 10 C4 8425-108",
                    'price'=>5900000,
                    'description'=>'Giới tính: Nữ',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/3763/fred-force-10-c4-8425-108-fred-force-10-c4-8425-108.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>11,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '106',
                    'name'=>"RED FORCE 10 F3 8420-006",
                    'price'=>5600000,
                    'description'=>'Giới tính: Nữ',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/3764/fred-force-10-f3-8420-006-fred-force-10-f3-8420-006.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>11,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '107',
                    'name'=>"FRED FORCE 10 N1 8417-005",
                    'price'=>5800000,
                    'description'=>'Giới tính: Nữ',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/3765/fred-force-10-n1-8417-005-fred-force-10-n1-8417-005.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>11,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '108',
                    'name'=>"FRED FORCE 10 N1 8417-002",
                    'price'=>5050000,
                    'description'=>'Giới tính: Nữ',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/3766/fred-force-10-n1-8417-002-fred-force-10-n1-8417-002-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>11,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '109',
                    'name'=>"FRED FORCE 10 F2 8419-002",
                    'price'=>3040000,
                    'description'=>'Giới tính: Nữ',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/3767/fred-force-10-f2-8419-002-fred-force-10-f2-8419-002.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>11,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '110',
                    'name'=>"FRED FORCE 10 F2 8419-005",
                    'price'=>4040000,
                    'description'=>'Giới tính: Nữ',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/3768/fred-force-10-f2-8419-005-fred-force-10-f2-8419-005.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>11,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ], [
                    'id' => '111',
                    'name'=>"GỌNG CHOPARD CH256-0300",
                    'price'=>8040000,
                    'description'=>'Giới tính: Unisex
                                    Chất liệu mắt: Plastic
                                    Chất liệu gọng: Metal
                                    Màu Gọng: Vàng
                                    Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/4686/g-ng-chopard-ch256-0300-2-1.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>5,
                    'brand_id'=>12,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '112',
                    'name'=>"GỌNG CHOPARD CH256M-04GA",
                    'price'=>5800000,
                    'description'=>'Giới tính: Unisex
                            Chất liệu mắt: Plastic
                            Chất liệu gọng: Metal
                            Màu Gọng: Tím
                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/4687/g-ng-chopard-ch256m-04ga-chopard-vch256m-04ga-0.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>5,
                    'brand_id'=>12,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '113',
                    'name'=>"GỌNG CHOPARD CH256M-08FE",
                    'price'=>5000000,
                    'description'=>'Giới tính: Unisex
                        Chất liệu mắt: Plastic
                        Chất liệu gọng: Metal
                        Màu Gọng: Vàng
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/4688/g-ng-chopard-ch256m-08fe-vch256m-08fe.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>5,
                    'brand_id'=>12,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '114',
                    'name'=>"KÍNH MÁT CHOPARD CH260S-01BV",
                    'price'=>5000000,
                    'description'=>'Giới tính: Nữ
                            Chất liệu mắt: Plastic
                            Chất liệu gọng: Metal
                            Màu mắt: Nâu / Gradient
                            Màu Gọng: Vàng
                            Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/4689/mat-chopard-ch260s-01bv-capture.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>1,
                    'brand_id'=>12,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '115',
                    'name'=>"KÍNH MÁT CHOPARD CH260S-0700",
                    'price'=>5800000,
                    'description'=>'Giới tính: Unisex
                                Chất liệu mắt: Plastic
                                Chất liệu gọng: Metal
                                Màu Gọng: Vàng
                                Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/4690/kinh-mat-chopard-ch260s-0700-2-ch260s-0700.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>5,
                    'brand_id'=>12,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => '116',
                    'name'=>"KÍNH MÁT CHOPARD CH261M-300G",
                    'price'=>5840000,
                    'description'=>'Giới tính: Nữ
                        Chất liệu mắt: Plastic
                        Chất liệu gọng: Metal
                        Màu mắt: Nâu
                        Màu Gọng: Vàng
                        Lọc UV400: Có',

                    'thumbnail'=>'https://eyewearstore.vn/uploads/plugin/products/4692/kinh-mat-chopard-ch261m-300g-ch261m-300g.jpg',
                    'status'=>'active',
                    'created_by'=>1,
                    'category_id'=>2,
                    'brand_id'=>12,
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ]]
        );

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//        if (env('DB_CONNECTION') == 'mysql') {
//            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//        }
    }
}
