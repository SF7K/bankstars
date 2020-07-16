@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-3">CREER UN PROFIL</h1>
    <div class="container">   
        <div classe="col-3"></div>
        <div classe="col-6">
            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data"> <!-- route('store') -->
                @csrf
                <div class="form-group">
                    <label class="font-weight-bold" for="firstname">Prénom</label>
                    <input required name="firstname" type="text" class="form-control" id="firstname" placeholder="Jean-Louis">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="lastname">Nom de famille</label>
                    <input required name="lastname" type="text" class="form-control" id="lastname" placeholder="Johnson">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="origin">Pays d'origine</label>
                    <input required name="origin" type="text" class="form-control" id="origin" placeholder="Nicaragua">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="profession">Profession</label>
                    <input required name="profession" type="text" class="form-control" id="profession" placeholder="Pilote de F1">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="biography">Courte biographie</label>
                    <textarea required name="biography" class="form-control" id="biography" rows="3" placeholder="Né au Nicaragua en juillet 89, n'a toujours pas fini un seul grand prix."></textarea>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="photo">Photo</label>
                    <input required name="photo" type="file" class="form-control-file" id="photo">
                </div>
                <button type="submit" class="btn btn-outline-dark btn-lg btn-block">Ajouter à Bankstars</button>   
            </form>
        </div>
        <div classe="col-3"></div>
    </div>
@endsection