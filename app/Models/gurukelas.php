<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class gurukelas extends Model
{
    protected $table='guru_kelas';
    protected $fillable=['id','guru_id','kelas_id','tahun'];
    protected $primaryKey ='id';

}
