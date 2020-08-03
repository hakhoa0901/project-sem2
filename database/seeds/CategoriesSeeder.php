<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
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
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
                [
                    'id' => 1,
                    'name' => 'Women',
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => 2,
                    'name' => 'Men',
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ], [
                    'id' => 3,
                    'name' => 'Kids',
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ],
                [
                    'id' => 4,
                    'name' => 'Glasses Shop',
                    'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
                ]
            ]
        );
//        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
