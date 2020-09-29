<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaigiay extends Model
{
    protected $table = "loaigiay";

    public function giay(){
        $this->hasMany('App\giay','giay_id','giay_id');
    }
}
