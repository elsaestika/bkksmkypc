<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLamaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lamarans', function (Blueprint $table) {
            $table->increments('id_lamaran');
            $table->string('nisn');
            $table->unsignedInteger('id_admin');
            $table->unsignedInteger('id_lowongan');
            $table->text('surat_lamaran');
            $table->text('cv');
            $table->foreign('id_lowongan')->references('id_lowongan')->on('lowongans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('nisn')->references('nisn')->on('alumnis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_admin')->references('id_admin')->on('admin')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('lamarans');
    }
}
