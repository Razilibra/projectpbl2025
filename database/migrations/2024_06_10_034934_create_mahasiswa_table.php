<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->integer('nim')->primary()->unique();
            $table->foreignId('id_user')->constrained('users', 'id_user');
            $table->string('nama', 100);
            $table->string('program_studi', 50);
            $table->year('angkatan');
            $table->decimal('ipk', 3, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
