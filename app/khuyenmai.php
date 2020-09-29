<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khuyenmai extends Model
{
    protected $table = "khuyenmai";

    public function giay(){
        $this->belongsto('App\giay','giay_id','giay_id');
    }
}
