<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photoambiance extends Model
{
    use HasFactory;
    protected $table = 'photo_ambiance';
    protected $primaryKey = 'id'; 
}
