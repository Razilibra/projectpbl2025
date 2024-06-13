<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    // Menggunakan trait HasFactory untuk membuat model factory
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'berita';

    // Menentukan primary key dari tabel
    protected $primaryKey = 'id_berita';

    // Menentukan atribut yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'judul',
        'kategori_berita_id',
        'gambar',
        'tanggal_publikasi',
    ];

    // Menentukan tipe data untuk atribut tanggal_publikasi
    protected $casts = [
        'tanggal_publikasi' => 'date',
    ];

    /**
     * Mendapatkan kategori berita yang memiliki Berita.
     */
    public function kategoriBerita()
    {
        // Menentukan bahwa model Berita ini memiliki relasi belongsTo dengan model KategoriBerita
        return $this->belongsTo(KategoriBerita::class, 'kategori_berita_id', 'id_kategori_berita');
    }
}
