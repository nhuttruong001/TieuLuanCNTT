<?php

use Illuminate\Database\Seeder;

class khuyenmai extends Seeder
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
                'km_id' => 1,
                'km_ngaybd' => '2020-09-01',
                'km_ngaykt' => '2020-09-05',
                'km_phantram' => 25,
                'km_trangthai' =>1
            ],
            [
                
                'km_id' => 2,
                'km_ngaybd' => '2020-10-01',
                'km_ngaykt' => '2020-10-05',
                'km_phantram' => 20,
                'km_trangthai' =>1
            ],
            [
                'km_id' => 3,
                'km_ngaybd' => '2020-11-01',
                'km_ngaykt' => '2020-11-05',
                'km_phantram' => 30,
                'km_trangthai' =>1
            ]
            ];
            DB::table('khuyenmai')->insert($arr);
    }
}
