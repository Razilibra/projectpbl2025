<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Menggunakan trait HasFactory untuk membuat model factory
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'users';

    // Menentukan primary key dari tabel
    protected $primaryKey = 'id_user';

    // Menentukan atribut yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'nama',
        'email',
        'role',
        'password',
        'status',
        'last_login',
    ];

    // Menyembunyikan atribut tertentu dari representasi model
    protected $hidden = [
        'password',
    ];

    // Menentukan tipe data untuk atribut status dan last_login
    protected $casts = [
        'status' => 'boolean',
        'last_login' => 'datetime',
    ];
}
