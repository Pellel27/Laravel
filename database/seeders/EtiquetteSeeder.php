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
            [
                'nom' => 'foo',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            
            ],
        ];
        foreach ($etiquetteDatas as $etiquetteData){
            $etiquette = new Etiquette();
            $etiquette->nom = $etiquetteData['nom'];
            $etiquette->description = $etiquetteData['description'];
            $etiquette->save();
    }
    for ($i =0; $i < 10; $i++) {
        $etiquette = new Etiquette();
        $etiquette->nom = $faker->words();
        $etiquette->description = $faker->words();
        $etiquette->save();
    }
}
}