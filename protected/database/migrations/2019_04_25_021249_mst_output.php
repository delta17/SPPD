<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstOutput extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mst_output', function (Blueprint $table) {
        $table->increments('id');
        $table->string('kode',50);
        $table->string('output');
        $table->integer('seksi_id');
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
        Schema::dropIfExists('mst_output');
    }
}
