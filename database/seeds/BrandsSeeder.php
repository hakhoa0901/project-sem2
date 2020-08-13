<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
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
        DB::table('brands')->truncate();
        DB::table('brands')->insert([
            [
                'id' => 1,
                'name'=>" DOLCE & GABBANA"
            ],
                [

                    'id' => '2',
                    'name'=>"BURBERRY"
                ],[
                    'id' => '3',
                    'name'=>"PRADA"
                ],
                [
                    'id' => '4',
                    'name'=>"VERSACE"
                ],
                [
                    'id' => '5',
                    'name'=>"PORSCHE"
                ],
                [
                    'id' => '6',
                    'name'=>"MIU MIU"
                ],
                [
                    'id' => '7',
                    'name'=>"BVLGARI"
                ],
                [
                    'id' => '8',
                    'name'=>"MICHAEL KORS"
                ],
                [
                    'id' => '9',
                    'name'=>"OAKLEY"
                ],[
                    'id' => '10',
                    'name'=>"CARTIER"
                ],[
                    'id' => '11',
                    'name'=>"FRED"
                ],
                [
                    'id' => '12',
                    'name'=>"Chopard"
                ]
            ]
        );

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//        if (env('DB_CONNECTION') == 'mysql') {
//            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//        }
    }
}
