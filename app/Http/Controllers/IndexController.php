<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\BinhLuan;
use App\CaTruc;
use App\ChiTietHoaDon;
use App\Giay;
use App\HoaDon;
use App\KhachHang;
use App\KhuyenMai;
use App\LoaiGiay;
use App\NhaCungCap;
use App\NhanVien_CaTruc;
use App\NhanVien;
use Illuminate\Support\Facades\Auth;
use DB;

use Session;
use Illuminate\Support\Facades\Redirect;
use Validate;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __construct(){
        $Admin = Admin::all();
        $BinhLuan = BinhLuan::all();
        $CaTruc = CaTruc::all();
        $ChiTietHoaDon = ChiTietHoaDon::all();
        $Giay = Giay::all();
        $HoaDon = HoaDon::all();
        $KhachHang = KhachHang::all();
        $KhuyenMai = KhuyenMai::all();
        $LoaiGiay = LoaiGiay::all();
        $NhaCungCap = NhaCungCap::all();
        $NhanVien_CaTruc = NhanVien_CaTruc::all();
        $NhanVien = NhanVien::all();
        $now=  Carbon::now('Asia/Ho_Chi_Minh');

         ///////////// giay mới /////////////////
         $giaymoi = DB::table('Giay')
         ->join('loaigiay','loaigiay.loai_id','=','Giay.loai_id')
         ->join('khuyenmai','khuyenmai.km_id','=','Giay.km_id')
         ->join('nhacungcap','nhacungcap.ncc_id','=','Giay.ncc_id')
         ->orderBy('Giay.giay_id','desc')
         ->limit(8)->get();



         view() ->share('giaymoi',$giaymoi);
      
         view() ->share('now',$now);
         view()->share('Admin',$Admin);
         view()->share('BinhLuan',$BinhLuan);
         view()->share('CaTruc',$CaTruc);
         view()->share('ChiTietHoaDon',$ChiTietHoaDon);
         view()->share('Giay',$Giay);
         view()->share('HoaDon',$HoaDon);
         view()->share('KhachHang',$KhachHang);
         view()->share('KhuyenMai',$KhuyenMai);
         view()->share('LoaiGiay',$LoaiGiay);
         view()->share('NhaCungCap',$NhaCungCap);
         view()->share('NhanVien_CaTruc',$NhanVien_CaTruc);
         view()->share('NhanVien',$NhanVien);
    }
    public function getIndex(){
       
        $giay1 = DB::table('Giay')
            ->orderBy('Giay.giay_id','desc')
            ->paginate(8);
            
        return view('frontend.index')->with('giay1',$giay1);
    }
}
