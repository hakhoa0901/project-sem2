<?php

use Illuminate\Database\Seeder;
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
       DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([[
                'id' => '1',
                'name'=>"Women"
                ],
                [
                    'id' => '2',
                    'name'=>"Men"
                ],[
                    'id' => '3',
                    'name'=>"Kids"
                ],
                [
                    'id' => '4',
                    'name'=>"Glasses Shop"
                ]
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
