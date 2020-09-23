<?php

use Illuminate\Database\Seeder;

class nhanvien_catruc extends Seeder
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
                'nv_id' => 1
            ],
            [
                'ca_id' => 1,
                'nv_id' => 2
            ],
            [
                'ca_id' => 2,
                'nv_id' => 3
            ],
            [
                'ca_id' => 2,
                'nv_id' => 4
            ],
            [
                'ca_id' => 3,
                'nv_id' => 5
            ],
            [
                'ca_id' => 3,
                'nv_id' => 6
            ]


            ];
            DB::table('nhanvien_catruc')->insert($arr);
    }
}
