<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giay extends Model
{
    protected $table = "giay";

    public function loaigiay(){
        return $this->belongsto('App\loaigiay','loai_id','loai_id');
    }

    public function nhacungcap(){
        return $this->belongsto('App\nhacungcap','ncc_id','ncc_id');
    }

    public function  binhluan(){
        return $this->hasMany('App\binhluan','bl_id','bl_id');
    }
}
