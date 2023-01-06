<?php

namespace Database\Seeders;

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
        $actu = new Actu();
        $actu->date_publication = "2023-01-05";
        $actu->heure_de_publication = "14:50:49";
        $actu->texte = "Lorem ipsum dolor sit.";
        $actu->save();
    }
}
