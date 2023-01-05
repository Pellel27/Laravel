<?php

namespace Database\Seeders;

use App\Models\PhotoPlat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoPlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photoDatas=[
            "/img/plats/ralph-ravi-kayden-J5eOPeFqcuY-unsplash.jpg",
            "public/img/plats/farhad-ibrahimzade-KpOl9jV2aJM-unsplash.jpg",
        ];
        foreach ($photoDatas as $photoData){
        //création d'une nouvelle photo
        $photo = new PhotoPlat();
        //séléction d'un fichier jpg
        $photo->chemin = $photoData;
        //sauvegarde dans la BDD
        $photo->save();
        }
    }
}
