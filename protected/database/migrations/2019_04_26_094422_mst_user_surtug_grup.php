<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstUserSurtugGrup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mst_user_surtug_grup', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nama',100);
        $table->string('nip',20);
        $table->string('jabatan',20);
        $table->integer('user_surtug_id',false,11);
        $table->foreign('user_surtug_id')->references('id')->on('mst_surtug_grup');
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
        Schema::dropIfExists('mst_user_surtug_grup');
    }
}
