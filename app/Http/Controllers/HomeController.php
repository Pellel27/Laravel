<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Actu;

class HomeController extends Controller
{
    public function index()
    {
        // Récupération des actualités de la BDD
        // $actus = Actu::all();

        // Transmission des actualités de la BDD à la vue
        return view('home',[
            // 'actus' => $actus
        ]);
    }
    
}
