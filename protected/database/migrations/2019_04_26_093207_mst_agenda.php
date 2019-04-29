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
        $table->integer('form_jln_id',false,11);
        $table->foreign('form_jln_id')->references('id')->on('mst_form_jln');
        $table->string('personal',50);
        $table->string('pelaksana',100);
        $table->integer('action',false,11);
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
