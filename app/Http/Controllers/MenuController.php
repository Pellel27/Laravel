<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    public function index()
    {
        //SELECT * FROM categporie
        //ça renvoit la liste complete
        $categorie = Categorie::all();
        return view('menu',[
            'categories' => $categorie,
        ]);
    }
}
