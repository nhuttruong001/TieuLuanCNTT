<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhanVien;
use Validator;
use Session;
use DB;
use Image;
use Response;
use Redirect;

class NhanVienController extends Controller
{
    function __construct(){
        $NhanVien = NhanVien::all();
        $nv_id = "";
        view()->share('nv_id',$nv_id);
	}
    public function getDanhSach(){
        $NhanVien = NhanVien::where('nv_trangthai','=',1)->paginate(10);
        return view('admin.NhanVien.danhsach')->with('NhanVien',$NhanVien);
    }

    public function getThem(){
        return view('admin.NhanVien.them');
    }

    public function postThem(Request $request){
       $this->validate($request, [
            'nv_username' => 'required',
            'nv_password' => 'required',
            'nv_hoten' => 'required',
            'nv_gioitinh' => 'required',
            'nv_ngaysinh' => 'required',
            'nv_diachi' => 'required',
            'nv_sdt' => 'required',
            ]
            ,
            [
                'nv_username.required' => 'Vui lòng không được để trống username',
                'nv_password.required' => 'Vui lòng không được để trống password',
                'nv_hoten.required' => 'Vui lòng không được để trống họ tên',
                'nv_gioitinh.required' => 'Vui lòng không được để trống giới tính',
                'nv_ngaysinh.required' => 'Vui lòng không được để trống ngày sinh',
                'nv_diachi.required' => 'Vui lòng không được để trống địa chỉ',
                'nv_sdt.required' => 'Vui lòng không được để trống sđt',
            ]);

            $NhanVien = new NhanVien();
            $NhanVien->nv_username = $request->nv_username;
            $NhanVien->nv_password = bcrypt($request->nv_password);
            $NhanVien->nv_hoten = $request->nv_hoten;
            $NhanVien->nv_gioitinh = $request->nv_gioitinh;
            $NhanVien->nv_ngaysinh = $request->nv_ngaysinh;
            $NhanVien->nv_diachi = $request->nv_diachi;
            $NhanVien->nv_sdt = $request->nv_sdt;
            $NhanVien->nv_trangthai = 1;
            $NhanVien->save();
            Session::flash('alert-1', 'Thêm thành công!!!');
            return redirect()->route('NhanVien_DS');

    }

    public function getSua($id){
        $NhanVien =  NhanVien::find($id);
        return view('admin.NhanVien.sua')->with('NhanVien',$NhanVien);
    }

    public function postSua(Request $request, $id){
        $NhanVien = NhanVien::find($id);
        $NhanVien->nv_username = $request->nv_username;
        // $NhanVien->nv_password = $request->nv_password;
        $NhanVien->nv_hoten = $request->nv_hoten;
        $NhanVien->nv_gioitinh = $request->nv_gioitinh;
        $NhanVien->nv_ngaysinh = $request->nv_ngaysinh;
        $NhanVien->nv_diachi = $request->nv_diachi;
        $NhanVien->nv_sdt = $request->nv_sdt;
        $NhanVien->nv_trangthai = 1;
        $NhanVien->save();

        Session::flash('alert-2', 'Cập Nhật thành công!!!');
        return redirect()->route('NhanVien_DS');

    }

    public function getXoa($id){
        $NhanVien = NhanVien::find($id);
        $NhanVien->nv_trangthai = 0;
        $NhanVien->save();
        Session::flash('alert-3', 'Xóa thành công!!!');
        return redirect()->route('NhanVien_DS');
    }

    public function postTimkiem(Request $request){
        $tukhoa = $request->tukhoa;
        $nv_id = $request->nv_id;
    
        // nhập đầy đủ
        if((!empty($tukhoa)) && (!empty($nv_id))){
            $NhanVien = NhanVien::where([['nv_id','=',$nv_id],['nv_hoten','like',"%$tukhoa%"],['nv_trangthai',1],])->paginate(10);
        }// nhập tên nhan vien
        else {
            $NhanVien = NhanVien::where([['nv_hoten','like',"%$tukhoa%"],['nv_trangthai',1],])->paginate(10);
        }
        return view('admin.NhanVien.danhsach')->with('NhanVien',$NhanVien)->with('nv_id',$nv_id)->with('tukhoa',$tukhoa);
    

}
}
