<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Mapel extends Model
{
    use HasFactory;
    protected $table ='mapel';
    protected $fillable=['id','kode_mapel','nama_mapel'];
    protected $primaryKey='id';

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class)->withPivot(['jam_mulai','jam_selesai','hari']);
    }

    public function guru()
    {
        return $this->belongsToMany(Guru::class)->withPivot(['hari','jam_mulai','jam_selesai','kelas']);
    }
    public function siswa()
    {
        return $this->belongsToMany(Siswa::class)->withPivot(['nilai','uts','uas','catatan']);
    }
    public function absen()
    {
        return $this->hasMany(Absen::class);
    }
}
