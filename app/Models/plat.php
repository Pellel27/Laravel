<?php

namespace App\Models;
use App\Models\Categorie;
use App\Models\Photo_plat;
use App\Models\Etiquette;
use App\Models\Plat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;
    protected $table = 'plat';
    protected $primaryKey = 'id'; 

     /**
     * cette fonction permet de récupérer la photo
     * 
     * @return Categorie
     */
    public function categorie()
    {
        //le coté possedant du categorie à un plat
        return $this ->belongsTo(Categorie::class);
    }

    /**
     * cette fonction permet de récupérer la photo
     * 
     * @return Photo_plat
     */
    public function photo()
    {
        return $this ->belongsTo(Photo_plat::class, 'photo_plat_id', 'id');
    }

    /**
     * Cette fonction permet de récupérer les étiquettes
     * 
     * @return Collection
     * 
     */
    public function etiquettes()
    {
        return $this->belongsToMany(Etiquette::class);
    }
    
}           