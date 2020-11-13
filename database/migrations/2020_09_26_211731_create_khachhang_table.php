<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('kh_id');
            $table->string('kh_username');
            $table->string('kh_password');
            $table->string('kh_hoten');
            $table->date('kh_ngaysinh');
            $table->tinyInteger('kh_gioitinh')->comment('1 la Nam 0 la Nữ');
            $table->string('kh_diachi');
            $table->string('kh_sdt');
            $table->tinyInteger('kh_trangthai')->comment('1 la hien thi 0 la an thong tin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
