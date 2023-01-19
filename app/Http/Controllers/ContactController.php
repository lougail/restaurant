<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        // SELECT * FROM restaurant where cle = 'adresse'
        $adresse = DB::table('restaurant')
            ->where('cle', '=', 'adresse')
            ->first() //ou get()
        ;

        // SELECT * FROM restaurant where cle = 'tel'
        $tel = DB::table('restaurant')
            ->where('cle', '=', 'tel')
            ->first() //ou get()
        ;

        // SELECT * FROM restaurant where cle = 'horaire'
        $horaire = DB::table('restaurant')
            ->where('cle', '=', 'horaire')
            ->first() //ou get()
        ;

        // SELECT * FROM restaurant where cle = 'carte'
        $carte = DB::table('restaurant')
            ->where('cle', '=', 'carte')
            ->first() //ou get()
        ;

        return view('contact',
        [
            'adresse' => $adresse->valeur,
            'tel' => $tel->valeur,
            'horaire' => $horaire->valeur,
            'carte' => $carte->valeur,
        ]);
    }
}