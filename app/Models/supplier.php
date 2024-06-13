<?php

namespace App\Models;

// Mengimpor trait dan kelas yang dibutuhkan
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    // Menggunakan trait HasFactory untuk membuat model factory
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'supplier';

    // Menentukan primary key dari tabel
    protected $primaryKey = 'id_supplier';

    // Menentukan atribut yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'nama_supplier',
        'telepon_supplier',
        'email_supplier',
    ];
}
