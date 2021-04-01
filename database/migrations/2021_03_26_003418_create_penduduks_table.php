<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('no_kk');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tanggal_lair');
            $table->string('umur');
            $table->string('hubungan_kelurga');
            $table->string('dukuh');
            $table->string('rt');
            $table->string('rw');
            $table->string('alamat');
            $table->string('desa');
            $table->string('kec');
            $table->string('kab');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('setatus_perkawinan');
            $table->string('gol_darah');
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('kewarganegaraan');
            $table->string('kelainan_fisik');
            $table->string('penyandug_cacat');
            $table->string('akte_kelahiran');
            $table->string('no_akte_kelahiran');
            $table->string('buku_nikah');
            $table->string('no_akte_buku_nikah');
            $table->string('tanggal_nikah');
            $table->string('akta_cerai');
            $table->string('no_akta_cerai');
            $table->string('tanggal_penceraian');
            $table->string('keterangan');   
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
        Schema::dropIfExists('penduduks');
    }
}
