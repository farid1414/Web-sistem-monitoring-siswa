<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Radio extends Model
{
    use HasFactory;

    Protected $table='radio';
    Protected $fillable=['id','isi'];
    protected $primaryKey='id';
}
