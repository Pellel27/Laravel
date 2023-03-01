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
        
        $actuDatas=[
            [
                'jour_publication' => '2023-02-10',
                'texte' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
                'heure_publication' => '10:30',
            ],
        ];
        foreach ($actuDatas as $actuData){
            $actu = new Actu();
            $actu->jour_publication = $actuData['jour_publication'];
            $actu->heure_publication = $actuData['heure_publication'];
            $actu->texte = $actuData['texte'];
            $actu->save();
        }
        for ($i =0; $i < 2; $i++) {
            $actu = new Actu();
            $actu->jour_publication = $faker->date('Y-m-d');
            $actu->heure_publication = $faker->time('H:i');
            $actu->texte = $faker->sentence(12);
            $actu->save();
        }
    }
}
