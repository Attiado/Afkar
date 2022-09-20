
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/style.css">

<h1>Posts Create</h1>
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

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="titre" class="form-control mb-3" placeholder="Post Titre" value="{{ $post->titre }}"/>
    <textarea class="form-control mb-3" name="contenu" rows="4" placeholder="Contenu">{{$post->contenu}}</textarea>
    <label for="avatar">Image : <input type="file" id="image" name="image"
       accept=".jpg,.png,.jpeg" value="{{ $post->image }}" />
    <input type="number" name="nbrvues" class="form-control mb-3" placeholder="Nombre de vues" value="{{ $post->nbrvues }}"/>
    
    <input type="text" name="redacteur" class="form-control mb-3" placeholder="Redacteur de cet article" value="{{ $post->redacteur }}"/>

    
    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection