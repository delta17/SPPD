<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstLaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mst_laporan', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_jln_id',false,11);
        $table->foreign('user_jln_id')->references('id')->on('mst_user_jln');
        $table->text('hasil');
        $table->text('kesimpulan');
        $table->text('penutup');
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
        Schema::dropIfExists('mst_laporan');
    }
}
