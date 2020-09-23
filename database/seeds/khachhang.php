<?php

use Illuminate\Database\Seeder;

class khachhang extends Seeder
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
                'kh_id' => 1,
                'kh_username' => 'ngoclinh',
                'kh_password' => bcrypt('ngoclinh'),
                'kh_hoten' => 'Nguyễn Ngọc Linh',
                'kh_ngaysinh' => '1998-02-01',
                'kh_gioitinh' => 1,#1 là nam 0 là nữ
                'kh_diachi' => 'Mỹ Xuyên, Sóc Trăng',
                'kh_sdt' => '09881234561',
                'kh_trangthai' => 1

            ],
            [
                'kh_id' => 2,
                'kh_username' => 'hongtien',
                'kh_password' => bcrypt('hongtien'),
                'kh_hoten' => 'Hồng Anh Tiến',
                'kh_ngaysinh' => '1998-07-07',
                'kh_gioitinh' => 1,#1 là nam 0 là nữ
                'kh_diachi' => 'Mỹ Xuyên, Sóc Trăng',
                'kh_sdt' => '03867676767',
                'kh_trangthai' => 1

            ],
            [
                'kh_id' => 3,
                'kh_username' => 'thanhphan',
                'kh_password' => bcrypt('thanhphan'),
                'kh_hoten' => 'Phan Văn Thành',
                'kh_ngaysinh' => '1998-02-08',
                'kh_gioitinh' => 1,#1 là nam 0 là nữ
                'kh_diachi' => 'Phú Tân, An Giang',
                'kh_sdt' => '09881234987',
                'kh_trangthai' => 1

            ]

            ];
            DB::table('khachhang')->insert($arr);
    }
}
