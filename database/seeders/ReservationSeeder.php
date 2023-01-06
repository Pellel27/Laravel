<?php

namespace Database\Seeders;

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
    { //2 resa avec des données statique
        //nom Foo
        //premon Foo
        //jour 06/01/2023
        //heure 12:00
        //tel 0612345678
        //email foo.foo@example.com

        //nom Bar
        //premon Bar
        //jour 06/01/2023
        //heure 09:00
        //tel 0612345678
        //email foo.foo@example.com
        //nom
         $faker->lastName();
         $faker->firstName();
        // jour
        $faker->date('y-m-d');
        //heure
        $faker->date('h:i');
        //tel
        $faker->phoneNumber();

        //email
        $faker->phoneNumber();

    }
}
