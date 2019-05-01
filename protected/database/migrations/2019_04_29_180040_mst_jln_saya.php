<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstJlnSaya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mst_jln_saya', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('form_jln_id',false,11);
        $table->foreign('form_jln_id')->references('id')->on('mst_form_jln');
        $table->integer('user_id',false,11);
        $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('mst_jln_saya');
    }
}
