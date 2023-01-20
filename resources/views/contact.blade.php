@extends('base')

@section('page_title', 'contact')

@section('vite')
    @parent
    @vite(['resources/css/hello.css'])
@endsection

@section('content')

    <h1>contact</h1>
    <p>Téléphone: {{$tel}} </p> <br>
    adresse : {{$adresse}} <br>
    horaire : {{$horaire}} <br>
   <p> {!!$carte!!}</p>

        
@endsection
