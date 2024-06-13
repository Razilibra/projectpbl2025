<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangKeluarsTable extends Migration
{
    public function up()
    {
        Schema::create('barang_keluars', function (Blueprint $table) {
            $table->increments('id_barang_keluar');
            $table->unsignedInteger('id_peminjaman');
            $table->foreign('id_peminjaman')->references('id_peminjaman')->on('peminjamans');
            $table->integer('jumlah');
            $table->date('tanggal_keluar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang_keluars');
    }
}
