@extends('base')

@section('page_title', 'Accueil')


@section('content')

  <h1>home laravel</h1> 
  <p>Bienvenue au Restaurant o cnamo</p>
  <div class="banniere" style="background-image: url('{{asset('img/Salle du restaurant.jpg')}}')"></div>

<h1 class="text-center">
  <a class="btn btn - success" data-toggle="button" href="{{route('reservation')}}">Reserver</a>
</h1>

  {{-- Ce morceau de code permet d'afficher les actualités --}}
  @foreach ($actus as $actu)
  <ul>
    {{$actu->jour_publication}}
    {{$actu->heure_publication}}
    {{$actu->texte}}
  </ul>
  @endforeach
@endsection
