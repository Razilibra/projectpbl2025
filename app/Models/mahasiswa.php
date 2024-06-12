<?php

namespace App\Models;

// Mengimpor trait dan kelas yang dibutuhkan
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // Menggunakan trait HasFactory untuk membuat model factory
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'mahasiswa';

    // Menentukan primary key dari tabel
    protected $primaryKey = 'nim';

    // Menentukan bahwa primary key tidak auto-increment
    public $incrementing = false;

    // Menentukan atribut yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'nim',
        'id_user',
        'nama',
        'program_studi',
        'angkatan',
        'ipk',
    ];

    // Menentukan tipe data untuk atribut angkatan dan ipk
    protected $casts = [
        'angkatan' => 'integer',
        'ipk' => 'float',
    ];

    /**
     * Mendapatkan user yang terkait dengan Mahasiswa.
     */
    public function user()
    {
        // Menentukan bahwa model Mahasiswa ini memiliki relasi belongsTo dengan model User
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
