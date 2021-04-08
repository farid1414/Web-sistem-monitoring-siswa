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
    return $this->belongsToMany(Kelas::class)->withPivot(['tahun']);
    }
    public function mapel()
    {
    return $this->belongsToMany(Mapel::class);
    }
}
