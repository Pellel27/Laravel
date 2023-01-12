@extends('base')

@section('page_title', 'menu')

@section('vite')
    @parent
    @vite(['resources/css/hello.css'])
@endsection

@section('content')

    <h1>menu</h1>
    <p>Le menu pour les plats disponibles </p>

 @foreach ($categories as $categorie)
    <li>{{ $categorie->nom }} ({{$categorie->description}})<li>
 @endforeach
    </ul>
@endsection