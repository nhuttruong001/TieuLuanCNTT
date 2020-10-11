<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Validator;
use Session;
use DB;
use Image;
use Response;
use Redirect;

class AdminController extends Controller
{
    public function getDanhSach(){
        $Admin = admin::where('ad_trangthai','=',1)->paginate(10);
        return view('admin.Admin.danhsach')->with('Admin',$Admin);
    }

    public function getThem(){
        return view('admin.Admin.them');
    }

    public function postThem(Request $request){
       $this->validate($request, [
            'ad_username' => 'required',
            'ad_password' => 'required',
            ]
            ,
            [
                'ad_username.required' => 'Vui lòng không được để trống username',
                'ad_password.required' => 'Vui lòng không được để trống password',
            ]);

            $Admin = new Admin();
            $Admin->ad_username = $request->ad_username;
            $Admin->ad_password = bcrypt($request->ad_password);
            $Admin->ad_trangthai = 1;
            $Admin->save();
            Session::flash('alert-1', 'Thêm thành công!!!');
            return redirect()->route('Admin_DS');

    }

    public function getXoa($id){
        // $Admin = Admin::where('ad_id',$id)->first();
        // return $Admin->ad_trangthai;
        // // $Admin->save();
        // Session::flash('alert-3', 'Xóa thành công!!!');
        // return redirect()->route('Admin_DS');
        $Admin = Admin::find($id);
        $Admin->ad_trangthai = 0;
        $Admin->save();
         Session::flash('alert-3', 'Xóa thành công!!!');
         return redirect()->route('Admin_DS');
    }
    
}