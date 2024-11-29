@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
<h1>Pesan Form Kontak Baru</h1>
<p><strong>Nama:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Subjek:</strong> {{ $data['subject'] }}</p>
<p><strong>Pesan:</strong> {{ $data['message'] }}</p>
@endsection
