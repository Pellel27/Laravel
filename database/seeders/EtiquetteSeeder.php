<?php

namespace Database\Seeders;
use Faker;
use App\Models\Etiquette;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtiquetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker\Factory::create('fr_FR');
        
        $etiquetteDatas=[
            "végétarien",
            "poisson",
            "boeuf",
            "poulet",
            "agneau",
            "sucré",
            "salé",
            "piquant. très piquant",
            "chaud",
            "froid",
            "soft",
            "alcoolisé",
        ];

        foreach ($etiquetteDatas as $etiquetteData){
            $etiquette = new Etiquette();
            $etiquette->nom = $etiquetteData;
            $etiquette->description = '';
            //sauvegarde dans la BDD
            $etiquette->save();
        }

        for ($i =0; $i < 10; $i++) {
            $etiquette = new Etiquette();
            $etiquette->nom = $faker->words(3, true);
            $etiquette->description = $faker->words(10, true);
            $etiquette->save();
        }
    }
}