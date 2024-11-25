@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
    <h1>Users List</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>kategori</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->kategori ? $user->kategori->name : 'No kategori' }}</td>
                    <td><img src="{{ $user->getImageUrlAttribute() }}" width="50" height="50" alt="image"></td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning">Show</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
