<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rating extends Model
{
    use HasFactory;
    protected $table='rating';
    protected $fillable=['id','nama','email','keindahan','ketepatan','kegunaan','saran','kritik'];
    protected $primaryKey='id';
}
