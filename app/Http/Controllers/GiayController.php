<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Giay;
use Validator;
use Session;
use DB;
use Image;
use Response;
use Redirect;

class GiayController extends Controller
{
    public function getDanhSach(){
        $Giay = Giay::where('giay_trangthai','=',1)->paginate(10);
        return view('admin.Giay.danhsach')->with('Giay',$Giay);
    }
}
