@extends('base')

@section('page_title', 'reservation')

@section('vite')
    @parent
    @vite(['resources/css/hello.css'])
@endsection

@section('content')

    <h1>reservation</h1>
    <p>Reserver des places au Restaurant</p>


@endsection