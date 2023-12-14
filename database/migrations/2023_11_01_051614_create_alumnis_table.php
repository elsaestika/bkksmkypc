<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->string('nisn');
            $table->string('nis');
            $table->string('nama_alumni');
            $table->date('ttl');
            $table->string('ktp');
            $table->enum('jk', ['L','P']);
            $table->enum('jurusan', ['RPL','TKJ','DPIB','MM','TBSM','TKRO','TEKLIN']);
            $table->string('thn_ajaran');
            $table->text('ijazah_pendidikan');
            $table->text('transkip_nilai');
            $table->text('skck');
            $table->text('kartu_kuning');
            $table->text('sks');
            $table->text('alamat');
            $table->string('kontak', 13);
            $table->string('password');
            $table->text('foto');
            $table->primary('nisn');

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
        Schema::dropIfExists('alumnis');
    }
}
