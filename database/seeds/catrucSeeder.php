<?php

use Illuminate\Database\Seeder;

class catrucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
               'ca_id' => 1,
               'ad_id' => 1, 
               'ca_ten' => 'ca1',
               'ca_trangthai' => 1
            ],
            [
                'ca_id' => 2,
                'ad_id' => 2, 
                'ca_ten' => 'ca2',
                'ca_trangthai' => 1
            ],
            [
                'ca_id' => 3,
                'ad_id' => 3, 
                'ca_ten' => 'ca3',
                'ca_trangthai' => 1
             ]

            ];
            DB::table('catruc')->insert($arr);
    }
}
