<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\PhotoPlat;
use App\Models\Plat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        //Toutes les categories
        //::all c'est équivalent d'un SQL 'SELECT* FROM Categorie'
        $categories = Categorie::all();
        //la première categorie
        $categorieEntree = $categories->first();
        //le deuxième catégorie (id 2, plat)
        //Categorie::find c'est équivalent d'un SQL 'SELECT* FROM Categorie WHERE id =2'
        $categoriePlat = Categorie::find(2);
        //le troisième catégorie (id 3, plat)
        $categorieDessert = Categorie::find(3);

        //toutes les photos
        $photos = PhotoPlat::all();
        //La première photo
        $photo = $photos->first();

        $platDatas=[
            [
                'nom' => 'foo',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
                'prix' => 23.14,
                'epingle' => false,
                'photo_plat_id' => $photo ->id,
                'categorie_id' => $categorieEntree->id,
            
            ],
        

        [
            'nom' => 'Bar',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'prix' => 42.31,
            'epingle' => true,
            'photo_plat_id' => $photo ->id,
            'categorie_id' => $categoriePlat->id,
        
        ],
    
        [
            'nom' => 'Baz',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'prix' => 12.15,
            'epingle' => true,
            'photo_plat_id' => $photo ->id,
            'categorie_id' => $categorieDessert->id,
        
        ],
];
        foreach ($platDatas as $platData){
            $plat = new Plat();
            $plat->nom = $platData['nom'];
            $plat->description = $platData['description'];
            $plat->prix = $platData['prix'];
            $plat->epingle = $platData['epingle'];
            $plat->photo_plat_id = $platData['photo_plat_id'];
            $plat->categorie_id = $platData['categorie_id'];
            $plat->save();
          }
        }
      

    
}