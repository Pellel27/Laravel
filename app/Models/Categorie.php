<?php

namespace App\Models;
use App\Models\Plat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = 'categorie';
    protected $primaryKey = 'id'; 
/**
 * Cette fonction permet de récupérer les plats
 * 
 * @return Plat
 */
    public function plats()
    {
       return $this->hasMany(Plat::class);
    }
    /**
 * Cette fonction permet de récupérer les plats dans l'ordre alphabetique des noms
 * 
 * @return Plat
 */
        public function platsSortedByNom()
        {
        return $this->hasMany(Plat::class)
        //on peut inversé le tri en mettant 'desc' au lieu de 'asc'
        ->orderBy('nom ', 'asc')
   ;
}
  /**
 * Cette fonction permet de récupérer les plats dans l'ordre alphabetique des noms
 * 
 * @param string $direction Prend la valeur 'asc' ou 'desc' pour choisir l'ordre de trie
 * @return Plat
 */
public function platsSortedByPrix()
{
return $this->hasMany(Plat::class)
->orderBy('prix' , 'asc')
;
}
}

