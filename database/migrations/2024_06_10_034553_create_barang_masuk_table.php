<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangMasukTable extends Migration
{
    public function up()
    {
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->id('id_barang_masuk');
            $table->foreignId('id_supplier')->constrained('supplier', 'id_supplier');
            $table->string('nama_barang', 100);
            $table->enum('posisi', ['Lab-201', 'Lab-202', 'Lab-204', 'Lab-208', 'Lab-301', 'Lab-302', 'Lab-306', 'Lab-308', 'Lab-310', 'Lab-311']);
            $table->string('foto', 50);
            $table->date('tanggal_masuk');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang_masuk');
    }
}
