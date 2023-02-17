@extends('base')

@section('page_title', 'hello laravel')

@section('vite')
    @parent
    @vite(['resources/css/hello.css'])
@endsection

@section('content')

    <h1>hello laravel</h1>
    <p>Bienvenue au Restaurant o cnamo</p>


@endsection