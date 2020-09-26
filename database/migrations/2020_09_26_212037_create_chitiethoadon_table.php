<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitiethoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadon', function (Blueprint $table) {
            $table->unsignedInteger('giay_id');
            $table->unsignedInteger('hd_id');
            $table->unsignedInteger('soluong');
            $table->timestamps();

            $table->foreign('giay_id')->references('giay_id')->on('giay')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('hd_id')->references('hd_id')->on('hoadon')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiethoadon');
    }
}
