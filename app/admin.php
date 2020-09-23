<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = "admin";

    public function catruc(){
        return $this->hasMany('App\catruc','ad_id','ca_id');
    }
    
}
