<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'level',
        'kelas_id',
        'password',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class,'kelas_id');
    }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class,'siswa_id');
    }


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
