
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/style.css">

<h1>Post CRUD</h1>
<a class="btn btn-link float-end" href="{{ route('posts.create') }}">Create a Post</a>

{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr></tr>
        <tr>
            <th scope="col">Post ID</th>
            <th scope="col">Titre</th>
            <th scope="col">Contenu </th>
            <th scope="col">Image </th>

            <th scope="col">Redacteur </th>
            <th scope="col">Nombre de vues </th>

            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($posts as $post) {{-- Loop posts --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $post->titre }}</td>
            <td> {{ $post->contenu }}</td>
            <td> {{ $post->image }}</td>

            <td> {{ $post->redacteur }}</td>
            <td> $ {{ $post->nbrvues }}</td>

            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('posts.show', $post->id) }}">View</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('posts.edit', $post->id) }}">Edit</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection