
@extends('layouts.app')

@section('content')

    <h1>Users Show</h1>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">Titre :</h5>
        <p class="fw-bold">{{$user->name}}</p>
    </div>

@endsection