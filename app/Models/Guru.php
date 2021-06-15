<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Guru extends Model
{
    protected $table = 'guru'; //ambil tabel guru dari databse 
    protected $fillable = ['id','nip', 'user_id','nama_tendik', 'jenis_kelamin', 'tgl_lahir', 'alamat', 'jabatan', 'tgl_diterima'];
    protected $primaryKey = 'id';
 
    public function kelas()
    {
    return $this->belongsToMany(Kelas::class)->withPivot(['mapel','catatan_tugas','tugas','batas','waktu','poin'])->withTimeStamps();
    }
    public function mapel()
    {
    return $this->belongsToMany(Mapel::class)->withPivot(['hari','jam_mulai','jam_selesai','kelas'])->withTimeStamps();
    }
    public function siswa()
    {
    return $this->belongsToMany(Siswa::class)->withPivot(['catatan']);
    }
}
