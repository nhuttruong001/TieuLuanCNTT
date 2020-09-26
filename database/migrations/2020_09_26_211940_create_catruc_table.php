<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatrucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catruc', function (Blueprint $table) {
            $table->increments('ca_id');
            $table->unsignedInteger('ad_id');
            $table->string('ca_ten');
            $table->tinyInteger('ca_trangthai')->comment('1 la hien thi 0 la an thong tin');
            $table->timestamps();

            $table->foreign('ad_id')->references('ad_id')->on('admin')->onDelete('CASCADE')->onUpdate('CASCADE'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catruc');
    }
}
