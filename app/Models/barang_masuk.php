<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;


    protected $table = 'barang_masuk';


    protected $primaryKey = 'id_barang_masuk';


    protected $fillable = [
        'id_supplier',
        'nama_barang',
        'posisi',
        'foto',
        'tanggal_masuk',
    ];


    protected $casts = [
        'tanggal_masuk' => 'date',
    ];

    /**
     * Get the supplier that owns the BarangMasuk.
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id_supplier');
    }

    /**
     * Get the peminjaman records associated with the BarangMasuk.
     */
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_barang_masuk', 'id_barang_masuk');
    }
}
