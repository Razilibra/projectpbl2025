

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenStaffTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('dosen_staff')) {
            Schema::create('dosen_staff', function (Blueprint $table) {
                $table->id('id_dosen_staff');
                $table->unsignedBigInteger('nip_nik')->unique();
                $table->foreignId('id_user')->constrained('users', 'id_user');
                $table->string('nama', 100);
                $table->string('jabatan_akademik', 50);
                $table->string('no_telepon', 20);
                $table->string('email', 100);
                $table->string('foto', 255);
                $table->timestamps();


            });
        }
    }

    public function down()
    {

        Schema::dropIfExists('dosen_staff');
    }
}

