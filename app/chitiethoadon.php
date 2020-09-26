<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitiethoadon extends Model
{
    protected $table = "chitiethoadon";

    public function giay(){
        $this->belongsto('App\giay');
    }
    public function hoadon(){
        $this->belongsto('App\hoadon');
    }
}
