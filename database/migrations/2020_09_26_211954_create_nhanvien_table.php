<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('nv_id');
            $table->string('nv_username');
            $table->string('nv_password');
            $table->string('nv_hoten');
            $table->date('nv_ngaysinh');
            $table->tinyInteger('nv_gioitinh')->comment('1 la Nam 0 la Nữ');
            $table->string('nv_diachi');
            $table->string('nv_sdt');
            $table->tinyInteger('nv_trangthai')->comment('1 la hien thi 0 la an thong tin');
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
        Schema::dropIfExists('nhanvien');
    }
}
