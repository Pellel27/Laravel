<?php

namespace Database\Seeders;

use Faker;
use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $faker =Faker\Factory::create('fr_FR');

        //2 réservations avec des bases statiques
        $resaDatas=[
            [
                'nom' => 'Foo',
                'prenom' => 'Foo',
                'jour' => "2023-01-06",
                'heure' => "12:00",
                'nombre_personnes' => 4,
                'tel' => "0612345678",
                'email' => "foo.foo@example.com",
            ],

            [
                'nom' => 'Bar',
                'prenom' => 'Bar',
                'jour' => "2023-01-13",
                'heure' => "12:00",
                'nombre_personnes' => 8,
                'tel' => "0612345678",
                'email' => "bar.bar@example.com",
                
            ],

            
        ];
        foreach ($resaDatas as $resaData){
            $resa = new Reservation();
            $resa->nom = $resaData['nom'];
            $resa->prenom = $resaData['prenom'];
            $resa->jour = $resaData['jour'];
            $resa->heure = $resaData['heure'];
            $resa->nombre_personnes = $resaData['nombre_personnes'];
            $resa->tel = $resaData['tel'];
            $resa->email = $resaData['email'];
            $resa->save();
        }
        //48 réservations avec des bases aléatoires
        for ($i =0; $i < 48; $i++) {
            $resa = new Reservation();
            $resa->nom = $faker->firstName();
            $resa->prenom = $faker->lastName();
            $datetime = $faker->dateTimeBetween('-6 months', '+6 months');
            $resa->jour = $datetime->format('Y-m-d');
            $resa->heure = $faker->date('H:i');
            $resa->nombre_personnes = random_int(1, 12);
            $resa->tel = $faker->phoneNumber();
            $resa->email = $faker->safeEmail();
            $resa->save();
        }
        //2 resa avec des données statique
        //nom Foo
        //premon Foo
        //jour 06/01/2023
        //heure 12:00
        //personnes 4
        //tel 0612345678
        //email foo.foo@example.com

        //nom Bar
        //premon Bar
        //jour 13/01/2023
        //heure 12:00
        //personnes 8
        //tel 0612345678
        //email bar.bar@example.com

        //48 resa avec des données aléatoires

        //nom
        // $faker->lastName();
        // $faker->firstName();
        // // jour
        // $faker->date('Y-m-d');
        // //heure
        // $faker->date('H:i');
        // //tel
        // $faker->phoneNumber();

        // //email
        // $faker->safeEmail();

    
    }
}