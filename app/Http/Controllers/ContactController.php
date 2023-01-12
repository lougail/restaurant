<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
    
        $users = DB::table('restaurant')
            ->where('votes', '=', 100)
            ->where('age', '=', 35)
            ->get();

    }
}
