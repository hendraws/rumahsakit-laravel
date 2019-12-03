<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekammedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekammedis', function (Blueprint $table) {
            $table->string('id',50)->primary();
            $table->unsignedInteger('pasien_id');
            $table->string('keluhan');
            $table->unsignedInteger('dokter_id')->nullable();
            $table->string('diagnosa');
            $table->unsignedInteger('poliklinik_id')->nullable();

            $table->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade');
            $table->foreign('dokter_id')->references('id')->on('dokter')->onDelete('set null');
            $table->foreign('poliklinik_id')->references('id')->on('poliklinik')->onDelete('set null');
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
        Schema::dropIfExists('rekammedis');
    }
}
