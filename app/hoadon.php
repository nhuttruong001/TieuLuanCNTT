<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $table = "hoadon";
    protected $primaryKey = 'hd_id';
    protected $guarded      = ['hd_id'];
    protected $fillable = [
        'kh_id',
        'nv_id',
        'hd_ngaylap',
        'hd_trangthai'
    ];

    public function giay(){
        $this->hasMany('App\giay','giay_id','giay_id');
    }

    public function khachhang(){
        $this->belongsto('App\khachhang','kh_id','kh_id');
    }
}
