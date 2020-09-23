<?php

use Illuminate\Database\Seeder;

class admin extends Seeder
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
                'ad_id' => 1,
                'ad_username' => 'nhuttruong',
                'ad_password' => bcrypt('nhuttruong001'),
                'ad_trangthai' => 1
            ],
            [
                'ad_id' => 2,
                'ad_username' => 'haisang',
                'ad_password' => bcrypt('haisang001'),
                'ad_trangthai' => 1
            ]

            ];
            DB::table('admin')->insert($arr);
    }
}
