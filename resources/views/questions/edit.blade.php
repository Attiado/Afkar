@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/style.css">

<h1>Questions Update</h1>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('questions.update', $question->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="titre" class="form-control mb-3" placeholder=" Titre du question ...*" value="{{ $question->titre }}"/>
    
    
    <textarea class="form-control mb-3" name="contenu" rows="4" placeholder="Contenu">{{ $question->contenu }}</textarea>
   
    <input type="text" name="proprietaire" class="form-control mb-3" value="{{ $question->proprietaire }}" />

    <button class="btn btn-primary float-end px-5" type="submit">Submit</button> 
</form>

@endsection