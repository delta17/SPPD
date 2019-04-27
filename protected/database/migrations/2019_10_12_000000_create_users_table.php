<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
<<<<<<< HEAD
            $table->string('nip',20);
=======
            $table->string('nip',20)->nullable();
>>>>>>> 1db41b70169be00a77d73d1c20336881500ebdf1
            $table->string('email',50)->unique();
            $table->string('password');
            $table->string('phone',20)->nullable();
            $table->integer('seksi_id',false,5);
            $table->foreign('seksi_id')->references('id')->on('mst_seksi');
            $table->integer('level_id',false,5);
            $table->foreign('level_id')->references('id')->on('mst_level_user');
<<<<<<< HEAD
=======
            $table->string('jabatan',50)->nullable();
>>>>>>> 1db41b70169be00a77d73d1c20336881500ebdf1
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
