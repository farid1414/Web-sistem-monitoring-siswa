<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kelas extends Model
{
    public $timestamps = false;
    protected $table ='kelas';
    protected $fillable =['id','nama_kelas','wali_kelas'];
    protected $primaryKey ='id';

    public function guru()
    {
        return $this->belongsToMany(Guru::class)->withPivot(['mapel','catatan_tugas','tugas','batas','waktu','poin'])->withTimeStamps();
    }
    public function mapel()
    {
        return $this->belongsToMany(Mapel::class)->withPivot(['jam_mulai','jam_selesai','hari'])->withTimeStamps();
    }
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
    public function tugas()
    {
        return $this->hasMany(Tugas::class);
    }
    public function absen()
    {
        return $this->hasMany(Absen::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
    
}
