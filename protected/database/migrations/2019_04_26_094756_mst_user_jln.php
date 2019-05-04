<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstUserJln extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mst_user_jln', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nama',100);
        $table->string('nip',50);
        $table->date('tgl_dari');
        $table->date('tgl_sampai');
        $table->integer('uraian_id',false,11);
        $table->foreign('uraian_id')->references('id')->on('mst_kegiatan_uraian');
        $table->string('tujuan',100);
        $table->string('satuan');
        $table->integer('lamanya',false,10);
        $table->integer('kendaraan_id',false,11);
        $table->foreign('kendaraan_id')->references('id')->on('mst_jln_kendaraan');
        $table->integer('jln_id',false,11);
        $table->foreign('jln_id')->references('id')->on('mst_form_jln');
        $table->integer('wkt_standar_dinas',false,10)->nullable();
        $table->integer('action',false,5)->nullable();
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
        Schema::dropIfExists('mst_user_jln');
    }
}
