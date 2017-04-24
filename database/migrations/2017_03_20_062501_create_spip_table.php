<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spip', function (Blueprint $table) {
            $table->increments('id');
            $table->string('level');
            $table->text('dokumen');
            $table->text('catatan');
            // Foreign Key
            $table->integer('kab_id');
            $table->integer('unsur_spip_id');
            $table->integer('sub_unsur_spip_id');
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
        Schema::dropIfExists('spip');
    }
}
