<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('angkatan');
            $table->string('spesialisasi');
            $table->string('jabatan');
            $table->string('perusahaan');
            $table->string('domisili_pekerjaan');
            $table->string('domisili_asal');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('github');
            $table->string('avatar');
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
        Schema::dropIfExists('alumnis');
    }
}
