<?php

namespace App\Models;

// Mengimpor trait dan kelas yang dibutuhkan
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'peminjaman';

    // Menentukan primary key dari tabel
    protected $primaryKey = 'id_peminjaman';

    // Menentukan atribut yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'id_barang_masuk',
        'id_user',
        'jumlah',
        'tanggal_pinjam',
        'tanggal_kembali',
        'keterangan',
        'jaminan',
        'penanggung_jawab'
    ];

    // Menentukan tipe data untuk atribut tanggal_pinjam dan tanggal_kembali
    protected $casts = [
        'tanggal_pinjam' => 'date',
        'tanggal_kembali' => 'date',
    ];

    /**
     * Mendapatkan barang masuk yang dimiliki oleh Peminjaman.
     */
    public function barangMasuk()
    {
        // Menentukan bahwa model Peminjaman ini memiliki relasi belongsTo dengan model BarangMasuk
        return $this->belongsTo(BarangMasuk::class, 'id_barang_masuk', 'id_barang_masuk');
    }

    /**
     * Mendapatkan user yang dimiliki oleh Peminjaman.
     */
    public function user()
    {
        // Menentukan bahwa model Peminjaman ini memiliki relasi belongsTo dengan model User
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    /**
     * Mendapatkan dosen staff yang bertanggung jawab atas Peminjaman.
     */
    public function dosenStaff()
    {
        // Menentukan bahwa model Peminjaman ini memiliki relasi belongsTo dengan model DosenStaff
        return $this->belongsTo(DosenStaff::class, 'penanggung_jawab', 'nip_nik');
    }

    /**
     * Mendapatkan catatan barang keluar yang terkait dengan Peminjaman.
     */
    public function barangKeluar()
    {
        // Menentukan bahwa model Peminjaman ini memiliki relasi hasMany dengan model BarangKeluar
        return $this->hasMany(BarangKeluar::class, 'id_peminjaman', 'id_peminjaman');
    }
}
