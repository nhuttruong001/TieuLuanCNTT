<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhaCungCap;
use Validator;
use Session;
use DB;
use Image;
use Response;
use Redirect;
class NhaCungCapController extends Controller
{
    public function getDanhSach(){
        $NhaCungCap = NhaCungCap::where('ncc_trangthai','=',1)->paginate(10);
        return view('admin.NhaCungCap.danhsach')->with('NhaCungCap',$NhaCungCap);
    }
}
