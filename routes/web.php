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
});



