@extends('base')

@section('page_title', 'Admin - Réservation - Liste')

@section('content')
   <h1>Admin - Reservation - Liste</h1>

   <div>
      <a href="={{ route('admin.reservation.create') }}">Ajouter"</a>
      </div>
   <table>
      <tr>
         <th>Nom</th>
         <th>Prénom</th>
         <th>Le jour</th>
         <th>L'heure</th>
         <th>Le nombre de personnes</th>
         <th>Le téléphone</th>
         <th>L'e-mail</th>
      </th>
   @foreach ($reservations as $reservation)
   <tr>
       <td>{{ $reservation->nom }}</td> 
       <td>{{ $reservation->prenom}}</td>
       <td>{{ $reservation->jour }}</td>
       <td>{{ $reservation->heure }}</td>
       <td>{{ $reservation->nombre_personnes }}</td>
       <td>{{ $reservation->tel }}</td>
       <td>{{ $reservation->email }}</td>
       <td>
         <a href="{{ route('admin.reservation.edit', ['id' => $reservation->id]) }}">modifier</a>
       </td> 
   </tr>
   @endforeach
   <table>
@endsection
