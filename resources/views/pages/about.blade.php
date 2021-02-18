@extends('app')



@section('title', 'About Us |' . config('app.name'))


@section('content')
    <img src="{{ asset('/images/tdn-logo.png') }}" alt="TDN logo">

    <p>Built with &hearts; by LES TEACHERS DU NET. </p>

    <p><a href="{{'/'}}">Revenir à la page d'accueil</a></p>




@endsection
'Hello-City'
