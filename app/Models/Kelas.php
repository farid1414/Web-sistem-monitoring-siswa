<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kelas extends Model
{
    protected $table ='kelas';
    protected $fillable =['id','nama_kelas'];
    protected $primaryKey ='id';

    public function guru()
    {
        return $this->belongsToMany(Guru::class)->withPivot(['tahun']);
    }
    public function mapel()
    {
        return $this->belongsToMany(Mapel::class)->withPivot(['jam_pelajaran','hari']);
    }
}
