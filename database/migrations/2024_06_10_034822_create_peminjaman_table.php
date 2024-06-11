

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('peminjaman')) {
            Schema::create('peminjaman', function (Blueprint $table) {
                $table->id('id_peminjaman');
                $table->foreignId('id_barang_masuk')->constrained('barang_masuk', 'id_barang_masuk');
                $table->foreignId('id_user')->constrained('users', 'id_user');
                $table->integer('jumlah');
                $table->date('tanggal_pinjam');
                $table->date('tanggal_kembali');
                $table->text('keterangan')->nullable();
                $table->string('jaminan', 250);
                $table->unsignedBigInteger('penanggung_jawab')->nullable();
                $table->timestamps();



            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
