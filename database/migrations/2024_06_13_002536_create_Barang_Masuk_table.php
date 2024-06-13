<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangMasuksTable extends Migration
{
    public function up()
    {
        Schema::create('barang_masuks', function (Blueprint $table) {
            $table->increments('id_barang_masuk');
            $table->unsignedInteger('id_supplier');
            $table->unsignedInteger('id_peminjaman');
            $table->foreign('id_peminjaman')->references('id_peminjaman')->on('peminjaman');
            $table->foreign('id_supplier')->references('id_supplier')->on('suppliers');
            $table->string('nama_barang', 100);
            $table->enum('posisi', ['Lab-201', 'Lab-202', 'Lab-204', 'Lab-208', 'Lab-301', 'Lab-302', 'Lab-306', 'Lab-308', 'Lab-310', 'Lab-311']);
            $table->string('foto', 50);
            $table->date('tanggal_masuk');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang_masuks');
    }
}
