<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;


    protected $table = 'log';

       protected $primaryKey = 'id_log';


    protected $fillable = [
        'id_user',
        'tipe_aktivitas',
        'tabel_terkait',
        'data_sebelum',
        'data_sesudah',
    ];


    protected $casts = [
        'data_sebelum' => 'json',
        'data_sesudah' => 'json',
    ];

    /**
     * Get the user record associated with the Log.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
