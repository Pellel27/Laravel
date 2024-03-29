<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorieSeeder::class,
            Photo_platSeeder::class,
            EtiquetteSeeder::class,
            Photo_ambianceSeeder::class,
            PlatSeeder::class,
            ReservationSeeder::class,
            RestaurantSeeder::class,
            ActuSeeder::class,
            UsersSeeder::class,
        ]);
    }
}
