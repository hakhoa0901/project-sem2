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
        //
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
      DB::table('products')->insert([  [
                'id'=> 1,
                'name'=> 'Kính mắt lục giác',
                'price'=> '890.000 VNĐ',
                'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/j75005-blk_295x.jpg?v=1590115183',
                'description'=>'Kính mắt nam',

            ],
              [
                  'id'=> 2,
                  'name'=> 'EF58750-C07',
                  'price'=> '500.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/EF58750-C07_800x.JPG?v=1544556974',
                  'description'=>'Kính mắt nam',

              ],
              [
                  'id'=> 3,
                  'name'=> 'Kính râm nam kinh loại mắt vuông',
                  'price'=> '890.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/J45043-blk_295x.jpg?v=1590119560',
                  'description'=>'Kính mắt nam',

              ],
              [
                  'id'=> 4,
                  'name'=> 'Kính phi công nam tròng xanh',
                  'price'=> '890.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/J75007-GDBR_800x.jpg?v=1588564940',
                  'description'=>'Kính mắt nam',

              ],
              [
                  'id'=> 5,
                  'name'=> 'EF58773-C05',
                  'price'=> '560.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/EF58773-C05_800x.JPG?v=1544557289',
                  'description'=>'Kính mắt nam',

              ],
              [
                  'id'=> 6,
                  'name'=> 'J75006-GUN',
                  'price'=> '590.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/J75006-GUN_800x.jpg?v=1565024665',
                  'description'=>'Kính mắt nam',

              ],
              [
                  'id'=> 7,
                  'name'=> 'J75006-SIL',
                  'price'=> '590.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/J75006-SIL_295x.jpg?v=1518418395',
                  'description'=>'Kính mắt nam',

              ],
              [
                  'id'=> 8,
                  'name'=> 'Kính mắt lục giác',
                  'price'=> '890.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/j75005-blk_295x.jpg?v=1590115183',
                  'description'=>'Kính mắt nam',

              ],
              [
                  'id'=> 9,
                  'name'=> 'Kính mắt lục giác',
                  'price'=> '890.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/j75005-blk_295x.jpg?v=1590115183',
                  'description'=>'Kính mắt nam',

              ],
              [
                  'id'=> 10,
                  'name'=> 'Kính mắt lục giác',
                  'price'=> '890.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/j75005-blk_295x.jpg?v=1590115183',
                  'description'=>'Kính mắt nam',

              ],
              [
                  'id'=> 11,
                  'name'=> 'Kính mắt lục giác',
                  'price'=> '890.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/j75005-blk_295x.jpg?v=1590115183',
                  'description'=>'Kính mắt nam',

              ],
              [
                  'id'=> 12,
                  'name'=> 'Kính mắt lục giác',
                  'price'=> '890.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/j75005-blk_295x.jpg?v=1590115183',
                  'description'=>'Kính mắt nam',

              ],
              [
                  'id'=> 13,
                  'name'=> 'Kính mắt lục giác',
                  'price'=> '890.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/j75005-blk_295x.jpg?v=1590115183',
                  'description'=>'Kính mắt nam',

              ],
              [
                  'id'=> 14,
                  'name'=> 'Kính mắt lục giác',
                  'price'=> '890.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/j75005-blk_295x.jpg?v=1590115183',
                  'description'=>'Kính mắt nam',

              ], [
                  'id'=> 15,
                  'name'=> 'Kính mắt lục giác',
                  'price'=> '890.000 VNĐ',
                  'images'=> 'https://cdn.shopify.com/s/files/1/2726/7182/products/j75005-blk_295x.jpg?v=1590115183',
                  'description'=>'Kính mắt nam',

              ]


               ]

        );
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
