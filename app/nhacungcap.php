<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhacungcap extends Model
{
    protected $table = "nhacungcap";

    public function giay(){
        $this->hasMany('App\giay','giay_id','giay_id');
    }
}
