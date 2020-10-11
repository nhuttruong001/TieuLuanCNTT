<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaigiay extends Model
{
    protected $table = "loaigiay";
    protected $primaryKey = 'loai_id';
    protected $guarded      = ['loai_id'];
    protected $fillable = [
        'loai_ten',
        'loai_trangthai'
    ];

    public function giay(){
        $this->hasMany('App\giay','giay_id','giay_id');
    }
}
