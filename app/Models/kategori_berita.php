<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;

    protected $table = 'kategori_berita';


    protected $primaryKey = 'id_kategori_berita';

    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];

    /**
     * Get the berita records associated with the KategoriBerita.
     */
    public function berita()
    {
        return $this->hasMany(Berita::class, 'kategori_berita_id', 'id_kategori_berita');
    }
}
