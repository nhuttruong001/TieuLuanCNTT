<?php

use Illuminate\Database\Seeder;

class nhanvienSeeder extends Seeder
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
                'nv_id' => 1,
                'nv_username' => 'hoang01',
                'nv_password' => bcrypt('hoang01'),
                'nv_hoten' => 'Lê Minh Hoàng',
                'nv_gioitinh' => 1, #1 la nam 0 la nu
                'nv_ngaysinh' => '1996-01-01',
                'nv_diachi' => 'Châu Thành, Tiền Giang',
                'nv_sdt' => '03978787098',
                'nv_trangthai' => 1
            ],
            [
                'nv_id' => 2,
                'nv_username' => 'linh01',
                'nv_password' => bcrypt('linh01'),
                'nv_hoten' => 'Nguyễn Ngọc Linh',
                'nv_gioitinh' => 0, #1 la nam 0 la nu
                'nv_ngaysinh' => '1998-01-01',
                'nv_diachi' => 'Mỹ Xuyên, Sóc Trăng',
                'nv_sdt' => '03978787111',
                'nv_trangthai' => 1
            ],
            [
                'nv_id' => 3,
                'nv_username' => 'truong01',
                'nv_password' => bcrypt('truong01'),
                'nv_hoten' => 'Nguyễn Nhựt Trường',
                'nv_gioitinh' => 1, #1 la nam 0 la nu
                'nv_ngaysinh' => '1998-08-01',
                'nv_diachi' => 'Mang Thít, Vĩnh Long',
                'nv_sdt' => '03978782222',
                'nv_trangthai' => 1
            ],
            [
                'nv_id' => 4,
                'nv_username' => 'sang01',
                'nv_password' => bcrypt('sang01'),
                'nv_hoten' => 'Nguyễn Huỳnh Hải Sang',
                'nv_gioitinh' => 1, #1 la nam 0 la nu
                'nv_ngaysinh' => '1998-10-11',
                'nv_diachi' => 'Thốt Nốt, Cần Thơ',
                'nv_sdt' => '03978006611',
                'nv_trangthai' => 1
            ],
            [
                'nv_id' => 5,
                'nv_username' => 'tien01',
                'nv_password' => bcrypt('tien01'),
                'nv_hoten' => 'Hồng Anh Tiến',
                'nv_gioitinh' => 1, #1 la nam 0 la nu
                'nv_ngaysinh' => '1996-01-03',
                'nv_diachi' => 'Mỹ Tho, Tiền Giang',
                'nv_sdt' => '03978787101',
                'nv_trangthai' => 1
            ],
            [
                'nv_id' => 6,
                'nv_username' => 'liem01',
                'nv_password' => bcrypt('liem01'),
                'nv_hoten' => 'Võ Sĩ Liêm',
                'nv_gioitinh' => 1, #1 la nam 0 la nu
                'nv_ngaysinh' => '1998-01-11',
                'nv_diachi' => 'Phú Tân, An Giang',
                'nv_sdt' => '03978701965',
                'nv_trangthai' => 1
            ]
        ];

            DB::table('nhanvien')->insert($arr);
    }
}
