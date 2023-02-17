+@extends('base')

@section('page_title', 'Admin - Réservation - Liste')

@section('content')
   <h1>Admin - Reservation - Liste</h1>

   @if (Session::has('confirmation'))
      <div>
         {{ Session::get('confirmation') }}
      </div>
   @endif

   <div>
      <a href="{{ route('admin.reservation.create') }}">Ajouter</a>
   </div>
   <table>
         <thead>
            <tr>
               <th>Nom</th>
               <th>Prénom</th>
               <th>Le jour</th>
               <th>L'heure</th>
               <th>Le nombre de personnes</th>
               <th>Le téléphone</th>
               <th>L'e-mail</th>
            </th>
         </thead>
      @foreach ($reservations as $reservation)
         <tbody>
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
                  <form action="{{ route('admin.reservation.delete', ['id' => $reservation->id]) }}" method="post" onsubmit="return window.confirm('Etres-vous sûr de vouloir supprimer cet element ?');">
                     @csrf
                     @method('DELETE')
                     {{-- afficher le bouton suppression --}}
                     <button type="submit">supprimer</button>
                  </form>
               </td> 
            </tr>
         </tbody>
      @endforeach
   <table>
   
   
@endsection
