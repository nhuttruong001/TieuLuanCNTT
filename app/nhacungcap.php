<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhacungcap extends Model
{
    protected $table = "nhacungcap";
    protected $primaryKey = 'ncc_id';
    protected $guarded      = ['ncc_id'];
    protected $fillable = [
        'ncc_ten',
        'ncc_trangthai'
    ];

    public function giay(){
        $this->hasMany('App\giay','giay_id','giay_id');
    }
}
