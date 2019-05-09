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
        $table->string('no_seksi');
        $table->string('perihal');
        $table->integer('seksi_id',false,11);
        $table->foreign('seksi_id')->references('id')->on('mst_seksi');
        $table->string('program_kode');
        $table->string('kegiatan_kode');
        $table->string('output_kode');
        $table->string('komponen_kode');
        $table->string('subkomponen_kode')->nullable();
        $table->string('akun_kode');
        $table->string('mak',50);
        $table->string('sisa_anggaran',50);
        $table->integer('isApproved')->default(0);
        $table->boolean('isPersonal');
        $table->text('keterangan')->nullable();
        $table->text('catatan_kpa')->nullable();
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
