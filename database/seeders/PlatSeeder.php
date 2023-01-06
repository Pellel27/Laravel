<?php

namespace Database\Seeders;
use Faker;

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
        $faker =Faker\Factory::create('fr_FR');

        //Toutes les categories
        //::all c'est équivalent d'un SQL 'SELECT* FROM Categorie'
        $categories = Categorie::all();
        //le nombre d'element dans la collection
        $categoriesCount = $categories->count();
        //la première categorie
        $categorieEntree = $categories->first();
        //le deuxième catégorie (id 2, plat)
        //Categorie::find c'est équivalent d'un SQL 'SELECT* FROM Categorie WHERE id =2'
        $categoriePlat = Categorie::find(2);
        //le troisième catégorie (id 3, plat)
        $categorieDessert = Categorie::find(3);
        //les autres categories restants
        $categoriePetitDejeuner = categorie::find(4);
        $categorieBoisson = categorie::find(5);

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

        for ($i =0; $i < 100; $i++) {
            $plat = new Plat();
            $plat->nom = $faker->words(2, true);
            $plat->description = $faker->words(10, true);
            //affectation d'un prix
            //le prix est aléatoire, compris entre 1 et 50 avec deux chiffres après la virgule
            $plat->prix = random_int(100, 5000) / 100;
            //le status épinglé est aléatoire, 0 == false, 1 == true
            $plat->epingle = (bool) random_int(0, 1);

            //affectation d'une photo
            $plat->photo_plat_id = $photo->id;
            //affectation d'une catégorie
            $categorieIndex = random_int(0, $categoriesCount -1);
            //on utilise le nombre tiré au hasard pour accéder au Nième élément de la collection de catégories
            $categorie = $categories->get($categorieIndex);
            $plat->categorie_id = $categorie->id;
            //sauvegarde de la BDD
            $plat->save();
        }
    }
}