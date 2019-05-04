<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstKegiatanUraian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mst_kegiatan_uraian', function (Blueprint $table) {
        $table->increments('id');
        $table->string('uraian');
        $table->string('satuan');
        $table->float('waktu_kegiatan',3,2);
        $table->integer('kegiatan_id',false,11);
        $table->foreign('kegiatan_id')->references('id')->on('mst_kegiatan_seksi');
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
        Schema::dropIfExists('mst_kegiatan_uraian');
    }
}
