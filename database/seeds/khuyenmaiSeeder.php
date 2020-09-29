<?php

use Illuminate\Database\Seeder;

class khuyenmaiSeeder extends Seeder
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
                'km_ngaybd' => '2020-01-01',
                'km_ngaykt' => '2020-01-05',
                'km_phantram' => 25.0,
                'km_trangthai' => 1
            ],
            [
                'km_id' => 2,
                'km_ngaybd' => '2020-02-01',
                'km_ngaykt' => '2020-02-04',
                'km_phantram' => 15.0,
                'km_trangthai' => 1
            ],
            [
                'km_id' => 3,
                'km_ngaybd' => '2021-03-10',
                'km_ngaykt' => '2021-01-15',
                'km_phantram' => 30.0,
                'km_trangthai' => 1
            ]

            ];
            DB::table('khuyenmai')->insert($arr);
    }
}
