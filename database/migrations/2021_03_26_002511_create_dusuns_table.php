<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDusunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dusuns', function (Blueprint $table) {
            $table->id();
            $table->string('dusun');
            $table->string('kepala_dusun');
            $table->string('rw');
            $table->string('tr');
            $table->string('peria');
            $table->string('wanita');
            $table->string('jumlah_seluruh');
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
        Schema::dropIfExists('dusuns');
    }
}
