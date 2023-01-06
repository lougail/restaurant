<?php

namespace Database\Seeders;

use App\Models\PhotoPlat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoPlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photoDatas = [
            "img/plats/miam.jpg",
            "img/plats/yummy.jpg",
        ];

        foreach ($photoDatas as $photoData) {

            // création d'une nouvelle photo
            $photo = new PhotoPlat();
            // sélection du fichier jpg
            $photo->chemin = $photoData;
            // sauvegarde dans la bdd
            $photo->save();

        }

    }
}
