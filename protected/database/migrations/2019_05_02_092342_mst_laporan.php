<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstLaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mst_laporan', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id',false,11);
        $table->foreign('user_id')->references('id')->on('mst_user');
        $table->integer('spd_id',false,11);
        $table->foreign('spd_id')->references('id')->on('mst_spd');
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
        Schema::dropIfExists('mst_laporan');
    }
}
