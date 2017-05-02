<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tugas', function (Blueprint $table) {
        $table->increments('id');
        $table->string('no_st');
        $table->string('tanggal');
        $table->string('nama');
        $table->string('bidang');
        $table->string('tim');
        $table->string('no_laporan');
        $table->string('tanggal_laporan');
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
      Schema::drop('tugas');
    }
}
