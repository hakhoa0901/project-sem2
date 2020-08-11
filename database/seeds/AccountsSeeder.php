<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsSeeder extends Seeder
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
        DB::table('accounts')->truncate();
        DB::table('accounts')->insert([
                [
                    'id' => '1',
                    'name'=>'nvdat',
                    'userName'=>'lcnvdat',
                    'password_hash'=>'datbg123',
                    'salt'=>'1234567',
                    'address'=>'bg',
                    'email'=>'vudatlc0110',
                    'phone'=>'1234578',
                    'status'=>1,
                    'type'=>'admin'
                ]
            ]

        );

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//        if (env('DB_CONNECTION') == 'mysql') {
//            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//        }
    }
}
