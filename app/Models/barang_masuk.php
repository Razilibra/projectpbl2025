<?php
namespace App\Models;

// Mengimpor trait dan kelas yang dibutuhkan
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    // Menggunakan trait HasFactory untuk membuat model factory
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'barang_masuk';

    // Menentukan primary key dari tabel
    protected $primaryKey = 'id_barang_masuk';

    // Menentukan atribut yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'id_supplier',
        'nama_barang',
        'posisi',
        'foto',
        'tanggal_masuk',
    ];

    // Menentukan tipe data untuk atribut tanggal_masuk
    protected $casts = [
        'tanggal_masuk' => 'date',
    ];

    /**
     * Mendapatkan supplier yang memiliki BarangMasuk.
     */
    public function supplier()
    {
        // Menentukan bahwa model BarangMasuk ini memiliki relasi belongsTo dengan model Supplier
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id_supplier');
    }

    /**
     * Mendapatkan catatan peminjaman yang terkait dengan BarangMasuk.
     */
    public function peminjaman()
    {
        // Menentukan bahwa model BarangMasuk ini memiliki relasi hasMany dengan model Peminjaman
        return $this->hasMany(Peminjaman::class, 'id_barang_masuk', 'id_barang_masuk');
    }
}
