<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamtanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jamtangan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('merk', 30);
            $table->string('model', 30);
            $table->string('tipe', 10);
            $table->string('warna', 10);
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
        Schema::dropIfExists('jamtangan');
    }
}
