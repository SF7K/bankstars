@extends('layouts.app')

@section('content')
    <div class="container text-center mt-5">
        <h1>BIENVENUE SUR BANKSTARS</h1>
        <h3>Une banque de fiches de STARS !</h3>
        <a href="{{route('profiles')}}">Consulter les profils</a>
    </div>
@endsection