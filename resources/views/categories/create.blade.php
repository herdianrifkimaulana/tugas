@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
    <h1>Create Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Create Category</button>
        <a href="{{ route('users.create') }}" type="submit" class="btn btn-primary mt-2">Kembali</a>
    </form>
@endsection
