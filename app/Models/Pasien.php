<?php

namespace App\Models;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pasien extends Authenticatable
{
    //
    protected $fillable = [
        'id_pasien',
        'nama_lengkap',
        'email',
        'no_telepon',
        'alamat',
        'password',
        'status_pasien',
        'created_at',
    ];
}
