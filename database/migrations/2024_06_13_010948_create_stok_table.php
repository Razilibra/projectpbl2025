<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('stok')) {
            Schema::create('stok', function (Blueprint $table) {
                $table->bigIncrements('id_stok');
                $table->unsignedBigInteger('id_barang_masuk');
                $table->integer('jumlah');
                $table->timestamps();

              $table->foreign('id_barang_masuk')->references('id_barang_masuk')->on('barang_masuk')->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('stok');
    }
}
