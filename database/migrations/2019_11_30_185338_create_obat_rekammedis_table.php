<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatRekammedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat_rekammedis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('obat_id');
            $table->string('rekammedis_id');

            $table->foreign('obat_id')->references('id')->on('obat')->onDelete('cascade');
            $table->foreign('rekammedis_id')->references('id')->on('rekammedis')->onDelete('cascade');
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
        Schema::dropIfExists('obat_rekammedis');
    }
}
