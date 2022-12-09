@extends('base')

@section('page_title', 'HELLO laravel')

@section('vite')
    @parent
    @vite(['resources/css/hello.css'])
@endsection

@section('content')

    <h1>hello laravel</h1> 

@endsection
