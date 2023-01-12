<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index() {
        
        // $categories = DB::table('categorie')
        //     ->orderBy('id', 'asc')
        //     ->get()
        // ;

        $categories = Categorie::all();

        return view('menu', [
            'categories' => $categories,
        ]);


    }
}
