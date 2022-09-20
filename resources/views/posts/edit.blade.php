@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/style.css">

<h1>Posts Update</h1>
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

<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="titre" class="form-control mb-3" placeholder="Post Titre" value="{{ $post->name }}"/>
    
    
    <textarea class="form-control mb-3" name="contenu" rows="4" placeholder="Contenu">{{ $post->contenu }}</textarea>
    <label for="avatar">Image : <input type="file" id="image" name="image"
       accept=".jpg,.png,.jpeg" value="{{ $post->image }}" />
    <input type="text" name="redacteur" class="form-control mb-3" placeholder="Redacteur de cet article" value="{{ $post->redacteur }}"/>
    <input type="number" name="nbrvues" class="form-control mb-3" placeholder="Nombre de vues" value="{{ $post->nbrvues }}"/>

    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection