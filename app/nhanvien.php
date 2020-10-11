<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table = "nhanvien";
    protected $primaryKey = 'nv_id';
    protected $guarded      = ['nv_id'];
    protected $fillable = [
        'nv_username',
        'nv_password',
        'nv_hoten',
        'nv_gioitinh',
        'nv_ngaysinh',
        'nv_diachi',
        'nv_sdt',
        'nv_trangthai'
    ];

    public function catruc(){
        $this->hasMany('App\catruc','ca_id','ca_id');
    }
    public function hoadon(){
        $this->hasMany('App\hoadon','hd_id','hd_id');
    }

}
