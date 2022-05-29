<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('inputKampus', 100);
            $table->string('ak-kampus', 100);
            $table->string('inputProdi', 100);
            $table->string('ak-prodi', 100);
            $table->string('ipk', 100);
            $table->string('ukt', 100);
            $table->string('gaji');
            $table->string('foto');
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
        Schema::dropIfExists('pendaftar');
    }
}
