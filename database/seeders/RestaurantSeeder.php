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
            [
                'cle' => 'horaire',
                'valeur' => '12h-14h',
            ],

            [
                'cle' => 'carte',
                'valeur' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10123.668230233567!2d3.0711753!3d50.6286576!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd0f3b05faaf1c4c!2sLe%20Cnam!5e0!3m2!1sfr!2sfr!4v1673620083450!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
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
