<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catruc extends Model
{
    protected $table = "catruc";

    public function admin(){
        return $this->belongsto('App\admin');
    }

    public function nhanvien(){
        return $this->belongstoMany('App\nhanvien','nhanvien_catruc','nv_id','ad_id');
    }
}
