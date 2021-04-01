<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasdesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitasdesas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_desa');
            $table->string('kode_desa');
            $table->string('kode_pos_desa');
            $table->string('kepala_desa');
            $table->string('lambang_desa');
            $table->string('nip_kepala_desa');
            $table->string('alamat_kantor_desa');
            $table->string('email_desa');
            $table->string('telepon_desa');
            $table->string('website_desa');
            $table->string('nama_kecamatan');
            $table->string('kode_kecamatan');
            $table->string('nama_camat');
            $table->string('nip_camat');
            $table->string('nama_kabupaten');
            $table->string('kode_kabupaten');
            $table->string('provinsi');
            $table->string('kode_provinsi');
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
        Schema::dropIfExists('identitasdesas');
    }
}
