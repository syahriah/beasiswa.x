<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pentaho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pentaho', function (Blueprint $table) {
            $table->id();
            $table->string('rooms', 100);
            $table->string('nama', 100);
            $table->string('nomorhp', 100);
            $table->string('jumlah_keluarga', 100);
            $table->string('valuename', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pentaho');
    }
}
