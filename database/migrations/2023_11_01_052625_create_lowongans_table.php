<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongans', function (Blueprint $table) {
            $table->increments('id_lowongan');
            $table->string('nisn');
            $table->unsignedInteger('id_perusahaan');
            $table->string('lowongan');
            $table->string('syarat');
            $table->string('keahlian');
            $table->string('kualifikasi');
            $table->string('jam_kerja');
            $table->string('gaji');
            $table->string('pendidikan');
            $table->string('tipe_pekerjaan');
            $table->date('tgl_post');
            $table->date('tgl_konfirmasi');
            $table->enum('status', ['0','Posting']);
            $table->unsignedInteger('id_admin');
            $table->foreign('nisn')->references('nisn')->on('alumnis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_perusahaan')->references('id_perusahaan')->on('perusahaans')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('lowongans');
    }
}
