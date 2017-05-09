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

            $table->text('dokumen');
            $table->text('catatan');
            // Foreign Key
            $table->integer('obrik_id');
            $table->integer('spip_level_id');
            $table->integer('spip_unsur_id');
            $table->integer('spip_sub_unsur_id');
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
