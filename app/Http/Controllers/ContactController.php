<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //faire une fonction en utilisant un where
    public function index()
    {
        //SELECT * FROM restaurant ORDER BY
        $adresse = DB::table('restaurant')
        ->where('cle','=', 'adresse')
        ->first()
        ;
       //dd($restaurants->valeur);
        $tel= DB::table('restaurant')
        ->where('cle','=', 'tel')
        ->first()
        ;
        $horaire= DB::table('restaurant')
        ->where('cle','=', 'horaire')
        ->first()
        ;

        $carte = DB::table('restaurant')
        ->where('cle','=', 'carte')
        ->first()

        ;

        return view('contact', [
            'adresse' => $adresse->valeur,
            'tel' => $tel->valeur,
            'horaire' => $horaire->valeur,
            'carte' => $carte->valeur,
        ]);
    }

}
