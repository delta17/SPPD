<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstSurtugGrup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mst_surtug_grup', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('no_agenda', false, 11);
        $table->foreign('no_agenda')->references('id')->on('mst_agenda');
        $table->integer('luar_kota_id', false, 11);
        $table->foreign('luar_kota_id')->references('id')->on('mst_luar_kota')->nullable();
        $table->integer('perusahaan_id', false, 11);
        $table->foreign('perusahaan_id')->references('id')->on('mst_perusahaan')->nullable();
        $table->integer('kecamatan_id',false,11);
        $table->foreign('kecamatan_id')->references('id')->on('mst_kecamatan')->nullable();
        $table->integer('desa_id',false,11);
        $table->foreign('desa_id')->references('id')->on('mst_desa')->nullable();
        $table->date('tgl_mulai');
        $table->date('tgl_selesai');
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
        Schema::dropIfExists('mst_surtug_grup');
    }
}
