@extends('base')

@section('page_title', "HELLO $name")

@section('vite')
    @parent
    @vite(['resources/css/hello.css'])
@endsection

@section('content')

    <h1>hello {{$name}}</h1> 

@endsection
