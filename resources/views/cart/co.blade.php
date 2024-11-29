@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
    <div class="container">
        <h2>Checkout</h2>
        <a class="btn btn-primary" href="{{ route('cart.index') }}">Kembali</a>
        @if (session()->has('cart') && count(session('cart')) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Item</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ number_format($item['price'], 2) }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>{{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-end">
                <h3>Total: {{ number_format($total, 2) }}</h3>
                <button class="btn btn-primary ms-3">Bayar</button>
            </div>
        @else
            <p>Keranjang Anda kosong.</p>
        @endif
    </div>
@endsection
