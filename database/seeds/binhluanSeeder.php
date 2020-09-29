<?php

use Illuminate\Database\Seeder;

class binhluanSeeder extends Seeder
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
                'bl_id' => 1,
                'kh_id' => 1,
                'giay_id' => 1,
                'bl_noidung' => 'giay dep qua',
                'bl_trangthai' => 1
            ],
            [
                'bl_id' => 2,
                'kh_id' => 2,
                'giay_id' => 1,
                'bl_noidung' => 'giay dep qua',
                'bl_trangthai' => 1
            ],
            [
                'bl_id' => 3,
                'kh_id' => 2,
                'giay_id' => 2,
                'bl_noidung' => 'giay dep qua, toi da mua va thay chat luong rat tot',
                'bl_trangthai' => 1
            ]

            ];
            DB::table('binhluan')->insert($arr);
    }
}
