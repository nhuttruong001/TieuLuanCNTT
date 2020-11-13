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
            $table->engine = "InnoDB";
            $table->unsignedInteger('ca_id');
            $table->unsignedInteger('nv_id');
            $table->timestamps();

            $table->foreign('nv_id')->references('nv_id')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('ca_id')->references('ca_id')->on('catruc')->onDelete('CASCADE')->onUpdate('CASCADE');

            // $table->foreignId('nv_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('ca_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
