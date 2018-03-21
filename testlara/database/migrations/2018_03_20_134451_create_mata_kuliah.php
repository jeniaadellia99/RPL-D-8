<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMataKuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->increments('id_matkul');
            $table->string('kode_matkul')->unique();
            $table->string('nama_matkul');
            $table->string('jumlah_sks');
            $table->string('sks_teori');
            $table->string('sks_praktek');
            $table->string('semester');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_kuliah');
    }
}
