<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function (Blueprint $table) {
            $table->bigIncrements('id_hp');
            $table->string('nama_hp');
            $table->string('harga_hp');
            $table->string('ram_hp');
            $table->string('memori_hp');
            $table->string('processor_hp');
            $table->string('kamera_hp');
            $table->string('harga_angka');
            $table->string('ram_angka');
            $table->string('memori_angka');
            $table->string('processor_angka');
            $table->string('kamera_angka');
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
        Schema::dropIfExists('datas');
    }
}
