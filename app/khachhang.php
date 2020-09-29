<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table = "khachhang";

    public function hoadon(){
        $this->hasMany('App\hoadon','hd_id','hd_id');
    }
}
