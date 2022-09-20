<!-- INDEX -->

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/style.css">

<h1>Comments CRUD</h1>
<a class="btn btn-link float-end" href="{{ URL::to('commenter')}}">Voir liste des commentaires</a>

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
            <th scope="col">ID Commentaire</th>
            <th scope="col">Contenu</th>
            <th scope="col">Ecrivain </th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($comments as $comment) {{-- Loop comments --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $comment->id }}</td>
            <td> {{ $comment->contenu }}</td>
            <td> {{ $comment->user }}</td>
            

            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                        Action
                    </button>
                
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('comments.show', $comment->id) }}">View</a></li> {{-- View --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('comments.destroy', $comment->id) }}" method="post"> {{-- Delete --}}
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