<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photoPlat extends Model
{
    use HasFactory;
    protected $table = 'photo_plat';
    protected $primaryKey = 'id'; 
    
    /***
     * cette fonction permet de récupérer la plat
     * 
     * @return Plat
     */
    public function plat()
    {
        
        return $this->hasOne(Plat::class, 'photo_plat_id', 'id');
    }
     
}
