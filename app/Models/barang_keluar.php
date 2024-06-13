<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    // Menentukan tabel yang digunakan oleh model ini
    protected $table = 'barang_keluar';

    // Menentukan primary key dari tabel ini
    protected $primaryKey = 'id_barang_keluar';

    // Menentukan kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'id_peminjaman',
        'jumlah',
        'tanggal_keluar'
    ];

    // Menentukan tipe data untuk kolom 'tanggal_keluar'
    protected $casts = [
        'tanggal_keluar' => 'date',
    ];

    // Mendefinisikan relasi 'belongsTo' dengan model Peminjaman
    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'id_peminjaman', 'id_peminjaman');
    }
}
