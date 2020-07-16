@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenu(e) {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <div class="text-center">Vous occupez le rôle de <span class="font-weight-bold">...</span></div>
                        <div>Vous pouvez :</div>
                        <div class="list-group pt-3">
                            <a href="{{route('profiles')}}" class="list-group-item list-group-item-action">Visiter les profils</a>
                            <a href="{{route('create')}}" class="list-group-item list-group-item-action">Ajouter un profil</a>
                            <a href="{{route('profiles')}}" class="list-group-item list-group-item-action">Editer les profils</a>
                            <a href="{{route('profiles')}}" class="list-group-item list-group-item-action">Supprimer les profils</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
