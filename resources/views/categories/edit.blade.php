
@extends('layouts.app')

@section('content')

<h1>Categories Update</h1>
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

<form action="{{ route('categories.update', $category->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="titre" class="form-control mb-3" placeholder=" Titre categorie" value="{{ $category->titre }}"/>
    
    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection
