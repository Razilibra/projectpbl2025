
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangKeluarTable extends Migration
{
    public function up()
    {

        if (!Schema::hasTable('barang_keluar')) {
            Schema::create('barang_keluar', function (Blueprint $table) {
                $table->id('id_barang_keluar');
                $table->unsignedBigInteger('id_peminjaman');
                $table->integer('jumlah');
                $table->date('tanggal_keluar');
                $table->timestamps();

                //  foreign key constraint
                $table->foreign('id_peminjaman')
                    ->references('id_peminjaman')
                    ->on('peminjaman')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('barang_keluar');
    }
}
