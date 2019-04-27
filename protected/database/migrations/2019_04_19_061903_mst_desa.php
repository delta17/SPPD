<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstDesa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mst_desa', function (Blueprint $table) {
        $table->increments('id');
<<<<<<< HEAD
        $table->string('desa');
=======
        $table->string('desa',50);
        $table->string('waktu_tempuh',11);
>>>>>>> 1db41b70169be00a77d73d1c20336881500ebdf1
        $table->integer('kec_id',false,11);
        $table->foreign('kec_id')->references('id')->on('mst_kecamatan');
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
        Schema::dropIfExists('mst_desa');
    }
}
