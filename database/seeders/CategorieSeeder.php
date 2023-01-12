<?php

namespace Database\Seeders;

use Faker;
use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create('fr_FR');

        $categorieDatas = ["Entrée", "Plat", "Dessert", "Petit déjeuner", "Boissons"];

        foreach ($categorieDatas as $categorieData) {

            $categorie = new Categorie();
            $categorie->nom = $categorieData;
            $categorie->description = ucfirst($faker->words(8, true));
            $categorie->save();

        }
        
    }

}
