<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoritas extends Model
{
    use HasFactory;
    protected $primaryKey = "idFavoritas";
    public $timestamps = false;
}
