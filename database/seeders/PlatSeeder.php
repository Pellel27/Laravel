<?php

namespace Database\Seeders;
use Faker;

use App\Models\Categorie;
use App\Models\PhotoPlat;
use App\Models\Etiquette;
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
        //Categories::all c'est équivalent d'un SQL 'SELECT* FROM Categorie'
        $categories = Categorie::all();
        //le nombre d'element dans la collection
        $categoriesCount = $categories->count();
        //la première categorie
        $categorieEntree = $categories->first();
        //le deuxième catégorie (id 2, plat)
        //Categorie::find(2) c'est équivalent d'un SQL 'SELECT* FROM Categorie WHERE id =2'
        $categoriePlat = Categorie::find(2);
        //le troisième catégorie (id 3, plat)
        $categorieDessert = Categorie::find(3);
        //les autres categories restants
        $categoriePetitDejeuner = categorie::find(4);
        $categorieBoisson = categorie::find(5);

  //Toutes les étiquetttes
        //Etiquette::all c'est équivalent d'un SQL 'SELECT* FROM Categorie'
        $etiquettes = Etiquette::all();
        //le nombre d'element dans la collection
        $etiquettesCount = $etiquettes->count();

        $etiquetteVegetarien = Etiquette::find(1);
        $etiquettePoisson = Etiquette::find(2);
        $etiquetteBoeuf = Etiquette::find(3);
        $etiquettePoulet = Etiquette::find(4);
        $etiquetteAgneau = Etiquette::find(5);

        $etiquetteIds = $etiquettes->modelKeys();
        //verifier le code
           // dd($etiquettesIds);
        //toutes les photos
        $photos = Photoplat::all();
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
                'etiquettes' => [
                    $etiquetteVegetarien,
                    $etiquettePoulet,
                ],
            
            ],
        

            [
                'nom' => 'Bar',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
                'prix' => 42.31,
                'epingle' => true,
                'photo_plat_id' => $photo ->id,
                'categorie_id' => $categoriePlat->id,
                'etiquettes' => [
                    $etiquetteBoeuf,
                    $etiquettePoisson,
                ]
            ],
        
            [
                'nom' => 'Baz',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
                'prix' => 12.15,
                'epingle' => true,
                'photo_plat_id' => $photo ->id,
                'categorie_id' => $categorieDessert->id,
                'etiquettes' => [
                    $etiquettePoisson,
                ],
            
            ],
];
        foreach ($platDatas as $platData){
            $plat = new Plat();
            $plat->nom = $platData['nom'];
            $plat->description = $platData['description'];
            $plat->prix = $platData['prix'];
            //sélection d'une photo
            $plat->epingle = $platData['epingle'];
            //affectation d'une photo
            $plat->photo_plat_id = $platData['photo_plat_id'];
            //affectation d'une catégorie
            $plat->categorie_id = $platData['categorie_id'];
            $plat->save();

            foreach($platData['etiquettes'] as $etiquette){
                $plat->etiquettes()->attach($etiquette->id);
                
            }
        }

        for ($i =0; $i < 100; $i++) {
            //création d'un nouveau plat
            $plat = new Plat();
            //affectation  d'un 
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

            //association d'étiquettes au plat
            $count = \random_int(1, 5);
           $shortList = $faker->randomElements($etiquetteIds, $count);
           $plat->etiquettes()->attach($shortList);
        }
    }
}