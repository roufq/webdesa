<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('no_wa');
            $table->string('jenis_surat');
            $table->string('keperluan');
            $table->string('ttl');
            $table->string('pekerjaan');
            $table->string('keterangan');
            $table->string('status');
            $table->string('rt');
            $table->string('rw');
            $table->string('ketua_rt');
            $table->string('ketua_rw');
            $table->string('status_surat');
            $table->string('nama_rt');
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
        Schema::dropIfExists('surats');
    }
}
