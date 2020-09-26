<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhluanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binhluan', function (Blueprint $table) {
            $table->increments('bl_id');
            $table->unsignedInteger('giay_id');
            $table->unsignedInteger('kh_id');
            $table->text('bl_noidung');
            $table->tinyInteger('bl_trangthai')->comment('1 la hien thi 0 la an thong tin');
            $table->timestamps();

            $table->foreign('giay_id')->references('giay_id')->on('giay')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('binhluan');
    }
}
