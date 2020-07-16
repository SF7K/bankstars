@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-5">Modifier le profil de {{$profile->firstname}} {{$profile->lastname}}</h1>
    <div class="container">   
        <div classe="col-3"></div>
        <div classe="col-6">
            <form action="{{route('update', $profile->id)}}" enctype="multipart/form-data"  method="POST">
                @csrf
                <div class="form-group">
                    <label class="font-weight-bold" for="firstname">Prénom</label>
                    <input required name="firstname" type="text" class="form-control" id="firstname" value="{{$profile->firstname}}">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="lastname">Nom de famille</label>
                    <input required name="lastname" type="text" class="form-control" id="lastname" value="{{$profile->lastname}}">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="origin">Pays d'origine</label>
                    <input required name="origin" type="text" class="form-control" id="origin" value="{{$profile->origin}}">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="profession">Profession</label>
                    <input required name="profession" type="text" class="form-control" id="profession" value="{{$profile->profession}}">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="biography">Courte biographie</label>
                    <textarea required name="biography" class="form-control" id="biography" rows="3">{{$profile->biography}}</textarea>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="photo">Photo</label>
                    <input name="photo" type="file" class="form-control-file" id="photo">
                    <img src="{{ asset('storage/img/' . $profile->photo) }}" class="mt-2 border rounded" width="200"></img>
                </div>
                <button type="button" class="btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Confirmer</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">   {{-- Permet de déclencher un pop-up de confirmation avant toute modification. --}}
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Attention</h5>

                    </div>
                    <div class="modal-body">
                        Confirmer les modifications ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Confirmer</button>    {{-- C'est ce bouton qui agit sur le formulaire --}}
                    </div>
                    </div>
                </div>
                </div>
            </form>
            
        </div>
        <div classe="col-3"></div>
    </div>
@endsection