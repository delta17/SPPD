<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstArsipSaya extends Migration
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
        $table->integer('laporan_id',false,11);
        $table->foreign('laporan_id')->references('id')->on('mst_laporan');
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
