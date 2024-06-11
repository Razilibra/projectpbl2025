<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;


    protected $table = 'stok';


    protected $primaryKey = 'id_stok';


    protected $fillable = [
        'id_barang_masuk',
        'jumlah',
    ];

    /**
     * Get the barang masuk record associated with the Stok.
     */
    public function barangMasuk()
    {
        return $this->belongsTo(BarangMasuk::class, 'id_barang_masuk', 'id_barang_masuk');
    }
}
