<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;


    protected $table = 'berita';


    protected $primaryKey = 'id_berita';


    protected $fillable = [
        'judul',
        'kategori_berita_id',
        'gambar',
        'tanggal_publikasi',
    ];


    protected $casts = [
        'tanggal_publikasi' => 'date',
    ];

    /**
     * Get the kategori berita that owns the Berita.
     */
    public function kategoriBerita()
    {
        return $this->belongsTo(KategoriBerita::class, 'kategori_berita_id', 'id_kategori_berita');
    }
}

