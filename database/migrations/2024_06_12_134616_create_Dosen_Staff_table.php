<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenStaffsTable extends Migration
{
    public function up()
    {
        Schema::create('dosen_staffs', function (Blueprint $table) {
            $table->bigInteger('nip_nik')->unsigned()->primary();
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('nama', 100);
            $table->string('jabatan_akademik', 50);
            $table->string('no_telepon', 20);
            $table->string('email', 100);
            $table->string('foto', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dosen_staffs');
    }
}
