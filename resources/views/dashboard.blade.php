@extends('base')

@section('page_title', 'dashboard')


@section('content')
    <center> 
        <nav>
            <ul>
                <li>
                    <a href=" {{route('admin.reservation.index')}}">Liste des réservations</a>
                </li>
            <li> <a href=" {{route('admin.actu.index')}}">Liste des Actus</a></li>
            <li> <a href=" {{route('admin.categorie.index')}}">Liste des categories</a></li>
            <li> <a href=" {{route('admin.etiquette.index')}}">Liste des etiquettes</a></li>
            <li> <a href=" {{route('admin.photo_plat.index')}}">Liste des photo_plats</a></li>
            <li> <a href=" {{route('admin.photo_ambiance.index')}}">Liste des photo_ambiances</a></li>
            <li> <a href=" {{route('admin.plat.index')}}">Liste des plats</a></li>
            </ul>
        </nav> 
    </center> 
@endsection