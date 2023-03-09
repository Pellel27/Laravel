<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use stdClass;
use App\Models\Reservation;

class ReservationController extends Controller
{
 public function index()
 {
           //valeur par défaut
        //stdClass ne génère pas de fonction
        $reservation = new stdClass;

        $reservation->nom = '';
        $reservation->prenom = '';
        $reservation->jour = '';
        $reservation->heure = '20:00';
        $reservation->creneaux_horaire ='';
        $reservation->nombre_personnes = 2;
        $reservation->tel = '';
        $reservation->email = '';
 
    return view('reservation',  [
      'reservation' => $reservation,

  ]);

 }
 
       /**
     * Enregistre les données dans la BDD
     * 
     * @return Response
     */

     public function store(Request $request)
     {
         $validation = $request->validate([
             'nom' => 'required|min:2|max:100',
             'prenom' => 'required|min:2|max:100',
             'jour' => 'required|min:2| date_format:Y-m-d|',
             'heure' => 'required|date_format:H:i',
             'nombre_personnes' => 'required|numeric|gte:1|lte:20',
             'tel' =>'required|regex:/^[0-9]{2} *[0-9]{2} *[0-9]{2} *[0-9]{2} *[0-9]{2}$/',
             'email' =>'required|email:rfc,dns',
         ]);
            
            //création d'une  reservation
            $reservation = new Reservation();
 
            $reservation->nom = $request->get('nom');
            $reservation->prenom = $request->get('prenom');
            $reservation->jour = $request->get('jour');
            $reservation->heure = $request->get('heure');
            $reservation->heure = $request->get('heure');
            $reservation->nombre_personnes = $request->get('nombre_personnes');
            $reservation->tel = $request->get('tel');
            $reservation->email = $request->get('email');
            $reservation->save();
 
            $request->session()->flash('confirmation', 'la création a bien  été effectuée.');
     
      //Permet de voire le travaille fait sans la page vide.
            return redirect()->route('reservation');
            //ça permet de vusialiser des données.
         
     
 
     }
 
}
