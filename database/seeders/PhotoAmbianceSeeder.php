<?php

namespace Database\Seeders;
use Faker;
use App\Models\PhotoAmbiance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoAmbianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker\Factory::create('fr_FR');
        
        $PhotoAmbianceDatas=[
            [
                //'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
                'chemin' => 'photo',
                'ordre' => 'premier',
                'legendre' => 'legendre du restaurant',
            
            ],
        ];
        foreach ($PhotoAmbianceDatas as $PhotoAmbianceData){
            $PhotoAmbiance = new PhotoAmbiance();
            //$PhotoAmbiance->description = $PhotoAmbianceData['description'];
            $PhotoAmbiance->chemin = $PhotoAmbianceData['chemin'];
            $PhotoAmbiance->ordre = $PhotoAmbianceData['ordre'];
            $PhotoAmbiance->legendre = $PhotoAmbianceData['legendre'];
            $PhotoAmbiance->save();
    }
    for ($i =0; $i < 2; $i++) {
        $PhotoAmbiance = new PhotoAmbiance();
        $PhotoAmbiance->chemin= $faker->words();
        $PhotoAmbiance->ordre = $faker->words();
        $PhotoAmbiance->legendre = $faker->words();
        //$PhotoAmbiance->description = $faker->words();
        $PhotoAmbiance->save();
    }
    }
}
