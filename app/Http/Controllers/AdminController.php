<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Admin;
use Validator;
use Session;
use DB;
use Image;
use Response;





class AdminController extends Controller
{
    function __construct(){
        $Admin = DB::table('Admin')->where('ad_trangthai',1)->get();
        $tukhoa = "";
        view()->share('Admin',$Admin);
        view()->share('tukhoa',$tukhoa);
    }

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

    public function postTimkiem(Request $request){
        $tukhoa = $request->tukhoa;
        $Admin = DB::table('Admin')
        // ->leftjoin('Admin as Admintt','Admintt.ad_id','=','Admin.dv_tructhuoc_id')
        ->select('Admin.*')
        ->where('Admin.ad_username','like',"%$tukhoa%")
        ->get();
        //dd($DonVi);
        return view('admin.Admin.danhsach')->with('Admin',$Admin)->with('tukhoa',$tukhoa);
    }
    
}