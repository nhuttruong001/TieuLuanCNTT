<?php

use Illuminate\Database\Seeder;

class nhacungcap extends Seeder
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
                'ncc_id' => 1,
                'ncc_tên' => 'nike',
                'ncc_trangthai' => 1
            ],
            [
                'ncc_id' => 2,
                'ncc_tên' => 'adidas',
                'ncc_trangthai' => 1
            ],
            [
                'ncc_id' => 3,
                'ncc_tên' => 'bitis',
                'ncc_trangthai' => 1
            ]

            ];
            DB::table('nhacungcap')->insert($arr);
    }
}
