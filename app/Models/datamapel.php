<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class datamapel extends Model
{
    protected $table ='mapel';
    protected $fillable=['id_mapel','kode_mapel','nama_mapel'];
    protected $primaryKey='id_mapel';
}
