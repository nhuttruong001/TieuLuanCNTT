<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->increments('hd_id');
            $table->unsignedInteger('kh_id');
            $table->unsignedInteger('nv_id');
            $table->date('hd_ngaylap');
            $table->timestamps();

            $table->foreign('nv_id')->references('nv_id')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('kh_id')->references('kh_id')->on('khachhang')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadon');
    }
}
