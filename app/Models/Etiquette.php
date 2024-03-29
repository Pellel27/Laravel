<?php

namespace App\Models;
use App\Models\Plat;
use App\Models\Etiquette;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiquette extends Model
{
    use HasFactory;
    protected $table = 'etiquette';
    protected $primaryKey = 'id'; 

      /**
     * Cette fonction permet de récupérer les plats
     * 
     * @return Collection
     * 
     */

    public  function plats()
    {
        $this->belongsToMany(Plat::class);

    }

}
