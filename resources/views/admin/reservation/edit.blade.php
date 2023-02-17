@extends('base')

@section('page_title', 'Admin - Modification')

@section('content')
   <h1>Admin - Reservation - Modification</h1>

   {{-- Montrer qu'il y a eu des modiffications qui sont enregistrées dans le formulaire--}}
   @if (Session::has('confirmation'))
        <div>
            {{ Session::get('confirmation') }}
        </div>
   @endif

   @if ($errors->any())
   <div>
        Attention les données n'ont pas été enregistrées, il y a des erreurs dans le formulaire.
   </div>
       
   @endif
    <form action="{{ route('admin.reservation.update', ['id' =>$reservation->id])}}" method="post">
        @csrf
        {{-- Mise à jour complete --}}
        @method('PUT')
       <div>
            <input  class="@error('nom') form--input--error @enderror" type="text" name="nom" id="" value=" {{ old('nom', $reservation->nom) }}">
            @error('nom')
                <div class="form--error-message">
                    {{ $message}}
                </div>
            @enderror
       </div>
        <div class="form--error-message">
        <input class="@error('prenom') form--input--error @enderror" type="text" name="prenom" id="" value="{{old('prenom', $reservation->prenom) }}">
        @error('prenom')
            {{ $message}}
        @enderror
        </div>
        
        <input class="@error('date') form--input--error @enderror" type="date" name="jour" id="" value="{{old('jour', $reservation->jour) }}">
        <div class="form--error-message">
        @error('date')
            {{ $message}}
            {{-- La date doit être le jour même ou un jour ultérieur. --}}
        @enderror
        </div>
        <div class="form--error-message">
        <input class="@error('time') form--input--error @enderror" type="time" name="heure" id="" value="{{ old('heure', $reservation->heure)}}">
        <select name="heure" id="">
            @foreach ($creneaux_horaires as $creneaux_horaire )
                <option value="{{ $creneaux_horaire }}" @if (old('heure', $reservation->heure) == $creneaux_horaire) selected @endif>{{$creneaux_horaire }}</option>
           @endforeach
        </select>  
        @error('heure')
            {{ $message}}
        @enderror
        </div>
        <div class="form--error-message">
            <input class="@error('nombre_personnes') form--input--error @enderror" type="number" name="nombre_personnes" id="" value="{{old('nombre_personnes', $reservation->nombre_personnes) }}">
            @error('nombre_personnes')
                {{ $message}}
            @enderror

        </div>
        <div class="form--error-message">
        <input class="@error('tel') form--input--error @enderror" type="tel" name="tel" id="" value="{{old('tel', $reservation->tel) }}"placeholder="06 12 34 56 78">
        
        @error('tel')
            {{ $message}}
        @enderror

        </div>
        <div class="form--error-message">
        <input class="@error('email') form--input--error @enderror" type="email" name="email" id="" value="{{old('email', $reservation->email) }}">
        @error('email')
            {{ $message}}
        @enderror

        </div>
        <div> 
            <button type="submit">Valider</button>
        </div>
    </form>
@endsection