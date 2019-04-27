<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstSubkomponen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mst_subkomponen', function (Blueprint $table) {
        $table->increments('id');
        $table->string('kode',50);
        $table->string('subkomponen');
        $table->integer('komponen_id',false,11);
        $table->foreign('komponen_id')->references('id')->on('mst_komponen');
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
        Schema::dropIfExists('mst_subkomponen');
    }
}
