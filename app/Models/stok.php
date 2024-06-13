<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    // Menggunakan trait HasFactory untuk membuat model factory
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'stok';

    // Menentukan primary key dari tabel
    protected $primaryKey = 'id_stok';

    // Menentukan atribut yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'id_barang_masuk',
        'jumlah',
    ];

    /**
     * Mendapatkan catatan barang masuk yang terkait dengan Stok.
     */
    public function barangMasuk()
    {
        // Menentukan bahwa model Stok ini memiliki relasi belongsTo dengan model BarangMasuk
        return $this->belongsTo(BarangMasuk::class, 'id_barang_masuk', 'id_barang_masuk');
    }
}
