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
        //création d'une nouvelle photo
        $photo = new PhotoPlat();
        //séléction d'un fichier jpg
        $photo->chemin = "img/plats/image-generique.jgp";
        //sauvegarde dans la BDD
        $photo->save();
        }
}
