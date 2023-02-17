@extends('base')

@section('page_title', 'menu')

@section('vite')
    @parent
    @vite(['resources/css/hello.css'])
@endsection

@section('content')

    <h1>Menu</h1>
    <p>Le menu pour les plats disponibles </p>

    @foreach ($categories as $categorie)
        <h2>{{ $categorie->nom }}</h2>
        <p>{{$categorie->description}}</p>
        <ul>
            @foreach ($categorie->platsSortedByPrix as $plat)
            <li>
                {{--$plat->photo->chemin --}}
                <img class="menu--photo-plat" src="{{ asset($plat->photo->chemin) }}" alt="">
                {{ $plat->nom }} {{ $plat->prix}} eur<br>
                {{ $plat->description }}<br>
                @foreach ($plat->etiquettes as $etiquette)
                    #{{ $etiquette->nom }}
                @endforeach
            </li>
            @endforeach
        </ul>
    @endforeach
@endsection