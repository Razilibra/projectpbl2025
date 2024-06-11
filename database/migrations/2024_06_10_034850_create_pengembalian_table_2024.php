


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembalianTable2024 extends Migration
{
    public function up()
    {

        if (!Schema::hasTable('pengembalian')) {
            Schema::create('pengembalian', function (Blueprint $table) {
                $table->id('id_pengembalian');
                $table->foreignId('id_peminjaman')->constrained('peminjaman', 'id_peminjaman');
                $table->foreignId('id_user')->constrained('users', 'id_user');
                $table->enum('kondisi', ['Bagus', 'Rusak', 'Normal']);
                $table->date('tanggal_kembali');
                $table->unsignedBigInteger('penanggung_jawab')->nullable();
                $table->timestamps();




            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('pengembalian');
    }
}
