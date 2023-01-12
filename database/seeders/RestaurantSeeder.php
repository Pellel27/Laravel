<?php

namespace Database\Seeders;

use Faker;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker\Factory::create('fr_FR');

        //2 restaurant avec des bases statiques
        $restaurantDatas=[
            [
                'cle' => 'adresse',
                'valeur' => $faker->address(),
            ],
            [
                'cle' => 'tel',
                'valeur' => $faker->phoneNumber(),
            ],
        ];
        foreach ($restaurantDatas as $restaurantData){
            //création d'un nouveau restaurant
            $restaurant = new Restaurant();
            //affectation d'un nom
            $restaurant->cle = $restaurantData['cle'];
            $restaurant->valeur = $restaurantData['valeur'];
        
            $restaurant->save();
        }
    }  
}
