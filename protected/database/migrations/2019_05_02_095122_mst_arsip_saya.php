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
      Schema::create('mst_arsip_saya', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_jln_id',false,11)->nullable();
        $table->foreign('user_jln_id')->references('id')->on('mst_user_jln');
        $table->integer('laporan_id',false,11)->nullable();
        $table->foreign('laporan_id')->references('id')->on('mst_laporan');
        $table->integer('surtug_personal_id',false,11)->nullable();
        $table->foreign('surtug_personal_id')->references('id')->on('mst_surtug_personal');
        $table->integer('surtug_grup_id',false,11)->nullable();
        $table->foreign('surtug_grup_id')->references('id')->on('mst_surtug_grup');
        $table->integer('spd_id',false,11)->nullable();
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
        Schema::dropIfExists('mst_arsip_saya');
    }
}
