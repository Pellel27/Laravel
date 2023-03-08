@extends('base')

@section('page_title', 'menu')

@section('vite')
    @parent
    @vite(['resources/css/hello.css'])
@endsection

@section('content')

    <h1>Menu</h1>
    
    @foreach ($categories as $categorie)
        <table class="menu-tableau">
            <tr>
                <td>
                    <h2>{{ $categorie->nom }}</h2>
                    {{$categorie->description}}
                </td>
            </tr>
            <td>

                @foreach ($categorie->platsSortedByPrix as $plat)
                {{--$plat->photo->chemin --}}
                <img class="menu--photo-plat" src="{{ asset($plat->photo->chemin) }}" alt="photo-plat">
                <h3>{{ $plat->nom }} {{ $plat->prix}}€</h3>
                {{ $plat->description }}<br>
                @foreach ($plat->etiquettes as $etiquette)
                #{{ $etiquette->nom }}
                @endforeach
                <br><br><br>
                @endforeach
            </td>
        </table>
    @endforeach
@endsection