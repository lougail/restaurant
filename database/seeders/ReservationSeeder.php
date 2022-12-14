<?php

namespace Database\Seeders;

use Faker;
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
    {

        // 2 résa avec des données statiques
        
        // nom Foo
        // prenom Foo
        // jour 06/01/2023
        // heure 12:00
        // personne 4
        // tel 0612345678
        // email foo.foo@example.com

        // nom Bar
        // prenom Bar
        // jour 13/01/2023
        // heure 12:00
        // personne 8
        // tel 0634567812
        // email bar.bar@example.com

        // 48 résa avec des données aléatoires

        $faker = Faker\Factory::create('fr_FR');

        $reservationDatas = ["résa_1", "résa_2"];

        foreach ($reservationDatas as $reservationData) {

        }

        // nom
        $faker->lastname;

        // prénom
        $faker->firstname;

        // jour
        $faker->date('Y-m-d');

        // heure
        $faker->hour('H:i');

        // nombre de personne

        // tel
        $faker->phoneNumber();

        // email
        $faker->safeEmail();
    }
}
