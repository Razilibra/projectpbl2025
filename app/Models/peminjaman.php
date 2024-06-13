<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $primaryKey = 'id_peminjaman';

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

    protected $casts = [
        'tanggal_pinjam' => 'date',
        'tanggal_kembali' => 'date',
    ];

    public function barangMasuk()
    {
        return $this->belongsTo(BarangMasuk::class, 'id_barang_masuk', 'id_barang_masuk');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function dosenStaff()
    {
        return $this->belongsTo(DosenStaff::class, 'penanggung_jawab', 'nip_nik');
    }

    public function pengembalian()
    {
        return $this->hasOne(Pengembalian::class, 'id_peminjaman', 'id_peminjaman');
    }

    public function barangKeluar()
    {
        return $this->hasMany(BarangKeluar::class, 'id_peminjaman', 'id_peminjaman');
    }
}
