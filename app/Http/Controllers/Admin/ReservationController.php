<?php

namespace App\Http\Controllers\Admin;
use App\Models\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        //récuperer la liste des réservations
        //SELECT * FROM categporie
        $reservations = Reservation::all();
        

              //transmission des réservations à la vue
       return view('admin.reservation.index',[
           'reservations' => $reservations,

        ]);
    }
    /**
     * Cette methode affiche un formulaire de création de réservation
     * 
     * @return Response
     */
    public function create()
    {
        //valeur par défaut

        //transmission des valeur par defaut à la vue
        return view('admin.reservation.create', [
            //
        ]);
    }
      /**
     * Enregistre les données dans la BDD
     * 
     * @return Response
     */

    public function storet()
    {

    }
    /**
     * Affiche un formulaire de modification d'une reservation 
     * 
     * @return Response
     */
    public function edit(int $id)
    {
        //récuperation de la reservation
       $reservation = Reservation::find($id);
        //transmission de la reservation à la vue
        return view('admin.reservation.edit', [
            'reservation'=> $reservation,
        ]);
    }
    /**
     * Met à jour les données d'une réservation existante dans la BDD
     * @return Response
     */
    public function update(Request $request, int $id)
    {
      dd($request->all());
    }
}
