<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    use HasFactory;
    protected $primaryKey = "idGeneros";
    public $timestamps = false;

    protected $guarded = [];
}
