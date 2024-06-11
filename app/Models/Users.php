<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;


    protected $table = 'users';

        protected $primaryKey = 'id_user';


    protected $fillable = [
        'nama',
        'email',
        'role',
        'password',
        'status',
        'last_login',
    ];


    protected $hidden = [
        'password',
    ];


    protected $casts = [
        'status' => 'boolean',
        'last_login' => 'datetime',
    ];
}
