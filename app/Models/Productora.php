<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productora extends Model
{
    use HasFactory;

    protected $primaryKey = "idProductora";
    public $timestamps = false;
}
