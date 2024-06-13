<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenStaff extends Model
{
    use HasFactory;

    protected $table = 'dosen_staff';

    protected $primaryKey = 'id_dosen_staff';

    protected $fillable = [
        'nip_nik',
        'id_user',
        'nama',
        'jabatan_akademik',
        'no_telepon',
        'email',
        'foto',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'penanggung_jawab', 'nip_nik');
    }

    public function pengembalian()
    {
        return $this->hasMany(Pengembalian::class, 'penanggung_jawab', 'nip_nik');
    }
}
