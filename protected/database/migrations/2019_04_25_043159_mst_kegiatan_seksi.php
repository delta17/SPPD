<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstKegiatanSeksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mst_kegiatan_seksi', function (Blueprint $table) {
        $table->increments('id');
        $table->string('kegiatan_seksi');
        $table->integer('seksi_id',false,11);
        $table->foreign('seksi_id')->references('id')->on('mst_seksi');
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
        Schema::dropIfExists('mst_kegiatan_seksi');
    }
}
