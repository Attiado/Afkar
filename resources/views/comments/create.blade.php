
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/style.css">

<h1>Comments Create ( Admin )</h1>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('comments.store') }}" method="post">
    @csrf
    <textarea name="contenu" id="contenu" msg cols="30" rows="5" class="form-control" style="background-color: black;"> {{$comment->contenu}} </textarea>
    <div class="form-group"> <label for="user">Nom</label> <input type="text" name="user" id="user" class="form-control" value="{{$comment->user}}"> </div>

    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection