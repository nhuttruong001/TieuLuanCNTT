<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien_catruc extends Model
{
    protected $table = "nhanvien_catruc";
    protected $fillable = [
        'ca_id',
        'nv_id'
    ];

    public function nhanvien(){
        $this->hasMany('App/nhanvien','nv_id','nv_id');
    }

    public function catruc(){
        $this->hasMany('App\catruc','ca_id','ca_id');
    }
}
