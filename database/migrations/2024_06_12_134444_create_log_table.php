<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id_log');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->enum('tipe_aktivitas', ['Tambah', 'Ubah', 'Hapus']);
            $table->string('tabel_terkait', 50);
            $table->text('data_sebelum')->nullable();
            $table->text('data_sesudah')->nullable();
            $table->dateTime('tanggal_aktivitas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
