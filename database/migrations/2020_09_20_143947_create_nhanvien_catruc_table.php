<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanvienCatrucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien_catruc', function (Blueprint $table) {
            $table->unsignedInteger('ca_id');
            $table->unsignedInteger('nv_id');
            $table->timestamps();

            $table->foreign('nv_id')->references('nv_id')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('ca_id')->references('ca_id')->on('catruc')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien_catruc');
    }
}
