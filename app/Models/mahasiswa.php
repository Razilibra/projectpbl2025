<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $primaryKey = 'nim';

    protected $fillable = [
        'nim',
        'id_user',
        'nama',
        'program_studi',
        'angkatan',
        'ipk',
    ];

    protected $casts = [
        'angkatan' => 'integer',
        'ipk' => 'float',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
