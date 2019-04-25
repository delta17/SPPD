<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstFormJln extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mst_form_jln', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('no_seksi',false,11);
        $table->string('perihal');
        $table->integer('seksi_id',false,11);
        $table->foreign('seksi_id')->references('id')->on('mst_seksi');
        $table->integer('program_id',false,11);
        $table->foreign('program_id')->references('id')->on('mst_program');
        $table->integer('kegiatan_id',false,11);
        $table->foreign('kegiatan_id')->references('id')->on('mst_kegiatan');
        $table->integer('output_id',false,11);
        $table->foreign('output_id')->references('id')->on('mst_output');
        $table->integer('komponen_id',false,11);
        $table->foreign('komponen_id')->references('id')->on('mst_komponen');
        $table->integer('subkomponen_id',false,11);
        $table->foreign('subkomponen_id')->references('id')->on('mst_subkomponen');
        $table->integer('akun_id',false,11);
        $table->foreign('akun_id')->references('id')->on('mst_akun');
        $table->string('mak',50);
        $table->string('sisa_anggaran',50);
        $table->text('keterangan');
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
        Schema::dropIfExists('mst_form_jln');
    }
}
