<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    protected $table = "binhluan";
    protected $primaryKey = 'bl_id';
    protected $guarded      = ['bl_id'];
    protected $fillable = [
        'kh_id',
        'giay_id',
        'bl_noidung',
        'bl_trangthai'
    ];

    public function giay(){
        return $this->belongsto('App\giay','giay_id','giay_id');
    }
}
