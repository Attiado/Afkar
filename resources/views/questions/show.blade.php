
@extends('layouts.app')

@section('content')

    <h1>Categories Show</h1>
    <hr/>
    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">ID :</h5>
        <p class="fw-bold">{{$question->id}}</p>
    </div>
    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">Titre :</h5>
        <p class="fw-bold">{{$question->titre}}</p>
    </div>
    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">Contenu :</h5>
        <p class="fw-bold">{{$question->contenu}}</p>
    </div>
    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">Proprietaire :</h5>
        <p class="fw-bold">{{$question->proprietaire}}</p>
    </div>
   
@endsection