<?php

namespace App\Models;

// Mengimpor trait dan kelas yang dibutuhkan
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenStaff extends Model
{
    // Menggunakan trait HasFactory untuk membuat model factory
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'dosen_staff';

    // Menentukan primary key dari tabel
    protected $primaryKey = 'id_dosen_staff';

    // Menentukan atribut yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'nip_nik',
        'id_user',
        'nama',
        'jabatan_akademik',
        'no_telepon',
        'email',
        'foto',
    ];

    /**
     * Mendapatkan user yang memiliki DosenStaff.
     */
    public function user()
    {
        // Menentukan bahwa model DosenStaff ini memiliki relasi belongsTo dengan model User
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    /**
     * Mendapatkan catatan peminjaman yang terkait dengan DosenStaff.
     */
    public function peminjaman()
    {
        // Menentukan bahwa model DosenStaff ini memiliki relasi hasMany dengan model Peminjaman
        return $this->hasMany(Peminjaman::class, 'penanggung_jawab', 'nip_nik');
    }

    /**
     * Mendapatkan catatan pengembalian yang terkait dengan DosenStaff.
     */
    public function pengembalian()
    {
        // Menentukan bahwa model DosenStaff ini memiliki relasi hasMany dengan model Pengembalian
        return $this->hasMany(Pengembalian::class, 'penanggung_jawab', 'nip_nik');
    }
}
