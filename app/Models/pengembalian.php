<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;


    protected $table = 'pengembalian';

       protected $primaryKey = 'id_pengembalian';


    protected $fillable = [
        'id_peminjaman',
        'id_user',
        'kondisi',
        'tanggal_kembali',
        'penanggung_jawab',
    ];


    protected $casts = [
        'tanggal_kembali' => 'date',
    ];

    /**
     * Get the peminjaman record associated with the Pengembalian.
     */
    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'id_peminjaman', 'id_peminjaman');
    }

    /**
     * Get the user that made the Pengembalian.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    /**
     * Get the dosen staff that is responsible for the Pengembalian.
     */
    public function dosenStaff()
    {
        return $this->belongsTo(DosenStaff::class, 'penanggung_jawab', 'nip_nik');
    }
}
