<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catruc extends Model
{
    protected $table = "catruc";

    public function admin(){
        return $this->belongsto('App\admin','ad_id','ad_id');
    }

    public function nhanvien(){
        return $this->hasMany('App\nhanvien','nv_id','nv_id');
    }
}
