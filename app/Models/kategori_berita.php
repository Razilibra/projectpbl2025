<?php

namespace App\Models;

// Mengimpor trait dan kelas yang dibutuhkan
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    // Menggunakan trait HasFactory untuk membuat model factory
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'kategori_berita';

    // Menentukan primary key dari tabel
    protected $primaryKey = 'id_kategori_berita';

    // Menentukan atribut yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];

    /**
     * Mendapatkan catatan berita yang terkait dengan KategoriBerita.
     */
    public function berita()
    {
        // Menentukan bahwa model KategoriBerita ini memiliki relasi hasMany dengan model Berita
        return $this->hasMany(Berita::class, 'kategori_berita_id', 'id_kategori_berita');
    }
}
