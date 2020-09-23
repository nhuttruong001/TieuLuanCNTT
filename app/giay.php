<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giay extends Model
{
    protected $table = "giay";

    public function loaigiay(){
        return $this->hasMany('App\loaigiay','id_loaigiay');
    }

    public function nhacungcap(){
        return $this->hasMany('App\nhacungcap','id_ncc');
    }

    public function  binhluan(){
        return $this->belongsto('App\binhluan','id_giay','id_binhluan');
    }
}
