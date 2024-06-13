<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    // Menggunakan trait HasFactory untuk membuat model factory
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'log';

    // Menentukan primary key dari tabel
    protected $primaryKey = 'id_log';

    // Menentukan atribut yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'id_user',
        'tipe_aktivitas',
        'tabel_terkait',
        'data_sebelum',
        'data_sesudah',
    ];

    // Menentukan tipe data untuk atribut data_sebelum dan data_sesudah
    protected $casts = [
        'data_sebelum' => 'json',
        'data_sesudah' => 'json',
    ];

    /**
     * Mendapatkan user yang terkait dengan Log.
     */
    public function user()
    {
        // Menentukan bahwa model Log ini memiliki relasi belongsTo dengan model User
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
