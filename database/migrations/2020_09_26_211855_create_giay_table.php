<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giay', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('giay_id');
            $table->unsignedInteger('loai_id');
            $table->unsignedInteger('km_id');
            $table->unsignedInteger('ncc_id');
            $table->string('giay_ten');
            $table->double('giay_gia');
            $table->String('giay_hinhanh');
            $table->text('giay_mota');
            $table->tinyInteger('giay_trangthai')->comment('1 la hien thi 0 la an thong tin');
            $table->timestamps();
            
            $table->foreign('km_id')->references('km_id')->on('khuyenmai')->onDelete('CASCADE')->onUpdate('CASCADE');
            
            $table->foreign('loai_id')->references('loai_id')->on('loaigiay')->onDelete('CASCADE')->onUpdate('CASCADE');
            
            $table->foreign('ncc_id')->references('ncc_id')->on('nhacungcap')->onDelete('CASCADE')->onUpdate('CASCADE');


            // $table->foreignId('km_id')->constrained()->on('khuyenmai')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('loai_id')->constrained()->on('loaigiay')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('ncc_id')->constrained()->on('nhacungcap')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giay');
    }
}
