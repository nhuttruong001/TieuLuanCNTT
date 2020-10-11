<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table = "khachhang";
    protected $primaryKey = 'kh_id';
    protected $guarded      = ['kh_id'];
    protected $fillable = [
        'kh_username',
        'kh_password',
        'kh_hoten',
        'kh_ngaysinh',
        'kh_gioitinh',
        'kh_diachi',
        'kh_sdt',
        'kh_trangthai'
    ];

    public function hoadon(){
        $this->hasMany('App\hoadon','hd_id','hd_id');
    }
}
