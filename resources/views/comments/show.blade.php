
@extends('layouts.app')

@section('content')

    <h1>Comments Show</h1>
    <hr/>
    
    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">Contenu :</h5>
        <p class="fw-bold">{{$comment->contenu}}</p>
    </div>
    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">Ecrivain :</h5>
        <p class="fw-bold">{{$comment->user}}</p>
    </div>
   
@endsection