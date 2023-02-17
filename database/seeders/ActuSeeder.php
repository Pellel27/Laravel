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
                'jour_publication' => '2023-02-10',
                'texte' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
                'heure_publication' => '10:30',
            ],
        ];
        foreach ($ActuDatas as $ActuData){
            $Actu = new Actu();
            $Actu->jour_publication = $ActuData['jour_publication'];
            $Actu->heure_publication = $ActuData['heure_publication'];
            $Actu->texte = $ActuData['texte'];
            $Actu->save();
        }
        for ($i =0; $i < 2; $i++) {
            $Actu = new Actu();
            $Actu->jour_publication = $faker->date('Y-m-d');
            $Actu->heure_publication = $faker->time('H:i');
            $Actu->texte = $faker->sentence(12);
            $Actu->save();
        }
    }
}
