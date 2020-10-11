<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = "admin";
    protected $primaryKey = 'ad_id';
    protected $guarded      = ['ad_id'];
    protected $fillable = [
        'ad_username',
        'ad_password',
        'ad_trangthai'
    ];

    public function catruc(){
        return $this->hasMany('App\catruc','ca_id','ca_id');
    }
    
}
