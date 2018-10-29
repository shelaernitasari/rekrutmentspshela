<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('nama_user');
            $table->string('nama_perangkat');
            $table->text('keterangan');
            $table->string('nama_user_memperbaiki')->nullable();
            $table->integer('progres')->nullable();
            $table->nullableTimestamps();
        });
        Schema::enableForeignKeyConstraints('services', function (Blueprint $table){
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
        $table->dropForeign('services_id_user_foreign');
        $table->dropForeign('services_id_user_memperbaiki_foreign');
    }
}
