<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    // Specify the table name if it does not follow Laravel's naming convention
    protected $table = 'peminjaman';

    // Specify the primary key if it is not 'id'
    protected $primaryKey = 'id_peminjaman';

    // Specify the attributes that are mass assignable
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

    /**
     * Get the barang masuk that owns the Peminjaman.
     */
    public function barangMasuk()
    {
        return $this->belongsTo(BarangMasuk::class, 'id_barang_masuk', 'id_barang_masuk');
    }

    /**
     * Get the user that owns the Peminjaman.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    /**
     * Get the dosen staff that is responsible for the Peminjaman.
     */
    public function dosenStaff()
    {
        return $this->belongsTo(DosenStaff::class, 'penanggung_jawab', 'nip_nik');
    }

    /**
     * Get the barang keluar records associated with the Peminjaman.
     */
    public function barangKeluar()
    {
        return $this->hasMany(BarangKeluar::class, 'id_peminjaman', 'id_peminjaman');
    }
}

