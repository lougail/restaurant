<?php

namespace Database\Seeders;

use Faker;
use App\Models\Reservation;
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

        $reservationDatas = [
            [
                'nom' => 'Foo',
                'prenom' => 'Foo',
                'jour' => '2023-01-06',
                'heure' => '12:00',
                'nombre_de_personnes' => '4',
                'numero_de_telephone' => '0612345678',
                'email' => 'foo.foo@example.com',
            ],
            [
                'nom' => 'Bar',
                'prenom' => 'Bar',
                'jour' => '2023-01-13',
                'heure' => '12:00',
                'nombre_de_personnes' => '8',
                'numero_de_telephone' => '0634567812',
                'email' => 'bar.bar@example.com',
            ],
        ];

        foreach ($reservationDatas as $reservationData) {

            $reservation = new Reservation();
            $reservation->nom = $reservationData['nom'];
            $reservation->prenom = $reservationData['prenom'];
            $reservation->jour = $reservationData['jour'];
            $reservation->heure = $reservationData['heure'];
            $reservation->nombre_de_personnes = $reservationData['nombre_de_personnes'];
            $reservation->numero_de_telephone = $reservationData['numero_de_telephone'];
            $reservation->email = $reservationData['email'];
            $reservation->save();

        }

        for ($i = 0; $i < 48; $i++) {

            $reservation = new Reservation();
            $reservation->nom = $faker->lastname;
            $nom = strtolower($reservation->nom);
            $nom = str_replace(" ", "-", $nom);
            $nom = str_replace("é", "e", $nom);
            $nom = str_replace("É", "e", $nom);
            $nom = str_replace("è", "e", $nom);
            $nom = str_replace("ç", "c", $nom);
            $nom = str_replace("ô", "o", $nom);
            $nom = str_replace("ï", "i", $nom);
            $nom = str_replace("ë", "e", $nom);
            $reservation->prenom = $faker->firstname;
            $prenom = strtolower($reservation->prenom);
            $prenom = str_replace(" ", "-", $prenom);
            $prenom = str_replace("é", "e", $prenom);
            $prenom = str_replace("É", "e", $prenom);
            $prenom = str_replace("è", "e", $prenom);
            $prenom = str_replace("ç", "c", $prenom);
            $prenom = str_replace("ô", "o", $prenom);
            $prenom = str_replace("ï", "i", $prenom);
            $prenom = str_replace("ë", "e", $prenom);
            $reservation->jour = $faker->date('Y-m-d');
            $reservation->heure = $faker->time('H:i');
            $reservation->nombre_de_personnes = random_int(1, 20);
            $reservation->numero_de_telephone = $faker->phoneNumber();
            $reservation->email = $nom. "." .$prenom. "@example.com";
            $reservation->save();

        }

        // // nom
        // $faker->lastname;

        // // prénom
        // $faker->firstname;

        // // jour
        // $faker->date('Y-m-d');

        // //jour mais avec une date comprise entre -6 mois et +6 mois
        // $datetime = $faker;

        // // heure
        // $faker->hour('H:i');

        // // nombre de personne

        // // tel
        // $faker->phoneNumber();

        // // email
        // $faker->safeEmail();
    }
}
