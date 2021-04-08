<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class catatan extends Model
{
    use HasFactory;
    protected $table='catatan';
    protected $fillable=['id','kategori_catatan'];
    protected $primaryKey='id';

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class);
    }
}