@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
        @if ($errors->any())
            <div>
                <strong>Error:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="container">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="masukan password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
