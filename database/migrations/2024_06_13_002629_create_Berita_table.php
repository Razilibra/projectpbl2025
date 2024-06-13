<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritasTable extends Migration
{
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->increments('id_berita');
            $table->string('judul', 50);
            $table->unsignedInteger('kategori_berita_id');
            $table->foreign('kategori_berita_id')->references('id_kategori_berita')->on('kategori_beritas');
            $table->string('gambar', 100);
            $table->date('tanggal_publikasi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('beritas');
    }
}
