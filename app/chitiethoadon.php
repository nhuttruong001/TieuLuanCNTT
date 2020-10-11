<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitiethoadon extends Model
{
    protected $table = "chitiethoadon";
 
    protected $fillable = [
        'giay_id',
        'hd_id',
        'soluong'
    ];

    public function giay(){
        $this->belongsto('App\giay');
    }
    public function hoadon(){
        $this->belongsto('App\hoadon');
    }
}
