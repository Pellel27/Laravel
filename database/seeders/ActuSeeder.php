<?php

namespace Database\Seeders;
use Faker;
use App\Models\Actu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker =Faker\Factory::create('fr_FR');
        
        $ActuDatas=[
            [
                'jour_publication' => 'date',
                //'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
                'heure_publication' => 'time',
                'texte' => 'text',        
            ],
        ];
        foreach ($ActuDatas as $ActuData){
            $Actu = new Actu();
            $Actu->jour_publication = $ActuData['jour_publication'];
            //$PhotoAmbiance->description = $PhotoAmbianceData['description'];
            $Actu->heure_publication = $ActuData['heure_publication'];
            $Actu->texte = $ActuData['text'];
            $Actu->save();
    }
    for ($i =0; $i < 2; $i++) {
        $Actu = new Actu();
        $Actu->jour_publication = $faker->words();
        $Actu->heure_publication = $faker->words();
        $PhotoAmbiance->text = $faker->words();
        //$PhotoAmbiance->description = $faker->words();
        $PhotoAmbiance->save();
    }
    }
}
