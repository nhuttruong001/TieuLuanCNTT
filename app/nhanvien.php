<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table = "nhanvien";

    public function catruc(){
        $this->hasMany('App\catruc','ca_id','ca_id');
    }
    public function hoadon(){
        $this->hasMany('App\hoadon','hd_id','hd_id');
    }

}
