<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Absen extends Model
{
    use HasFactory;

    protected $table='absen';
    protected $fillable=['nama','email','kelas_id','mapel_id','status','alasan'];
    protected $primaryKey='id';

    public function kelas()
    {
        return $this->belongsTo(Kelas::class,'kelas_id');
    }
    public function mapel()
    {
        return $this->belongsTo(Mapel::class,'mapel_id');
    }
}
