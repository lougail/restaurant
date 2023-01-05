<?php

namespace Database\Seeders;

use App\Models\Etiquette;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtiquetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $etiquette = new Etiquette();
        $etiquette->nom = "Lorem, ipsum.";
        $etiquette->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
        $etiquette->save();
    }
}
