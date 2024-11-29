@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="">No Category</option>
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" {{ $user->kategori_id == $kategori->id ? 'selected' : '' }}>{{ $kategori->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
