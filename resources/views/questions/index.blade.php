
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/style.css">

<h1>Questions CRUD</h1>
<a class="btn btn-link float-end" href="{{ route('questions.create') }}">Poser un question</a>

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
            <th scope="col">Question ID</th>
            <th scope="col">Titre</th>
            <th scope="col">Contenu </th>
            <th scope="col">Proprietaire </th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($questions as $question) {{-- Loop Questions --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $question->titre }}</td>
            <td> {{ $question->contenu }}</td>
            <td> {{ $question->proprietaire }}</td>
            

            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                        Action
                    </button>
                
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('questions.show', $question->id) }}">View</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('questions.edit', $question->id) }}">Edit</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('questions.destroy', $question->id) }}" method="post"> {{-- Delete --}}
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