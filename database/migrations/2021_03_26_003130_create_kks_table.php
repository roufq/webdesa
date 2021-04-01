<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kks', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kk');
            $table->string('nomer_kk_sebelumnya');
            $table->string('foto');
            $table->string('hubungan_keluarga');
            $table->string('nomer_akta_kelahiran');
            $table->string('tempat_lahir');
            $table->string('waktu_kelahiran');
            $table->string('tempat_dilahirkan');
            $table->string('jenis_kelahiran');
            $table->string('anakke');
            $table->string('penolong_kelahiran');
            $table->string('berat_lahir');
            $table->string('panjang_lahir');
            $table->string('kepala_keluarga');
            $table->string('nik');
            $table->string('tag_id_card');
            $table->string('jumlah_anggota');
            $table->string('jenis_kelamin');
            $table->string('pendidikan_dalam_kk');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('dusun');
            $table->string('rw');
            $table->string('rt');
            $table->string('taggal_terdaftar');
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
        Schema::dropIfExists('kks');
    }
}
