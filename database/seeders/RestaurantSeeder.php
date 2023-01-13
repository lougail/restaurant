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
    public function run ()
    {
        $faker = Faker\Factory::create('fr_FR');

        $restaurantDatas = [
            [
                'cle' => 'adresse',
                'valeur' => '5 bd Louis XIV, 59000, Lille',
            ],
            [
                'cle' => 'tel',
                'valeur' => $faker->phoneNumber(),
            ],
            [
                'cle' => 'horaires',
                'valeur' => '11h-15h et 19h-22h'
            ],
            [
                'cle' => 'carte gmaps',
                'valeur' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.9168754784137!2d3.0689866154880425!3d50.62866098238918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d59118928ab7%3A0xd0f3b05faaf1c4c!2sLe%20Cnam!5e0!3m2!1sfr!2sfr!4v1673615824673!5m2!1sfr!2sfr" width="700" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
            ]
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