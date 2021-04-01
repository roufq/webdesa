<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatadesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadesas', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('phone');
            $table->string('email');
            $table->string('sms');
            $table->string('wa');
            $table->string('facebook');
            $table->string('ig');
            $table->string('alamat');
            $table->string('foto_kades');
            $table->string('wilayah_desa');
            $table->string('lokasi_baledesa');
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
        Schema::dropIfExists('datadesas');
    }
}
