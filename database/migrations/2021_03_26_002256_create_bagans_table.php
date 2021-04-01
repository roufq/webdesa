<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBagansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bagans', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('petinggi');
            $table->string('carik');
            $table->string('kaur_perencanaan');
            $table->string('kaur_keuagan');
            $table->string('kaur_umum');
            $table->string('kasi_kesejahteraan');
            $table->string('kasi_pelayanan');
            $table->string('kasi_pemerintahan');
            $table->string('kamituo_1');
            $table->string('kamituo_2');
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
        Schema::dropIfExists('bagans');
    }
}
