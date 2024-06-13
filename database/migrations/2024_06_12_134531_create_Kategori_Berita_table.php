<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriBeritasTable extends Migration
{
    public function up()
    {
        Schema::create('kategori_beritas', function (Blueprint $table) {
            $table->increments('id_kategori_berita');
            $table->string('nama_kategori', 50);
            $table->string('deskripsi', 60);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kategori_beritas');
    }
}
