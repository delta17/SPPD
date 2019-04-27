<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mst_agenda', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('uraian_id', false, 11);
        $table->foreign('uraian_id')->references('id')->on('mst_kegiatan_uraian');
        $table->integer('form_jln_id',false,11);
        $table->foreign('form_jln_id')->references('id')->on('mst_form_jln');
        $table->date('tanggal');
        $table->string('personal',20);
        $table->string('pelaksana',50)->nullable();
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
        Schema::dropIfExists('mst_agenda');
    }
}
