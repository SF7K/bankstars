@extends('layouts.app')

@section('content')

    <h1 class="text-center mt-5 mb-5">PROFILS</h1>
    <div class="row text-justify col-12">
        <div class="col-md-2"></div>
        <div class="col-md-2 mb-3">
            <div class="list-group d-flex" id="list-tab" role="tablist">
                @foreach($profiles as $profile)
                    <a class="list-group-item ml-3 pr-3 list-group-item-action" id="list-home-list" data-toggle="list" href="#{{ $profile->firstname }}" role="tab" aria-controls="home">{{$profile->firstname}} {{$profile->lastname}}</a>
                @endforeach
                @auth
                    <a class="list-group-item ml-3 list-group-item-action font-weight-bold text-center"href="{{route('create')}}" role="tab">+</a>
                @endif
            </div>
        </div>
        <div class="col-md-7">
            <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active text-center font-italic text-muted col-lg-7" role="tabpanel" aria-labelledby="list-home-list">Choisissez un profil à consulter.</div>
                @foreach($profiles as $profile)
                    <div id="{{ $profile->firstname }}" class="tab-pane fade show" role="tabpanel" aria-labelledby="list-home-list">
                        <img src="{{ asset('storage/img/' . $profile->photo) }}" class="mr-4 img-thumbnail float-left" width="200"></img>
                        @auth
                        <div class="d-flex pb-3 col-md">
                            <a href="{{route('edit', $profile->id)}}" class="btn btn-warning mr-1 mt-3 font-weight-bold">✎ Modifier</a>
                            <form method="POST" action="{{route('delete', $profile->id)}}">   
                                @csrf
                                <button type="submit" class="btn btn-danger mr-1 mt-3 font-weight-bold" data-toggle="modal" data-target="#exampleModal">X Supprimer</button>
                            </form>
                        </div>
                        @endif
                        <div class="font-weight-bold">Prénom : <span class="font-weight-light">{{$profile->firstname}}</span></div>
                        <div class="font-weight-bold">Nom : <span class="font-weight-light">{{$profile->lastname}}</span></div>
                        <div class="font-weight-bold">Pays d'origine : <span class="font-weight-light">{{$profile->origin}}</span></div>
                        <div class="font-weight-bold mb-3">Profession : <span class="font-weight-light">{{$profile->profession}}</span></div>
                        <div class="">{{$profile->biography}}</div>                      
                    </div>
                @endforeach                    
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>

@endsection

{{-- @auth sert de condition "si connecté", @endif ferme donc cette condition --}}
