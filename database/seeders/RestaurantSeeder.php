<?php

namespace Database\Seeeders;

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
    public function run ()
    {
        $faker = Faker\Factory::create('fr_FR');

        $restaurantDatas = [
            [
                'cle' => 'adresse',
                'valeur' => $faker->address(),
            ],
            [
                'cle' => 'tel',
                'valeur' => $faker->phoneNumber(),
            ],
        ];

        foreach ($restaurantDatas as $restaurantData) {
            // création d'une nouvelle catégorie
            $restaurant = new Restaurant();
            // affectation d'un nom
            $restaurant->cle = $restaurantData['cle'];
            // affectation d'une description
            $restaurant->valeur = $restaurantData['valeur'];
            // sauvegarde dans la BDD
            $restaurant->save();
        } 
    }
}