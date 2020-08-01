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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('brands')->truncate();
        DB::table('brands')->insert([[
                'id' => '1',
                'name'=>" DOLCE & GABBANA"
            ],
                [
                    'id' => '2',
                    'name'=>"GUCCI"
                ],[
                    'id' => '3',
                    'name'=>"DIOR"
                ],
                [
                    'id' => '4',
                    'name'=>"PRADA"
                ],
                [
                    'id' => '5',
                    'name'=>"ASOS"
                ],
                [
                    'id' => '6',
                    'name'=>"FENDI"
                ],
                [
                    'id' => '7',
                    'name'=>"TOM FORD"
                ],
                [
                    'id' => '8',
                    'name'=>"THOM BROWNE"
                ],
                [
                    'id' => '9',
                    'name'=>"RAYBAN"
                ],[
                    'id' => '10',
                    'name'=>"LINDA FARROW"
                ],[
                    'id' => '11',
                    'name'=>"BOTTEGA VENETA"
                ],
                [
                    'id' => '12',
                    'name'=>"MAISON MARGIELA"
                ],[
                    'id' => '13',
                    'name'=>"GARRETT LEIGHT"
                ],[
                    'id' => '14',
                    'name'=>"GENTLE MONSTER"
                ],[
                    'id' => '15',
                    'name'=>"MIU MIU"
                ],[
                    'id' => '16',
                    'name'=>"ALICE+OLIVIA"
                ],[
                    'id' => '17',
                    'name'=>"LE SPECS"
                ],[
                    'id' => '18',
                    'name'=>"RIVER ISLAND"
                ],[
                    'id' => '19',
                    'name'=>"TOPSHOP"
                ],[
                    'id' => '20',
                    'name'=>"ALDO"
                ]
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
