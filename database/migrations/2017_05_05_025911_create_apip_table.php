<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apip', function (Blueprint $table) {
          $table->increments('id');
          $table->text('pernyataan')
          $table->text('dokumen');
          $table->text('catatan');
          $table->string('status');

          // Foreign Key
          $table->integer('obrik_id');
          $table->integer('apip_elemen_id');
          $table->string('apip_level_id');
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
      Schema::dropIfExists('apip');
    }
}
