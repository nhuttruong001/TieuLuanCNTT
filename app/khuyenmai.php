<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khuyenmai extends Model
{
    protected $table = "khuyenmai";
    protected $primaryKey = 'km_id';
    protected $guarded      = ['km_id'];
    protected $fillable = [
        'km_ngaybd',
        'km_ngaykt',
        'km_phantram',
        'km_trangthai'
    ];

    public function giay(){
        $this->belongsto('App\giay','giay_id','giay_id');
    }
}
