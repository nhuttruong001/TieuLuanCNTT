<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function() {
    return('haha');
});


Route::group(['prefix' => 'admin'],function(){
    Route::get('/admin', function () {
        return view('admin.layout.master');
    })->name('admin');

    Route::group(['prefix' => 'Admin'],function(){
        #Danh sach Admin
        Route::get('/Admin_DS','AdminController@getDanhSach')->name('Admin_DS');
        //Form Thêm Admin
        Route::get('/Admin_FormThem', 'AdminController@getThem')->name('Admin_Them');
        Route::post('/Admin_ThemAdmin', 'AdminController@postThem')->name('Admin_XLThem');

        //xoa Admin
        Route::get('/Admin_Xoa/{id}', 'AdminController@getXoa')->name('Admin_Xoa');
    });

    Route::group(['prefix' => 'NhanVien'],function(){
        #Danh sach NhanVien
        Route::get('/NhanVien_DS','NhanVienController@getDanhSach')->name('NhanVien_DS');
        //Form Thêm NhanVien
        Route::get('/NhanVien_FormThem', 'NhanVienController@getThem')->name('NhanVien_Them');
        Route::post('/NhanVien_ThemNhanVien', 'NhanVienController@postThem')->name('NhanVien_XLThem');

        //From sua Nhan Vien
        Route::get('/NhanVien_FormSua/{id}', 'NhanVienController@getSua')->name('NhanVien_Sua');
        Route::post('/NhanVien_SuaNhanVien/{id}', 'NhanVienController@postSua')->name('NhanVien_XLSua');

        //xoa Nhan Vien
        Route::get('/NhanVien_Xoa/{id}', 'NhanVienController@getXoa')->name('NhanVien_Xoa');
    });


    Route::group(['prefix' => 'LoaiGiay'],function(){
        // #Danh sach LoaiGiay
        Route::get('/LoaiGiay_DS','LoaiGiayController@getDanhSach')->name('LoaiGiay_DS');
        //Form Thêm LoaiGiay
        Route::get('/LoaiGiay_FormThem', 'LoaiGiayController@getThem')->name('LoaiGiay_Them');
        Route::post('/LoaiGiay_ThemLoaiGiay', 'LoaiGiayController@postThem')->name('LoaiGiay_XLThem');

        //From sua Loại Giày
        Route::get('/LoaiGiay_FormSua/{id}', 'LoaiGiayController@getSua')->name('LoaiGiay_Sua');
        Route::post('/LoaiGiay_SuaLoaiGiay/{id}', 'LoaiGiayController@postSua')->name('LoaiGiay_XLSua');

        //xoa loai giay
        Route::get('/LoaiGiay_Xoa/{id}', 'LoaiGiayController@getXoa')->name('LoaiGiay_Xoa');
    });

    Route::group(['prefix' => 'Giay'],function(){
        // #Danh sach Nha cung cap
        Route::get('/Giay_DS','GiayController@getDanhSach')->name('Giay_DS');
        // //Form Thêm NhanVien
        // Route::get('/NhanVien_FormThem', 'NhanVienController@getThem')->name('NhanVien_Them');
        // Route::post('/NhanVien_ThemNhanVien', 'NhanVienController@postThem')->name('NhanVien_XLThem');

        // //From sua Nhan Vien
        // Route::get('/NhanVien_FormSua/{id}', 'NhanVienController@getSua')->name('NhanVien_Sua');
        // Route::post('/NhanVien_SuaNhanVien/{id}', 'NhanVienController@postSua')->name('NhanVien_XLSua');

        // //xoa Nhan Vien
        // Route::get('/NhanVien_Xoa/{id}', 'NhanVienController@getXoa')->name('NhanVien_Xoa');
    });


   

    Route::group(['prefix' => 'KhuyenMai'],function(){
        // #Danh sach Khuyen Mai
        Route::get('/KhuyenMai_DS','KhuyenMaiController@getDanhSach')->name('KhuyenMai_DS');
        //Form Thêm Khuyen mai
        Route::get('/KhuyenMai_FormThem', 'KhuyenMaiController@getThem')->name('KhuyenMai_Them');
        Route::post('/KhuyenMai_ThemKhuyenMai', 'KhuyenMaiController@postThem')->name('KhuyenMai_XLThem');

        //From sua Khuyen mai
        Route::get('/KhuyenMai_FormSua/{id}', 'KhuyenMaiController@getSua')->name('KhuyenMai_Sua');
        Route::post('/KhuyenMai_SuaKhuyenMai/{id}', 'KhuyenMaiController@postSua')->name('KhuyenMai_XLSua');

        //xoa Khuyen mai
        Route::get('/KhuyenMai_Xoa/{id}', 'KhuyenMaiController@getXoa')->name('KhuyenMai_Xoa');
    });

    Route::group(['prefix' => 'NhaCungCap'],function(){
        // #Danh sach Nha cung cap
        Route::get('/NhaCungCap_DS','NhaCungCapController@getDanhSach')->name('NhaCungCap_DS');
        // //Form Thêm NhanVien
        // Route::get('/NhanVien_FormThem', 'NhanVienController@getThem')->name('NhanVien_Them');
        // Route::post('/NhanVien_ThemNhanVien', 'NhanVienController@postThem')->name('NhanVien_XLThem');

        // //From sua Nhan Vien
        // Route::get('/NhanVien_FormSua/{id}', 'NhanVienController@getSua')->name('NhanVien_Sua');
        // Route::post('/NhanVien_SuaNhanVien/{id}', 'NhanVienController@postSua')->name('NhanVien_XLSua');

        // //xoa Nhan Vien
        // Route::get('/NhanVien_Xoa/{id}', 'NhanVienController@getXoa')->name('NhanVien_Xoa');
    });


    

});



