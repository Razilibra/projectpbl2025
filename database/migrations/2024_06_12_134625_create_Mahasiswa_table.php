
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->bigInteger('nim')->unsigned()->primary();
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('nama', 100);
            $table->string('program_studi', 50);
            $table->year('angkatan');
            $table->decimal('ipk', 3, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
