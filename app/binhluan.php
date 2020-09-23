<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    protected $table = "binhluan";

    public function giay(){
        return $this->belongsto('App\giay');
    }
}
