<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LoaiGiay;
use Validator;
use Session;
use DB;
use Image;
use Response;
use Redirect;

class LoaiGiayController extends Controller
{
    public function getDanhSach(){
        $LoaiGiay = LoaiGiay::where('loai_trangthai','=',1)->paginate(10);
        return view('admin.LoaiGiay.danhsach')->with('LoaiGiay',$LoaiGiay);
    }
}
