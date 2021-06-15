<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table ='tugas';
    protected $fillable =['id','nama','kelas_id','mapel','tugas'];
    protected $primaryKey ='id';

    
    public function kelas()
    {
        return $this->belongsTo(Kelas::class,'kelas_id');
    }

}
