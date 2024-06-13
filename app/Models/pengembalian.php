<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    // Menggunakan trait HasFactory untuk membuat model factory
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'pengembalian';

    // Menentukan primary key dari tabel
    protected $primaryKey = 'id_pengembalian';

    // Menentukan atribut yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'id_peminjaman',
        'id_user',
        'kondisi',
        'tanggal_kembali',
        'penanggung_jawab',
    ];

    // Menentukan tipe data untuk atribut tanggal_kembali
    protected $casts = [
        'tanggal_kembali' => 'date',
    ];

    /**
     * Mendapatkan catatan peminjaman yang terkait dengan Pengembalian.
     */
    public function peminjaman()
    {
        // Menentukan bahwa model Pengembalian ini memiliki relasi belongsTo dengan model Peminjaman
        return $this->belongsTo(Peminjaman::class, 'id_peminjaman', 'id_peminjaman');
    }

    /**
     * Mendapatkan user yang membuat Pengembalian.
     */
    public function user()
    {
        // Menentukan bahwa model Pengembalian ini memiliki relasi belongsTo dengan model User
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    /**
     * Mendapatkan dosen staff yang bertanggung jawab atas Pengembalian.
     */
    public function dosenStaff()
    {
        // Menentukan bahwa model Pengembalian ini memiliki relasi belongsTo dengan model DosenStaff
        return $this->belongsTo(DosenStaff::class, 'penanggung_jawab', 'nip_nik');
    }
}
