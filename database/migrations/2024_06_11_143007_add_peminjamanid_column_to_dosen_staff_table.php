<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('dosen_staff', function (Blueprint $table) {

        });

        // Add foreign key constraint  peminjaman table
        Schema::table('peminjaman', function (Blueprint $table) {
            $table->unsignedBigInteger('penanggung_jawab')->nullable()->change();
            $table->foreign('penanggung_jawab')
                  ->references('nip_nik')
                  ->on('dosen_staff')
                  ->onDelete('cascade');
        });

        // Add foreign key constraint to the pengembalian table
        Schema::table('pengembalian', function (Blueprint $table) {
            $table->unsignedBigInteger('penanggung_jawab')->nullable()->change();
            $table->foreign('penanggung_jawab')
                  ->references('nip_nik')
                  ->on('dosen_staff')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove foreign key constraint dari  peminjaman table
        Schema::table('peminjaman', function (Blueprint $table) {
            $table->dropForeign(['penanggung_jawab']);
        });

        // Remove foreign key constraint dari pengembalian table
        Schema::table('pengembalian', function (Blueprint $table) {
            $table->dropForeign(['penanggung_jawab']);
        });


        Schema::table('dosen_staff', function (Blueprint $table) {

        });
    }
};
