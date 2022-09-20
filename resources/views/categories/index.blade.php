

@extends('layouts.app')

@section('content')
<h1>Categorie CRUD</h1>
<a class="btn btn-link float-end" href="{{ route('categories.create') }}">Create a Category</a>

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
            <th scope="col">Category ID</th>
            <th scope="col">Titre</th>

            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($categories as $category) {{-- Loop categories --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $category->titre }}</td>
            <td>

                      <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('categories.show', $category->id) }}">View</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('categories.edit', $category->id) }}">Edit</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('categories.destroy',$category->id)}}" method="post"> {{-- Delete --}}
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
