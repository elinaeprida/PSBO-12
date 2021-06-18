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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('angkatan');
            $table->enum('spesialisasi', ['CSN', 'CIO', 'SEIS']);
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
